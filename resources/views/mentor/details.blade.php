@extends('youth.layout.layout')

@section('main')
    <main>
        <div class="container">
            <!--            Courses         -->
            <section>
                <div class="row">
                    <div class="col-auto w-100">
                        <div class="card p-5 mb-3">
                            <a href="#" class="row g-0">
                                <div class="col-auto h-100"></div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 justify-content-center">
                                        <div class="trainer sh-40">
                                            <div
                                                class="d-flex justify-content-between align-items-center"
                                            >
                                                <div class="d-flex align-items-center">
                                                    <img
                                                        src="{{asset('assets/img/profile/profile-5.webp')}}"
                                                        alt="alternate text"
                                                        class="card-img rounded-xl card-img-horizontal sw-11"
                                                    />
                                                    <div class="d-flex flex-column me-5">
                                                        <div class="text-dark heading display-6 fw-bold">
                                                            عمر هيجر
                                                        </div>
                                                        <div class="text-dark text-truncate">
                                                            Senior UI/UX Designer
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <button class="btn btn-primary">
                                                        أرسل إستشارة
                                                        <i data-acorn-icon="message"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="about-trainer mt-5">
                                                <h1 class="heading title display-6 fw-bold">
                                                    لمحة عن المدرب
                                                </h1>
                                                <p class="text-large text-alternate">
                                                    عمر هيجر هو مُدرّب UI/UX مُتمرّس وناجح، يتمتع بخبرة
                                                    واسعة في تصميم واجهات المستخدم وتجربة المستخدم. يُساعد
                                                    عمر في إنشاء واجهات مستخدم سهلة الاستخدام وجذابة وفعالة،
                                                    تُلبي احتياجات المستخدمين وتُحقق أهداف الأعمال.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="courses">
                                            <h1 class="heading title display-3 fw-bold">
                                                الكورسات التي يقدمها المدرب
                                            </h1>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card mb-5">
                                                        <div class="row g-0 h-auto">
                                                            <div class="col-sm-4 h-100">
                                                                <img
                                                                    src="{{asset('assets/img/course/img.png')}}"
                                                                    class="card-img"
                                                                    alt="card image"
                                                                />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div
                                                                    class="card-body p-0 pe-5 d-flex justify-content-between"
                                                                >
                                                                    <div>
                                                                        <h5 class="heading fw-bold text-primary mt-3">
                                                                            برمجة
                                                                        </h5>
                                                                        <h3 class="heading display-6 fw-bold mt-3">
                                                                            تعلم أساسيات البرمجة بلغة C#
                                                                        </h3>
                                                                        <div
                                                                            class="text-alternate row g-0 align-items-center mb-1"
                                                                        >
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M5.2002 6L5.2002 14"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M10 10.7998L11.6 13.9998"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M9.2002 2V3.6"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center lh-1-25 fw-bold"
                                                                                        >
                                                                                            عمر هيجر
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 align-items-center mb-1">
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M14 6L2 6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M10.7998 2V3.6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M5.2002 2V3.6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25"
                                                                                        >
                                                                                            14/03/2024 - 31/03/2024
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="text-alternate row g-0 align-items-center mb-4"
                                                                        >
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center fw-bold lh-1-25"
                                                                                        >
                                                                                            دمشق، سوريا
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                  <span
                                      class="badge text-large rounded sw-20 bg-info"
                                  >مبتدئ</span
                                  >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card mb-5">
                                                        <div class="row g-0 h-auto">
                                                            <div class="col-sm-4 h-100">
                                                                <img
                                                                    src="{{asset('assets/img/course/img.png')}}"
                                                                    class="card-img"
                                                                    alt="card image"
                                                                />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div
                                                                    class="card-body p-0 pe-5 d-flex justify-content-between"
                                                                >
                                                                    <div>
                                                                        <h5 class="heading fw-bold text-primary mt-3">
                                                                            برمجة
                                                                        </h5>
                                                                        <h3 class="heading display-6 fw-bold mt-3">
                                                                            تعلم أساسيات البرمجة بلغة C#
                                                                        </h3>
                                                                        <div
                                                                            class="text-alternate row g-0 align-items-center mb-1"
                                                                        >
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M5.2002 6L5.2002 14"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M10 10.7998L11.6 13.9998"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M9.2002 2V3.6"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center lh-1-25 fw-bold"
                                                                                        >
                                                                                            عمر هيجر
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 align-items-center mb-1">
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M14 6L2 6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M10.7998 2V3.6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M5.2002 2V3.6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25"
                                                                                        >
                                                                                            14/03/2024 - 31/03/2024
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="text-alternate row g-0 align-items-center mb-4"
                                                                        >
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center fw-bold lh-1-25"
                                                                                        >
                                                                                            دمشق، سوريا
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                  <span
                                      class="badge text-large rounded sw-20 bg-info"
                                  >مبتدئ</span
                                  >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card mb-5">
                                                        <div class="row g-0 h-auto">
                                                            <div class="col-sm-4 h-100">
                                                                <img
                                                                    src="{{asset('assets/img/course/img.png')}}"
                                                                    class="card-img"
                                                                    alt="card image"
                                                                />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div
                                                                    class="card-body p-0 pe-5 d-flex justify-content-between"
                                                                >
                                                                    <div>
                                                                        <h5 class="heading fw-bold text-primary mt-3">
                                                                            برمجة
                                                                        </h5>
                                                                        <h3 class="heading display-6 fw-bold mt-3">
                                                                            تعلم أساسيات البرمجة بلغة C#
                                                                        </h3>
                                                                        <div
                                                                            class="text-alternate row g-0 align-items-center mb-1"
                                                                        >
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M5.2002 6L5.2002 14"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M10 10.7998L11.6 13.9998"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M9.2002 2V3.6"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center lh-1-25 fw-bold"
                                                                                        >
                                                                                            عمر هيجر
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 align-items-center mb-1">
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M14 6L2 6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M10.7998 2V3.6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M5.2002 2V3.6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25"
                                                                                        >
                                                                                            14/03/2024 - 31/03/2024
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="text-alternate row g-0 align-items-center mb-4"
                                                                        >
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center fw-bold lh-1-25"
                                                                                        >
                                                                                            دمشق، سوريا
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                  <span
                                      class="badge text-large rounded sw-20 bg-info"
                                  >مبتدئ</span
                                  >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card mb-5">
                                                        <div class="row g-0 h-auto">
                                                            <div class="col-sm-4 h-100">
                                                                <img
                                                                    src="{{asset('assets/img/course/img.png')}}"
                                                                    class="card-img"
                                                                    alt="card image"
                                                                />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div
                                                                    class="card-body p-0 pe-5 d-flex justify-content-between"
                                                                >
                                                                    <div>
                                                                        <h5 class="heading fw-bold text-primary mt-3">
                                                                            برمجة
                                                                        </h5>
                                                                        <h3 class="heading display-6 fw-bold mt-3">
                                                                            تعلم أساسيات البرمجة بلغة C#
                                                                        </h3>
                                                                        <div
                                                                            class="text-alternate row g-0 align-items-center mb-1"
                                                                        >
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M5.2002 6L5.2002 14"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M3.9998 4.4C4.66255 4.4 5.1998 3.86274 5.1998 3.2C5.1998 2.53726 4.66255 2 3.9998 2C3.33706 2 2.7998 2.53726 2.7998 3.2C2.7998 3.86274 3.33706 4.4 3.9998 4.4Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M9.2 6L2.8 6C2.58783 6 2.38434 6.08429 2.23431 6.23431C2.08429 6.38434 2 6.58783 2 6.8L2 14"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M7.6001 3.59961L14.0001 3.59961L14.0001 10.7996L7.6001 10.7996"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M10 10.7998L11.6 13.9998"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M9.2002 2V3.6"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center lh-1-25 fw-bold"
                                                                                        >
                                                                                            عمر هيجر
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 align-items-center mb-1">
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M14 6L2 6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M3.2 3.59961L12.8 3.59961C13.1183 3.59961 13.4235 3.72604 13.6485 3.95108C13.8736 4.17612 14 4.48135 14 4.79961L14 11.9996C14 12.3179 13.8736 12.6231 13.6485 12.8481C13.4235 13.0732 13.1183 13.1996 12.8 13.1996L3.2 13.1996C2.88174 13.1996 2.57652 13.0732 2.35147 12.8481C2.12643 12.6231 2 12.3179 2 11.9996L2 4.79961C2 4.48135 2.12643 4.17612 2.35147 3.95108C2.57652 3.72604 2.88174 3.59961 3.2 3.59961Z"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M10.7998 2V3.6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M5.2002 2V3.6"
                                                                                            stroke="#89B668"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center text-primary fw-bold lh-1-25"
                                                                                        >
                                                                                            14/03/2024 - 31/03/2024
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="text-alternate row g-0 align-items-center mb-4"
                                                                        >
                                                                            <div class="col-auto">
                                                                                <div
                                                                                    class="sw-3 sh-4 d-flex justify-content-center align-items-center"
                                                                                >
                                                                                    <svg
                                                                                        width="16"
                                                                                        height="16"
                                                                                        viewBox="0 0 16 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                    >
                                                                                        <path
                                                                                            d="M3.5999 6.4C3.5999 10 7.9999 14 7.9999 14C7.9999 14 12.3999 10 12.3999 6.4C12.3999 5.23305 11.9363 4.11389 11.1112 3.28873C10.286 2.46357 9.16685 2 7.9999 2C6.83295 2 5.71379 2.46357 4.88863 3.28873C4.06347 4.11389 3.5999 5.23305 3.5999 6.4Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                        <path
                                                                                            d="M8 8.40039C6.89543 8.40039 6 7.50496 6 6.40039C6 5.29582 6.89543 4.40039 8 4.40039C9.10457 4.40039 10 5.29582 10 6.40039C10 7.50496 9.10457 8.40039 8 8.40039Z"
                                                                                            stroke="#6F7787"
                                                                                            stroke-width="0.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                        />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col ps-3">
                                                                                <div class="row g-0">
                                                                                    <div class="col">
                                                                                        <div
                                                                                            class="sh-4 d-flex align-items-center fw-bold lh-1-25"
                                                                                        >
                                                                                            دمشق، سوريا
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                  <span
                                      class="badge text-large rounded sw-20 bg-info"
                                  >مبتدئ</span
                                  >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
