

<?php $__env->startSection('main_content'); ?>
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All Team Members</h2>
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
                                          <th class="text-warning">Designation</th>
                                          <th class="text-warning">Facebook</th>
                                          <th class="text-warning">Twitter</th>
                                          <th class="text-warning">Linkedin</th>
                                          <th class="text-warning">Erase</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                            
                                            <td><img src="<?php echo e(asset("storage/$t->Image")); ?>" alt="" style="height:80px; width:80px"/></td>
                                            <td><?php echo e($t->Name); ?></td>
                                            <td class="center"><?php echo e($t->Designation); ?></td>
                                            <td class="center"><?php echo e($t->Facebook); ?></td>
                                            <td class="center"><?php echo e($t->Twitter); ?></td>
                                            <td class="center"><?php echo e($t->Linkedin); ?></td>
                                            <td class="center">
                                                 <form method="POST" action="/dashboard/team/<?php echo e($t->id); ?>">
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
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/backend/team.blade.php ENDPATH**/ ?>