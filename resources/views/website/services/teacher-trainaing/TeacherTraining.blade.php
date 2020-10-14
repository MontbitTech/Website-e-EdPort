 @extends('layouts.website.app')
 @section('footer') @include('layouts.website.footer-main') @endsection
 @section('demo') href="{{route('services.teacher-training-form')}}" @endsection
 @section('image')style="background-image:url({{asset('assets/images/traning1.jpg')}})" @endsection
 @section('heading') Get Smart Teacher Technical Training @endsection
 @section('sub-heading') Time to get a grip over the key skills of online teaching @endsection
 @section('content')
 <style>
     .header-area {
         margin-top: 6.2rem;
     }

     li.remove {
         display: none !important;
     }
 </style>
 <script>
     $('li.remove').remove();
 </script>
 <section id="about" class="portfolio-area">
     <div class="site-section">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-4 col-md-4 col-12 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <img src="{{asset('assets\images\KeyFeatures\SmartTeacherTraining\OnlineTeacherTrainingCourse.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 ml-auto order-lg-1 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                     <h3 class="mb-4 section-heading"><strong>Who is a Smart Teacher?</strong></h3>
                     <p class="mb-1" style="line-height:1.7">
                         A Smart Teacher is a powerful educator who works to innovate classrooms and provide high-quality learning experiences. A Smart Teacher must be well acquainted with all the online tools and softwares which will be in high demand in this digital world. A Smart Teacher must know the usage of tools like pentab, style and many other digital tools.
                     </p>
                 </div>
             </div>
             <div class="row align-items-center">
                 <div class="col-lg-8 col-md-8 col-12 ml-auto wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.1s">
                     <h3 class="mb-4 section-heading"><strong>Why it is important?</strong></h3>
                     <p class="mb-1" style="line-height:1.7">
                         Smart Teacher Training Programme is one of the biggest innovators in the Education Technology, we intent to simplify technical things for teachers. This a new concept of training teachers and making them equipped with some amazing online and offline tools working with media and information technology.
                     </p>
                 </div>
                 <div class="col-lg-4 col-md-4 col-12 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <img src="{{asset('assets/images/mission.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
             </div>
             <!-- <div class="row align-items-center">
                 <div class="col-lg-4 col-md-4 col-12 text-center about-img">
                     <div class="row mb-5 mb-lg-0 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <img src="{{asset('assets/images/vision.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                     </div>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 ml-auto order-lg-1 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                     <h3 class="mb-4 section-heading"><strong>What will you get?</strong></h3>
                     <p class="mb-1" style="line-height:1.7">
                         The course offers theoretical and practical tools to help teachers/learners in embedding critical thinking from the teaching process to the assessment. The course is structured as a toolkit which learners use at their own pace, the course features three levels which sheds light on meaningful and multidisciplinary learning activities.
                     </p>
                 </div>
             </div> -->
         </div>
     </div>
 </section>
 <section id="portfolio" class="portfolio-area bg-light">
     <div class="container-fluid">
         <div class="row justify-content-center wow fadeInUp" data-wow-duration=".8s" data-wow-delay="0s">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20">
                     <h3 class="title">What will you get</h3>
                     <div class="w-50 m-auto text-center">
                         <hr style=" border-top: 1px solid #161f33;">
                     </div>
                 </div>
             </div>
         </div>
         <div class="container">
             <div id="virtual" class=" portfolio-card virtual-school">
                 <div class="row justify-content-center">
                     <div class="col-lg-4  col-12 col-md-4 justify-content-center wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center " style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets/images/traning/stage_11.jpg')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0 ">
                                 <h4 class="mt-0 ">Level 1 Training</h4>
                                 <p class="text m-0 p-0 ">This is the basic level of training program in which we will train the educators about how to
                                     use Android mobiles or laptops or computers for teaching online in a more effective manner.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4  col-12 col-md-4   justify-content-center wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center " style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets/images/traning/stage_22.jpg')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0">
                                 <h4 class="mt-0 ">Level 2 Training</h4>
                                 <p class="text m-0 p-0 ">In this level we will train the educators for using different types of educational softwares like Google Classroom,
                                     Microsoft Team, etc. Also we will help them to learn all the features of Ms-office
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4  col-12 col-md-4 justify-content-center  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.2s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center " style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets/images/traning/stage_33.jpg')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0">
                                 <h4 class="mt-0 ">Level 3 Training</h4>
                                 <p class="text  m-0 p-0 ">This is the most advanced level of training program in which we will train them on using
                                     several teaching softwares and specially Content Creation & Management using CMS & LMS
                                 </p>
                             </div>
                         </div>
                     </div>
                     <!-- <div class="col-lg-4  col-12 col-md-4 offset-md-4 offset-lg-4  justify-content-center wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.2s" style="background-color: transparent;">
                         <div class="single-about   card shadow-none border-0 p-0 m-0  justify-content-center " style="background-color: transparent;">
                             <div class="card-header border-0 " style="background-color: transparent;">
                                 <img src="{{asset('assets\images\KeyFeatures\virtualschooling\liveclasses.png')}}" alt="Icon" class="align-self-center mr-3">
                             </div>
                             <div class="about-content card-body border-0 m-0 p-0">
                                 <h4 class="mt-0 ">Live Classes</h4>
                                 <p class="text m-0 p-0 ">Helps conduct uninterrupted classes online from the
                                     comfort of your home.
                                 </p>
                             </div>
                         </div>
                     </div> -->
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section id="portfolio" class="portfolio-area bg-light">
     <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 ">
                     <h3 class="title wow fadeInUp" data-wow-duration=".8s" data-wow-delay="0s">Key Features</h3>
                     <p class="text wow fadeInUp" data-wow-duration=".8s" data-wow-delay="0.2s">Facilitating the elements to empower the Indian Education System.</p>
                 </div>
             </div>
         </div>
         <div class="container">
             <div id="virtual" class=" portfolio-card virtual-school">
                 <div class="row ">
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\services\traning\technical-expertise.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Technical Expertise</h5>
                                 <p class="text ">Get expertise in using all types of latest technical educational tools </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\services\traning\increase-productivity.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Increase Productivity</h5>
                                 <p class="text pr-2">This digital training program will help you to increase your productivity. </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\services\traning\content-creation.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Content Creation</h5>
                                 <p class="text pr-2"> Get trained to create your own online content</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">
                             <img src="{{asset('assets\images\services\traning\classroom-management.png')}}" alt="Icon" class="align-self-center mr-3">
                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Classroom Management</h5>
                                 <p class="text pr-2"> Get trained for effective classroom management </p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </section>
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
                     <div class="col-md-12 d-flex justify-content-center col-lg-6 col-12   wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0s">
                         <a href="{{route('services.teacher-training-form')}}" class="btn bg-white rounded-pill btn-hover mr-3" style="color: #161f33;">Request A Demo &#x27A7;
                         </a>
                     </div>
                     <div class="col-md-12 d-flex justify-content-center  col-12    col-lg-4  wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.5s">
                         <div class="btn bg-white rounded-pill btn-hover " style="color: #161f33;">Contact Us &#x27A7;</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section id="deliverables" class="contact-area bg-white">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                     <h4 class="title">FAQS
                         <hr style=" border-top: 1px solid #161f33; ">
                     </h4>
                 </div>
             </div>
         </div>
         <ul class="nav nav-pills mb-3 justify-content-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s" id="pills-tab" role="tablist">
             <li class="nav-item justify-content-center">
                 <a class="nav-link active rounded-pill pl-5 pr-5 faqss mr-5  text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="background-color: #161f3373;">General</a>
             </li>
             <li class="nav-item justify-content-center">
                 <a class="nav-link  rounded-pill pl-5 pr-5   mr-5   text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="background-color: #161f3373; ">Technical</a>
             </li>
         </ul>
         <div class="tab-content  wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.5s" id="pills-tabContent">
             <div class="tab-pane fade show active justify-content-center text-centerm " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                 <div id="accordion">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll" aria-expanded="true" aria-controls="generalonecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Will I get a certificate after the completion of this program?
                                 </div>
                                 <div id="generalonecoll" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     On completion of the course you will receive an internationally recognized Diploma Certificate after appearing in an exam.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generaltwo" style="cursor: pointer;" data-toggle="collapse" data-target="#generaltwocoll" aria-expanded="true" aria-controls="generaltwocoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     What is the learning mode for this program?
                                 </div>
                                 <div id="generaltwocoll" class="collapse pl-2 text-left" aria-labelledby="generaltwo" data-parent="#accordion">
                                     The courses are available in Online/ E- Learning mode where you can join our webinars also.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalthree" style="cursor: pointer;" data-toggle="collapse" data-target="#generalthreecoll" aria-expanded="true" aria-controls="generalthreecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     What is the advantage of this program to Government teachers?
                                 </div>
                                 <div id="generalthreecoll" class="collapse pl-2 text-left" aria-labelledby="generalthree" data-parent="#accordion">
                                     This will help you to get acquainted with latest technology required in online teaching.
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
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicalone" style="cursor: pointer;" data-toggle="collapse" data-target="#technicalonecoll" aria-expanded="true" aria-controls="technicalonecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Is this program recognized by government?
                                 </div>
                                 <div id="technicalonecoll" class="collapse pl-2 text-left" aria-labelledby="technicalone" data-parent="#accordion1">
                                     We provide a globally recognized program for teachers which is welcomed and considered worldwide.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicaltwo" style="cursor: pointer;" data-toggle="collapse" data-target="#technicaltwocoll" aria-expanded="true" aria-controls="technicaltwocoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Do you provide any kind of placement?
                                 </div>
                                 <div id="technicaltwocoll" class="collapse pl-2 text-left" aria-labelledby="technicaltwo" data-parent="#accordion1">
                                     We do provide you placement opportunity to educators who successfully complete the course.
                                 </div>
                             </div>
                             <div class="card bg-light  shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="technicalthree" style="cursor: pointer;" data-toggle="collapse" data-target="#technicalthreecoll" aria-expanded="true" aria-controls="technicalthreecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     What type of devices are needed?
                                 </div>
                                 <div id="technicalthreecoll" class="collapse pl-2 text-left" aria-labelledby="technicalthree" data-parent="#accordion1">
                                     It completely depends on you. We will provide training to use devices. It's your choice what you want.
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