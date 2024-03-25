@extends('auth.layout')

@section('img')
    {{asset('assets/img/illustration/confirm_email_sider.png')}}
@endsection

@section('content')

    <div class="content p-5">
        <div class="text-center mt-5">
            <h5 class="card-title">اثبت صحة بريدك الإلكتروني</h5>
            <img width="100" class="mb-5" src="{{asset('assets/img/illustration/confirm_email.png')}}" alt="Email">
            <p class="card-text text-alternate mb-4">لقد تم إرسال رسالة إلى البريد الإلكتروني {{$email}} تحتوي على رابط للتحقق من حسابك. إذا لم تجد الرسالة، يرجى التحقق من مجلد الرسائل غير المرغوب فيها قبل الضغط على "إعادة الإرسال".</p>
            <button class="btn btn-icon btn-icon-start btn-primary" type="button">
                <i data-acorn-icon="rotate-left"></i>
                <span>أعد الإرسال</span>
            </button>
            <p class="small-title text-dark mt-3">
                <a href="#">
                    هل تواجه صعوبة؟
                </a>
                تواصل مع فريق الدعم للحصول على المساعدة.
            </p>
        </div>
    </div>
@endsection
