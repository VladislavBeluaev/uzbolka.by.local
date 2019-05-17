<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
   {{--<link rel="stylesheet" href="{{asset('css/user/main.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/user/app.css')}}">
    <script src="{{asset('js/jquery-3.4.0.min.js')}}"></script>
    <script
            src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>
    <script src="{{asset('js/user/app_user.js')}}" type="module"></script>
</head>
<body>
@include('user.layouts.header')
@yield('content')
@include('user.layouts.footer')
</body>
</html>