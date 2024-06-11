<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    
</head>
<body>
    @include('includes.nav')
    <div class="container-main-body">
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>
</body>

 
