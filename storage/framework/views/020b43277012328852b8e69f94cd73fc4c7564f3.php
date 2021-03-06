

<?php $__env->startSection('main_content'); ?>
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All Messages</h2>
                                <div class="box-icon">

                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-hover table-bordered bootstrap-datatable datatable">
                                  <thead>
                                      <tr>
                                          <th class="text-warning">Name</th>
                                          <th class="text-warning">Email</th>
                                          <th class="text-warning">Subject</th>
                                          <th class="text-warning">Phone</th>
                                          <th class="text-warning">Message</th>
                                          <th class="text-warning">Erase</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                            <td><?php echo e($c->Name); ?></td>
                                            <td class="center"><?php echo e($c->Email); ?></td>
                                            <td class="center"><?php echo e($c->Subject); ?></td>
                                            <td class="center"><?php echo e($c->Phone); ?></td>
                                            <td class="center"><?php echo e($c->Message); ?></td>
                                            <td class="center">
                                                 <form method="POST" action="/dashboard/messages/<?php echo e($c->id); ?>">
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
<?php echo $__env->make('backend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DSLab\resources\views/backend/contact.blade.php ENDPATH**/ ?>