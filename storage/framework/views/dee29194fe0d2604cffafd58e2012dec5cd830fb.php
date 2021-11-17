

<?php $__env->startSection('heading'); ?>
    Add About Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<form role="form" action="<?php echo e(url('/dashboard/about/one/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card-body">
      <div class="form-group">
        <label for="home_about_one_title">Title</label>
        <input type="text" class="form-control" name="home_about_one_title" value="<?php echo e($about_one->home_about_one_title); ?>">
      </div>
      <div class="form-group">
      <label for="home_about_one_description">Write description here..</label>
      <input type="text" class="form-control" name="home_about_one_description" value="<?php echo e($about_one->home_about_one_description); ?>">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/backend/about_one/edit.blade.php ENDPATH**/ ?>