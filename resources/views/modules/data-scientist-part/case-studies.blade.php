@extends('layout.module.app')
@section('title')
    Data Scientist | Case Studies
@endsection

@section('banner')
    @include('modules.data-scientist-part.banner')
@stop

@section('sidebar')
    @include('layout.module.sidebar-ds')
@endsection

@section('content')
    <div class="content">
        <div class="card p-3">
            <div class="accordion accordion-flush" id="p5">
                <div class="border-bottom">
                    <h3 class="section-header" id="p5-header">
                        <div>Case Study</div>
                    </h3>
                </div>

                {{-- <div class="accordion-item">
                    <h2 class="accordion-header" id="p5-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p5-1"
                            aria-expanded="false" aria-controls="c-p5-1">
                            <i class="far fa-check-circle pe-2" id="ds-icon5-1"></i>
                            Case Study Explanation
                        </button>
                    </h2>

                    <div id="c-p5-1" class="accordion-collapse collapse show" aria-labelledby="p5-1" data-bs-parent="#p5">
                        <div class="accordion-body" style="text-align: left;">
                            <h2>VIDEO 3 - CASE STUDY EXPLANATION</h2>

                            <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(1, 5)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="accordion-item accordion-parent">
                    <h2 class="accordion-header" id="p5-1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p5-1" aria-expanded="false" aria-controls="c-p5-1">
                            <i class="far fa-check-circle pe-2" id="ds-icon5-1"></i>
                            Case Study #1
                        </button>
                    </h2>

                    <div id="c-p5-1" class="accordion-collapse collapse" aria-labelledby="p5-2" data-bs-parent="#p5">
                        <div class="accordion-body" style="text-align: left;">
                            <p>Data Science plays a huge role in many industries. One of the industry that are also affected
                                by data
                                science is retail sector. Majority of the leading retail stores implement Data Science to
                                keep track
                                of their customer needs and make better business decisions. As a data scientist, you will be
                                asked
                                to give a better understanding to the retailers on their current sales condition. Provide a
                                step by
                                step explanation of how the raw data will turn into visualization for a better
                                understanding.
                                (Expert pls provide the dataset)</p>

                            <h2>VIDEO 3 - CASE STUDY EXPLANATION</h2>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c-p5-1-1" aria-expanded="false" aria-controls="c-p5-1-1">
                                        <i class="far fa-check-circle pe-2" id="ds-icon5-1-1"></i>
                                        Answer
                                    </button>
                                </h2>
                                <div id="c-p5-1-1" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div class="card">
                                            <!-- 1 -->
                                            <div class="card-header">
                                                ANSWER - CRISP DM
                                            </div>
                                            <div class="card-body">
                                                <p>Professionals will be explaining about CRISP DM methodology as one of the
                                                    most popular
                                                    methodology
                                                    that data scientist will use in order to gain more insight from the
                                                    data.</p>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <!-- 2 -->
                                            <div class="card-header">
                                                ANSWER - Business Understanding
                                            </div>
                                            <div class="card-body">
                                                <p>Professionals will be explaining about how does business accumen
                                                    important in order to
                                                    produce useful
                                                    insights of the data science process.</p>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <!-- 3 -->
                                            <div class="card-header">
                                                ANSWER - EDA
                                            </div>
                                            <div class="card-body">
                                                <div class="pt-3 pb-3">
                                                    <h6>How many distinct stores in the data?</h6>
                                                    {{-- <p>Type UNIQUE(B:B)</p> --}}
                                                    <textarea class="form-control w-100" id="" cols="30"
                                                        rows="5"></textarea>
                                                </div>

                                                <div class="pt-3 pb-3">
                                                    <h6>How many distinct numbers of departments in the data?</h6>
                                                    {{-- <p>Type UNIQUE(C:C)</p> --}}
                                                    <textarea class="form-control w-100" id="" cols="30"
                                                        rows="5"></textarea>
                                                </div>

                                                <div class="pt-3 pb-3">
                                                    <h6>Could you tell the date range in the data?</h6>
                                                    {{-- <p>Type MIN(D:D)</p>
                                                    <p>Type MAX{D:D)</p> --}}
                                                    <textarea class="form-control w-100" id="" cols="30"
                                                        rows="5"></textarea>
                                                </div>

                                                <div class="pt-3 pb-3">
                                                    <h6>How many different store types in the data?</h6>
                                                    {{-- <p>Type UNIQUE(G:G)</p> --}}
                                                    <textarea class="form-control w-100" id="" cols="30"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                                    <a href="#aws_1_cont">
                                                        <button class="btn btn-primary btn-sm px-3">
                                                            Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <!-- 4 -->
                                            <div class="card-header" id="aws_1_cont">
                                                ANSWER - EDA (Statistic)
                                            </div>
                                            <div class="card-body">
                                                <h6>How much average weekly sales per store?</h6>
                                                <p>In PivotChart, drag store column to Legend (Series)</p>
                                                <p>Drag Average of weekly sales to Values</p>

                                                <br>

                                                <div class="pb-3">
                                                    <h6>Which stores is having highest average weekly sales?</h6>
                                                    {{-- <p>Type MAX(3:3)</p> --}}
                                                    <textarea id="aws_1" class="form-control w-100" id=""
                                                        rows="5"></textarea>
                                                </div>

                                                <br>

                                                <div class="pb-3">
                                                    <h6>Which stores is having lowest average weekly sales?</h6>
                                                    {{-- <p>Type MIN(3:3)</p> --}}
                                                    <textarea class="form-control w-100" id="" rows="5"></textarea>
                                                </div>

                                                <br>

                                                <div class="pb-3">
                                                    <h6>Which month is having the average highest temperature?</h6>
                                                    <p>In PivotChart, drag Date column to Rows</p>
                                                    <p>Drag Average of Temperature to Values</p>
                                                    {{-- <p>Type MAX(B:B)</p> --}}
                                                    <textarea class="form-control w-100" id="" rows="5"></textarea>
                                                </div>

                                                <br>

                                                <div class="pb-3">
                                                    <h6>Which month is having the average highest fuel price?</h6>
                                                    <p>In PivotChart, drag Date column to Rows</p>
                                                    <p>Drag Average of Fuel Price to Values</p>
                                                    {{-- <p>Type MAX(B:B)</p> --}}
                                                    <textarea class="form-control" id="" rows="5"></textarea>
                                                </div>

                                                <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                                    <a href="#aws_2_cont">
                                                        <button class="btn btn-primary btn-sm px-3">
                                                            Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <!-- 5 -->
                                            <div class="card-header" id="aws_2_cont">
                                                ANSWER - Data Cleaning
                                            </div>
                                            <div class="card-body">
                                                <div class="pb-3" id="aws_2_cont">
                                                    <h6>Which columns having missing values?</h6>
                                                    <p>Filter each columns, see if a column is containing BLANKS</p>
                                                    <textarea id="aws_2" class="form-control w-100" id=""
                                                        rows="5"></textarea>
                                                </div>
                                                <br>

                                                <div class="pb-3">
                                                    <h6>If any, please fill the missing values</h6>
                                                    <p>Find average values for the missing columns, and fill the blank with
                                                        it!</p>
                                                    <textarea class="form-control w-100" id="" rows="5"></textarea>
                                                </div>

                                                <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                                    <button class="btn btn-primary btn-sm px-3" onclick="sub_next(1, 1, 5)">
                                                        Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c-p5-1-2" aria-expanded="false" aria-controls="c-p5-1-2">
                                        <i class="far fa-check-circle pe-2" id="ds-icon5-1-2"></i>
                                        Case Study Answer
                                    </button>
                                </h2>

                                <div id="c-p5-1-2" class="accordion-collapse collapse">
                                    <div class="accordion-body" style="text-align: left;">
                                        <h2>VIDEO 4 - CASE STUDY ANSWER</h2>
                                        <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                            <button class="btn btn-info btn-sm px-3" onclick="sub_next(1, 2, 5)">
                                                Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-parent">
                    <h2 class="accordion-header" id="p5-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-p5-2" aria-expanded="false" aria-controls="c-p5-2">
                            <i class="far fa-check-circle pe-2" id="ds-icon5-2"></i>
                            Case Study #2
                        </button>
                    </h2>

                    <div id="c-p5-2" class="accordion-collapse collapse" aria-labelledby="p5-2" data-bs-parent="#p5">
                        <div class="accordion-body">
                            <p>From the data that has been provided on the previous case study, try to turn it into
                                visualization!
                            </p>

                            <h2>VIDEO 5 - CASE STUDY EXPLANATION</h2>

                            <textarea class="form-control w-100 mb-3" id="" rows="5"></textarea>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="p5-2-1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c-p5-2-1" aria-expanded="false" aria-controls="c-p5-2-1">
                                        <i class="far fa-check-circle pe-2" id="ds-icon5-2-1"></i>
                                        Data Cleaning
                                    </button>
                                </h2>

                                <div id="c-p5-2-1" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Professionals will be explaining about the importance of data cleaning process
                                            which includes
                                            getting
                                            rid of all inconsistencies, such as missing values and any redundant variables
                                        </p>
                                        <ul>
                                            <li>Check if the data have any missing values (NA) and analyze which variables
                                                have the null
                                                values
                                            </li>
                                            <li>Explain how to get rid of any unnecessary variable that isn’t essential for
                                                predicting
                                                the
                                                outcome</li>
                                        </ul>
                                        <p>The predictor variables used are <i>Store, Dept, Date, CPI, Weekly_Sales,
                                                IsHoliday</i></p>

                                        <textarea class="form-control" id="" cols="30" rows="5"></textarea>
                                        <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                            <button class="btn btn-primary btn-sm px-3" onclick="sub_next(2, 1, 5)">
                                                Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="p5-2-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c-p5-2-2" aria-expanded="false" aria-controls="c-p5-2-2">
                                        <i class="far fa-check-circle pe-2" id="ds-icon5-2-2"></i>
                                        Data Visualization
                                    </button>
                                </h2>

                                <div id="c-p5-2-2" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <h6>Professionals giving lecture on Exploratory Data Analysis after having a clean
                                            data</h6>
                                        <ul>
                                            <li>Explain data visualization - how to visualize data in the form of boxplots,
                                                graphs, etc.
                                            </li>
                                            <li>Explain data analysis - how to analyze each feature variable to check if the
                                                variables
                                                are
                                                significant for building the model</li>
                                        </ul>

                                        <textarea class="form-control mt-3" cols="30" rows="5"></textarea>

                                        <br>

                                        <h6>Create time series graph on weekly sales per store</h6>
                                        <ul>
                                            <li>In PivotChart, drag Date column to Rows or Axis (Categories)</li>
                                            <li>Drag Average of Weekly Sales to Values</li>
                                            <li>Change the chart to line chart</li>
                                        </ul>

                                        <textarea class="form-control mt-3" cols="30" rows="5"></textarea>

                                        <br>

                                        <h6>Create time series graph on temperature</h6>
                                        <ul>
                                            <li>In PivotChart, drag Date column to Rows or Axis (Categories)</li>
                                            <li>Drag Average of Temperature to Values</li>
                                            <li>Change the chart to line chart</li>
                                        </ul>

                                        <textarea class="form-control mt-3" cols="30" rows="5"></textarea>

                                        <br>

                                        <h6>Create time series graph on fuel price</h6>
                                        <ul>
                                            <li>In PivotChart, drag Date column to Rows or Axis (Categories)</li>
                                            <li>Drag Average of Fuel Price to Values</li>
                                            <li>Change the chart to line chart</li>
                                        </ul>

                                        <textarea class="form-control mt-3" cols="30" rows="5"></textarea>

                                        <br>

                                        <h6>Create bar graph showing average weekly sales per store</h6>
                                        <ul>
                                            <li>Drag Sum of Weekly Sales to Values</li>
                                            <li>Drag Store to Legend (Series)</li>
                                            <li>Change the chart to bar graph</li>
                                        </ul>

                                        <textarea class="form-control mt-3" cols="30" rows="5"></textarea>

                                        <br>

                                        <h6>Create scatter plot showing relationship between weekly sales and temperature.
                                        </h6>
                                        <p>Select column Weekly Sales and Temperature</p>
                                        <p>Click Insert and select scatter plot</p>
                                        <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                            <button class="btn btn-primary btn-sm px-3" onclick="sub_next(2, 2, 5)">
                                                Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="p5-2-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c-p5-2-3" aria-expanded="false" aria-controls="c-p5-2-3">
                                        <i class="far fa-check-circle pe-2" id="ds-icon5-2-3"></i>
                                        Model Building
                                    </button>
                                </h2>

                                <div id="c-p5-2-3" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <ul>
                                            <h6>Professionals giving lecture on model building, specifically Linear
                                                Regression model for
                                                this
                                                problem since the outcome is a continuous variable (Number of sales)</h6>

                                            <br>

                                            <h6>Which column/columns is/are our target variable?</h6>
                                            <li>Pick Weekly Sales as our target variable, and other numeric columns as
                                                predictor</li>

                                            <textarea class="form-control mt-3" cols="30" rows="5"></textarea>

                                            <br>

                                            <h6>How many column/columns is/are eligible as features for linear regression?
                                            </h6>
                                            <li>Choose columns with numeric value!</li>

                                            <textarea class="form-control mt-3" cols="30" rows="5"></textarea>

                                            <br>

                                            <h6>Which column/columns is/are our target variable?</h6>
                                            <li>Let’s create linear regression with formula of y = m1x1 + m2x2 + m3x3 + m4x4
                                                + m5x5 + b
                                            </li>
                                            <li>Type LINEST(E2:E5771;H2:L5771) in column M</li>
                                            <li>M to Q columns are the value of m1 to m5, while R column is the value of b
                                            </li>

                                            <textarea class="form-control mt-3" cols="30" rows="5"></textarea>
                                        </ul>
                                        <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                            <button class="btn btn-primary btn-sm px-3" onclick="sub_next(2, 3, 5)">
                                                Submit <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c-p5-2-4" aria-expanded="false" aria-controls="c-p5-2-4">
                                        <i class="far fa-check-circle pe-2" id="ds-icon5-2-4"></i>
                                        Case Study Answer
                                    </button>
                                </h2>

                                <div id="c-p5-2-4" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <h2>VIDEO 6 - CASE STUDY ANSWER</h2>

                                        <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                            <button class="btn btn-info btn-sm px-3" onclick="sub_next(2, 4, 5)">
                                                Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-md-12 text-end mt-4 pt-2 border-top">
                                <button class="btn btn-info btn-sm px-3" onclick="next(10, 5)">
                                    Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                                </button>
                            </div> --}}
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
                for (j = 1; j <= n; j++) {
                    if (sessionStorage.getItem('c-p5-' + i + '-' + j)) {
                        $('#ds-icon5-' + i + '-' + j).removeClass('far fa-check-circle')
                        $('#ds-icon5-' + i + '-' + j).addClass('fas fa-check-circle text-success')
                    }
                }
                if (sessionStorage.getItem('c-p5-' + i) == 'read') {
                    $('#ds-icon5-' + i).removeClass('far fa-check-circle')
                    $('#ds-icon5-' + i).addClass('fas fa-check-circle text-success')
                }
            }

            let nPart = $('.list-group-item').length
            for (i = 1; i <= nPart; i++) {
                if (sessionStorage.getItem('part' + i) == 'done') {
                    $('#ds-iconPart' + i).addClass('fas fa-check-circle float-end mt-1 text-success')
                }
            }
        });

        function next(n, part) {
            sessionStorage.setItem("c-p5-" + n, "read");
            if (sessionStorage.getItem('c-p5-' + n) == 'read') {
                $('#ds-icon5-' + n).removeClass('far fa-check-circle')
                $('#ds-icon5-' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#c-p5-' + n).collapse('toggle');
            $('#c-p5-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('c-p5-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1 text-success')
                    window.location = "<?php echo url('/data-scientist/reflection'); ?>";
                }
            }
        }

        function sub_next(n, index, part) {
            sessionStorage.setItem("c-p5-" + n + "-" + index, "read");
            if (sessionStorage.getItem('c-p5-' + n + "-" + index) == 'read') {
                $('#ds-icon5-' + n + '-' + index).removeClass('far fa-check-circle')
                $('#ds-icon5-' + n + '-' + index).addClass('fas fa-check-circle text-success')
            }

            let next = index + 1
            $('#c-p5-' + n + "-" + index).collapse('toggle');
            $('#c-p5-' + n + "-" + next).collapse('toggle');

            let j = $('#c-p5-' + n + ' .accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('c-p5-' + n + '-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("c-p5-" + n, "read");
                if (sessionStorage.getItem('c-p5-' + n) == 'read') {
                    $('#ds-icon5-' + n).removeClass('far fa-check-circle')
                    $('#ds-icon5-' + n).addClass('fas fa-check-circle text-success')
                }

                let k = $('.accordion-parent').length
                let m = 0
                for (i = 0; i <= k; i++) {
                    if (sessionStorage.getItem('c-p5-' + i) == 'read') {
                        m++
                    }
                }

                if (m == k) {
                    sessionStorage.setItem("part" + part, "done");
                    if (sessionStorage.getItem('part' + part) == 'done') {
                        $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1 text-success')
                        window.location = "<?php echo url('/data-scientist/reflection'); ?>";
                    }
                }

                let next2 = n + 1
                $('#c-p5-' + n).collapse('toggle');
                $('#c-p5-' + next2).collapse('toggle');
            }
        }
    </script>
@endsection
