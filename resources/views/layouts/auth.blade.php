<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <style>
        .h-100{
            height:calc(100%);
        }
        #login-box{
            width:100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
        .w-100{
            width:100% !important;
        }
    </style>
</head>

<body class="page-header-fixed">


    <div class="container-fluid h-100">
        @yield('content')
    </div>

    <div class="scroll-to-top"
         style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('partials.javascripts')

</body>
</html>