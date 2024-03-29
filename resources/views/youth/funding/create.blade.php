@extends('youth.layout.layout')

@section('main')
    <main>
        <div class="container">
            <!--            Courses         -->
            <section>
                <div class="row">
                    <div class="col-6 mx-auto card p-7">
                        @if($message = Session::get('message'))
                            <div class="alert alert-success">

                                {{ $message }}
                            </div>

                        @endif
                        <h1 class="mb-5">إنشاء طلب تمويل</h1>
                    <form method="POST" action="{{route('youth.funding.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label fw-bold">العنوان</label>
                            <div class="mb-3 filled">
                                <input type="text" name="title" class="form-control" placeholder="اكتب عنوان مناسب للطلب">
                                @error('title')
                                <label class="form-label text-danger mt-1">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label fw-bold">شرح</label>
                            <div class="mb-3 filled">
                                <textarea name="description" class="form-control" placeholder="اكتب شرح مناسب لطلب التمويل"></textarea>
                                @error('description')
                                <label class="form-label text-danger mt-1">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label fw-bold">المبلغ</label>
                            <div class="mb-3 filled">
                                <input type="number" name="amount" class="form-control" placeholder="ضع المبلغ المطلوب جمعه" min="10">
                                @error('amount')
                                <label class="form-label text-danger mt-1">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label fw-bold">الملفات</label>
                            <div class="mb-3 filled">
                                <input type="file" name="files" class="form-control" multiple placeholder="يرجى رفع المفات المتعلقة بالطلب">
                                @error('files')
                                <label class="form-label text-danger mt-1">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end mt-7">
                            <button type="submit" class="btn btn-primary">
                                متابعة
                                <i data-acorn-icon="arrow-left" class="icon me-2"></i>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
