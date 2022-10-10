

<?php $__env->startSection('content'); ?>


<h1>Welcome, <?php echo e(Auth::user()->student_id); ?></h1> <br>
<h3>This is dashboard</h3>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\APIWT\Mid\APIWT_Lab2\resources\views/dashboard.blade.php ENDPATH**/ ?>