@extends('auth.layout')

@section('img')
    {{asset('assets/img/illustration/on_boarding-1.png')}}
@endsection


@section('content')
    <div class="content p-5">
        <div class="mb-5">
            <h1 class="fw-bold display-4">مرحباً بك من جديد 👋</h1>
            <p class="fw-light">سجل الدخول في حسابك</p>
        </div>
    </div>
    @if($message = Session::get('Error'))
        <div class="alert alert-danger">

            {{ $message }}
        </div>

    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <form method="POST" action="{{route('auth.store')}}">
            @csrf
            <div class="form-group">
                <label class="form-label fw-bold">الإيميل</label>
                <div class="mb-3 filled">
                    <i data-acorn-icon="email" class="icon"></i>
                    <input type="email" name="email" class="form-control" placeholder="اكتب الايميل الخاص بك">
                    @error('email')
                    <label class="form-label text-danger mt-1">{{$message}}</label>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="form-label fw-bold">كلمة المرور</label>
                <div class="mb-3 filled">
                    <i data-acorn-icon="lock-on" class="icon"></i>
                    <input type="password" name="password" class="form-control" placeholder="اكتب كلمة المرور">
                    @error('password')
                    <label class="form-label text-danger mt-1">{{$message}}</label>
                    @enderror
                    @error('invalid')
                    <label class="form-label text-danger mt-1">{{$message}}</label>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-end mt-7">
                <button type="submit" class="btn btn-primary">
                    متابعة
                    <i data-acorn-icon="arrow-left" class="icon me-2"></i>
                </button>
            </div>
        </form>
    </div>
@endsection
