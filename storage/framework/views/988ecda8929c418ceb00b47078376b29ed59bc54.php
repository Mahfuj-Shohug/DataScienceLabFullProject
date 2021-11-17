<!-- Hero Section Start -->
<section class="hero-section">
         <!-- Hero Shape Start -->
         <div class="hero-shape1">
            <img src="<?php echo e(asset('frontend/assets/img/hero-pattarn-1.png')); ?>" alt="shape">
         </div>
         <div class="hero-shape2">
            <img src="<?php echo e(asset('frontend/assets/img/hero-pattarn-2.png')); ?>" alt="shape">
         </div>
         <div class="hero-shape3">
            <img src="<?php echo e(asset('frontend/assets/img/hero-pattarn-3.png')); ?>" alt="shape">
         </div>
         <div class="hero-shape4">
            <img src="<?php echo e(asset('frontend/assets/img/hero-pattarn-4.png')); ?>" alt="shape">
         </div>
         <div class="hero-shape5">
            <img src="<?php echo e(asset('frontend/assets/img/her-pattarn-5.png')); ?>" alt="shape">
         </div>
         <!-- Hero Shape End -->
          
         <!-- Hero Bg Start -->
         <div class="hero-bg">
            <img src="<?php echo e(asset('frontend/assets/img/hero_shape.png')); ?>" alt="hero shape" />
         </div>
         <!-- Hero Bg End -->
          
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-6">
                  <div class="hero-left">
                     <h2><span class="underline"><?php echo e($banner->home_banner_content_title_up); ?> </span> <span><?php echo e($banner->home_banner_content_title_middle); ?></span><?php echo e($banner->home_banner_content_title_down); ?></h2>
                     <p><?php echo e($banner->home_banner_content_subtitle); ?></p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="hero-right">
                     <img src="<?php echo e(asset('frontend/assets/img/bannar.png')); ?>" alt="hero" />
                     <div class="hero-dot-shape">
                        <img src="<?php echo e(asset('frontend/assets/img/hero-dot-shape.png')); ?>" alt="shape" />
                     </div>
                  </div>
               </div>
            </div>
            <div><a href="<?php echo e(url('/contact')); ?>" class="theme-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">Data Science Summit 2021<span class="fa fa-chevron-right"></span></a></div>
         </div>
</section>
<!-- Hero Section End --><?php /**PATH H:\Projects\DSLab\resources\views/frontend/lib/homepage/hero_section.blade.php ENDPATH**/ ?>