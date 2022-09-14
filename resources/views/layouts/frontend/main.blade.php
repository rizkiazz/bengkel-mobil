<!DOCTYPE html>
<html>

<head>
<!-- Basic -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!-- Site Metas -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="Bengkel Mobil" />

<title>@yield('title')</title>


<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!-- font awesome style -->
<link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
<!-- responsive style -->
<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

    <!-- header section strats -->
    <header class="header_section">
    <div class="container-fluid">
        @include('layouts.frontend.navbar')
    </div>
    </header>

    <main>
        @yield('content')
    </main>
    <!-- end header section -->
    <div>
    <!-- info section -->
    @include('layouts.frontend.info')
    <!-- info section -->


    <!-- footer section -->
    <!-- footer section -->
    @include('layouts.frontend.footer')
    </div>
    

    <!-- jQery -->
    <script src="{{ ('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ ('frontend/js/bootstrap.js') }}"></script>
    <!-- custom js -->
    <script src="{{ ('frontend/js/custom.js') }}"></script>


</body>

</html>