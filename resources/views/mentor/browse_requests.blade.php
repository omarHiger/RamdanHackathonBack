@extends('mentor.layout')

@section('main')

    <main>
        <div class="container">
            <!--            Courses         -->
            <section>
                <div class="row">
                    <!-- Right Side Start -->
                    <div class="col-12 col-xl-4 col-xxl-3">
                        <div class="row">
                            <!-- Mailing List Start -->
                            <div class="col-12">
                                <div class="card mb-5">
                                    <div class="card-body row g-0">
                                        <form action="{{route('mentor.requests')}}" method="POST">
                                            @csrf
                                            <div class="mb-5">
                                                <p class="text-small text-muted mb-2">الكورسات</p>
                                                @foreach($courses as $item)
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="courses[]"
                                                               id="brand1" value="{{$item->id}}">
                                                        <label class="form-check-label"
                                                               for="brand1">{{$item->title}}</label>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <div class="mb-5">
                                                <div class="d-flex flex-row justify-content-between w-100">
                                                    <a href="{{route('mentor.requests')}}"
                                                       class="btn btn-outline-primary  me-2">إلغاء
                                                        الفلترة
                                                    </a>
                                                    <button type="submit" class="btn btn-primary">تطبيق</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mailing List End -->
                        </div>
                    </div>
                    <!-- List Start -->
                    <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @foreach($students as $item)
                                        <div class="col-md-12 mb-5">
                                            <div class="row g-0">
                                                <div class="col-auto">
                                                    <div class="sw-10 ms-3">
                                                        <img src="{{asset('assets/img/huda.jpg')}}"
                                                             class="img-fluid rounded-xl" alt="thumb">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <a href="#"
                                                               class="text-dark text-large fw-bold">{{$item->youth->first_name . ' ' . $item->youth->last_name }}</a>
                                                            <div
                                                                class="text-dark text-info text-medium mb-2 mt-2">{{$item->course->title}}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <form action="{{route('mentor.requests.accept',$item->id)}}" method="POST"
                                                                  class="col-6">
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-primary">قبول
                                                                </button>
                                                            </form>
                                                            <form action="{{route('mentor.requests.reject',$item->id)}}" method="POST"
                                                                  class="col-6">
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-danger">رفض
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <p style="line-height:2;"
                                                       class="text-mediumtext-alternate clamp-line">
                                                    {{$item->goal}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- List End -->


                </div>
            </section>

        </div>
    </main>

@endsection
