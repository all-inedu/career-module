@extends('layout.module.app')
@section('title')
    Data Scientist | Reflection
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
            <div class="accordion accordion-flush" id="p6">
                <div class="border-bottom">
                    <h3 class="section-header" id="5-header">
                        <div>Reflection</div>
                    </h3>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p6-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p6-1"
                            aria-expanded="false" aria-controls="c-p6-1">
                            <i class="far fa-check-circle pe-2" id="ds-icon6-1"></i>
                            Ask yourself
                        </button>
                    </h2>

                    <div id="c-p6-1" class="accordion-collapse collapse show" aria-labelledby="p6-1" data-bs-parent="#p6">
                        <div class="accordion-body">
                            <ul>
                                <li>After completing this module, do you think that you are interested in becoming a Data
                                    Scientist?
                                </li>
                                <li>If yes, do you have in mind what type of Data Scientist you want to be? Are you more of a
                                    generalist or a specialist?</li>
                            </ul>

                            <div class="col-md-12 text-end mt-3">
                                <hr class="m-0 mb-2">
                                <button class="btn btn-info btn-sm px-3" onclick="next(1, 6)">
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
                if (sessionStorage.getItem('c-p6-' + i) == 'read') {
                    $('#ds-icon6-' + i).removeClass('far fa-check-circle')
                    $('#ds-icon6-' + i).addClass('fas fa-check-circle')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
                    $('#ds-iconPart' + i).addClass('fas fa-check-circle float-end mt-1')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("c-p6-" + n, "read");
            if (sessionStorage.getItem('c-p6-' + n) == 'read') {
                $('#ds-icon6-' + n).removeClass('far fa-check-circle')
                $('#ds-icon6-' + n).addClass('fas fa-check-circle')
            }

            let next = n + 1
            $('#c-p6-' + n).collapse('toggle');
            $('#c-p6-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('c-p6-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1')
                    window.location = "<?php echo url('/data-scientist/glossary'); ?>";
                }
            }
        }
    </script>
@endsection
