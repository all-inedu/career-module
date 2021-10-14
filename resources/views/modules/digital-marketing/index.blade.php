@extends('layout.module.app')
@section('title')
    Digital Marketing | Intro
@endsection

@section('banner')
    <img src="" alt="">
@endsection

@section('sidebar')
    @include('layout.module.sidebar-dm')
@endsection

@section('content')
    <div class="content">
        <div class="card">

            <div class="py-2 text-center">
                <h5>Introduction</h5>
                <hr class="m-1 border-2 mx-auto" width="90%">
            </div>
            <div class="card-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/PNkCR5rGIzw"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

                <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#intro1">
                                <i class="far fa-check-circle pe-2" id="icon1"></i>
                                The Power of Digital Marketing
                            </button>
                        </h2>


                        <div id="intro1" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            Do you remember the BTS meal hype a few months
                                            ago? Let’s take a look at how McDonalds really made it
                                            successful.
                                        </p>

                                        They use collaboration with a famous korean musician, BTS,
                                        which is very popular amongst Indonesia. Hence, they make a
                                        viral marketing to this strategy
                                        <br><br>
                                        <p>
                                            Observe the
                                            Instagram posts
                                            McDonalds posted.
                                            What do you think
                                            makes it effective?
                                        </p>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(1, 1)">
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
                                data-bs-target="#intro2">
                                <i class="far fa-check-circle pe-2" id="icon2"></i>
                                Instagram Reels or Vertical Video
                            </button>
                        </h2>
                        <div id="intro2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            Do you know about
                                            Instagram feature that
                                            released on 2021,
                                            named Instagram reels?
                                        </p>
                                        Instagram reels or vertical video is one
                                        of the tools for Digital Marketing to
                                        accelerate their marketing strategy. It is
                                        the new opportunities for them,
                                        because it provide a vertical quick
                                        videos that can be used for market a
                                        business. As a digital marketing, it is
                                        important to keep us updated and seek
                                        opportunities.
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(2, 1)">
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
                                data-bs-target="#intro3">
                                <i class="far fa-check-circle pe-2" id="icon3"></i>
                                Instagram Reels or Vertical Video
                            </button>
                        </h2>
                        <div id="intro3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            Do you know about
                                            Instagram feature that
                                            released on 2021,
                                            named Instagram reels?
                                        </p>
                                        Instagram reels or vertical video is one
                                        of the tools for Digital Marketing to
                                        accelerate their marketing strategy. It is
                                        the new opportunities for them,
                                        because it provide a vertical quick
                                        videos that can be used for market a
                                        business. As a digital marketing, it is
                                        important to keep us updated and seek
                                        opportunities.
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(3, 1)">
                                            Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
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
                if (sessionStorage.getItem('intro' + i) == 'read') {
                    $('#icon' + i).removeClass('far fa-check-circle')
                    $('#icon' + i).addClass('fas fa-check-circle')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
                    $('#iconPart' + i).addClass('fas fa-check-circle float-end mt-1')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("intro" + n, "read");
            if (sessionStorage.getItem('intro' + n) == 'read') {
                $('#icon' + n).removeClass('far fa-check-circle')
                $('#icon' + n).addClass('fas fa-check-circle')
            }

            let next = n + 1
            $('#intro' + n).collapse('toggle');
            $('#intro' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('intro' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#iconPart' + part).addClass('fas fa-check-circle float-end mt-1')
                }
            }

        }

    </script>
@endsection
