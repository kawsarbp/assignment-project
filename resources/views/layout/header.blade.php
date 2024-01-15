<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        /* Add this to your CSS (you can customize styles as needed) */
        .loader-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 9999;
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -25px;
            margin-left: -25px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

</head>
<body>

<div class="fixed-top zindextop">
    <div class="row mx-0">
        <div class="col-md-12 p-0">

            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <h6> || FAST ☆</span> </h6>
                    </div>
                    <div class="slide">
                        <h6>RELIABLE <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>TRUSTED <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>LOW COST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>BANK DEPOSIT <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>CASH PICKUP <span> ☆ </span></h6>
                    </div>
                    <div class="slide">
                        <h6> BKASH</h6>
                    </div>
                    <div class="slide">
                        <h6>|| FAST <span> ☆ </span></h6>
                    </div>
                    <div class="slide">
                        <h6>RELIABLE <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>TRUSTED <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>LOW COST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>BANK DEPOSIT <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>CASH PICKUP <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>BKASH</h6>
                    </div>
                    <div class="slide">
                        <h6>|| FAST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>RELIABLE <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>TRUSTED <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>LOW COST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>BANK DEPOSIT <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>CASH PICKUP <span> ☆ </span></h6>
                    </div>
                    <div class="slide">
                        <h6> BKASH</h6>
                    </div>
                    <div class="slide">
                        <h6>|| FAST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>RELIABLE <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>TRUSTED <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>LOW COST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>BANK DEPOSIT <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>CASH PICKUP <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>BKASH</h6>
                    </div>
                    <div class="slide">
                        <h6>|| FAST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>RELIABLE <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>TRUSTED <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>LOW COST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>BANK DEPOSIT <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>CASH PICKUP <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6> BKASH</h6>
                    </div>
                    <div class="slide">
                        <h6>|| FAST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>RELIABLE <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>TRUSTED <span>☆</span></h6>
                    </div>

                    <div class="slide">
                        <h6>LOW COST <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>BANK DEPOSIT <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6>CASH PICKUP <span>☆</span></h6>
                    </div>
                    <div class="slide">
                        <h6> BKASH</h6>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md md-body-tertiary bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-1">
                        <a class="nav-link  mynav active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link mynav " aria-current="page" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link mynav " aria-current="page" href="{{route('service')}}">Service</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link mynav " aria-current="page" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link login-btn" aria-current="page" href="#">Login / Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
