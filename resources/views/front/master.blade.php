<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>
    <title>Eduhub - @yield('title')</title>
    @include('front/includes/assets/css')
</head>
<body>
    <div class="preloader">
        <div class="loader"></div>
    </div>
    @include('front/includes/header')
    <main class="main">
        @yield('body')
    </main>
    @include('front/includes/footer')
    <a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>
    @include('front/includes/assets/js')
</body>
</html>
