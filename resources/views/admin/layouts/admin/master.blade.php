<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    {{-- <link rel="stylesheet" href="/css/app.css" type="text/css">--}}
    <link rel="stylesheet" href="/css/style.css" type="text/css"> 

    <link rel="stylesheet" href="{{ url('../admin123') }}/dist/css/adminlte.min.css">



</head>

<body>
    <div class="wrapper">

        @include('admin.layouts.admin.header')


        @include('admin.layouts.sidebar')

        @yield('main')


        @include('admin.layouts.admin.footer')

    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ url('../admin123') }}/dist/js/adminlte.min.js"></script>


</html>
