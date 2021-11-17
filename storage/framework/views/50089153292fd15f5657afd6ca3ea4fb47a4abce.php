

<?php $__env->startSection('heading'); ?>
    Add Teacher's Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<form role="form" action="<?php echo e(url('/dashboard/student/add/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card-body">
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" name="Name" placeholder="Karim Ahmed">
      </div>

      <div class="form-group">
        <label for="Facebook">Portfolio</label>
        <input type="text" class="form-control" name="Facebook" placeholder="#">
      </div>

      <div class="form-group">
        <label for="Twitter">Gmail</label>
        <input type="text" class="form-control" name="Twitter" placeholder="#">
      </div>
      <div class="form-group">
        <label for="Linkedin">Linkedin</label>
        <input type="text" class="form-control" name="Linkedin" placeholder="https://www.linkedin.com/in/ashikur-rahaman-bd/">
      </div>

      <div class="form-group">
          <label for="Image">Upload Image</label>
          <input type="file" class="form-control-file" name="Image">
      </div>

      
    </div>


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DSLab\resources\views/backend/student/add.blade.php ENDPATH**/ ?>