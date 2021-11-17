<?php $__env->startSection('main_content'); ?>
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All seminar register members</h2>
                                <div class="box-icon">

                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-hover table-bordered bootstrap-datatable datatable">
                                  <thead>
                                      <tr>
                                          <th class="text-warning">Name</th>
                                          <th class="text-warning">Univeristy Name</th>
                                          <th class="text-warning">Department Name</th>
                                          <th class="text-warning">Seminar Name</th>
                                          <th class="text-warning">Phone Number</th>
                                          <th class="text-warning">Email</th>
                                          <th class="text-warning">Transaction ID</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $__currentLoopData = $seminar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                            <td> <?php echo e($c->name); ?></td>
                                            <td class="center"><?php echo e($c->varsity); ?></td>
                                            <td class="center"><?php echo e($c->dept); ?></td>
                                            <td class="center"><?php echo e($c->sname); ?></td>
                                            <td class="center"><?php echo e($c->phone); ?></td>
                                            <td class="center"><?php echo e($c->gmail); ?></td>
                                            <td class="center"><?php echo e($c->trid); ?></td>

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

<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Projects\DSLab\resources\views/backend/seminar.blade.php ENDPATH**/ ?>