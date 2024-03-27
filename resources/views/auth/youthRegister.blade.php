<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@extends('auth.layout')

@section('img')
    {{asset('assets/img/illustration/on_boarding_2.png')}}
@endsection


@section('content')
    <div class="content p-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Last Step End Start -->
        <section class="scroll-section" id="lastStepEnd">
            <div class="card mb-5 wizard" id="wizardLastStepEnd">
                <form action="{{route('youth.register')}}" method="post">
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
                                        <label class="form-label fw-bold">التحصيل العلمي</label>
                                        <div class="form-floating w-100">
                                            <select class="select-floating w-100" id="selectFloating" name="education_level">
                                                <option label="&nbsp;"></option>
                                                <option value="تعليم ابتدائي">تعليم ابتدائي</option>
                                                <option value="تعليم اعدادي">تعليم اعدادي</option>
                                                <option value="تعليم ثانوي">تعليم ثانوي</option>
                                                <option value="تعليم جامعي">تعليم جامعي</option>
                                            </select>
                                            <label>اختر مايناسبك</label>
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

                                <div class="btn-icon pb-7" style="position: relative; z-index: 2;">
                                    <i class="fas fa-plus" id="addSelect"
                                       style="cursor: pointer; background-color: transparent; float: left; font-size: 24px;"></i>
                                </div>

                                <div class="row mt-2" id="row0">
                                    <div class="col-6" id="col10">
                                        <label class="form-label fw-bold"
                                        >المجال</label
                                        >
                                        <div class="form-floating w-100" id="div10">
                                            <select
                                                class="select-floating w-100"
                                                name="category_id[]"
                                                id="skill0"
                                            >
                                                <option label="&nbsp;"></option>
                                                @foreach($skills as $skill)
                                                    <option value="{{$skill->id}}">{{$skill->name}}</option>
                                                @endforeach
                                            </select>
                                            <label>المجال</label>
                                        </div>
                                    </div>

                                    <div class="col-6" id="col20">
                                        <label class="form-label fw-bold"
                                        >المستوى</label
                                        >
                                        <div class="form-floating w-100" id="div20">
                                            <select
                                                class="select-floating w-100"
                                                name="level[]"
                                                id="level0"
                                            >
                                                <option label="&nbsp;"></option>
                                                <option value="مبتدئ">مبتدئ</option>
                                                <option value="متوسط">متوسط</option>
                                                <option value="متقدم">متقدم</option>
                                            </select>
                                            <label>اختر المستوى</label>
                                        </div>
                                    </div>
                                </div>

                                <div id="input"></div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var i = 0;

    function check() {
        i++;
        console.log('enter');

        var btn = $('#nextButton');

        if (i === 2) {
            btn.text('تسجيل');
            btn.click(function () {
                $('form').submit();
            });
        }
    }

    var num = 1;
    var max_fields = 5; // Maximum input fields
    var select2Controls;
    $(document).ready(function() {
        var wrapper = document.getElementById('input'); // Input fields wrapper
        var add_button = $("#addSelect"); // Add button selector
        var x = 1; // Initial count is 1

        $(add_button).click(function(e) {
            e.preventDefault();
            if(x < max_fields) { // Check maximum number of input fields
                x++;
                var input = document.createElement('div');
                input.setAttribute('class','row mt-2');
                input.setAttribute('id','row'+num);
                input.innerHTML += '<div class="col-4" id="col1'+num+'">' +
                    '<label class="form-label fw-bold">المجال</label>' +
                    '<div class="form-floating w-100" id="div1'+num+'">' +
                    '<select class="select-floating w-100" name="category_id[]" id="skill'+num+'">' +
                    '<option label=" "></option>' +
                    @foreach($skills as $skill)
                    '<option value="{{$skill->id}}">{{$skill->name}}</option>' +
                    @endforeach
                    '</select>' +
                    '<label>المجال</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-4" id="col2'+num+'">' +
                    '<label class="form-label fw-bold">المستوى</label>' +
                    '<div class="form-floating w-100" id="div20'+num+'">' +
                    '<select class="select-floating w-100" name="level[]" id="level'+num+'">' +
                    '<option label=" "></option>' +
                    '<option value="مبتدئ">مبتدئ</option>' +
                    '<option value="متوسط">متوسط</option>' +
                    '<option value="متقدم">متقدم</option>' +
                    '</select>' +
                    '<label>اختر المستوى</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-4 btn-icon p-7" style="position: relative; z-index: 2; float: right;">' +
                    '<i class="fas fa-minus remove_field" style="cursor: pointer; background-color: transparent; font-size: 24px;"></i>' +
                    '</div>';
            num++;
                console.log(input);
                wrapper.appendChild(input); // Add input field
            }
                select2Controls = new Select2Controls();
        });


        // Handle remove button click
        $(wrapper).on("click", ".remove_field", function(e) {
            e.preventDefault();
            $(this).parent('div').parent('div').remove(); // Remove input field
            x--; // Decrement count
            num--;
        });
    });
</script>
