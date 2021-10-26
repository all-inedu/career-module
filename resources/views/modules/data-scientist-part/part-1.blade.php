@extends('layout.module.app')
@section('title')
    Data Scientist | Intro
@endsection

@section('banner')
    @include('modules.data-scientist-part.banner')
@stop

@section('sidebar')
    @include('layout.module.sidebar-ds')
@endsection
@section('content')
    <div class="content">
        <div class="card p-3">
            <div class="accordion accordion-flush" id="p0">
                <div class="border-bottom">
                    <h3 class="section-header" id="p0-header">
                        <div>Introduction</div>
                    </h3>
                </div>

                <div class="data-science-video">
                    <!-- INPUT VIDEO HERE -->
                </div>

                <div class="mt-3">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="p3-3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p3-3"
                                aria-expanded="true" aria-controls="c-p3-3">
                                <i class="far fa-check-circle pe-2" id="ds-icon3-3"></i>
                                What is Data Science?
                            </button>
                        </h2>

                        <div id="c-p3-3" class="accordion-collapse collapse show" aria-labelledby="p3-3"
                            data-bs-parent="#p3">
                            <div class="accordion-body row" style="text-align: left;">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/CCnCABJhAdU"
                                    class="col-md-12" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="col-md-12">
                                    <p class="p-3 pc">
                                        Data science is about looking back at historical data to spot patterns and
                                        relationships, and later
                                        using machine learning to better predict the future.
                                    </p>
                                </div>

                                <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                    <button class="btn btn-info btn-sm px-3" onclick="next(3, 3)">
                                        Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="p3-1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#c-p3-1" aria-expanded="false" aria-controls="c-p3-1">
                                <i class="far fa-check-circle pe-2" id="ds-icon3-1"></i>
                                Data Scientist as a career
                            </button>
                        </h2>

                        <div id="c-p3-1" class="accordion-collapse collapse" aria-labelledby="p3-1" data-bs-parent="#p3">
                            <div class="accordion-body row" style="text-align: left;">

                                <div class="col-md-12">
                                    <img src="{{ asset('img/yt-recommended.png') }}" width="100% ">

                                    <p class="mt-3 pc">
                                        Have you ever watched YouTube? Do you know why the recommendations seem to fit your
                                        preferences?
                                    </p>
                                    <h5><strong>THAT’S THE WORK OF DATA SCIENTIST!</strong></h5>
                                </div>

                                <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                    <button class="btn btn-info btn-sm px-3" onclick="next(1, 3)">
                                        Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="p3-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#c-p3-2" aria-expanded="false" aria-controls="c-p3-2">
                                <i class="far fa-check-circle pe-2" id="ds-icon3-2"></i>
                                Do you know basketball uses data science?
                            </button>
                        </h2>

                        <div id="c-p3-2" class="accordion-collapse collapse" aria-labelledby="p3-2" data-bs-parent="#p3">
                            <div class="accordion-body">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/MpLHMKTolVw"
                                    class="mx-auto d-block" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                                <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                    <button class="btn btn-info btn-sm px-3" onclick="next(2, 3)">
                                        Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="p3-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#c-p3-2" aria-expanded="false" aria-controls="c-p3-2">
                                <i class="far fa-check-circle pe-2" id="ds-icon3-2"></i>
                                A Day in a Life of a Data Scientist
                            </button>
                        </h2>

                        <div id="c-p3-2" class="accordion-collapse collapse" aria-labelledby="p3-2" data-bs-parent="#p3">
                            <div class="accordion-body">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/MpLHMKTolVw"
                                    class="mx-auto d-block" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                                <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                    <button class="btn btn-info btn-sm px-3" onclick="next(2, 3)">
                                        Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                {{-- <div class="accordion-item">
                    <h2 class="accordion-header" id="p0-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p0-1"
                            aria-expanded="false" aria-controls="c-p0-1">
                            <i class="far fa-check-circle pe-2" id="ds-icon1"></i>
                            Video Intro
                        </button>
                    </h2>

                    <div id="c-p0-1" class="accordion-collapse collapse show" aria-labelledby="p0-1" data-bs-parent="#p0">
                        <div class="accordion-body">
                            <h2>VIDEO 1 - TRAILER</h2>

                            <div class="col-md-12 text-end">
                                <hr class="m-0 mb-2">
                                <button class="btn btn-info btn-sm px-3" onclick="next(1, 1)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p0-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p0-2" aria-expanded="false" aria-controls="c-p3-10">
                            <i class="far fa-check-circle pe-2" id="ds-icon2"></i>
                            Testimony
                        </button>
                    </h2>

                    <div id="c-p0-2" class="accordion-collapse collapse" aria-labelledby="p3-10" data-bs-parent="#p3">
                        <div class="accordion-body">
                            <h2>VIDEO 2 - TESTIMONI</h2>
                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(2, 1)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // sessionStorage.clear();
            let n = $('.accordion-item').length
            for (i = 1; i <= n; i++) {
                if (sessionStorage.getItem('intro' + i) == 'read') {
                    $('#ds-icon' + i).removeClass('far fa-check-circle')
                    $('#ds-icon' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
                    $('#ds-iconPart' + i).addClass('fas fa-check-circle float-end mt-1 text-success')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("intro" + n, "read");
            if (sessionStorage.getItem('intro' + n) == 'read') {
                $('#ds-icon' + n).removeClass('far fa-check-circle')
                $('#ds-icon' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#c-p0-' + n).collapse('toggle');
            $('#c-p0-' + next).collapse('toggle');

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
                    $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1 text-success');
                    window.location = "<?php echo url('/data-scientist/2'); ?>";
                }
            }

        }
    </script>
@endsection
