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
                <h5>Case Studies</h5>
            </div>
            <hr class="m-1 border-2 mx-auto" width="95%">
            <div class="card-body">
                <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item step cs">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part5-1">
                                <i class="far fa-check-circle pe-2" id="dm-icon1"></i>
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
                                        help Mrs. Penny improve her sales through SOCIAL MEDIA MARKETING. <br>
                                        How should Mrs.
                                        Penny strategize her social media marketing?
                                        <br> <br>
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/PNkCR5rGIzw"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                        <br><br>
                                        <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item dm-cs1">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#cs1-1">
                                                        <i class="far fa-check-circle pe-2" id="cs1Icon1"></i>
                                                        How would you identify her target market?
                                                    </button>
                                                </h2>
                                                <div id="cs1-1" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12 mb-3">
                                                                <p>
                                                                    Buyer persona to unlock new
                                                                    potential target market
                                                                </p>
                                                                <div class="row">
                                                                    <div class="col-md-8 mx-auto">
                                                                        <img src="{{ asset('img/data-marketing/cs1.png') }}"
                                                                            width="100%"> <br> <br>
                                                                        <img src="{{ asset('img/data-marketing/cs2.png') }}"
                                                                            width="100%"> <br> <br>
                                                                        <img src="{{ asset('img/data-marketing/cs3.png') }}"
                                                                            width="100%"> <br><br>
                                                                    </div>
                                                                </div>
                                                                <img src="{{ asset('img/data-marketing/cs4.png') }}"
                                                                    width="100%">
                                                                <br><br>
                                                                <p>
                                                                    Let’s see the user persona example here. Your task is to
                                                                    determine who is the target market of Mrs. Penny’s cake?
                                                                    Is it going to be a teenage girl? Or a 30 years old mom?
                                                                    Or career woman? What is her/his occupation? Try to
                                                                    complete the buyer persona using the worksheet below!

                                                                <div class="text-center">
                                                                    <button class="btn btn-primary btn-sm px-3">Download the
                                                                        Worksheet</button>
                                                                </div>
                                                                </p>
                                                                <hr class="my-1">
                                                                <br>
                                                                Please upload your worksheet below <br>
                                                                <input type="file" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 text-end">
                                                                <hr class="m-0 mb-2">
                                                                <button class="btn btn-primary btn-sm px-3"
                                                                    onclick="csNext(1, 1)">
                                                                    Submit <i
                                                                        class="far fa-arrow-alt-circle-right ps-2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item dm-cs1">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#cs1-2">
                                                        <i class="far fa-check-circle pe-2" id="cs1Icon2"></i>
                                                        How do you define their goals and pains?
                                                    </button>
                                                </h2>
                                                <div id="cs1-2" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12 mb-3">
                                                                <p>
                                                                    Determine Goals/Objective
                                                                </p>
                                                                <div class="row">
                                                                    <div class="col-md-8 mx-auto">
                                                                        <img src="{{ asset('img/data-marketing/cs5.png') }}"
                                                                            width="100%">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <b>Customer Jobs:</b> what
                                                                        is the customer trying
                                                                        to get done by
                                                                        purchasing your
                                                                        product. (eg: provide
                                                                        food hampers for a
                                                                        friend’s birthday)
                                                                        <br><br>
                                                                        <b>Pain:</b> what is
                                                                        something that can
                                                                        hinder your customer
                                                                        from getting the job
                                                                        done. (eg: Spoiled
                                                                        food, Long cooking
                                                                        time)
                                                                        <br><br>
                                                                        <b>Gain:</b> what is the
                                                                        positive outcome that
                                                                        your consumers get
                                                                        when the job is getting
                                                                        done. (eg: sanitary
                                                                        packaging, fast
                                                                        delivery)
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <p>
                                                                    After you have completed the user persona, now you can
                                                                    take a look at customer gain, pain, and goals. If you
                                                                    are Mrs. Penny’s customer, what do you think you want to
                                                                    have when you purchase it? what is something that can
                                                                    hinder you from purchasing the cake? What is the
                                                                    positive outcome that you will get when the job is
                                                                    getting done? Try to complete the diagram here using
                                                                    below worksheet!
                                                                </p>
                                                                <hr class="my-1">
                                                                <br>
                                                                Please upload your worksheet below <br>
                                                                <input type="file" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 text-end">
                                                                <hr class="m-0 mb-2">
                                                                <button class="btn btn-primary btn-sm px-3"
                                                                    onclick="csNext(2, 1)">
                                                                    Submit <i
                                                                        class="far fa-arrow-alt-circle-right ps-2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item dm-cs1">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#cs1-3">
                                                        <i class="far fa-check-circle pe-2" id="cs1Icon3"></i>
                                                        What Social Media do you think is appropriate
                                                        to use?
                                                    </button>
                                                </h2>
                                                <div id="cs1-3" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12 mb-3">
                                                                <p>
                                                                    Determine the best Social Media(s) and Strategy to
                                                                    market her business
                                                                </p>
                                                                <p>
                                                                    Based on buyer persona, especially touchpoints and
                                                                    customer’s goals what is the best determine social
                                                                    media to market her business?
                                                                    <br><br>
                                                                    From the data you have compiled in Step 1, construct
                                                                    a mind map of different social media that can be
                                                                    used for Mrs. P’s promotion. You can start by decide
                                                                    which social media is the most suitable?
                                                                    What is the best strategy for marketing, will you
                                                                    use discount? Promo? KOL? Put your strategy using
                                                                    below worksheet!
                                                                </p>
                                                                <hr class="my-1">
                                                                <br>
                                                                Please upload your worksheet below <br>
                                                                <input type="file" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 text-end">
                                                                <hr class="m-0 mb-2">
                                                                <button class="btn btn-primary btn-sm px-3"
                                                                    onclick="csNext(3, 1)">
                                                                    Submit <i
                                                                        class=" far fa-arrow-alt-circle-right
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ps-2"></i>
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
                        </div>
                    </div>

                    <div class="accordion-item step cs">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#part5-2">
                                <i class="far fa-check-circle pe-2" id="dm-icon2"></i>
                                Case Study #2
                            </button>
                        </h2>
                        <div id="part5-2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-3">
                                        <p>
                                            Before the case study start, make sure you have signed up on your Hootsuite
                                            account.
                                            <br>
                                            You are a digital marketer tasked to advertise new Baby Formula product with
                                            banana
                                            flavor. You are to research the competitors and plan a marketing campaign to
                                            promote
                                            this Baby Formula. You have been given a few facts and figures of the target
                                            market:
                                        <ul>
                                            <li>
                                                Low to mid socioeconomic groups
                                            </li>
                                            <li>
                                                20-40 year old mothers
                                            </li>
                                            <li>
                                                Instagram users
                                            </li>
                                            <li>
                                                Baby formula is the first one to have Banana flavor
                                            </li>
                                        </ul>
                                        <br>
                                        This Baby Formula is also a direct competitior to other baby formulas like
                                        Similac
                                        or Enfamil. Use competitior analysis, customer journey, and concept board to
                                        determine a week of content planning
                                        </p>

                                        <br>
                                        <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item dm-cs2">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#cs2-1">
                                                        <i class="far fa-check-circle pe-2" id="cs2Icon1"></i>
                                                        Competitor Analysis
                                                    </button>
                                                </h2>
                                                <div id="cs2-1" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12 mb-3">
                                                                <p>
                                                                    The first step in successfully marketing your baby
                                                                    formula is understanding the digital marketing employed
                                                                    by your competitors. Construct a table detailing the
                                                                    pros and cons of 2-3 competitor brands’ MOST RECENT
                                                                    digital marketing campaigns.
                                                                </p>

                                                                <div class="text-center">
                                                                    <button class="btn btn-primary btn-sm px-3">Download the
                                                                        Worksheet</button>
                                                                </div>
                                                                </p>
                                                                <hr class="my-1">
                                                                <br>
                                                                Please upload your worksheet below <br>
                                                                <input type="file" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 text-end">
                                                                <hr class="m-0 mb-2">
                                                                <button class="btn btn-primary btn-sm px-3"
                                                                    onclick="csNext(1, 2)">
                                                                    Submit <i
                                                                        class="far fa-arrow-alt-circle-right ps-2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item dm-cs2">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#cs2-2">
                                                        <i class="far fa-check-circle pe-2" id="cs2Icon2"></i>
                                                        Customer Journey
                                                    </button>
                                                </h2>
                                                <div id="cs2-2" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12 mb-3">
                                                                <img src="{{ asset('img/data-marketing/cs6.png') }}"
                                                                    width="100%">

                                                                <div class="text-center">
                                                                    <button class="btn btn-primary btn-sm px-3">Download the
                                                                        Worksheet</button>
                                                                </div>
                                                                </p>
                                                                <hr class="my-1">
                                                                <br>
                                                                Please upload your worksheet below <br>
                                                                <input type="file" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 text-end">
                                                                <hr class="m-0 mb-2">
                                                                <button class="btn btn-primary btn-sm px-3"
                                                                    onclick="csNext(2, 2)">
                                                                    Submit <i
                                                                        class="far fa-arrow-alt-circle-right ps-2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item dm-cs2">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#cs2-3">
                                                        <i class="far fa-check-circle pe-2" id="cs2Icon3"></i>
                                                        Concept board
                                                    </button>
                                                </h2>
                                                <div id="cs2-3" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12 mb-3">
                                                                <p>
                                                                    Now that you know what strategies that your competitors
                                                                    use for digital marketing, create a concept board where
                                                                    you add all the ideas/concepts you’d like to incorporate
                                                                    for your digital marketing campaign. A concept board
                                                                    looks like this. [link]
                                                                </p>
                                                                <img src="{{ asset('img/data-marketing/cs7.png') }}"
                                                                    width="100%">

                                                                <div class="text-center">
                                                                    <button class="btn btn-primary btn-sm px-3">Download the
                                                                        Worksheet</button>
                                                                </div>
                                                                </p>
                                                                <hr class="my-1">
                                                                <br>
                                                                Please upload your worksheet below <br>
                                                                <input type="file" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 text-end">
                                                                <hr class="m-0 mb-2">
                                                                <button class="btn btn-primary btn-sm px-3"
                                                                    onclick="csNext(3, 2)">
                                                                    Submit <i
                                                                        class="far fa-arrow-alt-circle-right ps-2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
            let n = $('.step').length
            for (i = 1; i <= n; i++) {
                if (sessionStorage.getItem('part5-' + i) == 'read') {
                    $('#dm-icon' + i).removeClass('far fa-check-circle')
                    $('#dm-icon' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let m = $('.cs').length
            for (i = 1; i <= m; i++) {
                let z = $('.dm-cs' + i).length
                for (a = 1; a <= z; a++) {
                    if (sessionStorage.getItem('dm-cs' + i + '' + a) == 'read') {
                        $('#cs' + i + 'Icon' + a).removeClass('far fa-check-circle')
                        $('#cs' + i + 'Icon' + a).addClass('fas fa-check-circle text-success')
                    }
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
            sessionStorage.setItem("part5-" + n, "read");
            if (sessionStorage.getItem('part5-' + n) == 'read') {
                $('#dm-icon' + n).removeClass('far fa-check-circle')
                $('#dm-icon' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#part5-' + n).collapse('toggle');
            $('#part5-' + next).collapse('toggle');

            let j = $('.step').length
            let z = 0
            for (i = 1; i <= j; i++) {
                if (sessionStorage.getItem('part5-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("dm-part" + part, "done");
                if (sessionStorage.getItem('dm-part' + part) == 'done') {
                    $('#dm-iconPart' + part).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }

        }

        function csNext(n, part) {
            sessionStorage.setItem("dm-cs" + part + "" + n, "read");
            if (sessionStorage.getItem('dm-cs' + part + '' + n) == 'read') {
                $('#cs' + part + 'Icon' + n).removeClass('far fa-check-circle')
                $('#cs' + part + 'Icon' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#cs' + part + '-' + n).collapse('toggle');
            $('#cs' + part + '-' + next).collapse('toggle');

            let j = $('.dm-cs' + part).length
            let z = 0
            for (i = 1; i <= j; i++) {
                if (sessionStorage.getItem('dm-cs' + part + '' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part5-" + part, "read");
                if (sessionStorage.getItem('part5-' + part) == 'read') {
                    $('#dm-icon' + part).addClass('fas fa-check-circle text-success float-end mt-1')
                }
            }
        }

    </script>
@endsection
