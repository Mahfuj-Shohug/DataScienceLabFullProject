

<?php $__env->startSection('heading'); ?>
    Admin Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>


<?php $__env->startSection('heading'); ?>
    Edit Banner
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <form role="form" action="<?php echo e(url('dashboard/profile/admin/update')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>
    <div class="card-body">

      <div class="form-group">
        <label for="adminName">Admin Name</label>
        <input type="text" class="form-control" name="admin_name" value="<?php echo e($admin_profile->admin_name); ?>">
      </div>
      <div class="form-group">
        <label for="adminEmail">Admin Email</label>
        <input type="email" class="form-control" name="admin_email" value="<?php echo e($admin_profile->admin_email); ?>">
      </div>
      <div class="form-group">
        <label for="adminEmail">Admin Passoword</label>
        <input type="password" class="form-control" name="admin_password" value="<?php echo e($admin_profile->admin_password); ?>">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/backend/admin/profile.blade.php ENDPATH**/ ?>