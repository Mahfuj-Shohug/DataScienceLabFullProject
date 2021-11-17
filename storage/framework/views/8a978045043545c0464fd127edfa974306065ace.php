

<?php $__env->startSection('heading'); ?>
    Add Team Member's Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<form role="form" action="<?php echo e(url('/dashboard/team/add/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card-body">
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" name="Name" placeholder="Ashikur Rahaman">
      </div>

      <div class="form-group">
        <label for="Designation">Designation</label>
        <input type="text" class="form-control" name="Designation" placeholder="Web & Data Science Enthusiast">
      </div>

      <div class="form-group">
        <label for="Facebook">Facebook</label>
        <input type="text" class="form-control" name="Facebook" placeholder="https://www.facebook.com/ashikur.rahaman99/">
      </div>

      <div class="form-group">
        <label for="Twitter">Twitter</label>
        <input type="text" class="form-control" name="Twitter" placeholder="https://twitter.com/ashikur_swe">
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
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/backend/team/add.blade.php ENDPATH**/ ?>