@extends('modules.data-scientist-part.app')

@section('content')

    <div class="accordion accordion-flush" id="p1">
        <div class="accordion-item">
            <h2 class="section-header" id="p1-header">
                <div>What does a Data Scientist do?</div>
            </h2>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-1"
                    aria-expanded="false" aria-controls="c-p1-1">
                    Data Scientist as a career
                </button>
            </h2>

            <div id="c-p1-1" class="accordion-collapse collapse show" aria-labelledby="p1-1" data-bs-parent="#p1">
                <div class="accordion-body row" style="text-align: left;">
                    <img src="{{ asset('img/yt-recommended.png') }}" class="col-md-6">
                    <div class="col-md-6">
                        <h5>Have you ever watched youtube?</h5>
                        <h5>Do you know why the recommendation can fit you?</h5>
                        <br>
                        <h5><strong>THAT’S THE WORK OF DATA SCIENTIST!</strong></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-2"
                    aria-expanded="false" aria-controls="c-p1-2">
                    Do you know basketball uses data science?
                </button>
            </h2>

            <div id="c-p1-2" class="accordion-collapse collapse" aria-labelledby="p1-2" data-bs-parent="#p1">
                <div class="accordion-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MpLHMKTolVw" class="mx-auto d-block"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-3"
                    aria-expanded="false" aria-controls="c-p1-3">
                    What is Data Science?
                </button>
            </h2>

            <div id="c-p1-3" class="accordion-collapse collapse" aria-labelledby="p1-3" data-bs-parent="#p1">
                <div class="accordion-body row" style="text-align: left;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CCnCABJhAdU" class="col-md-6"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="col-md-6">
                        <br>
                        <ul>
                            <li>Data science is about looking back at historical data to spot patterns and relationships and
                                using machine learning to better predict the future.</li>
                            <li>To learn more about data science, you can take <a
                                    href="https://www.coursera.org/learn/what-is-datascience">this course</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-4"
                    aria-expanded="false" aria-controls="c-p1-4">
                    Data Scientist as a career
                </button>
            </h2>

            <div id="c-p1-4" class="accordion-collapse collapse" aria-labelledby="p1-4" data-bs-parent="#p1">
                <div class="accordion-body">
                    <ul>
                        <li><b>Data Scientist</b> is a rising career nowadays as the demand for data science professionals
                            is very high but the supply is very low.</li>
                        <li>The <b>high demand</b> is due to the growing popularity of <b>data-driven decision</b> making
                            used by many companies. The U.S. Bureau of Labor Statistics sees strong growth in the data
                            science field and predicts the number of jobs will increase by <b>about 28%</b> through 2026.
                        </li>
                        <li>Whereas the <b>low supply</b> is because data science is still relatively a <b>new</b> field and
                            there are very few educational programs for aspiring data scientists.</li>
                    </ul>

                    <img src="{{ asset('img/harvard-business-review.png') }}" class="rounded mx-auto d-block">
                    <br>
                    <div class="accordion-body row">
                        <form>
                            <div class="form-group">
                                <label>According to Harvard Business Review, Data Scientist is the sexiest job of the 21st
                                    century. What do you think is the reason?</label>
                                <br>
                                <textarea style="width: 90%;" rows="5"
                                    class="form-control rounded mx-auto d-block"></textarea>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary float-end text-center"
                                style="width: 10%; height: 20%;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-5"
                    aria-expanded="false" aria-controls="c-p1-5">
                    What does a data scientist do?
                </button>
            </h2>

            <div id="c-p1-5" class="accordion-collapse collapse" aria-labelledby="p1-5" data-bs-parent="#p1">
                <div class="accordion-body">
                    <h6>A data scientist’s job generally covers the whole process of data science, which includes: </h6>
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
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-6"
                    aria-expanded="false" aria-controls="c-p1-6">
                    Career Trends for Data Science
                </button>
            </h2>

            <div id="c-p1-6" class="accordion-collapse collapse" aria-labelledby="p1-6" data-bs-parent="#p1">
                <div class="accordion-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PXLVLS1vJHY" class="mx-auto d-block"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-7"
                    aria-expanded="false" aria-controls="c-p1-7">
                    Where is Data Science applied?
                </button>
            </h2>

            <div id="c-p1-7" class="accordion-collapse collapse" aria-labelledby="p1-7" data-bs-parent="#p1">
                <div class="accordion-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/l5lFXSqRv4s" class="mx-auto d-block"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-8"
                    aria-expanded="false" aria-controls="c-p1-8">
                    Data Science for business
                </button>
            </h2>

            <div id="c-p1-8" class="accordion-collapse collapse" aria-labelledby="p1-8" data-bs-parent="#p1">
                <div class="accordion-body">
                    <ul>
                        <li>As we live in a data-centric world, data science is applied in almost every field, including
                            healthcare, manufacturing, marketing, finance, or technologies like Augmented Reality or Speech
                            Recognition</li>
                        <li>Even sports, like basketball, uses data science to analyze the players movements and optimize
                            them, thus increasing the chance of scoring</li>
                    </ul>
                    <img src="{{ asset('img/data-science-business.png') }}" class="rounded mx-auto d-block">
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-9"
                    aria-expanded="false" aria-controls="c-p1-9">
                    Concept Check
                </button>
            </h2>

            <div id="c-p1-9" class="accordion-collapse collapse" aria-labelledby="p1-9" data-bs-parent="#p1">
                <div class="accordion-body">
                    <h6>What does a data scientist do?</h6>
                    <ol type="A">
                        <li>Transforming data into a format that can be easily analyzed</li>
                        <li>Interpreting data, analyzing results using statistical techniques</li>
                        <li>Using machine learning to create predictive models</li>
                    </ol>
                    <img src="{{ asset('img/topic-1-concept-check.png') }}" class="rounded mx-auto d-block">
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p1-10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p1-10"
                    aria-expanded="false" aria-controls="c-p1-10">
                    Testimony
                </button>
            </h2>

            <div id="c-p1-10" class="accordion-collapse collapse" aria-labelledby="p1-10" data-bs-parent="#p1">
                <div class="accordion-body">
                    <h2>VIDEO 2 - TESTIMONI</h2>
                </div>
            </div>
        </div>
    </div>
@stop
