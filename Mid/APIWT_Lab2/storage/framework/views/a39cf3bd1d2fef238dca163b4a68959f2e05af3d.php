

<?php $__env->startSection('content'); ?>


<div class="row mt-5">
<div class="col-4"></div>
    <div class="card p-4 col-4">
        <h4> Register now </h4>
        <form action="<?php echo e(route("register.submit")); ?>" method="post">
          <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter your name" value="<?php echo e(old('name')); ?>" required>
              <?php if($errors->has('name')): ?>
                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
              <?php endif; ?>
            </div>

            <div class="mb-3">
              <label for="exampleInputSID" class="form-label">Student ID</label>
              <input type="text" class="form-control" id="exampleInputSID" name="sid" placeholder="e.g., 20-43400-1" value="<?php echo e(old('sid')); ?>" required>
              <?php if($errors->has('sid')): ?>
                <span class="text-danger"><?php echo e($errors->first('sid')); ?></span>
              <?php endif; ?>
            </div>

            <div class="mb-3">
            <label for="dob">Birthday:</label>
            <input type="date" id="dob" name="dob" value="<?php echo e(old('dob')); ?>" required>
            </div>

            <div class="mb-3">
              <label for="exampleInputPhone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="exampleInputPhone" name="phone" placeholder="e.g., 01XXXXXXXXX" maxlength="11" value="<?php echo e(old('phone')); ?>" required>
              <?php if($errors->has('phone')): ?>
                <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
              <?php endif; ?>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" value="<?php echo e(old('email')); ?>">
              <?php if($errors->has('email')): ?>
                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
              <?php endif; ?>
            </div>

            <div class="mb-3">
              <label for="exampleInputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="exampleInputAddress" name="address" placeholder="Enter your address" value="<?php echo e(old('address')); ?>">
              <?php if($errors->has('address')): ?>
                <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
              <?php endif; ?>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
              <?php if($errors->has('password')): ?>
                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
              <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="exampleInputCPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputCPassword1" name="password_confirmation" placeholder="Confirm Password" required>
                <?php if($errors->has('password_confirmation')): ?>
                <span class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></span>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
            
          </form>
          <div class="text-center">
            <p>Already have an account?<a href="<?php echo e(route('login')); ?>">Back to login</a></p>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\APIWT\Mid\APIWT_Lab2\resources\views/auth/registration.blade.php ENDPATH**/ ?>