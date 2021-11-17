

<?php $__env->startSection('heading'); ?>
    Add Second About Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<form role="form" action="<?php echo e(url('/dashboard/about/two/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card-body">
      <div class="form-group">
        <label for="home_about_two_title">Title</label>
        <input type="text" class="form-control" name="home_about_two_title" placeholder="We Analyze & Visualize The Real Life Data For Incrasing The Companies Business">
      </div>
      <div class="form-group">
      <label for="home_about_two_description">Write description here..</label>
        <textarea class="textarea" name="home_about_two_description" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 20px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/backend/about_two/add.blade.php ENDPATH**/ ?>