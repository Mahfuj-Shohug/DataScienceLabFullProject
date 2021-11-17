

<?php $__env->startSection('heading'); ?>
    Add/Change Banner Image
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<?php if($b_image != null): ?>
  <img src="<?php echo e(asset("storage/$b_image->home_banner_image_url")); ?>" alt="Image" /> 
    <p>
      <a class="btn btn-warning" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Change Image
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        <form role="form" action="<?php echo e(url('dashboard/banner/image/store')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="card-body">
          <div class="form-group">
              <label for="brandLogo">Change Banner Image</label>
              <input type="file" class="form-control-file" name="home_banner_image_url">
          </div>
            
          </div>
          <!-- /.card-body -->
        
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
<?php else: ?>
<form role="form" action="<?php echo e(url('dashboard/banner/image/store')); ?>" method="post" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="card-body">
  <div class="form-group">
      <label for="brandLogo">Upload Banner Image</label>
      <input type="file" class="form-control-file" name="home_banner_image_url">
  </div>
    
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DSLab\resources\views/backend/banner_image.blade.php ENDPATH**/ ?>