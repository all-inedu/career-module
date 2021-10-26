@extends('layout.module.app')
@section('title')
    Digital Marketing | Intro
@endsection

@section('banner')
    <div class="banner">
        <h1 class="title">
            Digital Marketing <br>
            Specialist 101
        </h1>
    </div>
    <p class="sp mt-5 text-center px-5">
        This module consists of all the <b>background information</b> on <b> Digital Marketing Specialist</b> as a
        career, 2 (two) <b>case
            studies</b> and a final reflection. Complete all sections <b>in order</b> . Refer to Glossary and
        Additional
        Resources when
        necessary.
    </p>

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
                                        <p class="pc">
                                            They collaborated with a famous Korean boy band, BTS, who is very popular among
                                            Indonesians. Hence, they are able to create a viral marketing strategy.
                                        </p>
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
                                            <label class="mb-2">
                                                Observe the Instagram posts McDonalds posted. What do you think makes the
                                                strategy effective?
                                            </label>
                                            <textarea name="" class="form-control" rows="5"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-3 mb-3">
                                    <div class="col-md-6">
                                        <img class="img" src="{{ asset('img/data-marketing/igreel0.png') }}" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            Do you know the newly released Instagram feature in 2021, Instagram Reels?
                                        </p>
                                        <div class="pc">
                                            Instagram Reels or vertical video is one of the tools intended for accelerating
                                            marketing strategies. It provides new opportunities for marketers as they can be
                                            made into quick promotional videos. Digital marketing specialists should keep
                                            themselves updated with new technology like this.
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mt-3 mb-3">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Z_KspIX1oXU"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <div class="pc">
                                            <p>This video explains what digital marketing is and how it works.
                                                Before we jump into the module, here are some questions about Digital
                                                Marketers:
                                                <br>
                                            <form action="" class="my-2">
                                                <label class="mb-2">
                                                    What do you think Digital Marketing Specialists do?
                                                </label>
                                                <textarea class="form-control" rows="5"></textarea>
                                                <br>
                                                <label class="mb-2">
                                                    What degree do they need?
                                                </label>
                                                <textarea class="form-control" rows="5"></textarea>
                                                <br>
                                                <label class="mb-2">
                                                    What skills do they need?
                                                </label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </form>
                                            </p>
                                        </div>
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
