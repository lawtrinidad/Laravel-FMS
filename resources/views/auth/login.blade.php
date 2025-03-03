@extends('layouts.auth')

@section('content')
<div class="container-fluid h-100 w-100">

<div class="row h-100 w-100" style="justify-content:center; display:flex ;align-items: flex-end" id="landing-box">
    <div class="col-md-4 frost h-100 col-10 mx-auto ">
        <div class="panel-1">
            <div class="panel-body">
                <div class="text-center logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-circle logo" width="120" height="120">

                    <div class="text-center">
                        <div class="text-block text-black">
                            <span class="text-welcome">Welcome to</span>
                        </div>
                        <div class="text-block text-black">
                            <p class="text-sintax">iskoLAr</p>
                        </div>
                            <p class="text-sinta">Iskolar Library and Archive</p>
                    </div>     
                </div>

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="form-horizontal"
                    role="form"
                    method="POST"
                    action="{{ url('login') }}">
                    <input type="hidden"
                        name="_token"
                        value="{{ csrf_token() }}">

                    <div class="form-group">
                        <div class="col-md-12 d-inline-block">
                            <input type="email"
                                class="form-control"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="@lang('quickadmin.qa_email')"

                                tabindex="0"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Only PUP webmail are allowed.">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password"
                                class="form-control"
                                name="password"
                                placeholder="@lang('quickadmin.qa_password')">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 block">
                            <label>
                                <input type="checkbox"
                                name="remember"> @lang('quickadmin.qa_remember_me')
                            </label>
                            <br>
                            <a href="{{ route('auth.password.reset') }}" style="color: #742F2F;">@lang('quickadmin.qa_forgot_password')</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit"
                                    class="btn btn-custom btn-primary"
                                    style="margin-right: 15px;">
                                Sign In
                            </button>
                        </div>
                    </div>

                    <div class="form-group text-center top">
                        <div class="col-md-12">
                            <span>Doesn't have an account? </span>
                            <a href="{{ route('auth.register') }}" style="text-decoration: underline; color: #742F2F;">Register</a>
                        </div>
                    </div>

                    <div class="form-group text-center top">
                        <div class="col-md-12">
                            <span>
                            <input type="checkbox" name="agree_terms" required>  
                                I have read and agree to the 
                                <a href="#" 
                                data-toggle="modal"
                                data-target=".bd-example-modal-lg" 
                                data-bs-target="#termsModal"
                                style="text-decoration: underline; color:rgb(16, 50, 97);">Terms and Conditions</a>.
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection