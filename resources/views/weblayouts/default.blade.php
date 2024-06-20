<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    @include('includes.sidebar')
    <div class="main_body_wrap">
        @yield('content')
    </div>

    @include('includes.footer')
</body>

 
