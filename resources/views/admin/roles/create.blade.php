@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.roles.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.roles.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group horizontal-form">
                    {!! Form::label('title',trans('quickadmin.roles.fields.title').':', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    <style>
        .horizontal-form {
            display: flex;
            align-items: center;
            gap: 10px; /* Space between label and input */
            margin: 20px;
        }

        .horizontal-form .control-label {
            white-space: nowrap;
        }

        .horizontal-form .form-control {
            flex: 1; /* Let the input field grow */
            min-width: 200px; /* Set a minimum width */
            margin-right: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.2s ease-in-out, border 0.2s ease-in-out;
        }
        .horizontal-form .form-control:focus{
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            border: 1px solid #005B5F;
            outline: none;
        }
        .btn{
            margin-left: 32px;
            margin-bottom: 24px;
            font-size: small;
            padding-left: 16px;
            padding-right: 16px;
            border-radius: 6px;
            background-color: #f39c12;
            border: none;
        }
        .btn:hover{
            background-color:rgb(230, 145, 8);
        }
        .btn:active{
            background-color:#f39c12;
        }
    </style>
@stop

