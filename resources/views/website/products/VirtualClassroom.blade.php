 @extends('layouts.website.app')

 @section('content')
 <style>
     .btn-hover:hover {
         transition: font-size .5s;
         font-size: 18px;
     }

     @media (max-width: 991.98px) {
         .btn-hover {
             margin-bottom: 20px;
         }
     }
 </style>
 <section id="about" class="portfolio-area">
     <div class="site-section">
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
             <!-- <div class="row align-items-center">
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
             </div> -->

         </div>
     </div>
     <section id="portfolio" class="portfolio-area">
         <div class="container-fluid">
             <div class="row justify-content-center">
                 <div class="col-lg-6">
                     <div class="section-title text-center pb-20">
                         <h3 class="title">Key Features</h3>
                         <p class="text">Facilitating the elements to empower the Indian School Education System.</p>
                     </div> <!-- row -->
                 </div>
             </div>
             <div class="container">
                 <div id="virtual" class=" portfolio-card virtual-school">
                     <div class="row ">
                         <div class="col-lg-6 ">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\liveclasses.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Live Classes</h5>
                                     <p class="text ">Helps conduct uninterrupted classes online from the
                                         comfort of your home.</p>
                                 </div>
                             </div> <!-- single about -->
                         </div>





                         <div class="col-lg-6 ">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\practiceexercises2.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Practice Exercises</h5>
                                     <p class="text pr-2"> Helps students master each chapter's concepts.
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>





                         <div class="col-lg-6 ">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\selfexplanatoryvideos2.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Self Explanatory Videos</h5>
                                     <p class="text pr-2">Videos that help you visualize various
                                         concepts, making it easier to understand.</p>
                                 </div>
                             </div> <!-- single about -->
                         </div>





                         <div class="col-lg-6 ">
                             <div class="single-about d-sm-flex mt-30  Features pb-3 pt-2 pl-2 media">

                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\onlineassessment2.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Online Assessments</h5>
                                     <p class="text pr-2"> Easy to create, launch and manage online tests and
                                         assessments securely with Google Classroom.
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>




                         <div class="col-lg-6 ">
                             <div class="single-about d-sm-flex mt-30 Features pb-3 pt-2 pl-2 media">

                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\mocktest.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Mock Tests</h5>
                                     <p class="text pr-2">
                                         Be exam ready by solving test questions from a pool of
                                         questions
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>




                         <div class="col-lg-6 ">
                             <div class="single-about media d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\Additionalresources.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Additional Resources</h5>
                                     <p class="text pr-2">
                                         Extra Resources like Drawing Board, WikiPedia and many more
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>
                     </div>

                 </div>



                 <div id="institutional" class="hidden portfolio-card institutional-brand">
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex mt-30   pb-3 pt-2 pl-2 Features media ">

                                 <img src="{{asset('assets\images\KeyFeatures\InstitutionalBranding\School Website_2.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">School Website</h5>
                                     <p class="text pr-2">Create your digital identity with your School Website.
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>





                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media ">

                                 <img src="{{asset('assets\images\KeyFeatures\InstitutionalBranding\DigitalmarketingSetup.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Digital Marketing Setup</h5>
                                     <p class="text pr-2">Increasing your brand presence with your own
                                         website along with social media pages.
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>





                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex  mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\InstitutionalBranding\PromotinalVideo.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Promotional Videos</h5>
                                     <p class="text pr-2"> Promotional video content for individual schools.
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>
                     </div>

                 </div>


                 <div id="smart" class="hidden  portfolio-card smart-teacher">
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\SmartTeacherTraining\OnlineTeacherAssessment_2.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Online Teacher Assessment</h5>
                                     <p class="text pr-2">Assessing the teacher’s ability to help
                                         finesse their technical knowledge.
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>





                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex  mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\SmartTeacherTraining\OnlineTeacherTrainingCourse.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Online Teacher Training Course</h5>
                                     <p class="text pr-2">Familiarising teachers with the new
                                         technological trends </p>
                                 </div>
                             </div>
                         </div>





                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex  mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\SmartTeacherTraining\SmartTeacherCertification.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Smart Teacher Certification</h5>
                                     <p class="text pr-2">Certifying teachers as technologically
                                         advanced ‘Smart Teachers</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>



                 <div id="student" class="hidden portfolio-card student-groom">
                     <div class="row">
                         <div class="col-lg-6">
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





                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\Studentgrooming\resumewriting.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Resume Writing</h5>
                                     <p class="text pr-2">Training students to put their best foot forward.
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>





                         <div class="col-lg-6">
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
                 <div id="International" class="hidden portfolio-card International-Exchange">
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\InternationalExchangeProgram\InternationalExposure.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">International Exposure</h5>
                                     <p class="text pr-2">Helping students attain a global perspective.
                                     </p>
                                 </div>
                             </div> <!-- single about -->
                         </div>





                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\InternationalExchangeProgram\CulturalExposure.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Cultural Exposure</h5>
                                     <p class="text pr-2">Discovering and unveiling cultural diversities and
                                         connecting with people from varying backgrounds.
                                     </p>
                                 </div>
                             </div>
                         </div>





                         <div class="col-lg-6">
                             <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                                 <img src="{{asset('assets\images\KeyFeatures\InternationalExchangeProgram\LanguageAcquisition.png')}}" alt="Icon" class="align-self-center mr-3">

                                 <div class="about-content media-body">
                                     <h5 class="mt-0 mb-1">Language Acquisition </h5>
                                     <p class="text pr-2">Acquainting students with global languages,
                                         stimulating them to become multilingual.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </section>
 <section>
     <div class="container-fluid">
         <div class="row pt-5 pb-5" style="background-color: #161f33;">
             <div class="col-md-12 col-lg-6    col-12">
                 <h1 class="text-white text-center">
                     Ready to get started?
                 </h1>
                 <h5 class="text-white text-center">
                     Get in touch, or Request A Demo
                 </h5>
             </div>
             <div class="col-md-12 p-0  col-lg-6  mt-4 col-12 ">
                 <div class="row">
                     <div class="col-md-12 d-flex justify-content-center col-lg-6 col-12  ">
                         <div class="btn bg-white rounded-pill btn-hover mr-3" style="color: #161f33;">Request A Demo &#x27A7;</div>

                     </div>
                     <div class="col-md-12 d-flex justify-content-center  col-12    col-lg-4  ">
                         <div class="btn bg-white rounded-pill btn-hover " style="color: #161f33;">Contact Us &#x27A7;</div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </section>
 @endsection