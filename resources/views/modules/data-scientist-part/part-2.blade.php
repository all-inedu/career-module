@extends('layout.module.app')
@section('title')
    Data Scientist | What does a Data Scientist do?
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
            <div class="accordion accordion-flush" id="p3">
                <div class="border-bottom">
                    <h3 class="section-header" id="p3-header">
                        <div>What does a Data Scientist do?</div>
                    </h3>
                </div>

                <div class="m-4">
                    <p class="font-cst">
                        A data scientist’s job generally covers the whole process of data science, which includes:
                    </p>
                    <ol class="ol-cst">
                        <li>
                            <span><b>Business Understanding :</b> determining the business aim of the data.</span>
                        </li>
                        <li>
                            <span><b>Data Understanding :</b> having a deep understanding about the dataset used.</span>
                        </li>
                        <li>
                            <span><b>Data Preparation :</b> Initial process of cleaning and transforming data for the
                                modeling process.</span>
                        </li>
                        <li><span><b>Modelling :</b> Producing a set of rules that is required to predict or analyse with
                                the dataset.</span></li>

                        <li><span><b>Evaluation :</b> Monitoring the performance of model built.</span></li>
                        <li><span><b>Deployment :</b> Applying the model to the system for business as usual
                                purposes.</span></li>
                    </ol>
                    <figure class="my-3">
                        <img src="{{ asset('img/what-do-datascientists-do.png') }}" class="rounded mx-auto d-block">
                    </figure>


                </div>

                <div class="m-4">
                    <div class="col-md-12">
                        <ul class="ul-cst">
                            <li><span><b>Data Scientist</b> is a rising career nowadays as the demand for data science
                                    professionals is very high but the supply is very low.</span></li>
                            <li><span>The <b>high demand</b> is due to the growing popularity of <b>data-driven
                                        decision</b>
                                    making in many companies. The U.S. Bureau of Labor Statistics sees strong growth in
                                    the data science field and predicts the number of jobs will increase by <b>about 28%</b>
                                    through 2026.</span>
                            </li>
                            <li><span>Whereas the <b>low supply</b> is because data science is still relatively a
                                    <b>new</b>
                                    field and
                                    there are only few educational programs available for aspiring data scientists.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <figure class="col-md-12 pt-3 pb-3">
                        <img src="{{ asset('img/harvard-business-review.png') }}" class="rounded mx-auto d-block">
                    </figure>
                    <div class="col-md-12">
                        <div class="pc">
                            According to Harvard Business Review, Data Scientist is the sexiest job of
                            the 21st
                            century. What do you think is the reason?
                            <textarea rows="5" class="form-control rounded mx-auto d-block mt-2"></textarea>

                            <div class="text-end mt-2">
                                <button type="button" class="btn btn-primary" onclick="next(4, 3)">Submit</button>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <div class="m-4">
                <ul class="list-unstyled">
                    <li>As we live in a data-centric world, data science is applied in :
                        <ul class="mt-3 list-unstyled ul-check-mark">
                            <li><span>Healthcare</span></li>
                            <li><span>Manufacturing</span></li>
                            <li><span>Marketing</span></li>
                            <li><span>Finance</span></li>
                            <li><span>Technologies (e.g Augmented Reality or Speech Recognition)</span></li>
                        </ul>
                    </li>
                </ul>
                <figure class="mt-3">
                    <img src="{{ asset('img/data-science-business.png') }}" class="rounded mx-auto d-block">
                </figure>
            </div>

            <div class="m-4 pc">
                <h6>What does a data scientist do?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" id="option1">
                    <label class="form-check-label" for="option1">
                        Transforming data into a format that can be easily analyzed
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" id="option2">
                    <label class="form-check-label" for="option2">
                        Interpreting data, analyzing results using statistical techniques
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" id="option3">
                    <label class="form-check-label" for="option3">
                        Using machine learning to create predictive models
                    </label>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary btn-sm px-3 mt-2" onclick="next(9, 3)">
                        Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                    </button>
                </div>
            </div>


            {{-- <div class="accordion-item">
                    <h2 class="accordion-header" id="p3-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p3-4" aria-expanded="false" aria-controls="c-p3-4">
                            <i class="far fa-check-circle pe-2" id="ds-icon3-4"></i>
                            Data Scientist as a career
                        </button>
                    </h2>

                    <div id="c-p3-4" class="accordion-collapse collapse" aria-labelledby="p3-4" data-bs-parent="#p3">
                        <div class="accordion-body">
                            <div class="col-md-12">
                                <ul>
                                    <li><b>Data Scientist</b> is a rising career nowadays as the demand for data science
                                        professionals
                                        is very high but the supply is very low.</li>
                                    <li>The <b>high demand</b> is due to the growing popularity of <b>data-driven
                                            decision</b>
                                        making
                                        used by many companies. The U.S. Bureau of Labor Statistics sees strong growth in
                                        the
                                        data
                                        science field and predicts the number of jobs will increase by <b>about 28%</b>
                                        through
                                        2026.
                                    </li>
                                    <li>Whereas the <b>low supply</b> is because data science is still relatively a
                                        <b>new</b>
                                        field and
                                        there are very few educational programs for aspiring data scientists.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 pt-3 pb-3">
                                <img src="{{ asset('img/harvard-business-review.png') }}" class="rounded mx-auto d-block">
                            </div>
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group">
                                        <label>According to Harvard Business Review, Data Scientist is the sexiest job of
                                            the 21st
                                            century. What do you think is the reason?</label>
                                        <textarea rows="5" class="form-control rounded mx-auto d-block mt-2"></textarea>
                                    </div>
                                    <div class="text-end mt-2">
                                        <button type="button" class="btn btn-primary" onclick="next(4, 3)">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}

            {{-- <div class="accordion-item">
                    <h2 class="accordion-header" id="p3-5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p3-5" aria-expanded="false" aria-controls="c-p3-5">
                            <i class="far fa-check-circle pe-2" id="ds-icon3-5"></i>
                            What does a data scientist do?
                        </button>
                    </h2>

                    <div id="c-p3-5" class="accordion-collapse collapse" aria-labelledby="p3-5" data-bs-parent="#p3">
                        <div class="accordion-body">
                            <h6>A data scientist’s job generally covers the whole process of data science, which includes:
                            </h6>
                            <br>
                            <ol>
                                <b>
                                    <li>Business Understanding :
                                </b> determining the business aim of the data.</li>
                                <b>
                                    <li>Data Understanding :
                                </b> having a deep understanding about the dataset used.</li>
                                <b>
                                    <li>Data Preparation :
                                </b> Initial process of cleaning and transforming data for the modeling process.</li>
                                <b>
                                    <li>Modelling :
                                </b> Producing a set of rules that is required to predict or analyse with the dataset.</li>
                                <b>
                                    <li>Evaluation :
                                </b> Monitoring the performance of model built</li>
                                <b>
                                    <li>Deployment :
                                </b> Applying the model to the system for business as usual purposes.</li>
                            </ol>
                            <img src="{{ asset('img/what-do-datascientists-do.png') }}" class="rounded mx-auto d-block">

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(5, 3)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}

            <!-- dihapus -->
            {{-- <div class="accordion-item">
                    <h2 class="accordion-header" id="p3-6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p3-6" aria-expanded="false" aria-controls="c-p3-6">
                            <i class="far fa-check-circle pe-2" id="ds-icon3-6"></i>
                            Career Trends for Data Science
                        </button>
                    </h2>

                    <div id="c-p3-6" class="accordion-collapse collapse" aria-labelledby="p3-6" data-bs-parent="#p3">
                        <div class="accordion-body">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/PXLVLS1vJHY"
                                class="mx-auto d-block" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(6, 3)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}

            <!-- dihapus -->
            {{-- <div class="accordion-item">
                    <h2 class="accordion-header" id="p3-7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p3-7" aria-expanded="false" aria-controls="c-p3-7">
                            <i class="far fa-check-circle pe-2" id="ds-icon3-7"></i>
                            Where is Data Science applied?
                        </button>
                    </h2>

                    <div id="c-p3-7" class="accordion-collapse collapse" aria-labelledby="p3-7" data-bs-parent="#p3">
                        <div class="accordion-body">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/l5lFXSqRv4s"
                                class="mx-auto d-block" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(7, 3)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}

            {{-- <div class="accordion-item">
                    <h2 class="accordion-header" id="p3-8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p3-8" aria-expanded="false" aria-controls="c-p3-8">
                            <i class="far fa-check-circle pe-2" id="ds-icon3-8"></i>
                            Data Science for business
                        </button>
                    </h2>

                    <div id="c-p3-8" class="accordion-collapse collapse" aria-labelledby="p3-8" data-bs-parent="#p3">
                        <div class="accordion-body">
                            <ul>
                                <li>As we live in a data-centric world, data science is applied in almost every field,
                                    including
                                    healthcare, manufacturing, marketing, finance, or technologies like Augmented Reality or
                                    Speech
                                    Recognition</li>
                            </ul>
                            <img src="{{ asset('img/data-science-business.png') }}" class="rounded mx-auto d-block">

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(8, 3)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}

            {{-- <div class="accordion-item">
                    <h2 class="accordion-header" id="p3-9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p3-9" aria-expanded="false" aria-controls="c-p3-9">
                            <i class="far fa-check-circle pe-2" id="ds-icon3-9"></i>
                            Concept Check
                        </button>
                    </h2>

                    <div id="c-p3-9" class="accordion-collapse collapse" aria-labelledby="p3-9" data-bs-parent="#p3">
                        <div class="accordion-body">
                            <img src="{{ asset('img/topic-1-concept-check.png') }}" class="rounded mx-auto d-block"
                                width="100%">
                            <br>
                            <h6>What does a data scientist do?</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1" id="option1">
                                <label class="form-check-label" for="option1">
                                    Transforming data into a format that can be easily analyzed
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1" id="option2">
                                <label class="form-check-label" for="option2">
                                    Interpreting data, analyzing results using statistical techniques
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1" id="option3">
                                <label class="form-check-label" for="option3">
                                    Using machine learning to create predictive models
                                </label>
                            </div>
                            <br>

                            <div class="text-end">
                                <button class="btn btn-primary btn-sm px-3 mt-2" onclick="next(9, 3)">
                                    Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
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
                if (sessionStorage.getItem('c-p3-' + i) == 'read') {
                    $('#ds-icon3-' + i).removeClass('far fa-check-circle')
                    $('#ds-icon3-' + i).addClass('fas fa-check-circle text-success')
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
            sessionStorage.setItem("c-p3-" + n, "read");
            if (sessionStorage.getItem('c-p3-' + n) == 'read') {
                $('#ds-icon3-' + n).removeClass('far fa-check-circle')
                $('#ds-icon3-' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#c-p3-' + n).collapse('toggle');
            $('#c-p3-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('c-p3-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1 text-success')
                    window.location = "<?php echo url('/data-scientist/3'); ?>";
                }
            }
        }
    </script>
@endsection
