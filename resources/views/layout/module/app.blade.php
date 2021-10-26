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
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
        }

        p {
            font-size: 18px;
            text-align: justify;
        }

        .accordion-button::after {
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iNTEycHgiIGlkPSJMYXllcl8xIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48Zz48Zz48Zz48cGF0aCBkPSJNMjU2LDQ4QzE0MS4xLDQ4LDQ4LDE0MS4xLDQ4LDI1NnM5My4xLDIwOCwyMDgsMjA4YzExNC45LDAsMjA4LTkzLjEsMjA4LTIwOFMzNzAuOSw0OCwyNTYsNDh6IE0yNTYsNDQ2LjcgICAgIGMtMTA1LjEsMC0xOTAuNy04NS41LTE5MC43LTE5MC43UzE1MC45LDY1LjMsMjU2LDY1LjNTNDQ2LjcsMTUwLjksNDQ2LjcsMjU2UzM2MS4xLDQ0Ni43LDI1Niw0NDYuN3oiLz48L2c+PC9nPjxnPjxwb2x5Z29uIHBvaW50cz0iMjY0LjEsMTI4IDI0Ny4zLDEyOCAyNDcuMywyNDcuOSAxMjgsMjQ3LjkgMTI4LDI2NC43IDI0Ny4zLDI2NC43IDI0Ny4zLDM4NCAyNjQuMSwzODQgMjY0LjEsMjY0LjcgMzg0LDI2NC43ICAgICAzODQsMjQ3LjkgMjY0LjEsMjQ3LjkgICAiLz48L2c+PC9nPjwvc3ZnPg==) !important
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iNTEycHgiIGlkPSJMYXllcl8xIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48Zz48Zz48Zz48cGF0aCBkPSJNMjU2LDQ4QzE0MS4xLDQ4LDQ4LDE0MS4xLDQ4LDI1NnM5My4xLDIwOCwyMDgsMjA4YzExNC45LDAsMjA4LTkzLjEsMjA4LTIwOFMzNzAuOSw0OCwyNTYsNDh6IE0yNTYsNDQ2LjcgICAgIGMtMTA1LjEsMC0xOTAuNy04NS41LTE5MC43LTE5MC43YzAtMTA1LjEsODUuNS0xOTAuNywxOTAuNy0xOTAuN2MxMDUuMSwwLDE5MC43LDg1LjUsMTkwLjcsMTkwLjcgICAgIEM0NDYuNywzNjEuMSwzNjEuMSw0NDYuNywyNTYsNDQ2Ljd6Ii8+PC9nPjwvZz48cmVjdCBoZWlnaHQ9IjE3IiB3aWR0aD0iMjU2IiB4PSIxMjgiIHk9IjI0OCIvPjwvZz48L3N2Zz4=) !important
        }

        .list-group-item.active {
            background: #4d4d4d !important
        }

        .content {
            /* margin: 0 0 0 0 !important */
        }

        .container {
            /*padding:0 10%*/
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
            width: 50%
        }

        .bottom-right {
            font-family: Roboto, sans-serif !important;
            position: absolute;
            font-size: 13px;
            font-weight: 500;
            top: 72%;
            right: 5%;
            left: 5%
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
            opacity: .2;
            cursor: pointer;
        }

        .container-overflow:hover {
            opacity: .9
        }

        .container1 {
            display: flex;
            justify-content: center;
            flex-direction: row;
            flex-wrap: wrap
        }

        .card {
            border: 1px solid #888;
            background-color: #fff
        }

        .img-lock {
            width: 25%;
            margin-top: 25%
        }

        .sidebar-active {
            background-color: #505050 !important;
            color: white;
        }

        .container {
            /* padding: 0% 10%; */
        }

        .bg-allin {
            background: #f1b979;
        }

    </style>

    <style>
        .banner {
            background: url('{{ asset('img/banner.webp') }}');
            max-height: 30vh;
            background-size: 100%;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        h1.title {
            position: relative;
            color: rgb(27, 27, 27);
            text-align: end;
            padding-top: 10%;
            padding-right: 2%;
            font-weight: 900;
        }

        .list-group {
            border: 1px solid #666666 !important;
        }

        .list-group-item {
            border: 0px !important;
            background: #c4c4c4 !important;
            /* padding: 2% 2% 2% 50% !important; */
            transition: all .2s ease-in-out;
            font-size: 15.5px !important;
        }

        .list-group-item.active {
            background: #ffffff !important;
            color: #000;
        }

        .list-group-item:hover {
            background: #383737 !important;
            color: rgb(255, 255, 255) !important;
        }

        .content {
            /* padding: 0% 24% 0% 0% !important; */
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
    @yield('style')
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #f7f7f7;">
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
                        <a class="nav-link" href="#career">Career Module</a>
                    </li>
                    <li class="nav-item" style=" white-space: nowrap;">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <div class="container  mb-4" style="margin-top: 2%">
        <div class="row">
            <div class="col-md-12" style="padding-top:5%;">
                @yield('banner')
            </div>
            <div class="col-md-3">
                <div class="sticky-top" style="top:12%; ">
                    @yield('sidebar')
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5 pt-4">
        <div class="container py-4">
            <div class="row">
                <div class="col-2">
                    <img src="{{ url('img/logo.png') }}" width="125px" alt="">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-6">
                    Copyright © 2021 ALL-in Eduspace All rights reserved
                </div>
                <div class="col-6 text-end">
                    <div class="d-inline-flex flex-row social-media">
                        Follow Us
                        <div class="ms-3"><i class="fab fa-instagram"></i></div>
                        <div class="ms-2"><i class="fab fa-youtube"></i></div>
                        <div class="ms-2"><i class="fab fa-linkedin"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="imagemodal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <small class="modal-title">Image Preview</small>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="imagepreview" style="width:100%">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            // sessionStorage.clear();
            $('.img').each(function() {
                $(this).click(function() {
                    $('#imagemodal').modal('show')
                    $('#imagepreview').attr('src', $(this).attr('src'));
                })
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
</body>

</html>
