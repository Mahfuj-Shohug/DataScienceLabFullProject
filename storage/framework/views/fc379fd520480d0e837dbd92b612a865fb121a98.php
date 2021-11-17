

<?php $__env->startSection('heading'); ?>
    Add Banner Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<form role="form" action="<?php echo e(url('dashboard/banner/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card-body">
      <div class="form-group">
        <label for="home_banner_content_title_up">Title Up</label>
        <input type="text" class="form-control" name="home_banner_content_title_up" placeholder="Upgrade">
      </div>

      <div class="form-group">
        <label for="home_banner_content_title_middle">Title Middle</label>
        <input type="text" class="form-control" name="home_banner_content_title_middle" placeholder="Your Businesses With">
      </div>
      <div class="form-group">
        <label for="home_banner_content_title_down">Title Down</label>
        <input type="text" class="form-control" name="home_banner_content_title_down" placeholder="Data Scientific Solution">
      </div>
      <div class="form-group">
      <label for="home_banner_content_subtitle">Write subtitle here..</label>
        <textarea class="textarea" name="home_banner_content_subtitle" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 20px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DSLab\resources\views/backend/banner.blade.php ENDPATH**/ ?>