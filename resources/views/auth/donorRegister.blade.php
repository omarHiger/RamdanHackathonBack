@extends('auth.layout')

@section('img')
    {{asset('assets/img/illustration/on_boarding_2.png')}}
@endsection


@section('content')
    <div class="content p-5">
        <!-- Last Step End Start -->
        <section class="scroll-section" id="lastStepEnd">
            <div class="card mb-5 wizard" id="wizardLastStepEnd">
                <form action="{{route('donor.register')}}" method="post">
                    <div class="card-header border-0 pb-0">
                        <ul
                            class="nav nav-tabs justify-content-end flex-row-reverse p-0"
                            role="tablist"
                        >
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link text-center"
                                    href="#lastStepEndFirst"
                                >
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="tab-content">
                            <div
                                class="tab-pane fade"
                                id="lastStepEndFirst"
                            >
                                @if($message = Session::get('Error'))
                                    <div class="alert alert-danger">

                                        {{ $message }}
                                    </div>

                                @endif
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
                        </div>

                    </div>

                    <div
                        class="card-footer d-flex justify-content-between text-center border-0 pt-1"
                    >
                        <button
                            type="submit"
                            class="btn btn-icon btn-primary"
                        >
                            <span>تسجيل</span>
                            <i data-acorn-icon="chevron-left"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Last Step End End -->
    </div>
@endsection

