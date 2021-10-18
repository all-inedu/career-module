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
    <title>
        Career Module - @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        body {
            font-family: 'Roboto', sans-serif !important;
        }

        p {
            font-size: 18px;
        }

        .container {
            padding: 0% 10%;
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
            width: 100%;
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
            background: black;
            transition: all .2s ease-in-out;
            z-index: 999;
            opacity: .4;
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

        .blur {
            filter: blur(2px)
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f7f7f7;">
        <div class="container my-1">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-1.png') }}" width="30%" /></a>
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
                        <a class="nav-link" href="#career">Career Module</a>
                    </li>
                    <li class="nav-item" style=" white-space: nowrap;">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid p-0 mb-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="mt-5 py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-2">
                    <img src="{{ url('img/logo.png') }}" width="125px" alt="">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-6">
                    <p>
                        Copyright © 2021 ALL-in Eduspace All rights reserved
                    </p>
                </div>
                <div class="col-6 text-end">
                    <div class="d-inline-flex flex-row social-media">
                        <p>Follow Us</p>
                        <div class="ms-3"><i class="fab fa-instagram"></i></div>
                        <div class="ms-2"><i class="fab fa-youtube"></i></div>
                        <div class="ms-2"><i class="fab fa-linkedin"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script> -->
</body>

</html>
