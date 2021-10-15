<?php $__env->startSection('content'); ?>
    <div class="accordion accordion-flush" id="p4">
        <div class="accordion-item">
            <h2 class="section-header" id="p4-header">
                <div>Case Study</div>
            </h2>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-1"
                    aria-expanded="false" aria-controls="c-p4-1">
                    Case Study Explanation
                </button>
            </h2>

            <div id="c-p4-1" class="accordion-collapse collapse show" aria-labelledby="p4-1" data-bs-parent="#p4">
                <div class="accordion-body" style="text-align: left;">
                    <h2>VIDEO 3 - CASE STUDY EXPLANATION</h2>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-2"
                    aria-expanded="false" aria-controls="c-p4-2">
                    Case Study
                </button>
            </h2>

            <div id="c-p4-2" class="accordion-collapse collapse" aria-labelledby="p4-2" data-bs-parent="#p4">
                <div class="accordion-body" style="text-align: left;">
                    <p>Data Science plays a huge role in many industries. One of the industry that are also affected by data
                        science is retail sector. Majority of the leading retail stores implement Data Science to keep track
                        of their customer needs and make better business decisions. As a data scientist, you will be asked
                        to give a better understanding to the retailers on their current sales condition. Provide a step by
                        step explanation of how the raw data will turn into visualization for a better understanding.
                        (Expert pls provide the dataset)</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-3"
                    aria-expanded="false" aria-controls="c-p4-3">
                    ANSWER - CRISP DM
                </button>
            </h2>

            <div id="c-p4-3" class="accordion-collapse collapse" aria-labelledby="p4-3" data-bs-parent="#p4">
                <div class="accordion-body" style="text-align: left;">
                    <p>Professionals will be explaining about CRISP DM methodology as one of the most popular methodology
                        that data scientist will use in order to gain more insight from the data.</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-4"
                    aria-expanded="false" aria-controls="c-p4-4">
                    ANSWER - Business Understanding
                </button>
            </h2>

            <div id="c-p4-4" class="accordion-collapse collapse" aria-labelledby="p4-4" data-bs-parent="#p4">
                <div class="accordion-body" style="text-align: left;">
                    <p>Professionals will be explaining about how does business accumen important in order to produce useful
                        insights of the data science process.</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-5"
                    aria-expanded="false" aria-controls="c-p4-5">
                    ANSWER - EDA
                </button>
            </h2>

            <div id="c-p4-5" class="accordion-collapse collapse" aria-labelledby="p4-5" data-bs-parent="#p4">
                <div class="accordion-body">
                    <h6>How many distinct stores in the data?</h6>
                    <p>Type UNIQUE(B:B)</p>

                    <h6>How many distinct numbers of departments in the data?</h6>
                    <p>Type UNIQUE(C:C)</p>

                    <h6>Could you tell the date range in the data?</h6>
                    <p>Type MIN(D:D)</p>
                    <p>Type MAX{D:D)</p>

                    <h6>How many different store types in the data?</h6>
                    <p>Type UNIQUE(G:G)</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-6"
                    aria-expanded="false" aria-controls="c-p4-6">
                    ANSWER - EDA (Statistics)
                </button>
            </h2>

            <div id="c-p4-6" class="accordion-collapse collapse" aria-labelledby="p4-6" data-bs-parent="#p4">
                <div class="accordion-body">
                    <h6>How much average weekly sales per store?</h6>
                    <p>In PivotChart, drag store column to Legend (Series)</p>
                    <p>Drag Average of weekly sales to Values</p>

                    <br>

                    <h6>Which stores is having highest average weekly sales?</h6>
                    <p>Type MAX(3:3)</p>

                    <br>

                    <h6>Which stores is having lowest average weekly sales?</h6>
                    <p>Type MIN(3:3)</p>

                    <br>

                    <h6>Which month is having the average highest temperature?</h6>
                    <p>In PivotChart, drag Date column to Rows</p>
                    <p>Drag Average of Temperature to Values</p>
                    <p>Type MAX(B:B)</p>

                    <br>

                    <h6>Which month is having the average highest fuel price?</h6>
                    <p>In PivotChart, drag Date column to Rows</p>
                    <p>Drag Average of Fuel Price to Values</p>
                    <p>Type MAX(B:B)</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-7"
                    aria-expanded="false" aria-controls="c-p4-7">
                    ANSWER - Data Cleaning
                </button>
            </h2>

            <div id="c-p4-7" class="accordion-collapse collapse" aria-labelledby="p4-7" data-bs-parent="#p4">
                <div class="accordion-body" style="text-align: left;">
                    <h6>Which columns having missing values?</h6>
                    <p>Filter each columns, see if a column is containing BLANKS</p>

                    <br>

                    <h6>If any, please fill the missing values</h6>
                    <p>Find average values for the missing columns, and fill the blank with it!</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-8"
                    aria-expanded="false" aria-controls="c-p4-8">
                    Case Study Answer
                </button>
            </h2>

            <div id="c-p4-8" class="accordion-collapse collapse" aria-labelledby="p4-8" data-bs-parent="#p4">
                <div class="accordion-body" style="text-align: left;">
                    <h2>VIDEO 4 - CASE STUDY ANSWER</h2>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-9"
                    aria-expanded="false" aria-controls="c-p4-9">
                    Case Study Explanation
                </button>
            </h2>

            <div id="c-p4-9" class="accordion-collapse collapse" aria-labelledby="p4-9" data-bs-parent="#p4">
                <div class="accordion-body" style="text-align: left;">
                    <h2>VIDEO 5 - CASE STUDY EXPLANATION</h2>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-10"
                    aria-expanded="false" aria-controls="c-p4-10">
                    Case Study #2
                </button>
            </h2>

            <div id="c-p4-10" class="accordion-collapse collapse" aria-labelledby="p4-10" data-bs-parent="#p4">
                <div class="accordion-body">
                    <p>From the data that has been provided on the previous case study, try to turn it into visualization!
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-11">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-11"
                    aria-expanded="false" aria-controls="c-p4-11">
                    Case Study Answer
                </button>
            </h2>

            <div id="c-p4-11" class="accordion-collapse collapse" aria-labelledby="p4-11" data-bs-parent="#p4">
                <div class="accordion-body">
                    <h2>VIDEO 6 - CASE STUDY ANSWER</h2>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-12">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-12"
                    aria-expanded="false" aria-controls="c-p4-12">
                    Data Cleaning
                </button>
            </h2>

            <div id="c-p4-12" class="accordion-collapse collapse" aria-labelledby="p4-12" data-bs-parent="#p4">
                <div class="accordion-body">
                    <p>Professionals will be explaining about the importance of data cleaning process which includes getting
                        rid of all inconsistencies, such as missing values and any redundant variables</p>
                    <ul>
                        <li>Check if the data have any missing values (NA) and analyze which variables have the null values
                        </li>
                        <li>Explain how to get rid of any unnecessary variable that isn’t essential for predicting the
                            outcome</li>
                    </ul>
                    <p>The predictor variables used are <i>Store, Dept, Date, CPI, Weekly_Sales, IsHoliday</i></p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-13">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-13"
                    aria-expanded="false" aria-controls="c-p4-13">
                    Data Visualization
                </button>
            </h2>

            <div id="c-p4-13" class="accordion-collapse collapse" aria-labelledby="p4-13" data-bs-parent="#p4">
                <div class="accordion-body">
                    <h6>Professionals giving lecture on Exploratory Data Analysis after having a clean data</h6>
                    <ul>
                        <li>Explain data visualization - how to visualize data in the form of boxplots, graphs, etc.</li>
                        <li>Explain data analysis - how to analyze each feature variable to check if the variables are
                            significant for building the model</li>
                    </ul>

                    <br>

                    <h6>Create time series graph on weekly sales per store</h6>
                    <ul>
                        <li>In PivotChart, drag Date column to Rows or Axis (Categories)</li>
                        <li>Drag Average of Weekly Sales to Values</li>
                        <li>Change the chart to line chart</li>
                    </ul>

                    <br>

                    <h6>Create time series graph on temperature</h6>
                    <ul>
                        <li>In PivotChart, drag Date column to Rows or Axis (Categories)</li>
                        <li>Drag Average of Temperature to Values</li>
                        <li>Change the chart to line chart</li>
                    </ul>

                    <br>

                    <h6>Create time series graph on fuel price</h6>
                    <ul>
                        <li>In PivotChart, drag Date column to Rows or Axis (Categories)</li>
                        <li>Drag Average of Fuel Price to Values</li>
                        <li>Change the chart to line chart</li>
                    </ul>

                    <br>

                    <h6>Create bar graph showing average weekly sales per store</h6>
                    <ul>
                        <li>Drag Sum of Weekly Sales to Values</li>
                        <li>Drag Store to Legend (Series)</li>
                        <li>Change the chart to bar graph</li>
                    </ul>

                    <br>

                    <h6>Create scatter plot showing relationship between weekly sales and temperature.</h6>
                    <p>Select column Weekly Sales and Temperature</p>
                    <p>Click Insert and select scatter plot</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p4-14">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-p4-14"
                    aria-expanded="false" aria-controls="c-p4-14">
                    Model Building
                </button>
            </h2>

            <div id="c-p4-14" class="accordion-collapse collapse" aria-labelledby="p4-14" data-bs-parent="#p4">
                <div class="accordion-body">
                    <ul>
                        <h6>Professionals giving lecture on model building, specifically Linear Regression model for this
                            problem since the outcome is a continuous variable (Number of sales)</h6>

                        <br>

                        <h6>Which column/columns is/are our target variable?</h6>
                        <li>Pick Weekly Sales as our target variable, and other numeric columns as predictor</li>

                        <br>

                        <h6>How many column/columns is/are eligible as features for linear regression?</h6>
                        <li>Choose columns with numeric value!</li>

                        <br>

                        <h6>Which column/columns is/are our target variable?</h6>
                        <li>Let’s create linear regression with formula of y = m1x1 + m2x2 + m3x3 + m4x4 + m5x5 + b</li>
                        <li>Type LINEST(E2:E5771;H2:L5771) in column M</li>
                        <li>M to Q columns are the value of m1 to m5, while R column is the value of b</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modules.data-scientist-part.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/career-module/resources/views/modules/data-scientist-part/part-4.blade.php ENDPATH**/ ?>