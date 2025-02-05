@extends('layouts.auth_app')
@section('title')
    {{ __('auth.logins') }}
@endsection
@section('content')
    <!--begin::Authentication - Sign-in -->
    @php
        $settingValue = getSettingValue();
        App::setLocale(checkLanguageSession());
    @endphp
    <ul class="nav nav-pills" style="justify-content: flex-end; cursor: pointer">
        <li class="nav-item dropdown">
            <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown" href="javascript:void(0)"
                role="button" aria-expanded="false">{{ __('messages.language.' . getCurrentLanguageName()) }}</a>
            <ul class="dropdown-menu w-150px">
                @foreach (getLanguages() as $key => $value)
                    <li class="{{ checkLanguageSession() == $key ? 'active' : '' }}"><a
                            class="dropdown-item  px-5 language-select {{ checkLanguageSession() == $key ? 'bg-primary text-white' : 'text-dark' }}"
                            data-id="{{ $key }}">{{ $value }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>

    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-top p-4">
        <div class="col-12 text-center">
            <a href="{{ route('front') }}" class="image mb-7 mb-sm-10" data-turbo="false">
                <img alt="Logo" src="{{ $settingValue['app_logo']['value'] }}" class="img-fluid logo-fix-size">
            </a>
        </div>
        <div class="width-540">
            @include('flash::message')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="auth-form-container px-5 px-sm-7 py-10 mx-auto width-540">
            <h1 class="text-center mb-7">{{ __('auth.sign_in') }}</h1>
            <form method="post" action="{{ url('/login') }}" class="auth-form">
                @csrf
                <div class="form-floating mb-sm-7 mb-4">
                    <input name="email" type="email" class="form-control" id="email" 
                           placeholder="{{ __('auth.email') }}"
                           value="{{ Cookie::get('email') !== null ? Cookie::get('email') : old('email') }}"
                           required>
                    <label for="email">{{ __('auth.email') }}</label>
                </div>
                
                <div class="form-floating mb-sm-7 mb-4">
                    <input name="password" type="password" class="form-control" id="password"
                           placeholder="{{ __('messages.user.password') }}"
                           value="{{ Cookie::get('password') !== null ? Cookie::get('password') : null }}"
                           required>
                    <label for="password">{{ __('auth.password') }}</label>
                </div>

                <div class="d-flex justify-content-between mb-sm-7 mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember" checked>
                        <label class="form-check-label" for="remember_me">{{ __('auth.remember_me') }}</label>
                    </div>
                    <a href="{{ url('/password/reset') }}" class="auth-link">
                        {{ __('auth.login.forgot_password') . '?' }}
                    </a>
                </div>

                <button type="submit" class="btn btn-primary auth-submit-btn">
                    {{ __('auth.login.login') }}
                </button>

                <div class="d-flex align-items-center justify-content-center mt-4">
                    <span class="text-gray-700 me-2">{{ __('auth.new_here') }}</span>
                    <a href="{{ route('register') }}" class="auth-link">
                        {{ __('auth.create_an_account') }}
                    </a>
                </div>
            </form>

        </div>
    </div>
@endsection
