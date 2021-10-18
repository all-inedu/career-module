@extends('layout.module.app')
@section('title')
    Data Scientist | Intro
@endsection

@section('banner')
    <div class="banner">
        <div class="container">
            <h1 class="title">
                Data Science <br>
                101
            </h1>
        </div>
    </div>
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

                <div class="accordion-item">
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
                    $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1 text-success');
                    window.location = "<?php echo url('/data-scientist/2'); ?>";
                }
            }

        }

    </script>
@endsection
