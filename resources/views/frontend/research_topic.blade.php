@extends('frontend.lib.layout')

@section('main_content_frontend')

      <!-- Breadcrumb Start -->
      <section class="breadcrumb-area">
         <div class="breadcrumb-shape"></div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-inn">
                     <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2><span>Research Area</span></h2>
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
         <div class="map-area section_t_100">
                       <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h2>Natural language processing (NLP)</h2>
                       </div>
                     </div>
            <div class="row">
            <div class="col-lg-12">
                  <div class="row align-items-center">
                     <div class="row align-items-center">
                        <div class="col-lg-4 offset-lg-1">
                           <figure class="blog-img about-page-left wow fadeInLeft mr-5" data-wow-duration="1s" data-wow-delay="0.5s">
                              <a href="#">
                              <img src="{{ asset('frontend/assets/img/area-1.jpg') }}" alt="Image" />
                              </a>
                           </figure>
                        </div>
                        <div class="col-lg-6">
                        <div class="about-page-text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                            <p>Natural language processing (NLP) is the ability of a computer program to understand human language as it is spoken and written -- referred to as natural language. It is a component of artificial intelligence (AI). NLP has existed for more than 50 years and has roots in the field of linguistics.</p>
                           <p>Bangla NLP:- Bangla has a rich heritage of literature that dates back to almost a thousand years. Even with a huge number of native speakers, Bengali is lagging behind in Natural Language Processing (NLP).
                              From government services to education, from agriculture to healthcare, Bengali-NLP research would make lives easier for everyone.</p>
                        </div>
                     </div>
                     </div>
                     <!-- /end blog item-->
                     
                  </div>
               </div>
               
            </div>
         </div>
      </section>

      <section class="blog-page-area section_100">
         <div class="container">
         <div class="map-area section_t_100">
                       <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h2 class="text-end">Computer Vision</h2>
                       </div>
                     </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="row align-items-center">
                     <div class="row align-items-center">
                        <div class="col-lg-4 offset-lg-1">
                           <figure class="blog-img about-page-left wow fadeInLeft mr-5" data-wow-duration="1s" data-wow-delay="0.5s">
                              <a href="#">
                              <img src="{{ asset('frontend/assets/img/area-2.jpg') }}" alt="Image" />
                              </a>
                           </figure>
                        </div>
                        <div class="col-lg-6">
                        <div class="about-page-text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                            <p>Computer vision is a field of artificial intelligence (AI) that enables computers and systems to derive meaningful information from digital images, videos and other visual inputs — and take actions or make recommendations based on that information.</p>
                           <p>Computer vision is the field of computer science that focuses on replicating parts of the complexity of the human vision system and enabling computers to identify and process objects in images and videos in the same way that humans do. Until recently, computer vision only worked in limited capacity.</p>
                        </div>
                     </div>
                     </div>
                     <!-- /end blog item-->
                     
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      
      <!-- Blog Area End -->
      <section class="blog-page-area section_100">
         <div class="container">
         <div class="map-area section_t_100">
                       <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h2 class="text-end">Statistics and Probability</h2>
                       </div>
                     </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="row align-items-center">
                     <div class="row align-items-center">
                        <div class="col-lg-4 offset-lg-1">
                           <figure class="blog-img about-page-left wow fadeInLeft mr-5" data-wow-duration="1s" data-wow-delay="0.5s">
                              <a href="#">
                              <img src="{{ asset('frontend/assets/img/area-3.png') }}" alt="Image" />
                              </a>
                           </figure>
                        </div>
                        <div class="col-lg-6">
                        <div class="about-page-text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                            <p>Statistics and probability represent a considerable area of mathematics that also greatly impacts data science. This specialty area is all about establishing and working with finite figures as well as the effects of the ever-present factor of “chance” in all things. Those additionally learned in this particular area are a great asset to general and specialized areas of the data science industry today.</p>
                           <p>Probability and Statistics form the basis of Data Science. The probability theory is very much helpful for making the prediction. Estimates and predictions form an important part of Data science.</p>
                        </div>
                     </div>
                     </div>
                     <!-- /end blog item-->
                     
                  </div>
               </div>
               
            </div>
         </div>
      </section>
     
   

@endsection