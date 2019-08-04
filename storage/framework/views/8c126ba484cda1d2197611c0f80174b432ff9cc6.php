
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/assets/pages/courses.css')); ?>">
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Все курсы
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="wrapper">
       <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="courseItem block noPadding">
       <div class="courseDescription">
           <div class="courseName"><?php echo e($course->courseName); ?></div>
           <p><?php echo e($course->content); ?></p>
       </div>
           <a href="#" class="btn btn-success center">Learn More</a>
       </div>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webschool/www/resources/views/courses.blade.php ENDPATH**/ ?>