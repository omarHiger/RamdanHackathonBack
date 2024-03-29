@extends('youth.layout.layout')

@section('main')

    <main>
        <div class="container">
            <section>
                <div class="row">
                    <div
                        class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 500px;">
                            <h2 class="text-uppercase display-1 text-primary fw-bold">+100 مدرب</h2>
                            <p class="my-3 display-6 lh-1-5">
                                نؤمن بأهمية التعلم المستمر، ونقدم للمتدربين فرصة التواصل مع خبراء من مختلف المجالات،
                                والاستفادة من تجاربهم وخبراتهم.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid  fit-cover" style="min-height: 300px;"
                                                        src="{{asset('assets/img/illustration/consult.png')}}"/></div>
                    </div>
                </div>
            </section>
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
                                        <div class="mb-5">
                                            <p class="text-small text-muted mb-2">الفئات</p>
                                            @foreach($cats as $item)
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="brand1">
                                                    <label class="form-check-label" for="brand1">{{$item->name}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mailing List End -->

                            <!-- Must Read Start -->
                            <div class="col-12">
                                <div class="card w-100  hover-img-scale-up">
                                    <img src="{{asset('assets/img/illustration/consult-2.png')}}"
                                         class="card-img h-100 scale"
                                         alt="card image">
                                    <div class=" d-flex flex-column justify-content-end text-center bg-transparent">
                                        <div class="pb-5">
                                            <div class="cta-1 mb-5 text-primary w-90">اكتشف شغفك وطور مهاراتك مع مجموعة
                                                متنوعة من الكورسات.
                                            </div>
                                            <a href="#" class="btn btn-primary">تصفح الآن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Must Read End -->
                        </div>
                    </div>
                    <!-- List Start -->
                    <div class="col-12 col-xl-8 col-xxl-9 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="search mb-5">
                                    <div class="d-flex">
                                        <div class="mb-3 filled lg flex-grow-1">
                                            <input class="form-control" placeholder="بحث">
                                            <i data-acorn-icon="search"></i>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary me-3">بحث</button>
                                        </div>
                                    </div>
                                    {{--                                    <div class="heading text-large fw-bold">56 نتيجة</div>--}}
                                </div>
                                <div class="row">
                                    @foreach($mentors as $item)
                                        <div class="col-md-12 mb-5">
                                            <div class="row g-0">
                                                <div class="col-auto">
                                                    <div class="sw-10 ms-3">
                                                        <img src="{{asset('assets/img/omar.jpg')}}"
                                                             class="img-fluid rounded-xl" alt="thumb">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <a href="#"
                                                               class="text-dark text-large fw-bold">{{$item->first_name . ' ' . $item->last_name }}</a>
                                                            <div
                                                                class="text-dark text-medium mb-2 mt-2">{{$item->position}}
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <form action="{{route('user',$item->id)}}" method="get">
                                                                <button class="btn btn-outline-primary">إطلب استشارة
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <p style="line-height:2;"
                                                       class="text-mediumtext-alternate clamp-line">
                                                    {{$item->about}}
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
