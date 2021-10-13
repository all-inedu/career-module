@extends('layout.module.app')
@section('title')
    Digital Marketing | Intro
@endsection

@section('banner')
    <img src="" alt="">
@endsection

@section('sidebar')
    @include('layout.module.sidebar-dm')
@endsection

@section('content')
    <div class="content">
        <div class="card">

            <div class="py-2 text-center">
                <h5>Introduction</h5>
                <hr class="m-1 border-2 mx-auto" width="90%">
            </div>
            <div class="card-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/PNkCR5rGIzw"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

                <div class="accordion my-2" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#intro1">
                                The Power of Digital Marketing
                            </button>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <div id="intro1" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            Do you remember the BTS meal hype a few months
                                            ago? Let’s take a look at how McDonalds really made it
                                            successful.
                                        </p>

                                        They use collaboration with a famous korean musician, BTS,
                                        which is very popular amongst Indonesia. Hence, they make a
                                        viral marketing to this strategy
                                        <br><br>
                                        <p>
                                            Observe the
                                            Instagram posts
                                            McDonalds posted.
                                            What do you think
                                            makes it effective?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#intro2">
                                Instagram Reels or Vertical Video
                            </button>
                        </h2>
                        <div id="intro2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            Do you know about
                                            Instagram feature that
                                            released on 2021,
                                            named Instagram reels?
                                        </p>
                                        Instagram reels or vertical video is one
                                        of the tools for Digital Marketing to
                                        accelerate their marketing strategy. It is
                                        the new opportunities for them,
                                        because it provide a vertical quick
                                        videos that can be used for market a
                                        business. As a digital marketing, it is
                                        important to keep us updated and seek
                                        opportunities.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
