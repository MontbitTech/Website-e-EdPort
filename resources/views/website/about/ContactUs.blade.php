 @extends('layouts.website.app')

 @section('content')
 <section id="contact" class="contact-area bg-white">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20">
                     <h3 class="title">Contact</h3>
                     <p class="text">For more information, contact us through the following mediums</p>
                 </div> <!-- section title -->
             </div>
         </div> <!-- row -->
         <div class="row justify-content-center">
             <div class="col-lg-4">

                 <div class="single-contact-box mt-50 text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                     <a href="mailto:connect@montbit.tech">
                         <div class="row">
                             <div class="col-md-4">
                                 <div class="box-icon">
                                     <i class="lni-envelope"></i>
                                 </div>
                             </div>
                             <div class="col-md-8">
                                 <div class="box-content">
                                     <h4 class="box-title">Email Us</h4>
                                     <p class="text">connect@montbit.tech</p>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div> <!-- single contact box -->

                 <div class="single-contact-box text-center mt-50 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.5s">
                     <a href="tel:+919646623185;">
                         <div class="row">
                             <div class="col-md-4">
                                 <div class="box-icon">
                                     <i class="lni-phone-handset"></i>
                                 </div>
                             </div>
                             <div class="col-md-8">
                                 <div class="box-content">
                                     <h4 class="box-title">Call Us</h4>
                                     <p class="text">+91 96466 23185</p>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div> <!-- single contact box -->

                 <div class="single-contact-box mt-50 text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.8s">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="box-icon">
                                 <i class="lni-map-marker"></i>
                             </div>
                         </div>
                         <div class="col-md-8">
                             <div class="box-content">
                                 <h4 class="box-title">Address</h4>
                                 <p class="text">120 6075 Wilson Ave
                                     Vancouver V5H 2R5
                                     Canada</p>
                             </div>
                         </div>
                     </div>
                 </div> <!-- single contact box -->

             </div>
             <div class="col-lg-8">
                 <div class="contact-map mt-50 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                     <div class="gmap_canvas">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.4884161377277!2d-123.01257788462505!3d49.22922847932554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548676f5748b69f5%3A0x64f8b9c312f3f232!2s120-6075%20Wilson%20Ave%2C%20Burnaby%2C%20BC%20V5H%202R5%2C%20Canada!5e0!3m2!1sen!2sin!4v1595565073998!5m2!1sen!2sin" width="100%" height="528" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                     </div>
                 </div> <!-- contact map -->
             </div>
         </div> <!-- row -->

     </div>
     <!--/!--div-->
     </div>
 </section>
 @endsection