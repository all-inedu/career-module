@extends('modules.data-scientist-part.app')

@section('content')
    <div class="accordion accordion-flush" id="p2">
        <div class="accordion-item">
            <h2 class="section-header" id="p2-header">
                <div>What types of Data Scientists are available?</div>
            </h2>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p2-1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p2-1"
                    aria-expanded="false" aria-controls="c-p2-1">
                    Data Engineer
                </button>
            </h2>

            <div id="c-p2-1" class="accordion-collapse collapse" aria-labelledby="p2-1" data-bs-parent="#p2">
                <div class="accordion-body row">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vNNoNs_VeWc" class="col-md-6"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <ul class="col-md-6">
                        <li>Data engineers collect the raw information from different sources and ensure the data is clean
                            and organized</li>
                        <li>They are also responsible for developing and maintaining data pipelines</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p2-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p2-2"
                    aria-expanded="false" aria-controls="c-p2-2">
                    Data Analyst
                </button>
            </h2>

            <div id="c-p2-2" class="accordion-collapse collapse" aria-labelledby="p2-2" data-bs-parent="#p2">
                <div class="accordion-body row">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5HlbV1wKBmo" class="col-md-6"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <ul class="col-md-6">
                        <li>Data analysts will extract and interpret data, identifying and analyzing trends and patterns
                        </li>
                        <li>Information is then generated to help the executive in decision-making</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p2-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p2-3"
                    aria-expanded="false" aria-controls="c-p2-3">
                    Machine Learning Engineer
                </button>
            </h2>

            <div id="c-p2-3" class="accordion-collapse collapse" aria-labelledby="p2-3" data-bs-parent="#p2">
                <div class="accordion-body row">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qna5zKR5t4A" class="col-md-6"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <ul class="col-md-6">
                        <li>Machine learning engineers are responsible for developing data science prototypes</li>
                        <li>They then develop the software to automate predictive models for recommended searches, virtual
                            assistants, etc.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p2-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p2-4"
                    aria-expanded="false" aria-controls="c-p2-4">
                    Data Architect
                </button>
            </h2>

            <div id="c-p2-4" class="accordion-collapse collapse" aria-labelledby="p2-4" data-bs-parent="#p2">
                <div class="accordion-body row">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zz_H5jBP158" class="col-md-6"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <ul class="col-md-6">
                        <li>A data architect creates the blueprints for data management so that the databases can be easily
                            integrated, centralized, and protected</li>
                        <li>They also ensure that the data engineers have the best tools and systems to work with</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p2-5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p2-5"
                    aria-expanded="false" aria-controls="c-p2-5">
                    Business Intelligence Analyst
                </button>
            </h2>

            <div id="c-p2-5" class="accordion-collapse collapse" aria-labelledby="p2-5" data-bs-parent="#p2">
                <div class="accordion-body row">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/26GlYvcYZiI" class="col-md-6"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <ul class="col-md-6">
                        <li>Business Intelligence (BI) analysts transform data into insights that drive business value</li>
                        <li>They can identify trends that can help managers and executives make business decisions to
                            improve processes in the organization</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p2-6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p2-6"
                    aria-expanded="false" aria-controls="c-p2-6">
                    Checkpoint #1
                </button>
            </h2>

            <div id="c-p2-6" class="accordion-collapse collapse" aria-labelledby="p2-6" data-bs-parent="#p2">
                <div class="accordion-body row">
                    <form>
                        <div class="form-group">
                            <label>After getting to know briefly about the specializations of data science, which one do you
                                find the most interesting?</label>
                            <br>
                            <textarea style="width: 90%;" rows="5" class="form-control rounded mx-auto d-block"></textarea>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary float-end text-center"
                            style="width: 10%; height: 20%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop