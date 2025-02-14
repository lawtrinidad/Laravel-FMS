@extends('layouts.auth')

@section('content')
<div class="container-fluid h-100 w-100">

    <div class="container h-100" style="justify-content:center; display:flex ;align-items: flex-end" id="login-box">
        <div class="row w-100 h-100" style="justify-content:center;display:flex">
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
                                <p class="text-sintax">IskoLAr</p>
                            </div>
                                <p class="text-sinta">Iskolar Library and Archive</p>
                        </div>     
                    </div>

                        <form class="form-horizontal"
                        role="form" 
                        method="POST" 
                        action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <div class="col-md-12">
                                    <input id="name" 
                                    type="text" 
                                    class="form-control" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    placeholder="@lang('quickadmin.qa_name')"
                                    required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div class="col-md-12">
                                    <input id="email" 
                                    type="email" 
                                    class="form-control" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    placeholder="@lang('quickadmin.qa_email')"
    
                                    required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <input id="password" 
                                    type="password" 
                                    class="form-control" 
                                    name="password" 
                                    placeholder="@lang('quickadmin.qa_password')"
                                    required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="password-confirm" 
                                    type="password" 
                                    class="form-control"
                                    name="password_confirmation" 
                                    placeholder="@lang('quickadmin.qa_confirm_password')"
                                    required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-custom btn-primary">
                                        @lang('quickadmin.qa_register')
                                    </button>
                                </div>
                            </div>

                            <div class="form-group text-center top">
                            <div class="col-md-12">
                                <span>Already have an Account?</span>
                                    <a href="{{ url('/admin/home') }}" class="" style="text-decoration: underline; color: #742F2F;">Sign In</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
