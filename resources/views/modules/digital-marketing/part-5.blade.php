@extends('layout.module.app')
@section('title')
    Digital Marketing | Case Studies
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
    <div class="container pt-3">
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
            <div class="py-2 text-center">
                <h5>Case Studies</h5>
                <hr class="m-1 border-2 mx-auto" width="90%">
            </div>
            <div class="card-body">
                <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part5-1">
                                <i class="far fa-check-circle pe-2" id="icon1"></i>
                                Case Study #1
                            </button>
                        </h2>
                        <div id="part5-1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-3">
                                        Mrs. Penny opened a store selling her handmade traditional snacks but, because of
                                        the
                                        pandemic, she is unable to open an actual store/kiosk in shopping centres. As of
                                        now, she
                                        promotes her business through sending a poster to WhatsApp group chat and has
                                        recently
                                        started an Instagram account. Her customers are her closes friends and neighbors
                                        with the
                                        similar age and occupation. However, because she is unfamiliar with digital
                                        marketing, she
                                        is having trouble promoting her traditional cakes to other people outside her
                                        WhatsApp
                                        group and she doesn’t know how social media can be used for marketing. You are
                                        called to
                                        help Mrs. Penny improve her sales through SOCIAL MEDIA MARKETING.

                                        <br><br>
                                        How should Mrs.
                                        Penny strategize her social media marketing?
                                        <textarea class="form-control"></textarea>
                                        <br>
                                        How would you identify her target market?
                                        <textarea class="form-control"></textarea>
                                        <br>
                                        What Social Media do you think is appropriate
                                        to use?
                                        <textarea class="form-control"></textarea>
                                        <br>
                                        And how do you plan to manage content pillar?
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(1, 5)">
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
                                data-bs-target="#part5-2">
                                <i class="far fa-check-circle pe-2" id="icon2"></i>
                                Explanation Case Study + Theory
                            </button>
                        </h2>
                        <div id="part5-2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-3">
                                        VIDEO
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <hr class="m-0 mb-2">
                                        <button class="btn btn-info btn-sm px-3" onclick="next(2, 5)">
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
                if (sessionStorage.getItem('part5-' + i) == 'read') {
                    $('#icon' + i).removeClass('far fa-check-circle')
                    $('#icon' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
                    $('#iconPart' + i).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("part5-" + n, "read");
            if (sessionStorage.getItem('part5-' + n) == 'read') {
                $('#icon' + n).removeClass('far fa-check-circle')
                $('#icon' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#part5-' + n).collapse('toggle');
            $('#part5-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('part5-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#iconPart' + part).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }

        }

    </script>
@endsection
