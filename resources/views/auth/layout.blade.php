<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Login Page</title>
    <meta name="description" content="Login Page" />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset('assets/img/favicon/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/img/favicon/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/img/favicon/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/img/favicon/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{asset('assets/img/favicon/apple-touch-icon-60x60.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{asset('assets/img/favicon/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{asset('assets/img/favicon/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{asset('assets/img/favicon/apple-touch-icon-152x152.png')}}" />
    <link rel="assets/icon" type="image/png" href="{{asset('assets/img/favicon/favicon-196x196.png" sizes="196x196')}}" />
    <link rel="assets/icon" type="image/png" href="{{asset('assets/img/favicon/favicon-96x96.png" sizes="96x96')}}" />
    <link rel="assets/icon" type="image/png" href="{{asset('assets/img/favicon/favicon-32x32.png" sizes="32x32')}}" />
    <link rel="assets/icon" type="image/png" href="{{asset('assets/img/favicon/favicon-16x16.png" sizes="16x16')}}" />
    <link rel="assets/icon" type="image/png" href="{{asset('assets/img/favicon/favicon-128.png" sizes="128x128')}}" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{asset('img/favicon/mstile-144x144.png')}}" />
    <meta name="msapplication-square70x70logo" content="{{asset('img/favicon/mstile-70x70.png')}}" />
    <meta name="msapplication-square150x150logo" content="{{asset('img/favicon/mstile-150x150.png')}}" />
    <meta name="msapplication-wide310x150logo" content="{{asset('img/favicon/mstile-310x150.png')}}" />
    <meta name="msapplication-square310x310logo" content="{{asset('img/favicon/mstile-310x310.png')}}" />
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

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/boarding.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/select2.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/select2-bootstrap4.min.css')}}" />

    <script src="{{asset('assets/js/base/loader.js')}}"></script>
</head>

<body class="h-100">
<div id="root" class="h-100">
    <!-- Background Start -->
    <div class="fixed-background" style="
    background-image: url(@yield('img'));
    background-size: 30%;
    background-position: 20%;
"
    ></div>
    <!-- Background End -->

    <div class="container-fluid p-0 h-100 position-relative">
        <div class="row g-0 h-100">
            <!-- Left Side Start -->
            <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
                <div class="min-h-100 d-flex align-items-center">
                    <div class="w-100 w-lg-75 w-xxl-50">
                    </div>
                </div>
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-lg-auto h-100 w-50" style="direction: rtl">
                <div class="min-h-100 bg-foreground  shadow-deep py-5 full-page-content-right-border">
                    <div class="w-100 px-5">
                        <div class="text-end">
                            <a href="{{route('landing')}}">
                                <img class="img-fluid w-50 text-end" src="{{asset('assets/img/logo/logo-small.png')}}" alt="Logo">
                            </a>
                        </div>
                        <div class="content p-5">
                            <!-- Last Step End Start -->
                            <section class="scroll-section" id="lastStepEnd">
                                <div class="card mb-5 wizard" id="wizardLastStepEnd">
                                    @yield('content')
                                </div>
                            </section>
                            <!-- Last Step End End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side End -->
        </div>
    </div>
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
</div>
<!-- Theme Settings & Niches Buttons End -->

<!-- Vendor Scripts Start -->
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/OverlayScrollbars.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/autoComplete.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/clamp.min.js')}}"></script>

<script src="{{asset('assets/icon/acorn-icons.js')}}"></script>
<script src="{{asset('assets/icon/acorn-icons-interface.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.validate/jquery.validate.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.validate/additional-methods.min.js')}}"></script>

<!-- Vendor Scripts End -->

<!-- Template Base Scripts Start -->
<script src="{{asset('assets/js/base/helpers.js')}}"></script>
<script src="{{asset('assets/js/base/globals.js')}}"></script>
<script src="{{asset('assets/js/base/nav.js')}}"></script>
<script src="{{asset('assets/js/base/search.js')}}"></script>
<script src="{{asset('assets/js/base/settings.js')}}"></script>
<!-- Template Base Scripts End -->
<!-- Page Specific Scripts Start -->

<script src="{{asset('assets/js/pages/auth.login.js')}}"></script>

<script src="{{asset('assets/js/common.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>

<!--Wizard-->
<script src="{{asset('assets/js/cs/wizard.js')}}"></script>
<script src="{{asset('assets/js/forms/wizards.js')}}"></script>
<script src="{{asset('assets/js/vendor/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/forms/controls.select2.js')}}"></script>
<!-- Page Specific Scripts End -->
@stack('script')
</body>
</html>
