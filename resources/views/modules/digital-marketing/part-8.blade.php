@extends('layout.module.app')
@section('title')
    Digital Marketing | Additional Resources
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

            <div class="pt-3 pb-2 ps-3">
                <h5>Additional Resources</h5>
            </div>
            <hr class="m-1 border-2 mx-auto" width="95%">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <b>Reading Resources</b>
                                <ul>
                                    <li><a href="https://www.indiatoday.in/education-today/jobs-and-careers/story/5-things-which-make-digital-marketing-a-viable-career-options-post-pandemic-era-1826988-2021-07-12"
                                            target="_blank">Why Digital Marketing is a popular career post
                                            pandemic</a></li>
                                    <li><a href="https://www.accountantsdaily.com.au/sponsored-features/15919-why-digital-marketing-is-your-best-defence-against-economic-uncertainty"
                                            target="_blank">Why Digital Marketing makes a stable and important career
                                            in economic instability</a>
                                    </li>
                                    <li><a href="https://www.forbes.com/sites/theyec/2021/07/19/how-to-use-storytelling-in-digital-marketing-to-transform-your-business/?sh=56ab1e2367e0"
                                            target="_blank">How Digital Marketing uses storytelling to market a
                                            business better</a></li>
                                    <li><a href="https://browsermedia.agency/blog/what-digital-marketers-can-learn-from-englands-euro-2020-campaign/"
                                            target="_blank">Lessons to learn from EURO 2020’s Marketing Strategy</a>
                                    </li>
                                    <li><a href="https://www.thedrum.com/profile/digital-ethos/news/why-choose-a-career-in-digital-marketing"
                                            target="_blank">Why choose a career in digital marketing</a></li>

                                </ul>
                                <br>
                                <b>Course Resources</b>
                                <ul>
                                    <li><a href="https://www.coursera.org/specializations/social-media-marketing"
                                            target="_blank">Spesialisasi Social Media Marketing</a>
                                    </li>
                                    <li><a href="https://www.coursera.org/learn/business-of-social?siteID=SAyYsTvLiGQ-9YbTVyVYfg4XkCOBWg01Rg&utm_content=10&utm_medium=partners&utm_source=linkshare&utm_campaign=SAyYsTvLiGQ"
                                            target="_blank"> The Business of Social</a>
                                    <li><a href="https://www.facebook.com/blueprint" target="_blank">Facebook Blueprint (for
                                            facebook ads)</a></li>
                                    <li><a href="https://www.coursera.org/learn/social-media-advertising?ranMID=40328&ranEAID=XMuWjHlUEYs&ranSiteID=XMuWjHlUEYs-47LkgMAeIhj2r_XQl3BKmA&siteID=XMuWjHlUEYs-47LkgMAeIhj2r_XQl3BKmA&utm_content=10&utm_medium=partners&utm_source=linkshare&utm_campaign=XMuWjHlUEYs"
                                            target="_blank">Social Media Advertising</a>
                                    </li>
                                    <li><a href="#" target="_blank"> Hootsuite Academy</a></li>
                                    <li><a href="https://www.coursera.org/learn/search-engine-optimization" target="_blank">
                                            Introduction to Google SEO</a></li>
                                    <li><a href="https://skillshop.exceedlms.com/student/catalog/list?category_ids=53-google-ads?use_local=true"
                                            target="_blank"> Google Ads course from Google</a></li>

                                </ul>
                                <br>
                                <b>Virtual Internships to try</b>
                                <ul>
                                    <li><a href="https://www.theforage.com/virtual-internships/theme/MpLhQxNfziD3bq8Y8/SydneyRomantics?ref=KDDdXAa9NmYjbqT5K"
                                            target="_blank">Forage
                                        </a></li>
                                </ul>
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