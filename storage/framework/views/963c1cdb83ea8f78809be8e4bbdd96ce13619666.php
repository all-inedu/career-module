<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <img src="<?php echo e(asset('img/CMW_Career module cover.webp')); ?>" width="100%">
    <h1 class="float-end" style="position: absolute; margin-top: -15%; right: 15%; font-size: 4em; text-align: right;">
        Welcome To <br>
        Career Module
    </h1>

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <p class="mt-4 mb-5">
                    Hello, <br><br>
                    Are you currently trying to figure out what you want as a career in the future? <br><br>
                    ALL-in Career Module is here to provide you the space to discover various job roles and industries of
                    your
                    interest. Learn the basic knowledge of each career and how to implement them through hands-on learning
                    experience here.<br><br>
                    Let’s walk on your career exploration journey with ALL-in Career Module!
                </p>
                <h1 id="career"><b>Career</b></h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_1. Digital Marketing.webp')); ?>" class="card-img-top">
                        <div class="bottom-right">Digital Marketing Specialist
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <a href="<?php echo e(url('data-scientist/1')); ?>">
                    <div class="card">
                        <div class="container2">
                            <img src="<?php echo e(asset('img/CMW_2. Data Scientist.webp')); ?>" class="card-img-top">
                            <div class="bottom-right">Data Scientist
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="<?php echo e(asset('img/CMW_lock (black).webp')); ?>" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_3. Full Stack Engineer.webp')); ?>" class="card-img-top blur">
                        <div class="bottom-right">Full Stack Engineering
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="<?php echo e(asset('img/CMW_lock (black).webp')); ?>" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_4. UX Designer.webp')); ?>" class="card-img-top blur">
                        <div class="bottom-right">UX Designer
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="<?php echo e(asset('img/CMW_lock (black).webp')); ?>" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_5.Biomedical Engineer.webp')); ?>" class="card-img-top blur">
                        <div class="bottom-right">Biomedical Engineering
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="<?php echo e(asset('img/CMW_lock (black).webp')); ?>" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_6.Investment Analyst.webp')); ?>" class="card-img-top blur">
                        <div class="bottom-right">Investment Analyst
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="<?php echo e(asset('img/CMW_lock (black).webp')); ?>" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_7. Psychologist.webp')); ?>" class="card-img-top blur">
                        <div class="bottom-right">Psychologist
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="<?php echo e(asset('img/CMW_lock (black).webp')); ?>" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_8. Conten Creator.webp')); ?>" class="card-img-top blur">
                        <div class="bottom-right">Content Creator
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="<?php echo e(asset('img/CMW_lock (black).webp')); ?>" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_9. Food Scientist.webp')); ?>" class="card-img-top blur">
                        <div class="bottom-right">Food Scientist
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="container-overflow text-center mt-3">
                        <img src="<?php echo e(asset('img/CMW_lock (black).webp')); ?>" class="img-lock">
                    </div>
                    <div class="container2">
                        <img src="<?php echo e(asset('img/CMW_10. Medical Doctor.webp')); ?>" class="card-img-top blur">
                        <div class="bottom-right">Medical Doctor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/career-module/resources/views/index.blade.php ENDPATH**/ ?>