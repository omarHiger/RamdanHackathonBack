@extends('auth.layout')

@section('img')
    {{asset('assets/img/illustration/on_boarding_2.png')}}
@endsection


@section('content')
    <div class="content p-5">
        <!-- Last Step End Start -->
        <section class="scroll-section" id="lastStepEnd">
            <div class="card mb-5 wizard" id="wizardLastStepEnd">
                <form action="{{route('auth.register')}}" method="post">
                    <div class="card-header border-0 pb-0">
                        <ul
                            class="nav nav-tabs justify-content-end flex-row-reverse p-0"
                            role="tablist"
                        >
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link text-center"
                                    href="#lastStepEndFirst"
                                    role="tab"
                                >
                                    <div class="mb-1 title d-none d-sm-block"></div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link text-center"
                                    href="#lastStepEndSecond"
                                    role="tab"
                                >
                                    <div class="mb-1 title d-none d-sm-block"></div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link text-center"
                                    href="#lastStepEndThird"
                                    role="tab"
                                >
                                    <div class="mb-1 title d-none d-sm-block"></div>
                                </a>
                            </li>
                            <li class="nav-item d-none" role="presentation">
                                <a
                                    class="nav-link text-center"
                                    href="#lastStepEndLast"
                                    role="tab"
                                ></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="tab-content">
                            <div
                                class="tab-pane fade"
                                id="lastStepEndFirst"
                                role="tabpanel"
                            >
                                <h2 class="card-title">المعلومات الأساسية</h2>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="اكتب الاسم الاول"
                                                name="first_name"
                                            />
                                            <label>الاسم الأول</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="اكتب اسم عائلتك"
                                                name="last_name"
                                            />
                                            <label>اسم العائلة</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label fw-bold"
                                            >الإيميل</label
                                            >
                                            <div class="mb-3 filled">
                                                <i data-acorn-icon="email" class="icon"></i>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="اكتب الايميل الخاص بك"
                                                    name="email"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label fw-bold"
                                            >كلمة المرور</label
                                            >
                                            <div class="mb-3 filled">
                                                <i
                                                    data-acorn-icon="lock-on"
                                                    class="icon"
                                                ></i>
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    placeholder="اكتب كلمة المرور"
                                                    name="password"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label fw-bold"
                                            >تأكيد كلمة المرور</label
                                            >
                                            <div class="mb-3 filled">
                                                <i
                                                    data-acorn-icon="lock-on"
                                                    class="icon"
                                                ></i>
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    placeholder="أعد كتابة كلمة المرور"
                                                    name="password_confirmation"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="lastStepEndSecond"
                                role="tabpanel"
                            >
                                <h5 class="card-title">معلومات إضافية</h5>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <label class="form-label fw-bold"
                                        >المنصب</label>
                                        <div class="mb-3 filled">
                                            <i
                                                data-acorn-icon="lock-on"
                                                class="icon"
                                            ></i>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="أدخل منصبك"
                                                name="position"
                                            />
                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <label class="form-label fw-bold"
                                        >العنوان</label
                                        >
                                        <div class="form-floating w-100">
                                            <select
                                                class="select-floating w-100"
                                                id="selectFloating2"
                                                name="location"
                                            >
                                                <option label="&nbsp;"></option>
                                                <option value="سوريا">سوريا</option>
                                                <option value="فلسطين">فلسطين</option>
                                                <option value="مصر">مصر</option>
                                            </select>
                                            <label>اختر العنوان</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="form-group">
                                        <label class="form-label fw-bold"
                                        >رقم الجوال</label
                                        >
                                        <div class="mb-3 filled">
                                            <i data-acorn-icon="phone" class="icon"></i>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="ادخل رقم الجوال الخاص بك"
                                                name="phone_number"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="lastStepEndThird"
                                role="tabpanel"
                            >
                                <h5 class="card-title">أختر المجالات التي تهمك</h5>
                                <p class="card-text text-alternate mb-4">
                                    أختر 5 اهتمامات على الأكثر
                                </p>
                                <div class="row g-4">
                                    @foreach($skills as $skill)
                                        <div class="col-4">
                                            <label
                                                class="form-check custom-card w-100 position-relative p-0 m-0"
                                            >
                                                <input
                                                    type="checkbox"
                                                    class="form-check-input position-absolute e-2 t-2 z-index-1"
                                                    name="categories[]"
                                                />
                                                <span
                                                    class="card form-check-label w-100 custom-border"
                                                >
                                    <span
                                        class="m-3 text-center text-body text-primary"
                                    >{{$skill->name}}</span
                                    >
                                  </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                    <div
                        class="card-footer d-flex justify-content-between text-center border-0 pt-1"
                    >
                        <button
                            class="btn btn-icon btn-icon-start btn-alternate btn-prev"
                            type="button"
                        >
                            <i data-acorn-icon="chevron-right"></i>
                            <span>رجوع</span>
                        </button>
                        <button
                            type="button"
                            id="nextButton"
                            onclick="check()"
                            class="btn btn-icon btn-icon-end btn-primary btn-next"
                        >
                            <span>التالي</span>
                            <i data-acorn-icon="chevron-left"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Last Step End End -->
    </div>
@endsection
<script>
    var i = 0;
    function check() {
        i++;
        console.log('enter');

        var btn = $('#nextButton');

        if(i===2){
            btn.text('تسجيل');
            btn.click(function () {
                $('form').submit();
            });
        }
    }

</script>
