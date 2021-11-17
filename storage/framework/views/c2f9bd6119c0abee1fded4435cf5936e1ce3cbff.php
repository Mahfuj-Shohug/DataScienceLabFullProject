

<?php $__env->startSection('main_content_frontend'); ?>

      <!-- Breadcrumb Start -->
      <section class="breadcrumb-area">
         <div class="breadcrumb-shape"></div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-inn">
                     <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2><span>Research Topics</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb End -->
       

       
      <!-- Blog Area Start -->
      <section class="blog-page-area section_100">
         <div class="container">
            <div class="row">
              <center>
               <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-lg-8">
                  <div class="blog-page-left">
                    
                     <div class="map-area section_t_100">
                       <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h2><?php echo e($t->title); ?></h2>
                       </div>
                     </div>
                     
                     <div class="blog-item-box">
                        <div class="blog_info">
                           <figure class="blog-img">
                              <a href="#">
                              <img src="<?php echo e(asset("storage/$t->image")); ?>" alt="Image" />
                              </a>
                           </figure>
                           <div class="blog-detail">
                              <p class="text-length">"<?php echo e($t->short_description); ?>"</p>
                              <a href="<?php echo e($t->link); ?>" target="_blank" class="theme-btn">Link <span class="fa fa-chevron-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <!-- /end blog item-->
                     
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </center>
            </div>
         </div>
      </section>
      <!-- Blog Area End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.lib.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ashikur Rahaman\OneDrive\Desktop\laravel\DSLab\resources\views/frontend/research_topic.blade.php ENDPATH**/ ?>