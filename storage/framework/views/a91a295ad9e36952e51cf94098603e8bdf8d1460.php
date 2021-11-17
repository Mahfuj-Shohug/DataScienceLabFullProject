

<?php $__env->startSection('main_content_frontend'); ?>
       
      <!-- Breadcrumb Start -->
      <section class="breadcrumb-area">
         <div class="breadcrumb-shape"></div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-inn">
                     <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2>Team <span> Members</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb End -->
       
            <!-- Team Section Start -->
      <section class="team-section section_t_100 section_b_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                     <h2>Our Expert <span>Teachers</span> <br> </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <!-- Team Block Start -->
               <div class="col-lg-4 col-md-4">
                  <div class="team-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                     <div class="image">
                        <img src="<?php echo e(asset("storage/$t->Image")); ?>">
                        <ul class="social">
                           <li>
                              <a href="<?php echo e($t->Facebook); ?>" target="_blank">
                              <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo e($t->Twitter); ?>" target="_blank">
                              <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo e($t->Linkedin); ?>" target="_blank">
                              <i class="fa fa-linkedin"></i>
                              </a>
                           </li>
                           
                        </ul>
                        <div class="content">
                           <h3><?php echo e($t->Name); ?></h3>
                           <span><?php echo e($t->Designation); ?></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Team Block End -->
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
         </div>
      </section>
      <!-- Team Section End -->
      
      <!-- Team Section Start -->
      <section class="team-section section_t_100 section_b_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                     <h2>Our Expert <span>Team</span> <br>Members </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <!-- Team Block Start -->
               <div class="col-lg-4 col-md-6">
                  <div class="team-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                     <div class="image">
                        <img src="<?php echo e(asset("storage/$t->Image")); ?>">
                        <ul class="social">
                           <li>
                              <a href="<?php echo e($t->Facebook); ?>" target="_blank">
                              <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo e($t->Twitter); ?>" target="_blank">
                              <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo e($t->Linkedin); ?>" target="_blank">
                              <i class="fa fa-linkedin"></i>
                              </a>
                           </li>
                           
                        </ul>
                        <div class="content">
                           <h3><?php echo e($t->Name); ?></h3>
                           <span><?php echo e($t->Designation); ?></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Team Block End -->
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
         </div>
      </section>
      <!-- Team Section End -->

      <!-- Student Section Start -->
      <section class="team-section section_t_100 section_b_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                     <h2>Our<span>Glorious</span> <br>Students </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <!-- Team Block Start -->
               <div class="col-lg-4 col-md-6">
                  <div class="team-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                     <div class="image">
                        <img src="<?php echo e(asset("storage/$s->Image")); ?>">
                        <ul class="social">
                           <li>
                              <a href="<?php echo e($s->Facebook); ?>" target="_blank">
                              <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo e($s->Twitter); ?>" target="_blank">
                              <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo e($s->Linkedin); ?>" target="_blank">
                              <i class="fa fa-linkedin"></i>
                              </a>
                           </li>
                           
                        </ul>
                        <div class="content">
                           <h3><?php echo e($s->Name); ?></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Team Block End -->
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
         </div>
      </section>
      <!-- Team Section End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/frontend/team.blade.php ENDPATH**/ ?>