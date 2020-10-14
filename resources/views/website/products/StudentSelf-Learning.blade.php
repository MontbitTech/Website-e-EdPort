 @extends('layouts.website.app')
 @section('footer') @include('layouts.website.footer-main') @endsection
 @section('demo') href="{{route('products.self-learning-form')}}" @endsection
 @section('image')style="background-image:url({{asset('assets/images/selflearning.jpg')}})" @endsection
 @section('heading')Self Learning is a Life long Curiosity @endsection
 @section('sub-heading') It's best opportunity for students to learn on their own @endsection
 @section('content')
 <style>
     li.remove {
         display: none !important;
     }
 </style>
 <!-- About Us -->
 <section id="about" class="portfolio-area bg-light">
     <div class="site-section">
         <div class="container-fluid">
             <div class="row justify-content-center mb-5">
                 <div class="col-lg-12 py-0 my-0">
                     <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">
                         <h3 class="title">Why e-EdPort Self Learning Solution?</h3>
                         <!-- <h3 class="title">Introducing the blender approach to self learning</h3> -->
                     </div>
                 </div>
                 <div class="col-md-10 px-5   justify-content-center  text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                     <p>
                         e-EdPort Self Learning Solution helps students clarify doubts, revise concepts, develop their analytical skills and customise their learning needs at home, thus reinforcing classroomlearning. This Self-Learning App gives you the ability to identify problems and quickly look for effective solutions on your own. 
                     </p>
                 </div>

             </div>
         </div>

     </div>
 </section>

 <!-- About Us -->
 <!-- Key Features -->

 <!-- <section id="portfolio" class="portfolio-area ">
     <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 ">
                     <h3 class="title wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">Key Features</h3>
                     <p class="text wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">Facilitating the elements to empower the Indian Education System.</p>
                 </div> 
             </div>
         </div>
         <div class="container">
             <div id="virtual" class=" portfolio-card virtual-school">
                 <div class="row ">
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex  mt-30 pb-3 pt-2 pl-2 Features media">
                             <div class="about-icon">
                                 <img src="{{asset('assets\images\KeyFeatures\Studentgrooming\Careerguidance.png')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Career Guidance</h5>
                                 <p class="text pr-2">Counselling students to navigate their future.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInRight " data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                             <img src="{{asset('assets\images\KeyFeatures\Studentgrooming\resumewriting.png')}}" alt="Icon" class="align-self-center mr-3">

                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Resume Writing</h5>
                                 <p class="text pr-2">Training students to put their best foot forward.
                                 </p>
                             </div>
                         </div> 
                     </div>
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                             <img src="{{asset('assets\images\KeyFeatures\Studentgrooming\Softskilltraining.png')}}" alt="Icon" class="align-self-center mr-3">

                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Soft Skill Training</h5>
                                 <p class="text pr-2">Assist students to interact in an effective and
                                     harmonious way.</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
 </section> -->
 <section id="portfolio" class="portfolio-area">
     <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20">
                     <h3 class="title">Key Features</h3>
                     <p class="text">Facilitating the elements to empower the Indian Education System.</p>
                 </div> <!-- row -->
             </div>
         </div> <!-- row -->
         <div class="row">
             <div class="col-lg-12 col-sm-12">
                 <div class="portfolio-menu pt-30 text-center">
                     <ul>
                         <!-- <li data-filter="*" class="active">ALL WORK</li> -->
                         <li onclick="showhide()" id="virtualclass" data-filter=".virtual-school" class="active">K To 12</li>
                         <li onclick="showinstitutional()" id="instbrand" data-filter=".institutional-brand">Nursing Competition Exams</li>
                         <li onclick="showsmart()" id="smartteacher" data-filter=".smart-teacher">Add On Courses</li>

                     </ul>
                 </div>
             </div>
         </div>

         <div class="container">
             <div id="virtual" class=" portfolio-card virtual-school">
                 <div class="row ">
                     <div class="col-lg-6 ">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\product\student-self-learning/cbse-map-contents.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">CBSE Map Contents</h5>
                                 <p class="text ">Informative map and content, describing the CBSE syllabus</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 ">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\product\student-self-learning/animation-video.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Animation Videos</h5>
                                 <p class="text pr-2"> Videos that help you visualize various concepts, making it easier to understand.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 ">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                             <img src="{{asset('assets\images\product\student-self-learning/solved-question -paper.png')}}" alt="Icon" class="align-self-center mr-3">

                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Solved Question Paper</h5>
                                 <p class="text pr-2">We provide Solved Question Paper that help students master each chapter.</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div id="institutional" class="hidden portfolio-card institutional-brand">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="single-about d-sm-flex mt-30   pb-3 pt-2 pl-2 Features media ">
                             <img src="{{asset('assets\images\KeyFeatures\InstitutionalBranding\School Website_2.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Syllabus Map Contents</h5>
                                 <p class="text pr-2">Correct combination of syllabus, fulfilling every student’s learning goals. </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media ">
                             <img src="{{asset('assets\images\product\student-self-learning/competition -courses.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Competition Courses</h5>
                                 <p class="text pr-2">Helping students beyond school services by preparing them for the future
                                 </p>
                             </div>
                         </div>
                     </div>

                 </div>

             </div>
             <div id="smart" class="hidden  portfolio-card smart-teacher">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\product\student-self-learning\bank-po-courses.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Bank PO Courses</h5>
                                 <p class="text pr-2">The Course will prepare you for greater
                                     accuracy and speed which will help you to crack the Bank PO exam.
                                     Or This Course will help you to crack the Bank PO exam with increasing your accuracy and speed.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="single-about d-sm-flex  mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\KeyFeatures\SmartTeacherTraining\OnlineTeacherTrainingCourse.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">NEET JEE Courses</h5>
                                 <p class="text pr-2">We offer courses which are designed to build the base of students who want to face competitive examination. </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="single-about d-sm-flex  mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\KeyFeatures\SmartTeacherTraining\SmartTeacherCertification.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Eyelets Courses</h5>
                                 <p class="text pr-2">Certifying teachers as technologically
                                     advanced ‘Smart Teachers</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex  mt-30 pb-3 pt-2 pl-2 Features media">
                             <div class="about-icon">
                                 <img src="{{asset('assets\images\KeyFeatures\Studentgrooming\Careerguidance.png')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Career Guidance</h5>
                                 <p class="text pr-2">Counseling students to navigate their future
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInRight " data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\KeyFeatures\Studentgrooming\resumewriting.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Resume Writing</h5>
                                 <p class="text pr-2">Training students to put their best foot forward.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Key Features -->

 <!-- demo-button -->
 <section>
     <div class="container-fluid">
         <div class="row pt-5 pb-5" style="background-color: #161f33;">
             <div class="col-md-12 col-lg-6    col-12 wow bounceIn" data-wow-duration=".8s" data-wow-delay="0.1s">
                 <h1 class="text-white text-center">
                     Ready to get started?
                 </h1>
                 <h5 class="text-white text-center">
                     Get in touch, or Request A Demo
                 </h5>
             </div>
             <div class="col-md-12 p-0  col-lg-6  mt-4 col-12 ">
                 <div class="row">
                     <div class="col-md-12 d-flex justify-content-center col-lg-6 col-12  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                         <a href="{{route('products.self-learning-form')}}" class="btn bg-white rounded-pill btn-hover mr-3" style="color: #161f33;">Request A Demo &#x27A7;</a>

                     </div>
                     <div class="col-md-12 d-flex justify-content-center  col-12    col-lg-4  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.5s">
                         <div class="btn bg-white rounded-pill btn-hover " style="color: #161f33;">Contact Us &#x27A7;</div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </section>
 <!-- demo-button -->

 <!--====== Our Plan PART START ======-->

 <!-- <section id="pricing" class="portfolio-area">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20">
                     <h3 class="title">Our Plan</h3>
                     <p class="text">Plans of all sizes customised for your needs</p>
                 </div> 
             </div>
         </div> 
         <div class="row justify-content-center">
             <div class="col-lg-4 col-md-7 col-sm-9">
                 <div id="basic" class="pricing-style-one mt-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                     <div class="pricing-icon d-sm-block text-center">
                         <img src="assets/images/wman.svg" alt="">
                     </div>
                     <div class="pricing-header text-center">
                         <h5 class="sub-title">Basic</h5>
                     </div>
                     <div class="pricing-list">
                         <ul>
                             <li><i class="lni-check-mark-circle"></i> Online Platform</li>
                             <li><i class="lni-check-mark-circle"></i> Admin Panel Training</li>
                             <li><i class="lni-check-mark-circle"></i> Dedicated Support</li>
                             <li><i class="lni-check-mark-circle"></i> Promotional Videos</li>
                             <li><i class="lni-check-mark-circle"></i> Smart teacher hiring support</li>
                             <li><i class="lni-check-mark-circle"></i> Assignment & Exams</li>
                             <li><i class="lni-check-mark-circle"></i> Google Classroom</li>
                         </ul>
                     </div>
                     <div class="pricing-btn rounded-buttons text-center">
                         <a class="main-btn rounded-three" href="#" data-toggle="modal" data-target="#modal-contact">GET STARTED</a>
                     </div>
                 </div> 
             </div>

             <div class="col-lg-4 col-md-7 col-sm-9">
                 <div id="standard" class="pricing-style-one mt-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                     
                     <div class="pricing-header text-center">
                         <h5 class="sub-title">Standard</h5>
                     </div>
                     <div class="pricing-list">
                         <ul>
                             <li><i class="lni-check-mark-circle"></i> <b>All Features Of Basics</b></li>
                             <li><i class="lni-check-mark-circle"></i> Institutional Branding</li>
                             <li><i class="lni-check-mark-circle"></i> Online Presence</li>
                         </ul>
                     </div>
                     <div class="pricing-btn rounded-buttons text-center">
                         <a class="main-btn rounded-three" href="#" data-toggle="modal" data-target="#modal-contact">GET STARTED</a>
                     </div>
             </div>

             <div class="col-lg-4 col-md-7 col-sm-9">
                 <div id="premium" class="pricing-style-one mt-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
                     
                     <div class="pricing-header text-center">
                         <h5 class="sub-title">Premium</h5>
                        
                     </div>
                     <div class="pricing-list">
                         <ul>
                             <li><i class="lni-check-mark-circle"></i><b> All Features Of Standard</b></li>
                             <li><i class="lni-check-mark-circle"></i>Account Manager</li>
                             <li><i class="lni-check-mark-circle"></i>Digital Marketing setup</li>
                             <li><i class="lni-check-mark-circle"></i>Unlimited Students</li>
                             <li><i class="lni-check-mark-circle"></i>Parent-Teacher Meeting</li>
                             <li><i class="lni-check-mark-circle"></i>Student Grooming</li>
                         </ul>
                     </div>
                     <div class="pricing-btn rounded-buttons text-center">
                         <a class="main-btn rounded-three" href="#" data-toggle="modal" data-target="#modal-contact">GET STARTED</a>
                     </div>
                 </div> 
             </div>
         </div> 
     </div> 
 </section> -->
 <!--====== Our Plan PART END ======-->
 <!-- faq's -->
 <!-- <section id="deliverables" class="contact-area bg-white">
     <div class="container ">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                     <h4 class="title">FAQS
                         <hr style=" border-top: 1px solid #161f33; ">
                     </h4>
                 </div>
             </div>
         </div>
         <ul class="nav nav-pills mb-3 justify-content-center wow fadeInUp" id="pills-tab" role="tablist" data-wow-duration=".5s" data-wow-delay="0.2s">
             <li class="nav-item justify-content-center">
                 <a class="nav-link active rounded-pill pl-5 pr-5 faqss mr-5  text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="background-color: #161f3373;">General</a>
             </li>
             <li class="nav-item justify-content-center">
                 <a class="nav-link  rounded-pill pl-5 pr-5   mr-5   text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="background-color: #161f3373; ">Technical</a>
             </li>

         </ul>
         <div class="tab-content wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.5s" id="pills-tabContent">
             <div class="tab-pane fade show active justify-content-center text-centerm " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                 <div id="accordion">
                     <div class="row wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.5s">
                         <div class="col-lg-12">
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll" aria-expanded="true" aria-controls="generalonecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Is your app secure?
                                 </div>
                                 <div id="generalonecoll" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     Yes, our app is complete secured. There will be no issue of datasharing. All information submitted by you remain safe.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generaltwo" style="cursor: pointer;" data-toggle="collapse" data-target="#generaltwocoll" aria-expanded="true" aria-controls="generaltwocoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     How do you train to use your app?
                                 </div>
                                 <div id="generaltwocoll" class="collapse pl-2 text-left" aria-labelledby="generaltwo" data-parent="#accordion">
                                     Our team will provide you prior training before selling you the app sontgat you can cell well acquainted.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalthree" style="cursor: pointer;" data-toggle="collapse" data-target="#generalthreecoll" aria-expanded="true" aria-controls="generalthreecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     What educational function does you provide?
                                 </div>
                                 <div id="generalthreecoll" class="collapse pl-2 text-left" aria-labelledby="generalthree" data-parent="#accordion">
                                     We have demo videos, online presentations, tutorials etc. that can be used for training.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade justify-content-center text-center" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                 <div id="accordion1">
                     <div class="row ">
                         <div class="col-lg-12">
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicalone" style="cursor: pointer;" data-toggle="collapse" data-target="#technicalonecoll" aria-expanded="true" aria-controls="technicalonecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Can I use your app on my iOS mobile?
                                 </div>
                                 <div id="technicalonecoll" class="collapse pl-2 text-left" aria-labelledby="technicalone" data-parent="#accordion1">
                                     Yes, this app is accessible on both android and iOS mobiles with certain specifications and proper internet.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicaltwo" style="cursor: pointer;" data-toggle="collapse" data-target="#technicaltwocoll" aria-expanded="true" aria-controls="technicaltwocoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Do I have to make monthly payments?
                                 </div>
                                 <div id="technicaltwocoll" class="collapse pl-2 text-left" aria-labelledby="technicaltwo" data-parent="#accordion1">
                                     No, it's a CMS software which you have to buy for a single time and then you can access it throughout the session.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicalthree" style="cursor: pointer;" data-toggle="collapse" data-target="#technicalthreecoll" aria-expanded="true" aria-controls="technicalthreecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     How we can login?
                                 </div>
                                 <div id="technicalthreecoll" class="collapse pl-2 text-left" aria-labelledby="technicalthree" data-parent="#accordion1">
                                     You have to signup with an official email id and password, and then you can use the CMS any time.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section> -->
 <!-- end-faq's -->
 @endsection