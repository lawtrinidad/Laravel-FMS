@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default frost-reset"

            >

                <div class="text-center logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-circle logo" width="80" height="80">

                    <div class="text-center">
                        <div class="text-block text-black">
                            <p class="text-sintax-reset margin-top">IskoLAr</p>
                        </div>
                            <p class="text-sinta-reset">Iskolar Library and Archive</p>
                    </div>     
                </div>

                <label class="col-md-4 control-label" style="display: block; white-space: nowrap;">Reset password</label>

                <div class="panel-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were problems with input:
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
                          action="{{ url('password/email') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="@lang('quickadmin.qa_email')">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit"
                                        class="btn btn-custom btn-primary"
                                        style="margin-right: 15px;">
                                    Reset password
                                </button>
                            </div>
                        </div>

                        <div class="form-group text-center top">
                            <div class="col-md-12">
                                <span>Remember your password? </span>
                                <a href="{{ url('/admin/home') }}" style="text-decoration: underline; color: #742F2F;">Sign In</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection