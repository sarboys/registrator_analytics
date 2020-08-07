@extends('layouts.appAuth')
@section('content')
<div class="d-flex flex-column flex-root">
    <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(assets/media/bg/bg-1.jpg);">
            <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                <div class="d-flex flex-center mb-15">
                    <a href="#">
                        <img src="assets/media/logos/logo-letter-9.png" class="max-h-100px" alt=""/>
                    </a>
                </div>
                <div class="login-signin">
                    <div class="mb-10">
                        <h3 >Астрал.Аналитика</h3>
                        <p class="opacity-60 font-weight-bold">Введите данные для входа</p>
                    </div>
                    <form class="form" id="kt_login_signin_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group text-center mt-10">
                            <button type="submit" id="kt_login_signin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
