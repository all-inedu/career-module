@extends('layout.module.app')
@section('title')
    Digital Marketing | Core Tasks
@endsection

@section('banner')
    <div class="banner">
        <div class="container">
            <h1 class="title">
                Digital Marketing <br>
                Specialist 101
            </h1>
        </div>
    </div>
    <div class="container pt-4">
        <p>
            In this module, you will learn about what Digital Marketing Specialist do, types of it, and how you could be a
            Digital Marketing Specialist. Along with case studies, and reflection, we hope that you can gain a deeper
            knowledge
            on Digital Marketing and how to implement them in real-life events.
            <br><br>
            Happy learning!
        </p>
    </div>
@endsection

@section('sidebar')
    @include('layout.module.sidebar-dm')
@endsection

@section('content')
    <div class="content">
        <div class="card">

            <div class="pt-3 pb-2 ps-3">
                <h5>What does a Digital Marketing
                    Specialists do?</h5>
            </div>
            <hr class="m-1 border-2 mx-auto" width="95%">
            <div class="card-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/PNkCR5rGIzw"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

                <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part2-1">
                                <i class="far fa-check-circle pe-2" id="icon1"></i>
                                Core Tasks
                            </button>
                        </h2>
                        <div id="part2-1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-3">
                                        <ul>
                                            <li><strong>Understand</strong> the social media platforms that your audience
                                                uses</li>
                                            <li><strong>Understand</strong> how to make use of social media tools and
                                                features</li>
                                            <li><strong>Plan</strong> marketing strategy through different platforms</li>
                                            <li><strong>Manage</strong> all digital marketing activities on social media,
                                                search engines, etc.</li>
                                            <li><strong>Manage</strong> social media marketing and content</li>
                                            <li><strong>Improve</strong> search engine rankings</li>
                                            <li><strong>Improve</strong> company's online reputation</li>
                                            <li><strong>Ensure</strong> that the user's digital experience is seamless</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(1, 2)">
                                            Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part2-2">
                                <i class="far fa-check-circle pe-2" id="icon2"></i>
                                Digital Marketing Framework (5A)
                            </button>
                        </h2>
                        <div id="part2-2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <img src="{{ asset('img/data-marketing/5a.png') }}" width="100%">
                                    </div>
                                    <div class="col-md-12 mt-3 mb-3">
                                        <b>Aware:</b><br>
                                        You want your audience to see your advertising both online and offline.
                                        <hr class="m-0 mb-2">
                                        <b>Appeal:</b> <br>
                                        You want your audience to be interested about your product or service
                                        <hr class="m-0 mb-2">
                                        <b>Ask:</b><br>
                                        You want your audience to be curious and ask about your product or service or look
                                        for a review in order for them to learn more about it.
                                        <hr class="m-0 mb-2">
                                        <b>Act:</b> <br>
                                        You want your customers to make the decision to buy your product or service.
                                        <hr class="m-0 mb-2">
                                        <b>Advocate:</b><br>
                                        You want your customers to enjoy your product or service, so that they leave a
                                        positive review on social media or advocate their experience to their friends and
                                        family.
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(2, 2)">
                                            Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
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
                if (sessionStorage.getItem('part2-' + i) == 'read') {
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
