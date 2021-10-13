<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container2{position:relative;text-align:center;color:#000;cursor:pointer}.bottom-left{position:absolute;bottom:8px;left:16px}.top-left{position:absolute;top:8px;left:16px}.top-right{position:absolute;top:8px;right:16px}.bottom-right{position:absolute;top:175px;right:50px;left:50px}.centered{position:absolute;bottom:1%;left:50%;transform:translate(-50%,-50%)}.container-overflow{position:absolute;left:0;top:0;width:100%;height:240px;transition:all .2s ease-in-out;z-index:999;opacity:.2;cursor:pointer}.container-overflow:hover{opacity:.9}.container1{display:flex;justify-content:center;flex-direction:row;flex-wrap:wrap}.card{border:1px solid #fff;background-color:#fff}.img-lock {width: 25%;margin-top:25%;}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f7f7f7;">
        <div class="container my-3">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-1.png') }}" height="50" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Career Module</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact Us</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <div>
        <img src="{{ asset('img/CMW_Career module cover.webp') }}" width="100%">
        <h1 class="float-end"
            style="position: absolute; margin-top: -15%; right: 15%; font-size: 4em; text-align: right;">Welcome To <br>
            Career Module</h1>

    </div>

    <div class="container mt-5" style="font-size: 130%;">

        <p>Hello,</p>
        <p>Are you currently trying to figure out what you want as a career in the future?</p>
        <p>ALL-in Career Module is here to provide you the space to discover various job roles and industries of your
            interest. Learn the basic knowledge of each career and how to implement them through hands-on learning
            experience here.</p>
        <p>Let’s walk on your career exploration journey with ALL-in Career Module!</p>


        </ul>
    </div>
    <div class="container" style="margin-top: 3%; margin-bottom: 2%;">

        <h1><b>Career</b></h1>
    </div>



    <div class="container" style="padding-bottom: 10em;">
        <div class="row">
            <div class="col">
                <div class="card">

                    <div class="container2">
                        <img src="{{ asset('img/CMW_1. Digital Marketing.webp') }}" class="card-img-top">
                        <div class="bottom-right">Digital Marketing Specialist
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
<<<<<<< HEAD
                <div class="card">
                    <div class="container2">
                        <img src="{{ asset('img/CMW_2. Data Scientist.webp') }}" class="card-img-top">
                        <div class="bottom-right">Data Scientist
                        </div>
                    </div>
                </div>
=======
                <a href="{{ url('data-scientist/1') }}">
                    <div class="card">
                        <div class="container2">
                            <img src="{{ asset('img/CMW_2. Data Scientist.webp') }}" class="card-img-top">
                            <div class="bottom-right">Data Scientist
                            </div>
                        </div>
                    </div>
                </a>
>>>>>>> e86b1b28c1f04e478693c88da7424c857b7927ad
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="{{ asset('img/CMW_3. Full Stack Engineer.webp') }}" class="card-img-top blur">
                        <div class="bottom-right">Full Stack Engineering
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="{{ asset('img/CMW_4. UX Designer.webp') }}" class="card-img-top blur">
                        <div class="bottom-right">UX Designer
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="{{ asset('img/CMW_5.Biomedical Engineer.webp') }}" class="card-img-top blur">
                        <div class="bottom-right">Biomedical Engineering
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="{{ asset('img/CMW_6.Investment Analyst.webp') }}" class="card-img-top blur">
                        <div class="bottom-right">Investment Analyst
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="{{ asset('img/CMW_7. Psychologist.webp') }}" class="card-img-top blur">
                        <div class="bottom-right">Psychologist
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="{{ asset('img/CMW_8. Conten Creator.webp') }}" class="card-img-top blur">
                        <div class="bottom-right">Content Creator
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="{{ asset('img/CMW_9. Food Scientist.webp') }}" class="card-img-top blur">
                        <div class="bottom-right">Food Scientist
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="{{ asset('img/CMW_10. Medical Doctor.webp') }}" class="card-img-top blur">
                        <div class="bottom-right">Medical Doctor
                        </div>
                    </div>
                </div>
            </div>





        </div>


    </div>

    <!-- Footer -->

    <div class="container-fluid mt-5" style="background-color: #1e1f4d;">
        <div class="container py-5">
            <div class="row justify-items-center d-flex">
                <div class="col-md-12">
                    <img src="{{ asset('img/new_all_in logo.png') }}" width="200">
                </div>

                <div class="col-md-8 pt-3">
                    <p style="color: white;">Copyright © 2021 ALL-in Eduspace All rights reserved</p>
                </div>

                <div class="col-md-4 text-end">
                    <i class="text-white" style="font-size: 20px;">follow us &nbsp; &nbsp;</i>
                    <i class="fab fa-instagram-square fa-3x" style="color: #ffffff;"></i>
                    <i class="fab fa-linkedin fa-3x px-2" style="color: #ffffff;"></i>
                    <i class="fab fa-youtube-square fa-3x" style="color: #ffffff;"></i>
                </div>

            </div>
        </div>
    </div>



</body>

</html>
