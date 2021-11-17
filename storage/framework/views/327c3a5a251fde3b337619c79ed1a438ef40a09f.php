

<?php $__env->startSection('heading'); ?>
    Add Works Info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<form role="form" action="<?php echo e(url('/dashboard/works/add/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card-body">
      <div class="form-group">
        <label for="collaboration">Collaboration</label>
        <input type="text" class="form-control" name="collaboration" placeholder="200">
      </div>

      <div class="form-group">
        <label for="team">Team</label>
        <input type="text" class="form-control" name="team" placeholder="18">
      </div>

      <div class="form-group">
        <label for="publication">Publication</label>
        <input type="text" class="form-control" name="publication" placeholder="15">
      </div>
      <div class="form-group">
        <label for="awards">Awards</label>
        <input type="text" class="form-control" name="awards" placeholder="24">
      </div>

    </div>


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/backend/works_count/add.blade.php ENDPATH**/ ?>