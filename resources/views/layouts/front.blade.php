<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kilimofresh</title>
    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.png') }}" type="image/x-icon" />
    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ url('front/assets/css/style-prefix.css') }}" />
    <style>
        /* Style the navbar */
        #navbar {
            overflow: hidden;
            background-color: rgb(255, 255, 255);
        }
        .sticky {
            top: 0;
            z-index: 100;
            position: fixed;
            width: 100%;
        }

        /* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
        .sticky+.content {
            padding-top: 60px;
        }
    </style>
    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>

  @include('layouts.inc.navbar')
    @yield('content')
  @include('layouts.inc.footer')
    <script src="front/assets/js/script.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        window.onscroll = function() {
            myFunction();
        };
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>

</body>

</html>
