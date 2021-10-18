@extends('layout.module.app')
@section('title')
    Data Scientist | Reflection
@endsection

@section('banner')
    <div class="banner">
        <div class="container">
            <h1 class="title">
                Data Science <br>
                101
            </h1>
        </div>
    </div>
@stop

@section('sidebar')
    @include('layout.module.sidebar-ds')
@endsection

@section('content')
    <div class="content">
        <div class="card p-3">
            <div class="accordion accordion-flush" id="p6">
                <div class="border-bottom">
                    <h3 class="section-header" id="p6-header">
                        <div>Glossary</div>
                    </h3>
                </div>

                <div class="pt-4">
                    <ul class="ul-spacing">
                        <li><b>Business Intelligence (BI):</b> the discipline of analyzing and transforming data to extract
                            valuable
                            business insights to enable decision-making</li>
                        <li><b>Data wrangling (munging):</b> the process of cleaning, structuring and enriching raw data
                            into a desired
                            format for better decision making in less time</li>
                        <li><b>Data warehouse:</b> central repository of information that can be used to analyze and make
                            more informed
                            decisions</li>
                        <li><b>Data mining:</b> a process of extracting and discovering patterns in large data sets</li>
                        <li><b>Artificial Intelligence (AI):</b> the ability of a machine to mimic the capabilities of the
                            human mind
                        </li>
                        <li><b>Machine learning:</b> a subset of the artificial intelligence (AI) discipline that provides
                            systems the
                            ability to automatically learn and improve from experience without being explicitly programmed
                        </li>
                        <li><b>Deep learning:</b> a technique that falls into the machine learning discipline based on
                            artificial neural
                            networks. It learns from vast amounts of data and finds patterns from unstructured data such as
                            text and
                            images</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // sessionStorage.clear();
            let n = $('.accordion-item').length
            for (i = 1; i <= n; i++) {
                if (sessionStorage.getItem('c-p6-' + i) == 'read') {
                    $('#icon6-' + i).removeClass('far fa-check-circle')
                    $('#icon6-' + i).addClass('fas fa-check-circle')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
                    $('#ds-iconPart' + i).addClass('fas fa-check-circle float-end mt-1')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("c-p6-" + n, "read");
            if (sessionStorage.getItem('c-p6-' + n) == 'read') {
                $('#icon6-' + n).removeClass('far fa-check-circle')
                $('#icon6-' + n).addClass('fas fa-check-circle')
            }

            let next = n + 1
            $('#c-p6-' + n).collapse('toggle');
            $('#c-p6-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('c-p6-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1')
                    window.location = "<?php echo url('/data-scientist/glossary'); ?>";
                }
            }
        }
    </script>
@endsection
