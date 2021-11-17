<!-- About Section Start -->
<section class="about-section">
         <!-- Top Shape Start -->
         <div class="about-top-shape">
            <img src="<?php echo e(asset('frontend/assets/img/about-shape.png')); ?>" alt="about shape" />
         </div>
         <!-- Top Shape End -->
         <!-- Bottom Shape Start -->
         <div class="about-bottom-shape">
            <img src="<?php echo e(asset('frontend/assets/img/about-shape.png')); ?>" alt="about shape" />
         </div>
         <!-- Bottom Shape End -->
         <!-- About Top Start -->
         <div class="about-top section_100">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h3><?php echo e($about_one->home_about_one_title); ?></h3>
                        <p><?php echo e($about_one->home_about_one_description); ?></p>
                        <a href="<?php echo e(url('/about')); ?>" target="_blank" class="theme-btn mt-4">More About Us <span class="fa fa-chevron-right"></span></a>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img src="<?php echo e(asset('frontend/assets/img/home1.png')); ?>" alt="about" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- About Top End -->
          
         <!-- About Bottom Start -->
         <div class="about-bottom section_b_100">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="about-right wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="<?php echo e(asset('frontend/assets/img/home2.png')); ?>" alt="about" />
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                     <h3><?php echo e($about_two->home_about_two_title); ?></h3>
                        <p><?php echo e($about_two->home_about_two_description); ?></p>
                        <a href="<?php echo e(url('/about')); ?>" target="_blank" class="theme-btn mt-4">More About Us<span class="fa fa-chevron-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- About Bottom End -->
   </section>
   <!-- About Section End --><?php /**PATH H:\Projects\DSLab\resources\views/frontend/lib/homepage/about_section.blade.php ENDPATH**/ ?>