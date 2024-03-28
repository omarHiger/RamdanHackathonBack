<!DOCTYPE html>
<html lang="ar" dir="rtl" data-footer="true">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Arabia Youth</title>
    <meta name="description" content="Home screen that contains stats, charts, call to action buttons and various listing elements." />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset('assets/img/favicon/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/img/favicon/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/img/favicon/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/img/favicon/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{asset('assets/img/favicon/apple-touch-icon-60x60.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{asset('assets/img/favicon/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{asset('assets/img/favicon/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{asset('assets/img/favicon/apple-touch-icon-152x152.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/favicon-196x196.png" sizes="196x196')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/favicon-96x96.png" sizes="96x96')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/favicon-32x32.png" sizes="32x32')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/favicon-16x16.png" sizes="16x16')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/favicon-128.png" sizes="128x128')}}" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicon/mstile-144x144.png')}}" />
    <meta name="msapplication-square70x70logo" content="{{asset('assets/img/favicon/mstile-70x70.png')}}" />
    <meta name="msapplication-square150x150logo" content="{{asset('assets/img/favicon/mstile-150x150.png')}}" />
    <meta name="msapplication-wide310x150logo" content="{{asset('assets/img/favicon/mstile-310x150.png')}}" />
    <meta name="msapplication-square310x310logo" content="{{asset('assets/img/favicon/mstile-310x310.png')}}" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/font/CS-Interface/style.css')}}" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/vendor/OverlayScrollbars.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/glide.core.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/introjs.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/select2.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/select2-bootstrap4.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/plyr.css')}}" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <script src="{{asset('assets/js/base/loader.js')}}"></script>
</head>

<body class="pb-0">
<div id="root">

    <!--    Start Nav   -->
    <nav>
        <div class="card mb-5">
            <div class="card-body p-3">
                <div class="row">
                    <div class="w-75">
                        <ul class="nav justify-content-center mt-2 horizontal-padding-0">
                            <li class="nav-item"><a class="nav-link" href="#donors">للمتبرعين</a></li>
                            <li class="nav-item"><a class="nav-link" href="#menotor">للمدربين</a></li>
                            <li class="nav-item"><a class="nav-link" href="#youth">للشباب</a></li>
                            <li class="nav-item"><a class="nav-link" href="#achievements">إنجازات المنصة</a></li>
                            <li class="nav-item"><a class="nav-link" href="#news">آخر الأخبار</a></li>
                        </ul>
                    </div>
                    <div class="w-25">
                        <a type="button" href="{{route('auth.onBoarding')}}" class="btn btn-primary mb-1 me-3">سجل الآن</a>
                        <a type="button" href="{{route('login')}}" class="btn btn-alternate mb-1">تسجيل الدخول</a>
                    </div>

                </div>

            </div>
        </div>
    </nav>

    <main class="p-0 m-0">
        <div class="container">
            <!--            Hero        -->
            @if($message = Session::get('Error'))
                <div class="alert alert-danger">

                    {{ $message }}
                </div>

            @endif
            <section>
                <div class="row">
                    <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 500px;">
                            <h2 class="text-uppercase display-2 fw-bold">معاً نعزز قدرات الشباب ونطلق طاقاتهم</h2>
                            <p class="my-3 display-6 lh-1-5">
                                منصة تمكين الشباب هي بوابة إلكترونية تهدف إلى دعم الشباب العربي وتمكينهم من خلال توفير كورسات مجانية في مختلف المجالات، إلى جانب منصة تبرعات تسمح للمتبرعين بدعم مشاريع الشباب الواعدة ومساعدتهم على التطور وتحقيق طموحاتهم.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-75 fit-cover" style="min-height: 300px;" src="{{asset('assets/img/logo/logo.png')}}" /></div>
                    </div>
                </div>
                <div class="row" id="donors">
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-75 fit-cover" style="min-height: 300px;" src="{{asset('assets/img/illustration/img-1.png')}}" /></div>
                    </div>
                    <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 500px;">
                            <h2 class="text-uppercase display-2 fw-bold">تبرّع اليوم وكن جزءًا من مستقبلٍ مُشرق!</h2>
                            <p class="my-3 display-6 lh-1-5">
                                نُقدّر دعمكم الكريم ونُؤمن بأهمية مساهمتكم في تمكين الشباب.
                                من خلال موقع تمكين الشباب، ستتمكن من، دعم الشباب
                                المُحتاج ومساعدتهم على تحقيق طموحاتهم وآمالهم.
                                إحداث تغيير إيجابي في المجتمع من خلال المساهمة في بناء مجتمعات أكثر ازدهارًا.
                            </p>
                            <a href="{{route('auth.onBoarding')}}" class="btn btn-primary">تبرع الآن</a>
                        </div>
                    </div>
                </div>
                <div class="row" id="menotor">
                    <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 500px;">
                            <h2 class="text-uppercase display-2 fw-bold">انضم إلينا وشارك خبرتك مع الجيل الجديد!</h2>
                            <p class="my-3 display-6 lh-1-5">
                                نشر كورسات ومحاضرات مجانية.
                                تقديم استشارات للشباب.
                                التواصل مع الشباب المهتمين بمجالهم.
                            </p>
                            <a href="{{route('auth.onBoarding')}}" class="btn btn-primary">إنضم إلينا الآن </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-75 fit-cover" style="min-height: 300px;" src="{{asset('assets/img/illustration/img-2.png')}}" /></div>
                    </div>
                </div>
                <div class="row" id="youth">
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-75 fit-cover" style="min-height: 300px;" src="{{asset('assets/img/illustration/img-youth.svg')}}" /></div>
                    </div>
                    <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 500px;">
                            <h2 class="text-uppercase display-2 fw-bold">سجل الآن وابدأ رحلتك نحو مستقبل أفضل!</h2>
                            <p class="my-3 display-6 lh-1-5">
                                كورسات مجانية في مختلف المجالات.
                                استشارات من مدربين مختصين.
                                منصة تبرعات لدعم مشاريع الشباب.                            </p>
                            <a href="{{route('auth.onBoarding')}}" class="btn btn-primary">سجل الآن!</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--            Achievements    -->
            <section id="achievements">
                <div class="mx-7">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h1 class="display-1">إنجازات المنصة</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mb-5">
                                <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                    <div class="d-flex rounded-xl bg-gradient-light sw-6 sh-6 mb-3 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-pepper text-white"><path d="M13 11.3333C13 15.0152 11.125 18 10 18C8.875 18 7 15.0152 7 11.3333C7 7.65144 7.29167 6 10 6C12.7083 6 13 7.65144 13 11.3333Z"></path><path d="M11 17.5C12.4471 17.4093 16.1356 16.6825 16.7696 13.3675 17.4035 10.0525 18.6096 7.29223 14.9118 6.58509 13.5768 6.3298 13.119 6.7133 12.4304 7.00002M9 17.5C7.5529 17.4093 3.86436 16.6825 3.23041 13.3675 2.59647 10.0525 1.39044 7.29223 5.08821 6.58509 6.42318 6.3298 6.881 6.7133 7.56958 7.00002"></path><path d="M10 6L9.37873 3.51493C9.15615 2.62459 8.35618 2 7.43845 2H7"></path></svg>
                                    </div>
                                    <p class="h1 text-center mb-0 d-flex text-primary">1000</p>
                                    <p class="card-text display-4 mb-2 d-flex">كورس مجاني متاح في مختلف المجالات</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-5">
                                <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                    <div class="d-flex rounded-xl bg-gradient-light sw-6 sh-6 mb-3 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-pepper text-white"><path d="M13 11.3333C13 15.0152 11.125 18 10 18C8.875 18 7 15.0152 7 11.3333C7 7.65144 7.29167 6 10 6C12.7083 6 13 7.65144 13 11.3333Z"></path><path d="M11 17.5C12.4471 17.4093 16.1356 16.6825 16.7696 13.3675 17.4035 10.0525 18.6096 7.29223 14.9118 6.58509 13.5768 6.3298 13.119 6.7133 12.4304 7.00002M9 17.5C7.5529 17.4093 3.86436 16.6825 3.23041 13.3675 2.59647 10.0525 1.39044 7.29223 5.08821 6.58509 6.42318 6.3298 6.881 6.7133 7.56958 7.00002"></path><path d="M10 6L9.37873 3.51493C9.15615 2.62459 8.35618 2 7.43845 2H7"></path></svg>
                                    </div>
                                    <p class="h1 text-center mb-0 d-flex text-primary">1000</p>
                                    <p class="card-text display-4 mb-2 d-flex">مشروعًا شابًا تم دعمه من خلال منصة تمكين الشباب</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-5">
                                <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                    <div class="d-flex rounded-xl bg-gradient-light sw-6 sh-6 mb-3 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-pepper text-white"><path d="M13 11.3333C13 15.0152 11.125 18 10 18C8.875 18 7 15.0152 7 11.3333C7 7.65144 7.29167 6 10 6C12.7083 6 13 7.65144 13 11.3333Z"></path><path d="M11 17.5C12.4471 17.4093 16.1356 16.6825 16.7696 13.3675 17.4035 10.0525 18.6096 7.29223 14.9118 6.58509 13.5768 6.3298 13.119 6.7133 12.4304 7.00002M9 17.5C7.5529 17.4093 3.86436 16.6825 3.23041 13.3675 2.59647 10.0525 1.39044 7.29223 5.08821 6.58509 6.42318 6.3298 6.881 6.7133 7.56958 7.00002"></path><path d="M10 6L9.37873 3.51493C9.15615 2.62459 8.35618 2 7.43845 2H7"></path></svg>
                                    </div>
                                    <p class="h1 text-center mb-0 d-flex text-primary">1000</p>
                                    <p class="card-text display-4 mb-2 d-flex">متبرع دعموا منصة تمكين الشباب.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-7">
                        <div class="col">
                            <div class="card mb-5">
                                <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                    <div class="d-flex rounded-xl bg-gradient-light sw-6 sh-6 mb-3 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-pepper text-white"><path d="M13 11.3333C13 15.0152 11.125 18 10 18C8.875 18 7 15.0152 7 11.3333C7 7.65144 7.29167 6 10 6C12.7083 6 13 7.65144 13 11.3333Z"></path><path d="M11 17.5C12.4471 17.4093 16.1356 16.6825 16.7696 13.3675 17.4035 10.0525 18.6096 7.29223 14.9118 6.58509 13.5768 6.3298 13.119 6.7133 12.4304 7.00002M9 17.5C7.5529 17.4093 3.86436 16.6825 3.23041 13.3675 2.59647 10.0525 1.39044 7.29223 5.08821 6.58509 6.42318 6.3298 6.881 6.7133 7.56958 7.00002"></path><path d="M10 6L9.37873 3.51493C9.15615 2.62459 8.35618 2 7.43845 2H7"></path></svg>
                                    </div>
                                    <p class="h1 text-center mb-0 d-flex text-primary">1000</p>
                                    <p class="card-text display-4 mb-2 d-flex">مدرب مشارك في منصة تمكين الشباب</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-5">
                                <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                    <div class="d-flex rounded-xl bg-gradient-light sw-6 sh-6 mb-3 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-pepper text-white"><path d="M13 11.3333C13 15.0152 11.125 18 10 18C8.875 18 7 15.0152 7 11.3333C7 7.65144 7.29167 6 10 6C12.7083 6 13 7.65144 13 11.3333Z"></path><path d="M11 17.5C12.4471 17.4093 16.1356 16.6825 16.7696 13.3675 17.4035 10.0525 18.6096 7.29223 14.9118 6.58509 13.5768 6.3298 13.119 6.7133 12.4304 7.00002M9 17.5C7.5529 17.4093 3.86436 16.6825 3.23041 13.3675 2.59647 10.0525 1.39044 7.29223 5.08821 6.58509 6.42318 6.3298 6.881 6.7133 7.56958 7.00002"></path><path d="M10 6L9.37873 3.51493C9.15615 2.62459 8.35618 2 7.43845 2H7"></path></svg>
                                    </div>
                                    <p class="h1 text-center mb-0 d-flex text-primary">1000</p>
                                    <p class="card-text display-4 mb-2 d-flex">شاب انضموا لمنصة تمكين الشباب وبدأوا رحلتهم نحو مستقبل أفضل</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--            Last News    -->
            <section id="news">
                <div class="container py-4 py-xl-5">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h1 class="display-1">آخر الأخبار</h1>
                        </div>
                    </div>
                    <div class="row gy-4 row-cols-1 row-cols-md-2 mx-7">
                        @foreach($news as $item)
                        <div class="col">
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="py-4 py-lg-0 px-lg-4">
                                    <h1 class="display-3 fw-bold">{{$item->title}}</h1>
                                    <p class="lh-1-5 h5">{{$item->description}}</p>
                                    <div>
                                        <span class="badge bg-primary rounded" style="font-size:14px;">{{ date_format($item->created_at, "d/m/Y")}}</span>
                                    </div>
                                </div>
                                <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="{{asset('assets/img/illustration/img-3.png')}}" /></div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Layout Footer Start -->
    <footer class="text-white bg-alternate h-auto position-static">
        <div class="container py-4 py-lg-5 ">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6 text-white">Services</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-light" href="#">Web design</a></li>
                        <li><a class="link-light" href="#">Development</a></li>
                        <li><a class="link-light" href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6 text-white">About</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-light" href="#">Company</a></li>
                        <li><a class="link-light" href="#">Team</a></li>
                        <li><a class="link-light" href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6 text-white">Careers</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-light" href="#">Job openings</a></li>
                        <li><a class="link-light" href="#">Employee success</a></li>
                        <li><a class="link-light" href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="fw-bold d-flex align-items-center mb-2"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2"><svg class="bi bi-bezier fs-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                        </svg></span><span>Brand</span></div>
                    <p class="text-muted copyright">Sem eleifend donec molestie, integer quisque orci aliquam.</p>
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2024 Brand</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Layout Footer End -->
</div>

<!-- Theme Settings Modal Start -->
<div
    class="modal fade modal-right scroll-out-negative"
    id="settings"
    data-bs-backdrop="true"
    tabindex="-1"
    role="dialog"
    aria-labelledby="settings"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Theme Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="scroll-track-visible">
                    <div class="mb-5" id="color">
                        <label class="mb-3 d-inline-block form-label">Color</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="blue-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT BLUE</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="blue-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK BLUE</span>
                                </div>
                            </a>
                        </div>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-teal" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="teal-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT TEAL</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-teal" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="teal-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK TEAL</span>
                                </div>
                            </a>
                        </div>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-sky" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="sky-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT SKY</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-sky" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="sky-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK SKY</span>
                                </div>
                            </a>
                        </div>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="red-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT RED</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="red-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK RED</span>
                                </div>
                            </a>
                        </div>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="green-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT GREEN</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="green-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK GREEN</span>
                                </div>
                            </a>
                        </div>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-lime" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="lime-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT LIME</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-lime" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="lime-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK LIME</span>
                                </div>
                            </a>
                        </div>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="pink-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT PINK</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="pink-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK PINK</span>
                                </div>
                            </a>
                        </div>
                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="purple-light"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                    <div class="purple-dark"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK PURPLE</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mb-5" id="navcolor">
                        <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DEFAULT</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-secondary figure-light top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">LIGHT</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-muted figure-dark top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">DARK</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="placement">
                        <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="horizontal" data-parent="placement">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">HORIZONTAL</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="vertical" data-parent="placement">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary left"></div>
                                    <div class="figure figure-secondary right"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">VERTICAL</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="behaviour">
                        <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary left large"></div>
                                    <div class="figure figure-secondary right small"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">PINNED</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary left"></div>
                                    <div class="figure figure-secondary right"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">UNPINNED</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="layout">
                        <label class="mb-3 d-inline-block form-label">Layout</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">FLUID</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom small"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">BOXED</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5" id="radius">
                        <label class="mb-3 d-inline-block form-label">Radius</label>
                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
                                <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">ROUNDED</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
                                <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">STANDARD</span>
                                </div>
                            </a>
                            <a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
                                <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                                    <div class="figure figure-primary top"></div>
                                    <div class="figure figure-secondary bottom"></div>
                                </div>
                                <div class="text-muted text-part">
                                    <span class="text-extra-small align-middle">FLAT</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Theme Settings Modal End -->


<!-- Theme Settings & Niches Buttons Start -->
<div class="settings-buttons-container">
    <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
          <i data-acorn-icon="paint-roller" class="position-relative"></i>
        </span>
    </button>
    <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#niches" id="nichesButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Niches">
          <i data-acorn-icon="toy" class="position-relative"></i>
        </span>
    </button>
</div>
<!-- Theme Settings & Niches Buttons End -->

<!-- Search Modal Start -->
<div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ps-5 pe-5 pb-0 border-0">
                <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off" />
            </div>
            <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-acorn-icon="arrow-bottom" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Navigate</span>
            </span>
                <span class="text-alternate d-inline-block m-0 me-3">
              <i data-acorn-icon="arrow-bottom-left" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Select</span>
            </span>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- Vendor Scripts Start -->
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/OverlayScrollbars.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/autoComplete.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/clamp.min.js')}}"></script>

<script src="{{asset('assets/icon/acorn-icons.js')}}"></script>
<script src="{{asset('assets/icon/acorn-icons-interface.js')}}"></script>

<script src="{{asset('assets/js/vendor/Chart.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/chartjs-plugin-datalabels.js')}}"></script>

<script src="{{asset('assets/js/vendor/chartjs-plugin-rounded-bar.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/glide.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/intro.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/select2.full.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/plyr.min.js')}}"></script>

<!-- Vendor Scripts End -->

<!-- Template Base Scripts Start -->
<script src="{{asset('assets/js/base/helpers.js')}}"></script>
<script src="{{asset('assets/js/base/globals.js')}}"></script>
<script src="{{asset('assets/js/base/nav.js')}}"></script>
<script src="{{asset('assets/js/base/search.js')}}"></script>
<script src="{{asset('assets/js/base/settings.js')}}"></script>
<!-- Template Base Scripts End -->
<!-- Page Specific Scripts Start -->

<script src="{{asset('assets/js/cs/glide.custom.js')}}"></script>

<script src="{{asset('assets/js/cs/charts.extend.js')}}"></script>

<script src="{{asset('assets/js/pages/dashboard.default.js')}}"></script>

<script src="{{asset('assets/js/common.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<!-- Page Specific Scripts End -->
</body>
</html>
