<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar-nav .nav-item.active {
            background: #999;
        }

        .container-cst {
            padding: 0 5%;
            width: 100%;
            display: flex;
        }

        .preview-text {
            padding: 2em 0;
        }

        #sidebar .nav-item {
            padding-left: 2em;
        }

        #navbarSupportedContent .navbar-nav li+li {
            margin-left: 1.5em;
        }

        header .banner-img {
            height: 300px;
            background-image: url('img/CMW_Digital Marketing Cover.webp');
            background-size: cover;
            background-position: 0 -7rem;
        }

        .sidebar {
            background: #c4c4c4;
        }

        .sidebar .list-group-item {
            background: transparent !important;
            border: 1px solid transparent;
            /* padding-left: 20em; */
            padding-left: 52%;
            margin-right: 10em;
            width: 100%;
        }

        .sidebar .list-group-item.active {
            background: #505050 !important;
            border: 1px solid #505050;
        }

        footer {
            background: #243672;
            color: #FFF;
            font-size: 12px;
        }

        footer .social-media {
            font-size: 15px
        }

        hr {
            margin-top: 5em;
            opacity: 0.10 !important;
        }

        @media (min-width: 1400px) {

            .sidebar .list-group-item {
                background: transparent !important;
                border: 1px solid transparent;
                padding-left: 20em;
                margin-right: 10em;
                width: 100%;
            }

            #content-container {
                margin-right: 22em;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .sidebar .list-group-item {
                background: transparent !important;
                border: 1px solid transparent;
                padding-left: 7em;
                margin-right: 8em;
                width: 100%;
            }

            #content-container {
                margin-right: 7.5em;
            }
        }

        @media (max-width: 575.98px) {

            .container-sm,
            .container {
                max-width: 540px;
            }
        }

        @media (max-width: 767.98px) {

            .container-md,
            .container-sm,
            .container {
                max-width: 720px;
            }
        }

        @media (max-width: 991.98px) {

            .container-lg,
            .container-md,
            .container-sm,
            .container {
                max-width: 960px;
            }
        }

        

        

    </style>
    <script src="https://use.fontawesome.com/be0cd6cead.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-cst">
                <a class="navbar-brand" href="#">
                    <!-- put logo here -->
                    <img src="{{ url('img/logo-all-in.webp') }}" width="125px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto my-5 my-lg-0 navbar-nav-scroll">
                        <!-- <ul class="navbar-nav mb-2 mb-lg-0 ms-auto"> -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career Module</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="banner-img"></div>
    </header>

    <article class="preview-text">
        <div class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui fugit tenetur, rerum
            illum molestiae perspiciatis asperiores dolorum cumque doloremque ratione sit enim perferendis. Placeat aut
            dolorem officia adipisci ab blanditiis?</div>
    </article>
    <section class="d-flex">
        <section id="sidebar-container">
            <div class="sidebar">
                <ul class="list-group text-left">
                    <li class="list-group-item active" aria-current="true">Part 1</li>
                    <li class="list-group-item">Part 2</li>
                    <li class="list-group-item">Part 3</li>
                    <li class="list-group-item">Part 4</li>
                    <li class="list-group-item">Part 5</li>
                </ul>
            </div>
        </section>
        <section id="content-container" class="flex-grow-1 ms-4">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <hr>

    <footer class="mt-5">
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
                        <p>Follow Us</p>
                        <div class="ms-3"><i class="fab fa-instagram"></i></div>
                        <div class="ms-2"><i class="fab fa-youtube"></i></div>
                        <div class="ms-2"><i class="fab fa-linkedin"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
