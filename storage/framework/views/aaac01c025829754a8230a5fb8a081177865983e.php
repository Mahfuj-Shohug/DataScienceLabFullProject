

<?php $__env->startSection('main_content'); ?>
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All Students</h2>
                                <div class="box-icon">

                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-hover table-bordered bootstrap-datatable datatable">
                                  <thead>
                                      <tr>
                                          
                                          <th class="text-warning">Image</th>
                                          <th class="text-warning">Name</th>
                                          <th class="text-warning">Facebook</th>
                                          <th class="text-warning">Twitter</th>
                                          <th class="text-warning">Linkedin</th>
                                          <th class="text-warning">Erase</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                            
                                            <td><img src="<?php echo e(asset("storage/$s->Image")); ?>" alt="" style="height:80px; width:80px"/></td>
                                            <td><?php echo e($s->Name); ?></td>
                                            <td class="center"><?php echo e($s->Facebook); ?></td>
                                            <td class="center"><?php echo e($s->Twitter); ?></td>
                                            <td class="center"><?php echo e($s->Linkedin); ?></td>
                                            <td class="center">
                                                 <form method="POST" action="/dashboard/student/<?php echo e($s->id); ?>">
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <?php echo csrf_field(); ?>
                                                    <button type="Delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                  </tbody>
                              </table>
                            </div>
                        </div><!--/span-->

                    </div><!--/row-->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/backend/student.blade.php ENDPATH**/ ?>