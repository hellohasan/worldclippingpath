<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="{{ mix('css/backend.css') }}" rel="stylesheet">
    {!! RecaptchaV3::initJs() !!}
</head>

<body class="hold-transition login-page">

    @yield('content')

    <script src="{{ mix('js/backend.js') }}" defer></script>

</body>

</html>
