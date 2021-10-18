@extends('layout.module.app')
@section('title')
    Digital Marketing | Type
@endsection

@section('banner')
    <div class="banner">
        <div class="container">
            <h1 class="title">
                Digital Marketing <br>
                Specialist 101
            </h1>
        </div>
    </div>
    <div class="container pt-3">
        <p>
            In this module, you will learn about what Digital Marketing Specialist do, types of it, and how you could be a
            Digital Marketing Specialist. Along with case studies, and reflection, we hope that you can gain a deeper
            knowledge
            on Digital Marketing and how to implement them in real-life events.
            <br><br>
            Happy learning!
        </p>
    </div>
@endsection

@section('sidebar')
    @include('layout.module.sidebar-dm')
@endsection

@section('content')
    <div class="content">
        <div class="card">

            <div class="pt-3 pb-2 ps-3">
                <h5>What types of Digital Marketing
                    Specialist are there?</h5>
            </div>
            <hr class="m-1 border-2 mx-auto" width="95%">
            <div class="card-body">
                <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part3-1">
                                <i class="far fa-check-circle pe-2" id="icon1"></i>
                                Types of Digital Marketing
                            </button>
                        </h2>
                        <div id="part3-1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-3">
                                        Digital Marketing can be specialized to three types of marketing:
                                        <ul>
                                            <li>Social Media Specialist</li>
                                            <li>Search Engine Optimization specialist</li>
                                            <li>Search Engine Marketing specialist</li>
                                            <li>Digital Marketing Analyst</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(1, 3)">
                                            Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part3-2">
                                <i class="far fa-check-circle pe-2" id="icon2"></i>
                                Social Media Specialist
                            </button>
                        </h2>
                        <div id="part3-2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/9m45nVsvvEY"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="col-md-5">
                                        What are the 7 reasons why a
                                        business should start using
                                        social media?
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-7">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/2ZzfWUsj9_Q"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="col-md-5">
                                        What are the benefits of social media marketing??
                                        <textarea class="form-control"></textarea>
                                        <br><br>
                                        Do you have experience with social media marketing??
                                        If so, please explain.
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-primary btn-sm px-3" onclick="next(2, 3)">
                                            Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part3-3">
                                <i class="far fa-check-circle pe-2" id="icon3"></i>
                                Search Engine Marketing Specialist
                            </button>
                        </h2>
                        <div id="part3-3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-3">
                                        This video is an introduction to search engine optimization. <br><br>
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/stHBZGm_hMo"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <br><br>
                                        This video tells us how Search Engine Marketing is useful to a
                                        business owner<br><br>
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Qmm_FRIMeTg"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <br><br>
                                        This video highlights the difference between SEO and SEM<br><br>
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/oxae42kcc9Y"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>

                                        <br><br>
                                        What differentiates SEM from SEO and traditional marketing?
                                        <textarea class="form-control"></textarea>

                                    </div>

                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-primary btn-sm px-3" onclick="next(3, 3)">
                                            Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part3-4">
                                <i class="far fa-check-circle pe-2" id="icon4"></i>
                                Digital Marketing Analyst
                            </button>
                        </h2>
                        <div id="part3-4" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/xy5xyHDJgpo"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="col-md-5">
                                        What is the main job of a
                                        Digital Marketing Analyst?
                                        <textarea class="form-control"></textarea>
                                    </div>

                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-primary btn-sm px-3" onclick="next(4, 3)">
                                            Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // sessionStorage.clear();
            let n = $('.accordion-item').length
            for (i = 1; i <= n; i++) {
                if (sessionStorage.getItem('part3-' + i) == 'read') {
                    $('#icon' + i).removeClass('far fa-check-circle')
                    $('#icon' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
                    $('#dm-iconPart' + i).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("part" + part + "-" + n, "read");
            if (sessionStorage.getItem("part" + part + "-" + n) == 'read') {
                $('#icon' + n).removeClass('far fa-check-circle')
                $('#icon' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#part' + part + '-' + n).collapse('toggle');
            $('#part' + part + '-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('part' + part + '-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#dm-iconPart' + part).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }

        }

    </script>
@endsection
