@extends('layout.module.app')
@section('title')
    Data Scientist | What types of Data Scientist are available?
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
            <div class="accordion accordion-flush" id="p2">
                <div class="border-bottom">
                    <h3 class="section-header" id="p2-header">
                        <div>What types of Data Scientists are available?</div>
                    </h3>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p2-1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p2-1" aria-expanded="false" aria-controls="c-p2-1">
                            <i class="far fa-check-circle pe-2" id="ds-icon2-1"></i>
                            Data Engineer
                        </button>
                    </h2>

                    <div id="c-p2-1" class="accordion-collapse collapse" aria-labelledby="p2-1" data-bs-parent="#p2">
                        <div class="accordion-body row">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/vNNoNs_VeWc"
                                class="col-md-6" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <ul class="col-md-6">
                                <li>Data engineers collect the raw information from different sources and ensure the data is
                                    clean
                                    and organized</li>
                                <li>They are also responsible for developing and maintaining data pipelines</li>
                            </ul>

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(1, 2)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p2-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p2-2" aria-expanded="false" aria-controls="c-p2-2">
                            <i class="far fa-check-circle pe-2" id="ds-icon2-2"></i>
                            Data Analyst
                        </button>
                    </h2>

                    <div id="c-p2-2" class="accordion-collapse collapse" aria-labelledby="p2-2" data-bs-parent="#p2">
                        <div class="accordion-body row">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/5HlbV1wKBmo"
                                class="col-md-6" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <ul class="col-md-6">
                                <li>Data analysts will extract and interpret data, identifying and analyzing trends and
                                    patterns
                                </li>
                                <li>Information is then generated to help the executive in decision-making</li>
                            </ul>

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(2, 2)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p2-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p2-3" aria-expanded="false" aria-controls="c-p2-3">
                            <i class="far fa-check-circle pe-2" id="ds-icon2-3"></i>
                            Machine Learning Engineer
                        </button>
                    </h2>

                    <div id="c-p2-3" class="accordion-collapse collapse" aria-labelledby="p2-3" data-bs-parent="#p2">
                        <div class="accordion-body row">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qna5zKR5t4A"
                                class="col-md-6" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <ul class="col-md-6">
                                <li>Machine learning engineers are responsible for developing data science prototypes</li>
                                <li>They then develop the software to automate predictive models for recommended searches,
                                    virtual
                                    assistants, etc.</li>
                            </ul>

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(3, 2)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p2-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p2-4" aria-expanded="false" aria-controls="c-p2-4">
                            <i class="far fa-check-circle pe-2" id="ds-icon2-4"></i>
                            Data Architect
                        </button>
                    </h2>

                    <div id="c-p2-4" class="accordion-collapse collapse" aria-labelledby="p2-4" data-bs-parent="#p2">
                        <div class="accordion-body row">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/zz_H5jBP158"
                                class="col-md-6" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <ul class="col-md-6">
                                <li>A data architect creates the blueprints for data management so that the databases can be
                                    easily
                                    integrated, centralized, and protected</li>
                                <li>They also ensure that the data engineers have the best tools and systems to work with
                                </li>
                            </ul>

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(4, 2)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p2-5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p2-5" aria-expanded="false" aria-controls="c-p2-5">
                            <i class="far fa-check-circle pe-2" id="ds-icon2-5"></i>
                            Business Intelligence Analyst
                        </button>
                    </h2>

                    <div id="c-p2-5" class="accordion-collapse collapse" aria-labelledby="p2-5" data-bs-parent="#p2">
                        <div class="accordion-body row">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/26GlYvcYZiI"
                                class="col-md-6" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <ul class="col-md-6">
                                <li>Business Intelligence (BI) analysts transform data into insights that drive business
                                    value</li>
                                <li>They can identify trends that can help managers and executives make business decisions
                                    to
                                    improve processes in the organization</li>
                            </ul>

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(5, 2)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="p2-6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p2-6" aria-expanded="false" aria-controls="c-p2-6">
                            <i class="far fa-check-circle pe-2" id="ds-icon2-6"></i>
                            Checkpoint #1
                        </button>
                    </h2>

                    <div id="c-p2-6" class="accordion-collapse collapse" aria-labelledby="p2-6" data-bs-parent="#p2">
                        <div class="accordion-body row">
                            <form>
                                <div class="form-group">
                                    <label>After getting to know briefly about the specializations of data science, which
                                        one do you
                                        find the most interesting?</label>
                                    <br>
                                    <textarea rows="5" class="form-control rounded mx-auto d-block mt-3"></textarea>
                                </div>
                                <br>
                                <button type="button" class="btn btn-primary float-end text-center" onclick="next(6, 2)">Submit</button>
                            </form>
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
                if (sessionStorage.getItem('c-p2-' + i) == 'read') {
                    $('#ds-icon2-' + i).removeClass('far fa-check-circle')
                    $('#ds-icon2-' + i).addClass('fas fa-check-circle')
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
            sessionStorage.setItem("c-p2-" + n, "read");
            if (sessionStorage.getItem('c-p2-' + n) == 'read') {
                $('#ds-icon2-' + n).removeClass('far fa-check-circle')
                $('#ds-icon2-' + n).addClass('fas fa-check-circle')
            }

            let next = n + 1
            $('#c-p2-' + n).collapse('toggle');
            $('#c-p2-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('c-p2-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1')
                    window.location = "<?php echo url('/data-scientist/4'); ?>";
                }
            }
        }

    </script>
@endsection
