@extends('layout.module.app')
@section('title')
    Data Scientist | Intro
@endsection

@section('banner')
    <div class="container-fluid m-0 p-0">
        <div class="card border-0 mb-5">
            <div class="card-body text-center banner" style="text-align: right !important;">
                <div class="container position-relative" style="height:100%;">
                    <div class="heading-title">
                        <h1 style="font-weight:bold">Data Science<br>101</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('sidebar')
    @include('layout.module.sidebar-ds')
@endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="accordion accordion-flush" id="p0">
                <div>
                    <h2 class="section-header" id="p0-header">
                        <div>Introduction</div>
                    </h2>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p0-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p0-1"
                            aria-expanded="false" aria-controls="c-p0-1">
                            <i class="far fa-check-circle pe-2" id="icon1"></i>
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
                    $('#iconPart' + part).addClass('fas fa-check-circle float-end mt-1');
                    window.location = "<?php echo url('/data-scientist/2'); ?>";
                }
            }

        }
    </script>
@endsection
