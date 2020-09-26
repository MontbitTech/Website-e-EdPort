 @extends('layouts.website.app')
 @section('heading') Digital Replica of Traditional Classroom @endsection
 @section('sub-heading')Bringing Your Classroom to Your Home @endsection
 @section('content')
 <section id="about" class="portfolio-area">
     <div class="site-section">
         <div class="container-fluid">
             <div class="row justify-content-center mb-5">
                 <div class="col-lg-12 py-0 my-0">
                     <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                         <h3 class="title">Everything required to manage a school </h3>
                     </div>
                 </div>
                 <div class="col-md-10 px-5   justify-content-center text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                     <p>e-EdPort Virtual Classroom Solution is the pioneer in innovative educational solutions providers.
                         We endeavour to bring a new age Learning Management System, designed the most simplistic way, for schooling to go virtual. It is vital for turning a traditional classroom into a smart class where you can get all the resources combined on a single platform.
                     </p>
                 </div>

             </div>
         </div>

     </div>
 </section>
 <section id=" portfolio" class="portfolio-area bg-light">
     <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 ">
                     <h3 class="title wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">Key Features</h3>
                     <p class="text wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">Facilitating the elements to empower the Indian School Education System.</p>
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
                                 <h5 class="mt-0 mb-1">Live Classes</h5>
                                 <p class="text ">Helps conduct uninterrupted classes online from the
                                     comfort of your home.</p>
                             </div>
                         </div> <!-- single about -->
                     </div>
                     <div class="col-lg-6 wow fadeInRight " data-wow-duration=".8s" data-wow-delay="0s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                             <img src="{{asset('assets\images\KeyFeatures\virtualschooling\practiceexercises2.png')}}" alt="Icon" class="align-self-center mr-3">

                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Practice Exercises</h5>
                                 <p class="text pr-2"> Helps students master each chapter's concepts.
                                 </p>
                             </div>
                         </div> <!-- single about -->
                     </div>
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.1s">
                         <div class="single-about d-sm-flex mt-30 pb-3 pt-2 pl-2 Features media">

                             <img src="{{asset('assets\images\KeyFeatures\virtualschooling\selfexplanatoryvideos2.png')}}" alt="Icon" class="align-self-center mr-3">

                             <div class="about-content media-body">
                                 <h5 class="mt-0 mb-1">Self Explanatory Videos</h5>
                                 <p class="text pr-2">Videos that help you visualize various
                                     concepts, making it easier to understand.</p>
                             </div>
                         </div> <!-- single about -->
                     </div>
                     <div class="col-lg-6 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.1s">
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
                     <div class="col-lg-6 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="0.2s">
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
                     <div class="col-lg-6 wow fadeInRight" data-wow-duration=".8s" data-wow-delay="0.2s">
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


         </div>
     </div>

 </section>
 <section>
     <div class="container-fluid ">
         <div class="row pt-5 pb-5" style="background-color: #161f33;">
             <div class="col-md-12 col-lg-6    col-12 wow bounceIn" data-wow-duration=".8s" data-wow-delay="0.1s">
                 <h1 class="text-white text-center ">
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
                         <div class="btn bg-white rounded-pill btn-hover " style="color: #161f33;">Contact Us &#x27A7;</div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </section>
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
                     <div class="row">
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
 </section>
 @endsection