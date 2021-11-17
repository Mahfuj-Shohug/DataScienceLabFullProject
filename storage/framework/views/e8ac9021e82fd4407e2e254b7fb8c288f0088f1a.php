

<?php $__env->startSection('heading'); ?>
    Edit Banner Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<form role="form" action="<?php echo e(url('dashboard/banner/update')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>
    <div class="card-body">
      <div class="form-group">
        <label for="home_banner_content_title_up">Title Up</label>
        <input type="text" class="form-control" name="home_banner_content_title_up" placeholder="Upgrade" value="<?php echo e($banner->home_banner_content_title_up); ?>">
      </div>

      <div class="form-group">
        <label for="home_banner_content_title_middle">Title Middle</label>
        <input type="text" class="form-control" name="home_banner_content_title_middle" placeholder="Your Businesses With" value="<?php echo e($banner-> home_banner_content_title_middle); ?>">
      </div>
      <div class="form-group">
        <label for="home_banner_content_title_down">Title Down</label>
        <input type="text" class="form-control" name="home_banner_content_title_down" placeholder="Data Scientific Solution" value="<?php echo e($banner-> home_banner_content_title_down); ?>">
      </div>
      <div class="form-group">
        <label for="home_banner_content_subtitle">Sub Title Here</label>
        <input type="text" class="form-control" name="home_banner_content_subtitle" placeholder="First time providing data service in Bangladesh, Powered By Data Science Lab of Daffodil International University, Dhaka, Bangladesh" value="<?php echo e($banner-> home_banner_content_subtitle); ?>">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DSLab\resources\views/backend/edit_banner_content.blade.php ENDPATH**/ ?>