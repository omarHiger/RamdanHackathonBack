@extends('mentor.layout')

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
                        <h1 class="mb-5">إضافة كورس</h1>
                        <form method="POST" action="{{route('youth.funding.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label fw-bold">العنوان</label>
                                <div class="mb-3 filled">
                                    <input type="text" name="title" class="form-control" placeholder="اكتب عنوان مناسب للكورس">
                                    @error('title')
                                    <label class="form-label text-danger mt-1">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">شرح</label>
                                <div class="mb-3 filled">
                                    <textarea name="description" class="form-control" placeholder="اكتب شرح مناسب للكورس"></textarea>
                                    @error('description')
                                    <label class="form-label text-danger mt-1">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="form-label fw-bold">المدرب</label>
                                <div class="mb-3 filled">
                                    <select name="mentors[]" class="form-control" multiple>
                                        @foreach($mentors as $item)
                                            <option value="{{$item->id}}">{{$item->first_name." ".$item->last_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('mentors')
                                    <label class="form-label text-danger mt-1">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">التصنيف</label>
                                <div class="mb-3 filled">
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <label class="form-label text-danger mt-1">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">العنوان</label>
                                <div class="mb-3 filled">
                                    <select name="location" class="form-control">
                                        <option>اختر عنوان</option>
                                        <option value="سوريا">سوريا</option>
                                        <option value="عن بعد">عن بعد</option>
                                        <option value="فلسطين">فلسطين</option>
                                        <option value="مصر">مصر</option>
                                    </select>
                                    @error('location')
                                    <label class="form-label text-danger mt-1">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">المستوى</label>
                                <div class="mb-3 filled">
                                    <select name="level" class="form-control">
                                        <option>اختر المستوى</option>
                                        <option value="مبتدئ">مبتدئ</option>
                                        <option value="متوسط">متوسط</option>
                                        <option value="متقدم">متقدم</option>
                                    </select>
                                    @error('level')
                                    <label class="form-label text-danger mt-1">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label fw-bold">هل تتطلب إرسال طلب انضمام؟</label>
                                <div class="mb-3 filled">
                                    <select name="is_accept" class="form-control">
                                        <option value="true">نعم</option>
                                        <option value="false">لا</option>
                                    </select>
                                    @error('level')
                                    <label class="form-label text-danger mt-1">{{$message}}</label>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold">هل تتطلب إرسال طلب انضمام؟</label>
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
