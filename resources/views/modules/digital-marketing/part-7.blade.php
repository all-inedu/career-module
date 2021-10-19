@extends('layout.module.app')
@section('title')
    Digital Marketing | Glossary
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
                <h5>Glossary</h5>
            </div>
            <hr class="m-1 border-2 mx-auto" width="95%">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <b>SEO</b> - Search Engine Optimization, the process of improving the quality and quantity
                                of
                                website
                                traffic to a website or a web page from search engines.
                                <hr>
                                <b>SEM</b> - Search Engine Marketing, form of Internet marketing that involves the promotion
                                of
                                websites by
                                increasing their visibility in search engine results pages primarily through paid
                                advertising.
                                <hr>
                                <b>Google Adwords</b> - Google AdWords is a pay-per-click online advertising platform that
                                allows
                                advertisers to display their ads on Google's search engine results page.
                                <hr>
                                <b>CSS</b> - Cascading Style Sheets is a style sheet language used for describing the
                                presentation of a
                                document written in a markup language
                                <hr>
                                <b>HTML</b> - Hypertext Markup Language is the standard markup language for documents
                                designed
                                to be
                                displayed in a web browser
                                <hr>
                                <b>Pay-per-click</b> - Pay-per-click is an internet advertising model used to drive traffic
                                to
                                websites, in
                                which an advertiser pays a publisher when the ad is clicked.
                                <hr>
                                <b>Marketing Funnel</b> - a consumer-focused marketing model that illustrates the
                                theoretical customer journey toward the purchase of a good or service.
                                <hr>
                                <b>SWOT Analysis</b> - a strategic planning technique used to help a person or organization
                                identify strengths, weaknesses, opportunities, and threats related to business competition
                                or project planning.
                                <hr>
                                <b>Value Proposition Canvas</b> - a tool which can help ensure that a product or service is
                                positioned around what the customer values and needs
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
                if (sessionStorage.getItem('part4-' + i) == 'read') {
                    $('#icon' + i).removeClass('far fa-check-circle')
                    $('#icon' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
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

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#dm-iconPart' + part).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }

        }

    </script>
@endsection
