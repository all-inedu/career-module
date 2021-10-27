<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ url('img/icon.ico') }}" type="image/x-icon">
    <title>
        Career Module - @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="http://codylindley.com/thickbox/thickbox-code/thickbox.css">
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/thickbox.js') }}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
        }

        .body {

            background-image: url("{{ asset('img/pattern3.png') }}");
            background-size: 100%;
            background-repeat: repeat-x;
            opacity: 0.5;
            z-index: -99;
            position: fixed;
            height: 100vh;
            width: 100%;
        }

        p {
            font-size: 18px;
        }

        .icon-done {
            position: absolute;
            top: 2%;
            right: 4%;
        }

        .container {
            padding: 0% 5%;
        }

        .container2 {
            position: relative;
            text-align: center;
            color: #000;
            cursor: pointer
        }

        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px
        }

        .top-left {
            position: absolute;
            top: 8px;
            left: 16px
        }

        .top-right {
            position: absolute;
            top: 8px;
            right: 16px
        }

        .card-img-top {
            padding: 3em;
        }

        .img-bg {
            background: #FFF8F1;
            height: 200px;
            border-radius: 20px
        }

        .bottom-right {
            font-family: 'Roboto', sans-serif !important;
            position: absolute;
            font-size: 13px;
            font-weight: 500;
            top: 72%;
            right: 5%;
            left: 5%;
        }

        .centered {
            position: absolute;
            bottom: 1%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .container-overflow {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            /* height: 240px; */
            height: 100%;
            transition: all .2s ease-in-out;
            z-index: 999;
            opacity: .1;
            cursor: pointer;
            border-radius: 14px
        }

        /* .container-overflow:hover {
            opacity: .9
        } */

        .container1 {
            display: flex;
            justify-content: center;
            flex-direction: row;
            flex-wrap: wrap
        }

        .card {
            border: 1px solid #fff;
            background-color: #fff
        }

        .img-lock {
            width: 25%;
            margin-top: 25%;
        }

        .icon-lock {
            position: absolute;
            top: 2%;
            left: 4%;
        }

        .blur {
            filter: blur(1px)
        }

    </style>
</head>

<body>
    <section class="body"></section>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f7f7f7;">
        <div class="container my-1">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo-1.png') }}"
                    width="30%" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item" style=" white-space: nowrap;">
                        <a class="nav-link" aria-current="page" href="{{ url('') }}">Home</a>
                    </li>
                    <li class="nav-item" style=" white-space: nowrap;">
                        <a class="nav-link" href="#career">Guideline Book</a>
                    </li>
                    <li class="nav-item" style=" white-space: nowrap;">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid p-0 mb-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="mt-5 pt-4">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="{{ url('img/logo.png') }}" width="125px" alt="">
                </div>
                <div class="col-md-3 mb-3">
                    <i class="fas fa-globe fa-fw"></i> <a href="https://all-inedu.com"
                        target="_blank">www.all-inedu.com</a>
                    <br>
                    <i class="fab fa-instagram fa-fw"></i> <a href="https://www.instagram.com/allineduspace/"
                        target="_blank">@allineduspace</a>
                </div>
                <div class="col-md-5 mb-3">
                    <i class="fas fa-mobile-alt fa-fw"></i> <a href="https://wa.me/6281808081363" target="_blank">+62
                        818-0808-1363</a> /
                    <a href="https://wa.me/6287860811413" target="_blank">+62 878-6081-1413</a> <br>
                    <i class="fas fa-envelope fa-fw"></i> <a href="mailto:info@all-inedu.com"
                        target="_blank">info@all-inedu.com</a>
                </div>
                <div class="col-md-12">
                    <hr class="my-2">
                </div>
                <div class="col-md-4 mb-3">
                    Jl Jeruk Kembar Blok Q9, No. 15 <br> Srengseng, Kembangan <br>
                    Jakarta Barat 11630, Indonesia
                </div>
                <div class="col-md-3 mb-3">
                    #itsALLintheprep <br>
                    #TakeOnYourFuture
                </div>
                <div class="col-md-5 mb-3">
                    Copyright © 2021 · ALL-in Eduspace. <br>
                    All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script>
        // sessionStorage.clear();


        if (sessionStorage.getItem('digital-marketing')) {
            $('#dm').removeClass('d-none')
        }

        if (sessionStorage.getItem('data-science')) {
            $('#ds').removeClass('d-none')
        }

    </script>
    <style>
        img {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        img:hover {
            opacity: 0.7;
        }

        #image-viewer {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .modal-content {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        #image-viewer .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        #image-viewer .close:hover,
        #image-viewer .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        .sp {
            position: relative;
            padding-bottom: 1em;
            margin-bottom: 2em;
            font-size: 23px;
        }

        .sp::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 5px;
            bottom: 0;
            background-color: #584aa8;
            left: 0;
            margin-left: 41.5%;
        }

        label {
            font-style: italic;
            font-weight: 500;
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
</body>

</html>
