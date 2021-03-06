 @extends('layouts.website.app')
 @section('footer') @include('layouts.website.footer-main') @endsection
 @section('demo') href="{{route('products.virtual-classroom-form')}}" @endsection
 @section('image')style="background-image:url({{asset('assets/images/classroom.jpg')}})" @endsection
 @section('heading') Integration of Technology into Curriculum @endsection
 @section('sub-heading')The Best Technology Integrated Virtual Classroom Solutions for You. @endsection
 @section('content')
 <style>
     li.remove {
         display: none !important;
     }

     .header-area {
         margin-top: 6.2rem;
     }
 </style>
 <section id="about" class="portfolio-area bg-light">
     <div class="site-section">
         <div class="container-fluid">
             <div class="row justify-content-center mb-5">
                 <div class="col-lg-12 py-0 my-0">
                     <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                         <h3 class="title">Why e-EdPort Virtual Classroom Solution?</h3>
                     </div>
                 </div>
                 <div class="col-md-10 px-5   justify-content-center text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                     <p>e-EdPort Virtual Classroom Solution is the pioneer in innovative educational solutions providers.
                         We endeavour to bring a new age Learning Management System, designed the most simplistic way, for education to go virtual. ​It is vital for turning a traditional classroom into a smart class where youcan get all the resources ​combined on a single platform.</p>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section id=" portfolio" class="portfolio-area ">
     <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 ">
                     <h3 class="title wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">Key Features</h3>
                     <p class="text wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">Online classes can attract superb lecturers from around the world</p>
                 </div>
             </div>
         </div>
         <div class="container">
             <div id="virtual" class=" portfolio-card virtual-school">
                 <div class="row ">
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\KeyFeatures\virtualschooling\liveclasses.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Useful Content Resources</h5>
                                 <p class="text ">You can get essential resources from authentic sources available online.</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInRight " data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\KeyFeatures\virtualschooling\practiceexercises2.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Advanced Interactive Whiteboard</h5>
                                 <p class="text pr-2"> You can use whiteboard for illustrating the concept.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\KeyFeatures\virtualschooling\selfexplanatoryvideos2.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Archived Live Sessions</h5>
                                 <p class="text pr-2">Students can view the live lectures later on using this feature.</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <div class="single-about d-sm-flex mt-30  Features pb-3 pt-2 pl-2 media">
                             <img src="{{asset('assets\images\KeyFeatures\virtualschooling\onlineassessment2.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Extended Live Support</h5>
                                 <p class="text pr-2"> You can take the live suppprt from the technical head.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.2s">
                         <div class="single-about d-sm-flex mt-30 Features pb-3 pt-2 pl-2 media">
                             <img src="{{asset('assets\images\KeyFeatures\virtualschooling\mocktest.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Home Work Assignments</h5>
                                 <p class="text pr-2">
                                     You can provide assignments to the students for evaluation.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.2s">
                         <div class="single-about media d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\KeyFeatures\virtualschooling\Additionalresources.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Live Doubt Solving</h5>
                                 <p class="text pr-2">
                                     Students can get the solutions of their doubts in the mid of the class.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </section>
 <section>
     <div class="container-fluid ">
         <div class="row pt-5 pb-5" style="background-color: #161f33;">
             <div class="col-md-12 col-lg-6    col-12 wow bounceIn" data-wow-duration=".8s" data-wow-delay="0.1s">
                 <h1 class="text-white text-center font-weight-light mb-4">
                     Ready to get started?
                 </h1>
                 <h5 class="text-white text-center">
                     Get in touch, or Request A Demo
                 </h5>
             </div>
             <div class="col-md-12 p-0  col-lg-6  mt-4 col-12  ">
                 <div class="row">
                     <div class="col-md-12 d-flex justify-content-center col-lg-6 col-12 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                         <a href="{{route('products.virtual-classroom-form')}}" class="btn bg-white rounded-pill btn-hover mr-3" style="color: #161f33;">Request A Demo &#x27A7;</a>
                     </div>
                     <div class="col-md-12 d-flex justify-content-center  col-12    col-lg-4  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.5s">
                         <a href="{{route('about.contactus')}}" class="btn bg-white rounded-pill btn-hover " style="color: #161f33;">Contact Us &#x27A7;</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

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
 <section id="deliverables" class="contact-area bg-white">
     <div class="container ">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">
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
         <div class="tab-content " id="pills-tabContent">
             <div class="tab-pane fade show active justify-content-center text-centerm " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                 <div id="accordion">
                     <div class="row wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.5s">
                         <div class="col-lg-12">
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 media" id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll" aria-expanded="true" aria-controls="generalonecoll">
                                     <i class="fa fa-plus align-self-start mr-1 mt-1"></i>&nbsp;
                                     <p class="media-body"> Can students review their classes?</p>
                                 </div>
                                 <div id="generalonecoll" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     Yes, students can access the previous classes through our archived classes feature.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 media" id="generaltwo" style="cursor: pointer;" data-toggle="collapse" data-target="#generaltwocoll" aria-expanded="true" aria-controls="generaltwocoll">
                                     <i class="fa fa-plus align-self-start mr-1 mt-1"></i>&nbsp;
                                     <p class="media-body"> What if I have to give notes in the class?</p>
                                 </div>
                                 <div id="generaltwocoll" class="collapse pl-2 text-left" aria-labelledby="generaltwo" data-parent="#accordion">
                                     You can provide notes using a separate whiteboard or notes section where you can writing using auto tools.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 media" id="generalthree" style="cursor: pointer;" data-toggle="collapse" data-target="#generalthreecoll" aria-expanded="true" aria-controls="generalthreecoll">
                                     <i class="fa fa-plus align-self-start mr-1 mt-1"></i>&nbsp;
                                     <p class="media-body"> Is it possible to take exams with this software? </p>
                                 </div>
                                 <div id="generalthreecoll" class="collapse pl-2 text-left" aria-labelledby="generalthree" data-parent="#accordion">
                                     Yes, you can conduct exams and assessments and also display results to the students.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade justify-content-center text-center" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                 <div id="accordion1">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 media" id="technicalone" style="cursor: pointer;" data-toggle="collapse" data-target="#technicalonecoll" aria-expanded="true" aria-controls="technicalonecoll">
                                     <i class="fa fa-plus align-self-start mr-1 mt-1"></i>&nbsp;
                                     <p class="media-body"> Which Web Browser is required to use this software? </p>
                                 </div>
                                 <div id="technicalonecoll" class="collapse pl-2 text-left" aria-labelledby="technicalone" data-parent="#accordion1">
                                     You dont need any specific browser for this. It will run on all browsers like Google Chrome, Mozilla Firefox, Internet Explorer etc.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 media" id="technicaltwo" style="cursor: pointer;" data-toggle="collapse" data-target="#technicaltwocoll" aria-expanded="true" aria-controls="technicaltwocoll">
                                     <i class="fa fa-plus align-self-start mr-1 mt-1"></i>&nbsp;
                                     <p class="media-body"> How much speed is required for the Internet connection? </p>
                                 </div>
                                 <div id="technicaltwocoll" class="collapse pl-2 text-left" aria-labelledby="technicaltwo" data-parent="#accordion1">
                                     1 Mbps or more than that (broadband connection is recommended over mobile data).
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 media" id="technicalthree" style="cursor: pointer;" data-toggle="collapse" data-target="#technicalthreecoll" aria-expanded="true" aria-controls="technicalthreecoll">
                                     <i class="fa fa-plus align-self-start mr-1 mt-1"></i>&nbsp;
                                     <p class="media-body"> Which software are you using for class tests or assignments? </p>
                                 </div>
                                 <div id="technicalthreecoll" class="collapse pl-2 text-left" aria-labelledby="technicalthree" data-parent="#accordion1">
                                     Google Classroom will help you to fulfill your requirement related to assignments or tests.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 @endsection