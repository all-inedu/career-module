@extends('modules.data-scientist-part.app')

@section('content')

<div class="accordion accordion-flush" id="p3">
    <div class="accordion-item">
        <h2 class="section-header" id="p3-header">
            <div>How do I become a Data Scientist?</div>
        </h2>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="p3-1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p3-1"
                aria-expanded="false" aria-controls="c-p3-1">
                A day as Data Scientist
            </button>
        </h2>

        <div id="c-p3-1" class="accordion-collapse collapse show" aria-labelledby="p3-1" data-bs-parent="#p3">
            <div class="accordion-body">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wFI41gagSLU" class="mx-auto d-block"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="p3-2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p3-2"
                aria-expanded="false" aria-controls="c-p3-2">
                Pathways to become a Data Scientist
            </button>
        </h2>

        <div id="c-p3-2" class="accordion-collapse collapse" aria-labelledby="p3-2" data-bs-parent="#p3">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>School</h4>
                        <br>
                        <p>In your high school, here are several subjects you need to put more focus on :</p>
                        <ul class="dash">
                            <li>Mathematics</li>
                            <li>Statistics</li>
                            <li>Business</li>
                            <li>Programming</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h4>Uni Pathways</h4>
                        <br>
                        <p>As we know that this job is quite new, therefore there aren’t much universities providing
                            specifically a Data Science Course</p>
                        <p>Some of them might provide Data Science as specialization of Computer Science course, or you
                            can even take Data Science as your Postgraduate programme.</p>
                        <p>As undergraduate student, you might want to consider on taking major such as Computer
                            Science, Math or statistical related program, Actuarial Science, Business and Management as
                            pathway to enter this job.</p>
                        <p>Some of the companies might also accept students from specific majors, like Biomedical
                            Engineering to work as Data Scientist in but only in specific field, like medical.</p>
                    </div>
                </div>

                <p>As we know that currently we have limited source of formal education for data scientist or data
                    analyst as a degree. Some of them might also provide data science master degree as a complementary
                    for Computer Science bachelor degree.</p>
                <p>Besides that, we can also learn data science from online course as well as <b>bootcamp</b>. Many
                    <b>data science bootcamp</b> nowadays are providing 3-6 months courses online and offline for those
                    who are likely to be a career shifters, or those fresh graduates who are passionate about data but
                    they haven’t learn it before.</p>

                <br>

                <div class="row">
                    <div class="col-md-6">
                        <p>You may want to pursue an advanced job, but for now, it’s likely you’ll need to start in an
                            entry-level position, such as a <b>data analyst or junior data scientist</b>. You may want
                            to consider system-specific training or certifications — such as data visualization,
                            business intelligence applications or relational database management — to help get your
                            first job. With a higher degree, more career opportunities have been opened to you, and it
                            may be time to go after a promotion — and earn a higher salary, too
                        </p>
                    </div>

                    <img src="{{ asset('img/data-scientist-pathway.png') }}" class="col-md-6">
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="p3-3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p3-3"
                aria-expanded="false" aria-controls="c-p3-3">
                What does it take to be a Data Scientist?
            </button>
        </h2>

        <div id="c-p3-3" class="accordion-collapse collapse" aria-labelledby="p3-3" data-bs-parent="#p3">
            <div class="accordion-body row" style="text-align: left;">
                <div class="col-md-6">
                    <h3>Hard Skill (Technical) :</h3>
                    <br>
                    <h4>Programming Language :</h4>
                    <ul class="dash">
                        <li>Java</li>
                        <li>Python</li>
                        <li>R</li>
                        <li>SQL</li>
                    </ul>

                    <br>

                    <h4>Other :</h4>
                    Math, specifically in:
                    <ul class="dash">
                        <li>Statistics</li>
                        <li>Algebra</li>
                        <li>Basic calculus</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4>Programming Language :</h4>
                    <ul class="dash">
                        <li>Intuitive</li>
                        <li><b>Storytelling</b></li>
                        <li><b>Interpersonal and communication</b></li>
                        <li>Ethical</li>
                        <li>Lifelong learning</li>
                        <li>Visualization</li>
                    </ul>

                    <br>

                    <p>Storytelling and interpersonal skills are two important skills that data scientist need to have,
                        as they are required to communicate insights from the processed data to the stakeholders in the
                        business field.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
