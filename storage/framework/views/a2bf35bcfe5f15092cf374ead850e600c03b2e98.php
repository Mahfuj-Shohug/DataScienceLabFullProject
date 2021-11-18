

<?php $__env->startSection('heading'); ?>
    Add/Change Logo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<?php if($b_image != null): ?>
  <img src="<?php echo e(asset("storage/$b_image->Logo")); ?>" alt="Image" /> 
    <p>
      <a class="btn btn-warning" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Change Logo
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        <form role="form" action="<?php echo e(url('dashboard/logo/store')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="card-body">
          <div class="form-group">
              <label for="Logo">Change Logo</label>
              <input type="file" class="form-control-file" name="Logo">
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
<form role="form" action="<?php echo e(url('dashboard/logo/store')); ?>" method="post" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="card-body">
  <div class="form-group">
      <label for="Logo">Upload Logo</label>
      <input type="file" class="form-control-file" name="Logo">
  </div>
    
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Projects\DSLab\resources\views/backend/logo.blade.php ENDPATH**/ ?>