
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/assets/pages/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/assets/pages/courses.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Рабочий стол
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard-page">
        <div class="section-header">
            <h2>Мои курсы</h2>
        </div>
        <div class="all-courses-wrapper">
            <div class="row">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="courseItem block noPadding">
                        <a href="#">
                            <img class="course-icon" src="<?php echo e($course->image_url); ?>" alt="">
                            <div class="course-description">
                                <div>
                                    <?php echo e($course->courseName); ?>

                                </div>
                                <p><?php echo e($course->content); ?></p>
                            </div>
                        </a>
                        <div class="progress-indicator">
                            <div class="progress-box"></div>
                            <div class="progress-counting">
                                0 из 100 уроков пройдено
                            </div>
                        </div>
                        <div class="course-stores">
                            <a href="#" class="course-start-button none-decorated-link">Продолжить</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webschool/www/resources/views/dashboard.blade.php ENDPATH**/ ?>