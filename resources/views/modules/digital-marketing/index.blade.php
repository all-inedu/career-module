@extends('layout.module.app')
@section('title')
    Digital Marketing | Intro
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
    <div class="container pt-4">
        <p>
            This module consists of all the background information on Digital Marketing Specialist as a career, 2 (two) case
            studies and a final reflection. Complete all sections in order. Refer to Glossary and Additional Resources when
            necessary.
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
                <h3>Introduction</h3>
            </div>
            <hr class="m-1 border-2 mx-auto" width="95%">
            <div class="card-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/PNkCR5rGIzw"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

                <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part1-3">
                                <i class="far fa-check-circle pe-2" id="icon3"></i>
                                What is Digital Marketing?
                            </button>
                        </h2>
                        <div id="part1-3" class="accordion-collapse show collapse">
                            <div class="accordion-body">
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-6">
                                        <p>
                                            Do you remember the BTS meal hype a few months
                                            ago? Let’s take a look at how McDonalds really made it
                                            successful.
                                        </p>
                                        <div class="pc">
                                            They use collaboration with a famous korean musician, BTS,
                                            which is very popular amongst Indonesia. Hence, they make a
                                            viral marketing to this strategy
                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img" src="{{ asset('img/data-marketing/btsmeal0.png') }}"
                                            width="100%">
                                    </div>
                                    <div class="col-md-8">
                                        <img class="img" src="{{ asset('img/data-marketing/btsmeal1.png') }}"
                                            width="100%">
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img" src="{{ asset('img/data-marketing/btsmeal2.png') }}"
                                            width="100%">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <p class="pc">
                                            Observe the
                                            Instagram posts
                                            McDonalds posted.
                                            What do you think
                                            makes it effective?
                                        </p>
                                        <textarea name="" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-3 mb-3">
                                    <div class="col-md-6">
                                        <img class="img" src="{{ asset('img/data-marketing/igreel0.png') }}" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            Do you know about
                                            Instagram feature that
                                            released on 2021,
                                            named Instagram reels?
                                        </p>
                                        <div class="pc">
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
                                    </div>
                                    <div class="col-md-12 mt-3 mb-3">
                                        <div class="pc">
                                            <b>Well… that’s DIGITAL MARKETING</b>
                                            <br>
                                            Digital Marketing is really broad. So there are infinite ways to
                                            revolutionize advertising and marketing to suit the current trends on
                                            Social Media and technological advancements.
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Z_KspIX1oXU"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <br>
                                        <div class="pc">
                                            This video explains what digital marketing is and how it works.
                                            Before we jump into the module, here are some questions about Digital Marketers:
                                        </div>
                                        <form action="" class="my-2">
                                            <label>
                                                What do you think Digital Marketing Specialists do?
                                            </label>
                                            <textarea class="form-control" rows="5"></textarea>
                                            <br>
                                            <label>
                                                What degree do they need?
                                            </label>
                                            <textarea class="form-control" rows="5"></textarea>
                                            <br>
                                            <label>
                                                What skills do they need?
                                            </label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </form>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-primary btn-sm px-3" onclick="next(1, 1)">
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
                if (sessionStorage.getItem('part1-' + i) == 'read') {
                    $('#icon' + i).removeClass('far fa-check-circle')
                    $('#icon' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('dm-part' + i) == 'done') {
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

            let nextPart = part + 1
            if (z == j) {
                sessionStorage.setItem("dm-part" + part, "done");
                if (sessionStorage.getItem('dm-part' + part) == 'done') {
                    $('#dm-iconPart' + part).addClass('fas fa-check-circle text-success float-end mt-1')
                    window.location.href = "{{ url('digital-marketing/part-') }}" + nextPart;
                }
            }

        }

    </script>
@endsection
