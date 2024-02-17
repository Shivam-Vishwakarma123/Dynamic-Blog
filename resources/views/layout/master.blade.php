<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>New Vision HTML CSS Template</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" />
    <link href="{{asset('theme/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/slick/slick.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/slick/slick-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/css/templatemo-new-vision.css')}}" rel="stylesheet" />
    <style>
        .f-active{
            color: #000;
            border-bottom: 5px solid #09F;
            border-left: none;
        }
    </style>

</head>

<body>

    @yield('content')

    <script src="{{asset('theme/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('theme/slick/slick.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/templatemo-script.js')}}"></script>
    <script>
        $(document).ready(function(){
            var pgurl = window.location.href;

            $('.navbar-collapse ul li a').each(function(){
                if($(this).attr('href') == pgurl){
                    $(this).addClass("f-active");
                }
            });
        });
    </script>
</body>

</html>