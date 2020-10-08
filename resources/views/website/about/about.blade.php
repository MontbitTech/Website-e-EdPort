 @extends('layouts.website.app')

 @section('content')
 <script>
     document.getElementById('home').remove();
 </script>
 <!--====== About Us PART START ======-->
 <section id="about" class="portfolio-area">
     <div class="site-section mt-5">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6">
                     <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                         <h3 class="title">About Us</h3>
                     </div> <!-- row -->
                 </div>
             </div> <!-- row -->
             <div class="row align-items-center">
                 <div class="col-lg-7 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <img src="{{asset('assets/images/vision.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>

                 </div>
                 <div class="col-lg-5 ml-auto order-lg-1 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                     <h3 class="mb-4 section-heading"><strong>Our Vision</strong></h3>

                     <p class="mb-1" style="line-height:1.7">
                         Our Vision is to integrate information with innovation to emancipate the education sector. We aspire to play a significant role in strengthening the Indian education system.</p>

                 </div>
             </div>
             <div class="row align-items-center">

                 <div class="col-lg-5 ml-auto wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.1s">
                     <h3 class="mb-4 section-heading"><strong>Our Mission</strong></h3>
                     <p class="mb-1" style="line-height:1.7">e_Edport is founded with a Mission to digitalise education by collaborating technology and skills to promote all round development of institutions, educators, & students. We aimed towards the combined efforts of our dynamic team to support each other and work together towards our goal.</p>
                 </div>
                 <div class="col-lg-7 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <img src="{{asset('assets/images/mission.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
             </div>
             <div class="row align-items-center">
                 <div class="col-lg-7 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.2s">
                         <img src="{{asset('assets/images/story.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
                 <div class="col-lg-5 ml-auto order-lg-1 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.2s">
                     <h3 class="mb-4 section-heading"><strong>Our Story</strong></h3>

                     <p class="mb-1" style="line-height:1.7">
                         The Indian education system is changing. Fuelling the change, we at e-EdPort aspire to provide a reliable virtual system to our educational institutes so that the education never stops. Our primary focus is to connect educators with their students over a simplified platform. e-EdPort has made its aim to empower educators in technology and make them self-sufficient in their object of nurturing the future generation.</p>

                 </div>
             </div>

         </div>
     </div>


 </section>
 <!--====== ABOUT PART ENDS ======-->
 @endsection