<?php $__env->startSection('title'); ?>
    Data Scientist | Reflection
<?php $__env->stopSection(); ?>

<?php $__env->startSection('banner'); ?>
    <?php echo $__env->make('modules.data-scientist-part.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('layout.module.sidebar-ds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="card p-3">
            <div class="accordion accordion-flush" id="p7">
                <div class="border-bottom">
                    <h3 class="section-header" id="p7-header">
                        <div>Glossary</div>
                    </h3>
                </div>

                <div class="pt-4">
                    <ul class="ul-spacing">
                        <li><b>Artificial Intelligence (AI):</b> the ability of a machine to mimic the capabilities of the
                            human mind
                        </li>
                        <li><b>Business Intelligence (BI):</b> the discipline of analyzing and transforming data to extract
                            valuable
                            business insights to enable decision-making</li>
                        <li><b>Data mining:</b> a process of extracting and discovering patterns in large data sets</li>
                        <li><b>Data warehouse:</b> central repository of information that can be used to analyze and make
                            more informed
                            decisions</li>
                        <li><b>Data wrangling (munging):</b> the process of cleaning, structuring and enriching raw data
                            into a desired
                            format for better decision making in less time</li>
                        <li><b>Deep learning:</b> a technique that falls into the machine learning discipline based on
                            artificial neural
                            networks. It learns from vast amounts of data and finds patterns from unstructured data such as
                            text and
                            images</li>
                        <li><b>Machine learning:</b> a subset of the artificial intelligence (AI) discipline that provides
                            systems the
                            ability to automatically learn and improve from experience without being explicitly programmed
                        </li>
                    </ul>
                </div>

                <div class="col-md-12 text-end mt-4 pt-2 border-top">
                    <button class="btn btn-info btn-sm px-3" onclick="next(1, 7)">
                        Next <i class="far fa-arrow-alt-circle-right ps-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // sessionStorage.clear();
            let n = $('.accordion-item').length
            for (i = 1; i <= n; i++) {
                if (sessionStorage.getItem('c-p7-' + i) == 'read') {
                    $('#icon7-' + i).removeClass('far fa-check-circle')
                    $('#icon7-' + i).addClass('fas fa-check-circle text-success')
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
            sessionStorage.setItem("c-p7-" + n, "read");
            if (sessionStorage.getItem('c-p7-' + n) == 'read') {
                $('#icon7-' + n).removeClass('far fa-check-circle')
                $('#icon7-' + n).addClass('fas fa-check-circle text-success')
            }

            let next = n + 1
            $('#c-p7-' + n).collapse('toggle');
            $('#c-p7-' + next).collapse('toggle');

            let j = $('.accordion-item').length
            let z = 0
            for (i = 0; i <= j; i++) {
                if (sessionStorage.getItem('c-p7-' + i) == 'read') {
                    z++
                }
            }

            if (z == j) {
                sessionStorage.setItem("part" + part, "done");
                if (sessionStorage.getItem('part' + part) == 'done') {
                    $('#ds-iconPart' + part).addClass('fas fa-check-circle float-end mt-1 text-success')
                    window.location = "<?php echo url('/data-scientist/other-resources'); ?>";
                }
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.module.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/career-module/resources/views/modules/data-scientist-part/glossary.blade.php ENDPATH**/ ?>