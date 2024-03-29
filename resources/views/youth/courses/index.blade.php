@extends('youth.layout.layout')

@section('main')
    <main>
        <div class="container">
            <!--            Courses         -->
            <section>
                <h1 class="heading title display-1 text-center">تصفح الكورسات</h1>

                <div class="row">
                    <!-- Left Side Start -->
                    <div class="col-12 col-lg-4 col-xl-3 d-none d-lg-block">
                        <div class="card mb-5">
                            <div class="card-body mb-n5" id="filterColumn">
                                <form method="POST" action="{{route('youth.courses')}}">
                                    @csrf
                                    <div class="mb-5">
                                        <p class="text-small text-muted mb-2">الفئات</p>
                                        @foreach($categories as $item)
                                            <div class="form-check">
                                                <input type="checkbox" name="categories[]" value="{{$item->id}}"
                                                       class="form-check-input" id="brand1">
                                                <label class="form-check-label" for="brand1">{{$item->name}}</label>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="mb-5">
                                        <p class="text-small text-muted mb-2">المستوى</p>
                                        <div class="form-check">
                                            <input type="checkbox" name="level[]" class="form-check-input" id="brand5"
                                                   value="مبتدئ">
                                            <label class="form-check-label" for="brand2">مبتدئ</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="level[]" class="form-check-input" id="brand6"
                                                   value="متوسط">
                                            <label class="form-check-label" for="brand2">متوسط</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="level[]" class="form-check-input"
                                                   id="brand7" value="متقدم">
                                            <label class="form-check-label" for="brand2">متقدم</label>
                                        </div>

                                    </div>


                                    <div class="mb-5">
                                        <p class="text-small text-muted mb-2">بحث</p>
                                        <div class="row g-1">
                                            <div class="col">
                                                <input type="text" name="search" class="form-control"
                                                       placeholder="قم بالبحث هنا">
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-icon btn-icon-only btn-outline-primary"
                                                        type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                         viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                         stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="acorn-icons acorn-icons-chevron-right undefined">
                                                        <path
                                                                d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="d-flex flex-row justify-content-between w-100">
                                            <a href="{{route('youth.courses')}}" class="btn btn-outline-primary  me-2">إلغاء
                                                الفلترة
                                            </a>
                                            <button type="submit" class="btn btn-primary">تطبيق</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Left Side End -->

                    <!-- Right Side Start -->
                    <div class="col-12 col-lg-8 col-xl-9">
                        <!-- Product Thumbnails Start -->
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1 g-2 mb-5"
                             id="productsCheckAll">
                            @foreach($courses as $item)
                                <div class="col">
                                    <div class="card mb-3 flex flex-row">
                                        <a href="#" class="basis-1/4">
                                            <img src="assets/img/course/img.png" class="card-img-top sh-30"
                                                 alt="card image">
                                        </a>
                                        <div class="card-body basis-1/4">
                                            <div class="d-flex justify-content-between text-large">
                                                <a href="#">{{$item->category->name}}</a>
                                                <span class="badge bg-info">{{$item->level}}</span>
                                            </div>
                                            <a href="{{route('youth.courses.show', $item->id)}}">
                                                <h3 class="heading display-6 fw-bold">{{$item->title}}</h3></a>
                                            <div class="row g-0 align-items-center mb-1">
                                                <div class="col-auto">
                                                    <div
                                                            class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.2002 6L5.2002 14" stroke="#6F7787"
                                                                  stroke-width="0.8" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <path
                                                                    d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z"
                                                                    stroke="#6F7787" stroke-width="0.8"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path
                                                                    d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14"
                                                                    stroke="#6F7787" stroke-width="0.8"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path
                                                                    d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996"
                                                                    stroke="#6F7787" stroke-width="0.8"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M10 10.7998L11.6 13.9998" stroke="#6F7787"
                                                                  stroke-width="0.8" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <path d="M9.2002 2V3.6" stroke="#6F7787"
                                                                  stroke-width="0.8"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="row g-0">
                                                        <div class="col">
                                                            <div
                                                                    class="sh-4 d-flex align-items-center lh-1-25 fw-bold">@foreach($item->mentors as $key=> $m)
                                                                    {{$m->first_name." ".$m->last_name}}@if($key+1!=sizeof($item->mentors))
                                                                        ,
                                                                    @endif
                                                                @endforeach</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 align-items-center mb-1">
                                                <div class="col-auto">
                                                    <div
                                                            class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14 6L2 6" stroke="#89B668" stroke-width="0.8"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path
                                                                    d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z"
                                                                    stroke="#89B668" stroke-width="0.8"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M10.7998 2V3.6" stroke="#89B668"
                                                                  stroke-width="0.8"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5.2002 2V3.6" stroke="#89B668"
                                                                  stroke-width="0.8"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="row g-0">
                                                        <div class="col">
                                                            <div
                                                                    class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25">
                                                                {{$item->start_date}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div
                                                            class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                    d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z"
                                                                    stroke="#6F7787" stroke-width="0.8"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path
                                                                    d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z"
                                                                    stroke="#6F7787" stroke-width="0.8"
                                                                    stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="row g-0">
                                                        <div class="col">
                                                            <div
                                                                    class="sh-4 d-flex align-items-center fw-bold lh-1-25">{{$item->location}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Product Thumbnails End -->
                        </div>
                        <!-- Right Side End -->
                    </div>

                    <h1 class="heading title display-1">اقتراحات لك</h1>
                    <div class="row g-4">
                        @foreach($recommended as $item)
                            <div class="col-md-3">
                                <div class="card mb-3">
                                    <a href="#">
                                        <img src="{{asset('assets/img/course/img.png')}}" class="card-img-top sh-30"
                                             alt="card image">
                                    </a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between text-large">
                                            <a href="#">{{$item->category->name}}</a>
                                            <span class="badge bg-info">{{$item->level}}</span>
                                        </div>
                                        <h3 class="heading display-6 fw-bold mt-3">{{$item->title}}</h3>
                                        <div class="row g-0 align-items-center mb-1">
                                            <div class="col-auto">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.2002 6L5.2002 14" stroke="#6F7787"
                                                              stroke-width="0.8"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path
                                                                d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z"
                                                                stroke="#6F7787" stroke-width="0.8"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        <path
                                                                d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14"
                                                                stroke="#6F7787" stroke-width="0.8"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        <path
                                                                d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996"
                                                                stroke="#6F7787" stroke-width="0.8"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        <path d="M10 10.7998L11.6 13.9998" stroke="#6F7787"
                                                              stroke-width="0.8"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.2002 2V3.6" stroke="#6F7787" stroke-width="0.8"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div
                                                                class="sh-4 d-flex align-items-center lh-1-25 fw-bold">@foreach($item->mentors as $key=> $m)
                                                                {{$m->first_name." ".$m->last_name}}@if($key+1!=sizeof($item->mentors))
                                                                    ,
                                                                @endif
                                                            @endforeach</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center mb-1">
                                            <div class="col-auto">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14 6L2 6" stroke="#89B668" stroke-width="0.8"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path
                                                                d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z"
                                                                stroke="#89B668" stroke-width="0.8"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        <path d="M10.7998 2V3.6" stroke="#89B668" stroke-width="0.8"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M5.2002 2V3.6" stroke="#89B668" stroke-width="0.8"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div
                                                                class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25">
                                                            {{$item->start_date}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center mb-4">
                                            <div class="col-auto">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                                d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z"
                                                                stroke="#6F7787" stroke-width="0.8"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        <path
                                                                d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z"
                                                                stroke="#6F7787" stroke-width="0.8"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div
                                                                class="sh-4 d-flex align-items-center fw-bold lh-1-25">{{$item->location}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
