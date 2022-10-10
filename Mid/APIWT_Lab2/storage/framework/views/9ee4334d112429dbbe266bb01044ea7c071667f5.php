

<?php $__env->startSection('content'); ?>


<div class="row mt-5">
    <div class="col-4"></div>
        <div class="card p-4 col-4">
          <?php if(session('success')): ?>
              <div class="alert alert-success" role="alert">
                  <?php echo e(session('success')); ?>

              </div>
          <?php endif; ?>
            <h4> Log into your account </h4>
            <form action="<?php echo e(route('login.attempt')); ?>" method="post">
              <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <label for="exampleInputSID" class="form-label">Student ID</label>
                  <input type="text" class="form-control" id="exampleInputSID" name="student_id" value="<?php echo e(old('student_id')); ?>" placeholder="Student ID" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                </div>
                <?php if(session('invalid') || $errors->all()): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo e(__('Invalid Credentials')); ?>

                </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
              <div class="text-center">
                <p>Not a member? <a href="<?php echo e(route('register')); ?>">Register</a></p>
              </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\APIWT\Mid\APIWT_Lab2\resources\views/auth/login.blade.php ENDPATH**/ ?>