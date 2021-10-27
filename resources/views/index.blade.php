@extends('layout.app')
@section('title')
    Home
@endsection

@section('content')
    <br>
    <div class="container">
        <img src="{{ asset('img/CMW_Career module cover.webp') }}" width="100%">
    </div>
    <h1 class="float-end" style="position: absolute; margin-top: -13%; right: 15%; font-size: 3em; text-align: right;">
        Welcome To <br>
        Career Exploration <br> Module
    </h1>

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="card border mb-4">
                    <div class="card-body px-4">
                        <p style="font-size: 22px">
                            Hello, <br><br>
                            Are you currently trying to figure out what you want as a career in the future? <br><br>
                            ALL-in Career Module is here to provide you the space to discover various job roles and
                            industries of
                            your
                            interest. Learn the basic knowledge of each career and how to implement them through hands-on
                            learning
                            experience here.<br><br>
                            Let’s walk on your career exploration journey with ALL-in Career Module!
                        </p>
                    </div>
                </div>
                <div class="sp text-center pt-4">
                    <h1 id="career"><b>Career Choices</b></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ url('digital-marketing/part-1') }}">
                    <div class="card">
                        <div class="container2 img-bg">
                            <img src="{{ asset('img/no background icon/CMW_1. Digital Marketing (1).webp') }}"
                                class="card-img-top">
                            <div class="bottom-right">Digital Marketing <br>Specialist
                            </div>
                            <i class="fas fa-check-circle text-success float-end mt-1 d-none icon-done" id="dm"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ url('data-scientist/1') }}">
                    <div class="card">
                        <div class="container2 img-bg">
                            <img src="{{ asset('img/CMW_2. Data Scientist.webp') }}" class="card-img-top">
                            <div class="bottom-right">Data Scientist
                            </div>
                            <i class="fas fa-check-circle text-success float-end mt-1 d-none icon-done" id="ds"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center pt-2">
                        {{-- <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock"> --}}
                    </div>
                    <div class="container2 img-bg">
                        <img src="{{ asset('img/CMW_3. Full Stack Engineer.webp') }}" class="card-img-top blur">
                        <div class="bottom-right blur">Full Stack Engineering
                        </div>

                        <i class="fas fa-lock text-dark mt-1 float-start icon-lock"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center pt-2">
                        {{-- <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock"> --}}
                    </div>
                    <div class="container2 img-bg">
                        <img src="{{ asset('img/CMW_4. UX Designer.webp') }}" class="card-img-top blur">
                        <div class="bottom-right blur">UX Designer
                        </div>

                        <i class="fas fa-lock text-dark mt-1 float-start icon-lock"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center pt-2">
                        {{-- <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock"> --}}
                    </div>
                    <div class="container2 img-bg">
                        <img src="{{ asset('img/CMW_5.Biomedical Engineer.webp') }}" class="card-img-top blur">
                        <div class="bottom-right blur">Biomedical Engineering
                        </div>

                        <i class="fas fa-lock text-dark mt-1 float-start icon-lock"></i>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center pt-2">
                        {{-- <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock"> --}}
                    </div>
                    <div class="container2 img-bg">
                        <img src="{{ asset('img/CMW_6.Investment Analyst.webp') }}" class="card-img-top blur">
                        <div class="bottom-right blur">Investment Analyst
                        </div>

                        <i class="fas fa-lock text-dark mt-1 float-start icon-lock"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center pt-2">
                        {{-- <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock"> --}}
                    </div>
                    <div class="container2 img-bg">
                        <img src="{{ asset('img/CMW_7. Psychologist.webp') }}" class="card-img-top blur">
                        <div class="bottom-right blur">Psychologist
                        </div>

                        <i class="fas fa-lock text-dark mt-1 float-start icon-lock"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center pt-2">
                        {{-- <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock"> --}}
                    </div>
                    <div class="container2 img-bg">
                        <img src="{{ asset('img/CMW_8. Conten Creator.webp') }}" class="card-img-top blur">
                        <div class="bottom-right blur">Content Creator
                        </div>

                        <i class="fas fa-lock text-dark mt-1 float-start icon-lock"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center pt-2">
                        {{-- <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock"> --}}
                    </div>
                    <div class="container2 img-bg">
                        <img src="{{ asset('img/CMW_9. Food Scientist.webp') }}" class="card-img-top blur">
                        <div class="bottom-right blur">Food Scientist
                        </div>

                        <i class="fas fa-lock text-dark mt-1 float-start icon-lock"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center pt-2">
                        {{-- <img src="{{ asset('img/CMW_lock (black).webp') }}" class="img-lock"> --}}
                    </div>
                    <div class="container2 img-bg">
                        <img src="{{ asset('img/CMW_10. Medical Doctor.webp') }}" class="card-img-top blur">
                        <div class="bottom-right blur">Medical Doctor
                        </div>

                        <i class="fas fa-lock text-dark mt-1 float-start icon-lock"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('.img-bg').each(function() {
            $(this).click(function(e) {
                sessionStorage.setItem('first', 'clicked')
            })
        })

    </script>
@endsection
