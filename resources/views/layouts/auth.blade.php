<!DOCTYPE html>
<html lang="en" style="height: auto">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


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
        .frost{
            min-height: 100vh;
            padding: 6vh 0 0 0;
            overflow: auto !important;
            box-shadow: none !important;
            margin: 0 !important;
            border-radius: 0 !important;
            background: #D9D9D9CF;
            -webkit-backdrop-filter: blur(20px) saturate(168%);
            backdrop-filter: blur(20px) saturate(168%);
            right: 0;
            position: absolute;  
            box-shadow: -10px 0 20px rgba(0, 0, 0, 0.51) !important; 
            backdrop-filter: blur(15x);
        }
        .toplayer{
            z-index: 999;   
        }
        .login-card-body{
            background: transparent !important;
            color: #000 !important;
            padding: 0 !important; 
        }
        .box-header{
            
        }
        .with-border{
            
        }
        .text-center{
            text-align: center !important;
        }
        .mb-2{
            margin-bottom: .5rem !important;
        }
        .img-circle{
            border-radius: 90%;
        }
        .text-sinta{
            color: #742F2F;
            font-size: 18px !important;
            font-family: Inter;
            font-style: italic;
            font-weight: 300 !important;
            text-shadow: none !important;
            display: block;
            padding-bottom: 1rem !important;
        }
        .text-flex{
            display: flex;
        }
        .text-welcome{
            font-family: "Kodchasan";
            font-size: 22px !important;
            line-height: 22px !important;
        }
        .text-sintax{
            font-family: "Kodchasan";
            font-size: 55px !important;
            font-weight: bold;
            line-height: 55px !important;
        }
        .panel-1{
            padding: 40px;
        }
        .input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        .btn-custom {
            background-color: #742F2F !important;
            border-color: #742F2F !important;
            color: white !important;
        }
        .block{
            width: 100%;
            display: flex;
            align-items: center;
            white-space: nowrap;
            justify-content: space-between;
        }
        .top{
            margin-top: 50px;
        }
        .logo{
            position: relative;
        }
        #background{
            background: url('{{ asset('images/pup-main.jpg') }}') no-repeat center center scroll;
            background-size: cover;
            height: 100vh;
            display: flex;
            padding: 0;
            margin: 0;

        }
        .frost-reset{
            box-shadow: none !important;
            margin: 0 !important;
            border-radius: 10px !important;
            background: #D9D9D9CF;
            -webkit-backdrop-filter: blur(20px) saturate(168%);
            backdrop-filter: blur(20px) saturate(168%);
            box-shadow: -10px 0 20px rgba(0, 0, 0, 0.51) !important; 
            backdrop-filter: blur(15x);
            padding: 1.5rem !important;
        }
        .text-sintax-reset{
            font-family: "Kodchasan";
            font-size: 35px !important;
            font-weight: bold;
            line-height: 55px !important;
        }
        .text-sinta-reset{
            color: #742F2F;
            font-size: 14px !important;
            font-family: Inter;
            font-style: italic;
            font-weight: 300 !important;
            text-shadow: none !important;
            display: block;
            padding-bottom: 1rem !important;
        }
        .margin-top{
            margin: 0 0 0 10px;
        }
    
    </style>
</head>

<body class="page-header-fixed h-100 w-100" id="background">



    <div class="container-fluid h-100" style="display: flex; align-items: center;">
        @yield('content')
    </div>

    <div class="scroll-to-top"
        style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('partials.javascripts')

</body>
</html>