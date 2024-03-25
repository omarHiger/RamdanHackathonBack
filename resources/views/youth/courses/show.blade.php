@extends('youth.layout.layout')

@section('main')
    <main>
        <div class="container">
            <!--            Courses         -->
            <section>
                <div class="row align-items-stretch">
                    <!-- Left Side Start -->
                    <div class="col-12 col-xxl-12 mb-5">
                        <!-- Preview Start -->
                        <h2 class="display-3 my-4 fw-bold">تعلم أساسيات البرمجة بلغة C#</h2>
                        <div class="card mb-5">
                            <div class="card-img-top">
                                <div tabindex="0"
                                     class="plyr plyr--full-ui plyr--video plyr--html5 plyr--fullscreen-enabled plyr--paused plyr--stopped plyr--pip-supported plyr__poster-enabled">
                                    <div class="plyr__controls">
                                        <button class="plyr__controls__item plyr__control" type="button"
                                                data-plyr="play" aria-label="Play">
                                            <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-pause"></use>
                                            </svg>
                                            <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-play"></use>
                                            </svg>
                                            <span class="label--pressed plyr__sr-only">Pause</span><span
                                                class="label--not-pressed plyr__sr-only">Play</span></button>
                                        <div class="plyr__controls__item plyr__progress__container">
                                            <div class="plyr__progress"><input data-plyr="seek" type="range" min="0"
                                                                               max="100" step="0.01" value="0"
                                                                               autocomplete="off" role="slider"
                                                                               aria-label="Seek" aria-valuemin="0"
                                                                               aria-valuemax="100" aria-valuenow="0"
                                                                               id="plyr-seek-7685"
                                                                               aria-valuetext="00:00 of 03:03"
                                                                               style="--value: 0%;">
                                                <progress class="plyr__progress__buffer" min="0" max="100" value="0"
                                                          role="progressbar" aria-hidden="true">% buffered
                                                </progress>
                                                <span class="plyr__tooltip">00:00</span></div>
                                        </div>
                                        <div class="plyr__controls__item plyr__time--current plyr__time"
                                             aria-label="Current time">-03:03
                                        </div>
                                        <div class="plyr__controls__item plyr__volume">
                                            <button type="button" class="plyr__control" data-plyr="mute">
                                                <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                                    <use xlink:href="#plyr-muted"></use>
                                                </svg>
                                                <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                                    <use xlink:href="#plyr-volume"></use>
                                                </svg>
                                                <span class="label--pressed plyr__sr-only">Unmute</span><span
                                                    class="label--not-pressed plyr__sr-only">Mute</span></button>
                                            <input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1"
                                                   autocomplete="off" role="slider" aria-label="Volume"
                                                   aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"
                                                   id="plyr-volume-7685" aria-valuetext="100.0%" style="--value: 100%;">
                                        </div>
                                        <button class="plyr__controls__item plyr__control" type="button"
                                                data-plyr="captions">
                                            <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-captions-on"></use>
                                            </svg>
                                            <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-captions-off"></use>
                                            </svg>
                                            <span class="label--pressed plyr__sr-only">Disable captions</span><span
                                                class="label--not-pressed plyr__sr-only">Enable captions</span></button>
                                        <div class="plyr__controls__item plyr__menu">
                                            <button aria-haspopup="true" aria-controls="plyr-settings-7685"
                                                    aria-expanded="false" type="button" class="plyr__control"
                                                    data-plyr="settings">
                                                <svg aria-hidden="true" focusable="false">
                                                    <use xlink:href="#plyr-settings"></use>
                                                </svg>
                                                <span class="plyr__sr-only">Settings</span></button>
                                            <div class="plyr__menu__container" id="plyr-settings-7685" hidden="">
                                                <div>
                                                    <div id="plyr-settings-7685-home">
                                                        <div role="menu">
                                                            <button data-plyr="settings" type="button"
                                                                    class="plyr__control plyr__control--forward"
                                                                    role="menuitem" aria-haspopup="true" hidden="">
                                                                <span>Captions<span
                                                                        class="plyr__menu__value">Disabled</span></span>
                                                            </button>
                                                            <button data-plyr="settings" type="button"
                                                                    class="plyr__control plyr__control--forward"
                                                                    role="menuitem" aria-haspopup="true" hidden="">
                                                                <span>Quality<span
                                                                        class="plyr__menu__value">0</span></span>
                                                            </button>
                                                            <button data-plyr="settings" type="button"
                                                                    class="plyr__control plyr__control--forward"
                                                                    role="menuitem" aria-haspopup="true">
                                                                <span>Speed<span class="plyr__menu__value">Normal</span></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div id="plyr-settings-7685-captions" hidden="">
                                                        <button type="button" class="plyr__control plyr__control--back">
                                                            <span aria-hidden="true">Captions</span><span
                                                                class="plyr__sr-only">Go back to previous menu</span>
                                                        </button>
                                                        <div role="menu"></div>
                                                    </div>
                                                    <div id="plyr-settings-7685-quality" hidden="">
                                                        <button type="button" class="plyr__control plyr__control--back">
                                                            <span aria-hidden="true">Quality</span><span
                                                                class="plyr__sr-only">Go back to previous menu</span>
                                                        </button>
                                                        <div role="menu"></div>
                                                    </div>
                                                    <div id="plyr-settings-7685-speed" hidden="">
                                                        <button type="button" class="plyr__control plyr__control--back">
                                                            <span aria-hidden="true">Speed</span><span
                                                                class="plyr__sr-only">Go back to previous menu</span>
                                                        </button>
                                                        <div role="menu">
                                                            <button data-plyr="speed" type="button" role="menuitemradio"
                                                                    class="plyr__control" aria-checked="false"
                                                                    value="0.5"><span>0.5×</span></button>
                                                            <button data-plyr="speed" type="button" role="menuitemradio"
                                                                    class="plyr__control" aria-checked="false"
                                                                    value="0.75"><span>0.75×</span></button>
                                                            <button data-plyr="speed" type="button" role="menuitemradio"
                                                                    class="plyr__control" aria-checked="true" value="1">
                                                                <span>Normal</span></button>
                                                            <button data-plyr="speed" type="button" role="menuitemradio"
                                                                    class="plyr__control" aria-checked="false"
                                                                    value="1.25"><span>1.25×</span></button>
                                                            <button data-plyr="speed" type="button" role="menuitemradio"
                                                                    class="plyr__control" aria-checked="false"
                                                                    value="1.5"><span>1.5×</span></button>
                                                            <button data-plyr="speed" type="button" role="menuitemradio"
                                                                    class="plyr__control" aria-checked="false"
                                                                    value="1.75"><span>1.75×</span></button>
                                                            <button data-plyr="speed" type="button" role="menuitemradio"
                                                                    class="plyr__control" aria-checked="false"
                                                                    value="2"><span>2×</span></button>
                                                            <button data-plyr="speed" type="button" role="menuitemradio"
                                                                    class="plyr__control" aria-checked="false"
                                                                    value="4"><span>4×</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="plyr__controls__item plyr__control" type="button"
                                                data-plyr="pip">
                                            <svg aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-pip"></use>
                                            </svg>
                                            <span class="plyr__sr-only">PIP</span></button>
                                        <button class="plyr__controls__item plyr__control" type="button"
                                                data-plyr="fullscreen">
                                            <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-exit-fullscreen"></use>
                                            </svg>
                                            <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                                <use xlink:href="#plyr-enter-fullscreen"></use>
                                            </svg>
                                            <span class="label--pressed plyr__sr-only">Exit fullscreen</span><span
                                                class="label--not-pressed plyr__sr-only">Enter fullscreen</span>
                                        </button>
                                    </div>
                                    <div class="plyr__video-wrapper">
                                        <video class="player sh-50 cover" poster="img/course/large/course-1.webp"
                                               id="videoPlayer" data-poster="img/course/large/course-1.webp">
                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                                    type="video/mp4">
                                        </video>
                                        <div class="plyr__poster"
                                             style="background-image: url(assets/img/course/detail.png);"></div>
                                    </div>
                                    <div class="plyr__captions"></div>
                                    <button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play"
                                            aria-label="Play">
                                        Play
                                        <span class="plyr__sr-only">Play</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="heading display-4 fw-bold">وصف الكورس</h6>
                                        <p class="lh-1-5 lead">
                                            دورة أساسيات برمجة بلغة C#
                                            تعلم لغة C# لبناء تطبيقات متنوعة، من سطح المكتب إلى الويب والألعاب.
                                            الموضوعات:
                                            أساسيات البرمجة: المتغيرات، الأنواع، الشروط، الحلقات، الوظائف.
                                            لغة C#: تركيب اللغة، كتابة التعليمات البرمجية.
                                            برمجة الألعاب: إنشاء ألعاب بسيطة باستخدام Unity.
                                            تطبيقات سطح المكتب: إنشاء تطبيقات بسيطة باستخدام Windows Forms.
                                            تطبيقات الويب: إنشاء تطبيقات بسيطة باستخدام ASP.NET MVC.
                                            للجميع:
                                            المبتدئين في البرمجة.
                                            المبرمجون الذين يرغبون في تعلم لغة C#.
                                            متطلبات:
                                            جهاز كمبيوتر.
                                            محرر نص.
                                            برنامج Visual Studio.
                                            مخرجات:
                                            كتابة التعليمات البرمجية بلغة C#.
                                            إنشاء تطبيقات بسيطة.
                                            فهم مبادئ البرمجة الأساسية.
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
                                                                    14/03/2024 - 31/03/2024
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
                                                                    مبتدئ
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
                                                                    برمجة وتطوير
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
                                                                    دمشق، سوريا
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
                        <h2 class="small-title display-4 mb-3">المدربون</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="card mb-3">
                                            <div class="card-body mb-n5">
                                                <div class="d-flex align-items-center flex-column mb-5">
                                                    <div class="mb-5 d-flex align-items-center flex-column">
                                                        <div class="sw-13 position-relative mb-3">
                                                            <img src="assets/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
                                                        </div>
                                                        <div class=" mb-3 display-3">عمر هيجر</div>
                                                        <div class="text-muted">مهندس برمجيات</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card mb-3">
                                            <div class="card-body mb-n5">
                                                <div class="d-flex align-items-center flex-column mb-5">
                                                    <div class="mb-5 d-flex align-items-center flex-column">
                                                        <div class="sw-13 position-relative mb-3">
                                                            <img src="assets/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
                                                        </div>
                                                        <div class=" mb-3 display-3">محمود سلوم</div>
                                                        <div class="text-muted">مهندس برمجيات</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left Side End -->
                    <h1 class="heading title display-1">اقتراحات لك</h1>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#">
                                    <img src="assets/img/course/img.png" class="card-img-top sh-30" alt="card image">
                                </a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between text-large">
                                        <a href="#">برمجة</a>
                                        <span class="badge bg-info">مبتدئ</span>
                                    </div>
                                    <h3 class="heading display-6 fw-bold mt-3">تعلم أساسيات البرمجة بلغة C#</h3>
                                    <div class="row g-0 align-items-center mb-1">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.2002 6L5.2002 14" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10 10.7998L11.6 13.9998" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.2002 2V3.6" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center lh-1-25 fw-bold">عمر هيجر</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 align-items-center mb-1">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 6L2 6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.7998 2V3.6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M5.2002 2V3.6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25">
                                                        14/03/2024 - 31/03/2024
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 align-items-center mb-4">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center fw-bold lh-1-25">دمشق، سوريا</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#">
                                    <img src="assets/img/course/img.png" class="card-img-top sh-30" alt="card image">
                                </a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between text-large">
                                        <a href="#">برمجة</a>
                                        <span class="badge bg-info">مبتدئ</span>
                                    </div>
                                    <h3 class="heading display-6 fw-bold mt-3">تعلم أساسيات البرمجة بلغة C#</h3>
                                    <div class="row g-0 align-items-center mb-1">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.2002 6L5.2002 14" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10 10.7998L11.6 13.9998" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.2002 2V3.6" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center lh-1-25 fw-bold">عمر هيجر</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 align-items-center mb-1">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 6L2 6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.7998 2V3.6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M5.2002 2V3.6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25">
                                                        14/03/2024 - 31/03/2024
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 align-items-center mb-4">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center fw-bold lh-1-25">دمشق، سوريا</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#">
                                    <img src="assets/img/course/img.png" class="card-img-top sh-30" alt="card image">
                                </a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between text-large">
                                        <a href="#">برمجة</a>
                                        <span class="badge bg-info">مبتدئ</span>
                                    </div>
                                    <h3 class="heading display-6 fw-bold mt-3">تعلم أساسيات البرمجة بلغة C#</h3>
                                    <div class="row g-0 align-items-center mb-1">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.2002 6L5.2002 14" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10 10.7998L11.6 13.9998" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.2002 2V3.6" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center lh-1-25 fw-bold">عمر هيجر</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 align-items-center mb-1">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 6L2 6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.7998 2V3.6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M5.2002 2V3.6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25">
                                                        14/03/2024 - 31/03/2024
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 align-items-center mb-4">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center fw-bold lh-1-25">دمشق، سوريا</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <a href="#">
                                    <img src="assets/img/course/img.png" class="card-img-top sh-30" alt="card image">
                                </a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between text-large">
                                        <a href="#">برمجة</a>
                                        <span class="badge bg-info">مبتدئ</span>
                                    </div>
                                    <h3 class="heading display-6 fw-bold mt-3">تعلم أساسيات البرمجة بلغة C#</h3>
                                    <div class="row g-0 align-items-center mb-1">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.2002 6L5.2002 14" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10 10.7998L11.6 13.9998" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.2002 2V3.6" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center lh-1-25 fw-bold">عمر هيجر</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 align-items-center mb-1">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 6L2 6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.7998 2V3.6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M5.2002 2V3.6" stroke="#89B668" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25">
                                                        14/03/2024 - 31/03/2024
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 align-items-center mb-4">
                                        <div class="col-auto">
                                            <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z" stroke="#6F7787" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <div class="sh-4 d-flex align-items-center fw-bold lh-1-25">دمشق، سوريا</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </main>
@endsection
