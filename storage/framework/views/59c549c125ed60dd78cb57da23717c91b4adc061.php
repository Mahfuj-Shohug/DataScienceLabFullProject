

<?php $__env->startSection('heading'); ?>
    Add Research Topic
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<form role="form" action="<?php echo e(url('/dashboard/research-topic/add/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card-body">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="A Data Driven Approach To Forecasting Bangladesh Next Generation Economy">
      </div>
      <div class="form-group">
      <label for="short_description">Write a short description here..</label>
      <input type="text" class="form-control" name="short_description" placeholder="Write some short description here...">
      </div>
      <div class="form-group">
        <label for="link">Provide publication link</label>
        <input type="text" class="form-control" name="link" placeholder="https://www.sciencedirect.com/science/article/pii/S2405852116300957">
      </div>
      <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" class="form-control-file" name="image">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/backend/research-topic/add.blade.php ENDPATH**/ ?>