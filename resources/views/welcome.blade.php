  @extends('layouts.website.app')
  @section('image')style="background-image:url({{asset('assets/images/bg3.jpg')}})" @endsection
  @section('content')
  <div class="sidebar-right">
      <div class="sidebar-close">
          <a class="close" href="#close"><i style="font-weight:bolder;" class="lni-close"></i></a>
      </div>
      <div class="sidebar-content">
          <div class="sidebar-logo text-center">
              <a href="#"><img src="{{asset('assets/images/logo-1.png')}}" alt="Logo"></a>
          </div> <!-- logo -->
          <div class="sidebar-menu">
              <ul>
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#">SERVICES</a></li>
                  <li><a href="#">RESOURCES</a></li>
                  <li><a href="#contact">CONTACT</a></li>
              </ul>
          </div> <!-- menu -->
          <div class="sidebar-social d-flex align-items-center justify-content-center">
              <span>FOLLOW US ON</span>
              <ul>
                  <li><a target="_blank" href="https://www.facebook.com/eEdPort/?ref=aymt_homepage_panel&eid=ARCBqzK2__TNHwk7BNW0sZ_oWFM0IvHmdY-FDdEfmU53ssgLiCXbgwFPlB9YkVl9yHDyQSyJrafLcVi-"><i class="lni-facebook-filled"></i></a></li>
                  <li><a target="_blank" href="https://www.instagram.com/e_edport/?hl=en"><i class="lni-instagram"></i></a></li>
                  <li><a target="_blank" href="https://www.youtube.com/channel/UCy76UlnIMTWXk_aN4ZnmDdA"><i class="lni-youtube"></i></a></li>
                  <li><a target="_blank" href="https://www.linkedin.com/showcase/electroniceducationportal"><i class="fa fa-linkedin"></i></a></li>

              </ul>
          </div> <!-- sidebar social -->
      </div> <!-- content -->
  </div>
  <div class="overlay-right"></div>

  <!--====== SAIDEBAR PART ENDS ======-->

  <!--====== About Us PART START ======-->
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
                      <p class="mb-1" style="line-height:1.7">e-EdPort is founded with a Mission to digitalise education by collaborating technology and skills to promote all round development of institutions, educators, & students. We aimed towards the combined efforts of our dynamic team to support each other and work together towards our goal.</p>
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

  <!--====== Deliverables PART START ======-->
  <section id="deliverables" class="contact-area">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                      <h4 class="title">Our Offerings</h4>
                      <!-- <p class="text">Providing solutions for systematic functioning of schools.</p> -->
                      <p class="text">Providing solutions for systematic functioning of education.</p>
                  </div> <!-- row -->
              </div>
          </div> <!-- row -->
          <div class="row">
              <div class="col-lg-6">
                  <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                      <div class="about-icon">
                        <a href="{{route('products.classroomsolution')}}">
                          <img src="{{asset('assets\images\Deliverables\virtualclassroom_3.png')}}" alt="Icon">
                        </a>
                      </div>
                      <div class="about-content media-body">
                          <a href="{{route('products.classroomsolution')}}">
                          <h4 class="about-title">Virtual Classroom Platform</h4>
                          <p class="text">New Age Learning platform connecting teachers to students.</p>
                        </a>
                      </div>
                  </div> <!-- single about -->
              </div>
              <div class="col-lg-6">
                  <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                      <div class="about-icon">
                        <a href="{{route('services.teachertraining')}}">
                          <img src="{{asset('assets\images\Deliverables\SelfLearning.png')}}" alt="Icon">
                        </a>
                      </div>
                      <div class="about-content media-body">
                        <a href="{{route('services.teachertraining')}}">
                          <h4 class="about-title">Smart Teacher Training</h4>
                          <p class="text">Learn the significance of online teaching aids and get a complete knowledge about using digital tools in a virtual classroom.</p>
                        </a>
                      </div>
                  </div> <!-- single about -->
              </div>
              <div class="col-lg-6">
                  <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                      <div class="about-icon">
                        <a href="{{route('products.studentselflLearning')}}">
                          <img src="{{asset('assets\images\Deliverables\SelfLearning.png')}}" alt="Icon">
                        </a>
                      </div>
                      <div class="about-content media-body">
                        <a href="{{route('products.studentselflLearning')}}">
                          <h4 class="about-title">Self Learning App</h4>
                          <p class="text">e-EdPort self learning mobile app makes learning portable and accessible
                              24/7.</p>
                        </a>
                      </div>
                  </div> <!-- single about -->
              </div>
              <div class="col-lg-6">
                  <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                      <div class="about-icon">
                        <a href="{{route('services.teachercertification')}}">
                          <img src="{{asset('assets/images/Deliverables/Competitiveexamreparation.png')}}" alt="Icon">
                        </a>
                      </div>
                      <div class="about-content media-body">
                        <a href="{{route('services.teachercertification')}}">
                          <h4 class="about-title">Smart Teacher Certification</h4>
                          <p class="text">Beyond education services help students prepare for future.
                          </p>
                        </a>
                      </div>
                  </div> <!-- single about -->
              </div>
              <div class="col-lg-6">
                  <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                      <div class="about-icon">
                        <a href="{{route('products.parentalcontrol')}}">
                          <img src="{{asset('/assets/images/parental_control.png')}}" alt="Icon" style="object-fit: scale-down; height:70px">
                        </a>
                      </div>
                      <div class="about-content media-body">
                        <a href="{{route('products.parentalcontrol')}}">
                          <h4 class="about-title">Parental Control App</h4>
                          <p class="text">Screen your child’s activities over the internet.</p>
                        </a>
                      </div>
                  </div> <!-- single about -->
              </div>
              <div class="col-lg-6">
                  <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                      <div class="about-icon">
                        <a href="{{route('services.careercounselling')}}">
                          <img src="{{asset('assets\images\Deliverables\solvedpracticeexercise.png')}}" alt="Icon">
                        </a>
                      </div>
                      <div class="about-content media-body">
                        <a href="{{route('services.careercounselling')}}">
                          <h4 class="about-title">Student Career Guidance</h4>
                          <p class="text">Counseling students to navigate their future endeavour</p>
                        </a>
                      </div>
                  </div> <!-- single about -->
              </div>

          </div> <!-- row -->
      </div> <!-- container -->
      <!-- <div class="about-image d-lg-flex align-items-center">
            <div class="image wow fadeInRight" data-wow-duration=".5s" data-wow-delay="0.6s" data-wow-offset="50">
                <img src="assets/images/about-2.png" alt="about">
            </div>
        </div>  -->
  </section>
  <!--====== Deliverables PART START ======-->

  <!--====== Key Features PART START ======-->
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
                          <li onclick="showhide()" id="virtualclass" data-filter=".virtual-school" class="active">Virtual Education</li>
                          <li onclick="showinstitutional()" id="instbrand" data-filter=".institutional-brand">Institutional Branding
                          </li>
                          <li onclick="showsmart()" id="smartteacher" data-filter=".smart-teacher">Smart Teacher Training</li>
                          <li onclick="showstudent()" data-filter=".student-groom">Student Grooming</li>
                          <li onclick="showinternational()" data-filter=".International-Exchange">International
                              Exchange Programme</li>
                      </ul>
                  </div> <!-- portfolio menu -->
              </div>
          </div> <!-- row -->

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
                                  <h5 class="mt-0 mb-1">Educational institution Website</h5>
                                  <p class="text pr-2">Create your digital identity with your Educational institution Website.
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
                                  <p class="text pr-2"> Promotional video content for individual educational institution.
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












          <!-- <div class="row grid">

                <div class="col-md-4 col-sm-6 ">

                    
                    <div class="single-portfolio mt-30 wow fadeInUp media" data-wow-duration=".5s"
                        data-wow-delay="0.2s">
                        <img src="assets/images/elearning.png" alt="" class="align-self-center mr-3">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Virtual schooling</h5>

                            <ul>
                                <li>
                                    Live Classes
                                </li>
                                <li>
                                    Self Explanatory Videos
                                </li>
                                <li>
                                    Practice Exercises
                                </li>
                                <li>
                                    Online Assessments
                                </li>
                                <li>
                                    Mock Tests
                                </li>
                            </ul>



                        </div>
                    </div>
                </div>




                <div class="col-md-4 col-sm-6">
                    <div class="single-portfolio mt-30 wow fadeInUp media" data-wow-duration=".5s"
                        data-wow-delay="0.4s">


                        <img src="assets/images/test.png" alt="" class="align-self-center mr-3">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Institutional Branding</h5>
                            <ul>
                                <li>
                                    Live Classes
                                </li>
                                <li>
                                    Self Explanatory Videos
                                </li>
                                <li>
                                    Practice Exercises
                                </li>
                                <li>
                                    Online Assessments
                                </li>
                                <li>
                                    Mock Tests
                                </li>
                            </ul>

                        </div>


                    </div>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <div class="single-portfolio mt-30 wow fadeInUp media" data-wow-duration=".5s"
                        data-wow-delay="0.4s">

                        <img src="assets/images/support.png" alt="" class="align-self-center mr-3">



                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Smart teacher training</h5>
                            <ul>
                                <li>
                                    Live Classes
                                </li>
                                <li>
                                    Self Explanatory Videos
                                </li>
                                <li>
                                    Practice Exercises
                                </li>
                                <li>
                                    Online Assessments
                                </li>
                                <li>
                                    Mock Tests
                                </li>
                            </ul>

                        </div>

                    </div> 
                </div>




                <div class="col-md-5 col-sm-6">
                    <div class="single-portfolio mt-30 wow fadeInUp media" data-wow-duration=".5s"
                        data-wow-delay="0.7s">

                        <img src="assets/images/school.png" alt="" class="align-self-center mr-3">

                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Student Grooming</h5>
                            <ul>
                                <li>
                                    Live Classes
                                </li>
                                <li>
                                    Self Explanatory Videos
                                </li>
                                <li>
                                    Practice Exercises
                                </li>
                                <li>
                                    Online Assessments
                                </li>
                                <li>
                                    Mock Tests
                                </li>
                            </ul>
                        </div>

                    </div> 
                </div>
                <div class="col-md-5 col-sm-6 ">
                    <div class="single-portfolio mt-30 wow fadeInUp media" data-wow-duration=".5s"
                        data-wow-delay="0.2s">

                        <img src="assets/images/teacher.png" alt="" class="align-self-center mr-3">

                        <div class="media-body">
                            <h5 class="mt-0 mb-1">International Exchange Programme</h5>


                            <ul>
                                <li>
                                    Live Classes
                                </li>
                                <li>
                                    Self Explanatory Videos
                                </li>
                                <li>
                                    Practice Exercises
                                </li>
                                <li>
                                    Online Assessments
                                </li>
                                <li>
                                    Mock Tests
                                </li>
                            </ul>

                        </div>
                    </div> 
                </div>


            </div>  -->
      </div>
  </section>
  <!--====== Key Features PART END ======-->

  <!--====== Educational Partner PART START ======-->

  <section id="client" class="contact-area">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <div class="section-title text-center pb-20">
                      <h3 class="title">Educational Partner</h3>
                  </div> <!-- section title -->
              </div>
          </div> <!-- row -->
          <div class="row client-active">

              <div class="col-lg-12">
                  <div class="single-client text-center">
                      <img src="assets/images/google_partner.jpg" alt="Logo">
                  </div> <!-- single client -->
              </div>
          </div> <!-- row -->
      </div> <!-- container -->
  </section>
  <!--====== Educational Partner PART END ======-->

  <!--====== Our Plan PART START ======-->

  <section id="pricing" class="portfolio-area">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <div class="section-title text-center pb-20">
                      <h3 class="title">Our Plan</h3>
                      <p class="text">Plans of all sizes customised for your needs</p>
                  </div> <!-- section title -->
              </div>
          </div> <!-- row -->
          <div class="row justify-content-center">
              <div class="col-lg-4 col-md-7 col-sm-9">
                  <div id="basic" class="pricing-style-one mt-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                      <!--div class="pricing-icon d-sm-block text-center">
                            <img src="assets/images/wman.svg" alt="">
                        </div-->
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
                  </div> <!-- pricing style one -->
              </div>

              <div class="col-lg-4 col-md-7 col-sm-9">
                  <div id="standard" class="pricing-style-one mt-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                      <!--div class="pricing-icon text-center">
                            <img src="assets/images/wman.svg" alt="">
                        </div-->
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
                  </div> <!-- pricing style one -->
              </div>

              <div class="col-lg-4 col-md-7 col-sm-9">
                  <div id="premium" class="pricing-style-one mt-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
                      <!--div class="pricing-icon text-center">
                            <img src="assets/images/wman.svg" alt="">
                        </div-->
                      <div class="pricing-header text-center">
                          <h5 class="sub-title">Premium</h5>
                          <!--p class="month"><span class="price">$ 699</span>/month</p-->
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
                  </div> <!-- pricing style one -->
              </div>
          </div> <!-- row -->
      </div> <!-- container -->
  </section>
  <!--====== Our Plan PART END ======-->

  <!--====== CONTACT BOX PART START ======-->

  <section id="contact" class="contact-area">
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
          <!--div class="contact-form pt-50">
                <div class="row justify-content-center">
                    <div-- class="col-lg-4">
                        <div class="contact-map mt-50 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="gmap_canvas">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.4884161377277!2d-123.01257788462505!3d49.22922847932554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548676f5748b69f5%3A0x64f8b9c312f3f232!2s120-6075%20Wilson%20Ave%2C%20Burnaby%2C%20BC%20V5H%202R5%2C%20Canada!5e0!3m2!1sen!2sin!4v1595565073998!5m2!1sen!2sin"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div> 
                    </div-->

          <!--div class="col-lg-6">
                        <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="2s"
                            data-wow-delay="0.4s">
                            <form id="contact-form" action="assets/contact.php" method="post">
                                <div class="form-input mt-15">
                                    <label>Name</label>
                                    <div class="input-items default">
                                        <input type="text" placeholder="Name" name="name">
                                        <i class="lni-user"></i>
                                    </div>
                                </div>
                                <div class="form-input mt-15">
                                    <label>Email</label>
                                    <div class="input-items default">
                                        <input type="email" placeholder="Email" name="email">
                                        <i class="lni-envelope"></i>
                                    </div>
                                </div>
                                <div class="form-input mt-15">
                                    <label>Massage</label>
                                    <div class="input-items default">
                                        <textarea placeholder="Massage" name="massage"></textarea>
                                        <i class="lni-pencil-alt"></i>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="form-input rounded-buttons mt-20">
                                    <button type="submit" class="main-btn rounded-three">Submit</button>
                                </div>
                            </form>
                        </div>
                    </!--div-->
      </div>
      <!--/!--div-->
      </div>
  </section>

  <!--====== CONTACT BOX PART ENDS ======-->





  <!--====== portfolio PART ENDS ======-->
  <section id="social" class="portfolio-area">
      <div class="row justify-content-center">
          <div class="col-lg-6">
              <div class="section-title text-center pb-20">
                  <h3 class="title">Our Social Presence</h3>
              </div> <!-- row -->
          </div>
      </div> <!-- row -->
      <div class="container text-center">
          <div class="row justify-content-center">

              <a target="_blank" href="https://www.facebook.com/eEdPort/?ref=aymt_homepage_panel&eid=ARCBqzK2__TNHwk7BNW0sZ_oWFM0IvHmdY-FDdEfmU53ssgLiCXbgwFPlB9YkVl9yHDyQSyJrafLcVi-"><i style="color:blue;" class="fa mainpageicon fa-facebook-f"></i></a>

              <a target="_blank" href="https://www.youtube.com/channel/UCy76UlnIMTWXk_aN4ZnmDdA"><i style="color:#bb0000;" class="fa mainpageicon fa-youtube"></i></a>

              <a target="_blank" href="https://www.instagram.com/e_edport/?hl=en"><i style="color:#bf155c;" class="fa mainpageicon fa-instagram"></i></a>
              <a target="_blank" href="https://www.linkedin.com/showcase/electroniceducationportal"><i style="color:#0077b7;" class="fa mainpageicon fa-linkedin"></i></a></li>
          </div>

      </div>
  </section>

  <!--====== Deliverables PART START ======-->

  <!--====== PRINICNG STYLE EIGHT ENDS ======-->

  <!--====== CALL TO ACTION TWO PART START ======-->

  <!--section id="call-action" class="call-action-area call-action-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="call-action-content mt-45">
                        <h3 class="action-title">Get latest updates!</h3>
                        <p class="text">We never spam your email</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="call-action-form mt-50">
                        <form action="#">
                            <input type="text" placeholder="Enter your email">
                            <div class="action-btn rounded-buttons">
                                <button class="main-btn rounded-three">subscribe</button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div> 
    </section-->

  <!--====== CALL TO ACTION TWO PART ENDS ======-->

  <!--====== TESTIMONIAL THREE PART START ======-->

  <!--section id="testimonial" class="testimonial-area testimonial-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Testimonial</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row testimonial-active-2">
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/author-3.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="author-name">Isabela Moreira</h6>
                                    <span class="sub-title">CEO, GrayGrids</span>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/author-1.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="author-name">Fiona</h6>
                                    <span class="sub-title">Lead Designer, UIdeck</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/author-2.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="author-name">Elon Musk</h6>
                                    <span class="sub-title">CEO, SpaceX</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->

  <!--====== TESTIMONIAL THREE PART ENDS ======-->



  <!--====== CLIENT LOGO PART ENDS ======-->

  <!--====== BLOG PART START ======-->

  <!--section id="blog" class="blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Our Blog</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> 
                </div>
            </div> 
            
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-blog mt-50 wow fadeIn" data-wow-duration=".5s" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="assets/images/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Budget-Friendly Design Ideas to Transform Your Office</a></h4>
                            <span><i class="lni-calendar"></i> Mar 23, 2022</span>
                            <span><i class="lni-comment-alt"></i> 24Commnet</span>
                            <p class="text">Create a workspace your team will love with these money-saving interior design tips. Learn how People and Culture leaders… align their workspace and company values.</p>
                            <a class="more" href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-blog mt-50 wow fadeIn" data-wow-duration=".5s" data-wow-delay="0.5s">
                        <div class="blog-image">
                            <img src="assets/images/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Budget-Friendly Design Ideas to Transform Your Office</a></h4>
                            <span><i class="lni-calendar"></i> Mar 23, 2022</span>
                            <span><i class="lni-comment-alt"></i> 24Commnet</span>
                            <p class="text">Create a workspace your team will love with these money-saving interior design tips. Learn how People and Culture leaders… align their workspace and company values.</p>
                            <a class="more" href="#">READ MORE</a>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-blog mt-50 wow fadeIn" data-wow-duration=".5s" data-wow-delay="0.8s">
                        <div class="blog-image">
                            <img src="assets/images/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Budget-Friendly Design Ideas to Transform Your Office</a></h4>
                            <span><i class="lni-calendar"></i> Mar 23, 2022</span>
                            <span><i class="lni-comment-alt"></i> 24Commnet</span>
                            <p class="text">Create a workspace your team will love with these money-saving interior design tips. Learn how People and Culture leaders… align their workspace and company values.</p>
                            <a class="more" href="#">READ MORE</a>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section-->

  <!--====== BLOG PART ENDS ======-->

  @endsection