@extends('mentor.layout')

@section('main')
    <main>
        <div class="container">
            <!--            Courses         -->
            <section>
                <div class="row align-items-stretch">
                    <!-- Left Side Start -->
                    <div class="col-12 col-xxl-12 mb-5">
                        <!-- Preview Start -->
                        <h2 class="display-3 my-4 fw-bold">{{$course->title}}</h2>
                        <div class="card mb-5">
                            <div class="" >
                                <img src="{{asset("assets/img/course/img.png")}}" width="100%">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="heading display-4 fw-bold">وصف الكورس</h6>
                                        <p class="lh-1-5 lead">
                                            {{$course->description}}
                                        </p>
                                    </div>
                                    <!-- Right Side Start -->
                                    <div class="col-6  mb-n5">
                                        <div class="card mb-5">
                                            <div class="card-body">
                                                <div class="row g-0 align-items-center mb-3">
                                                    <div class="col-auto">
                                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                                 class="acorn-icons acorn-icons-calendar text-primary">
                                                                <path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 14.5C18 15.9045 18 16.6067 17.6629 17.1111C17.517 17.3295 17.3295 17.517 17.1111 17.6629C16.6067 18 15.9045 18 14.5 18L5.5 18C4.09554 18 3.39331 18 2.88886 17.6629C2.67048 17.517 2.48298 17.3295 2.33706 17.1111C2 16.6067 2 15.9045 2 14.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path>
                                                                <path d="M2 9H18M7 2 7 5.5M13 2 13 5.5M5 15H6"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="row g-0">
                                                            <div class="col">
                                                                <div class="sh-4 d-flex align-items-center lh-1-25">التاريخ</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="sh-4 d-flex align-items-center text-alternate">
                                                                    {{$course->start_date}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0 align-items-center mb-3">
                                                    <div class="col-auto">
                                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M19 9.2H16L16 19H19L19 9.2ZM13.4 5H10.6L10.6 19H13.4L13.4 5ZM7.8 13H5L5 19H7.8L7.8 13Z" fill="#89B668"/>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="row g-0">
                                                            <div class="col">
                                                                <div class="sh-4 d-flex align-items-center lh-1-25">المستوى</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="sh-4 d-flex align-items-center text-alternate">
                                                                    {{$course->level}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0 align-items-center mb-3">
                                                    <div class="col-auto">
                                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14 3L20 3C20.553 3 21 3.447 21 4V10C21 10.553 20.553 11 20 11L14 11C13.447 11 13 10.553 13 10L13 4C13 3.447 13.447 3 14 3ZM15 9L19 9V5L15 5L15 9ZM4 3L10 3C10.553 3 11 3.447 11 4L11 10C11 10.553 10.553 11 10 11H4C3.447 11 3 10.553 3 10V4C3 3.447 3.447 3 4 3ZM5 9H9L9 5H5L5 9ZM14 13L20 13C20.553 13 21 13.447 21 14V20C21 20.553 20.553 21 20 21H14C13.447 21 13 20.553 13 20V14C13 13.447 13.447 13 14 13ZM15 19H19V15L15 15V19ZM7 13C9.206 13 11 14.794 11 17C11 19.206 9.206 21 7 21C4.794 21 3 19.206 3 17C3 14.794 4.794 13 7 13ZM7 19C8.103 19 9 18.103 9 17C9 15.897 8.103 15 7 15C5.897 15 5 15.897 5 17C5 18.103 5.897 19 7 19Z" fill="#89B668"/>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="row g-0">
                                                            <div class="col">
                                                                <div class="sh-4 d-flex align-items-center lh-1-25">التصنيف</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="sh-4 d-flex align-items-center text-alternate">
                                                                    {{$course->category->name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-0 align-items-center mb-3">
                                                    <div class="col-auto">
                                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2C15.87 2 19 5.13 19 9C19 14.25 12 22 12 22C12 22 5 14.25 5 9C5 5.13 8.13 2 12 2ZM17 9C17 6.24 14.76 4 12 4C9.24 4 7 6.24 7 9C7 11.88 9.88 16.19 12 18.88C14.08 16.21 17 11.85 17 9Z" fill="#89B668"/>
                                                                <path d="M12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5Z" fill="#89B668"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="row g-0">
                                                            <div class="col">
                                                                <div class="sh-4 d-flex align-items-center lh-1-25">المكان</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="sh-4 d-flex align-items-center text-alternate">
                                                                    {{$course->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Badges End -->
                                    </div>
                                    <!-- Right Side End -->
                                </div>


                            </div>
                        </div>
                        <!-- Preview End -->

                        <!-- Table of Contents Start -->
                        <h2 class="small-title display-4 mb-3">الطلاب</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    @foreach($course->youths as $youths)
                                        <div class="col-3">
                                            <div class="card mb-3">
                                                <div class="card-body mb-n5">
                                                    <div class="d-flex align-items-center flex-column mb-5">
                                                        <div class="mb-5 d-flex align-items-center flex-column">
                                                            <div class="sw-13 position-relative mb-3">
                                                                <img src="{{asset('assets/img/omar.jpg')}}" class="img-fluid rounded-xl" alt="thumb">
                                                            </div>
                                                            <div class=" mb-3 display-3"><a href="">{{$youths->first_name." ".$youths->last_name}}</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>
@endsection
