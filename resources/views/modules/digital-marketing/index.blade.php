@extends('layout.module.app')
@section('title')
    Digital Marketing | Intro
@endsection

@section('style')

@stop

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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#intro1">
                                <i class="far fa-check-circle pe-2" id="icon1"></i>
                                The Power of Digital Marketing
                            </button>
                        </h2>
                        <div id="intro1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row align-items-center">
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
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/data-marketing/btsmeal0.png') }}" width="100%">
                                    </div>
                                    <div class="col-md-8">
                                        <img src="{{ asset('img/data-marketing/btsmeal1.png') }}" width="100%">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/data-marketing/btsmeal2.png') }}" width="100%">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <p>
                                            Observe the
                                            Instagram posts
                                            McDonalds posted.
                                            What do you think
                                            makes it effective?
                                        </p>
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
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/data-marketing/igreel0.png') }}" width="100%">
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
                                    <div class="col-md-12 mt-3 mb-3">
                                        <b>Well… that’s DIGITAL MARKETING</b>
                                        <br>
                                        Digital Marketing is really broad. So there are infinite ways to
                                        revolutionize advertising and marketing to suit the current trends on
                                        Social Media and technological advancements.
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
                                Outline
                            </button>
                        </h2>
                        <div id="intro3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <ul>
                                            <li>What does a Digital Marketing Specialist do?</li>
                                            <li>What types of Digital Marketing Specialists are there?</li>
                                            <li>How do I become a Digital Marketing Specialist?</li>
                                            <li>Case Studies</li>
                                            <li>Reflection</li>
                                            <li>Glossary</li>
                                            <li>Additional Resources</li>
                                        </ul>
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

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#intro4">
                                <i class="far fa-check-circle pe-2" id="icon4"></i>
                                What is a Digital Marketing Specialist?
                            </button>
                        </h2>
                        <div id="intro4" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Z_KspIX1oXU"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <br>
                                        This video explains what digital marketing is and how it works.
                                        Before we jump into the module, here are some questions about Digital Marketers:
                                        <form action="" class="my-2">
                                            <label>
                                                What do you think they do?
                                            </label>
                                            <textarea class="form-control"></textarea>
                                            <br>
                                            <label>
                                                What degree do they need?
                                            </label>
                                            <textarea class="form-control"></textarea>
                                            <br>
                                            <label>
                                                What skills do they need?
                                            </label>
                                            <textarea class="form-control"></textarea>
                                        </form>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(4, 1)">
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
                    $('#icon' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
                    $('#iconPart' + i).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("intro" + n, "read");
            if (sessionStorage.getItem('intro' + n) == 'read') {
                $('#icon' + n).removeClass('far fa-check-circle')
                $('#icon' + n).addClass('fas fa-check-circle text-success')
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
                    $('#iconPart' + part).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }

        }

    </script>
@endsection
