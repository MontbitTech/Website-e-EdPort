 @extends('layouts.website.app')
 @section('footer') @include('layouts.website.footer-main') @endsection
 @section('content')
 <script>
     document.getElementById('home').remove();
 </script>
 <section id="about" class="mt-5 portfolio-area">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="0.8" data-wow-delay="0.1s">
                     <h3 class="title">FAQS</h3>
                 </div> <!-- row -->
             </div>
         </div>
         <div class="tab-content " id="pills-tabContent">
             <div class="tab-pane fade show active justify-content-center text-centerm " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                 <div id="accordion">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll" aria-expanded="true" aria-controls="generalonecoll">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     How to Login to e-EdPort Virtual Learning Platform?
                                 </div>
                                 <div id="generalonecoll" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     To Login to e-EdPort Virtual Learning Platform, Put in the website URL in your browser that we will provide you with and then put in the username and password which again will be provided by us. Once you have put in your credentials, you are all set to start classes.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll1" aria-expanded="true" aria-controls="generalonecoll1">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Where do I find the platform URL for e-EdPort Virtual Learning Platform?
                                 </div>
                                 <div id="generalonecoll1" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     The web URL, which will be unique for your particular school, will be provided by us.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll2" aria-expanded="true" aria-controls="generalonecoll2">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     How to conduct classes online through e-EdPort Virtual Learning Platform?
                                 </div>
                                 <div id="generalonecoll2" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     On the Teacher’s dashboard, you will see a ‘Join Live’ button. As soon as you click on it, it will start a Google meet meeting and then you just have to click on join now to enter your virtual class. The students will already be notified with the link to the meeting and can join your meeting through it.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll3" aria-expanded="true" aria-controls="generalonecoll3">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     How to give online assignments to students through e-EdPort Virtual Learning Platform?
                                 </div>
                                 <div id="generalonecoll3" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     On the teacher’s dashboard, click on the ‘New Assignment’ option and then you can either choose to assign a pre existing assignment (edited or unedited) or you can create a new assignment altogether. After you have given the assignment, you can check it under the ‘View Assignment’ option on the dashboard.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll4" aria-expanded="true" aria-controls="generalonecoll4">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Can we attach a word or PDF file from our computer for online assignments?
                                 </div>
                                 <div id="generalonecoll4" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     Yes, you can attach a PDF file from your computer for an assignment. To attach any file, you have to open the particular assignment then click on the three dots to edit it and then choose the ‘add’ button and finally click on the file option to upload the PDF file.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll5" aria-expanded="true" aria-controls="generalonecoll5">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Can we use Google Drive files for online assignments?
                                 </div>
                                 <div id="generalonecoll5" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     Yes, you can share a Google Drive file for an assignment directly. To attach any file, you have to open the particular assignment then click on the three dots to edit it and then choose the ‘add’ button and finally click on the Google Drive option to link the Google Drive file.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll6" aria-expanded="true" aria-controls="generalonecoll6">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     What if a teacher needs some assistance, while using the e-EdPort Virtual Learning Platform?
                                 </div>
                                 <div id="generalonecoll6" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     We have added two ‘Help’ options to help the teachers smoothen their teaching experience using our platform.The white ‘Help’ button, available for each class, when clicked will generate a help ticket directly in the school admin console and is accessible to the school admin who will then assist you with the issue.
                                     Further, we have added another help button in blue available on the top of the teacher’s dashboard where the teacher could specify the issue, which will be further addressed by the school admin.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll7" aria-expanded="true" aria-controls="generalonecoll7">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     How to reset login password for e-EdPort Virtual Learning Platform?
                                 </div>
                                 <div id="generalonecoll7" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     In case you forget your password, you have to contact your school admin and they will further take up this issue with the provider.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll8" aria-expanded="true" aria-controls="generalonecoll8">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     How could a teacher send online notifications to their students?
                                 </div>
                                 <div id="generalonecoll8" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     On the teacher’s dashboard, we have a ‘Notify Students’ button available, which the teachers would click if they want additional notifications to be sent to their students . A push notification would be sent through the Google classroom app along with an email notification, so that they can join the live class.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll9" aria-expanded="true" aria-controls="generalonecoll9">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     Can students be notified before a class?
                                 </div>
                                 <div id="generalonecoll9" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     Yes the students get an auto generated email fifteen to thirty minutes before the class but the teacher can send an email by themselves too by clicking on the ‘Notify Students’ option on their dashboard.
                                 </div>
                             </div>

                             <div class="card bg-light border-top-0 shadow-none mb-2 border" style="max-width: 100% !important; ">
                                 <div class="border mb-0 text-left collapsed pt-2 pb-2 pl-2 " id="generalone" style="cursor: pointer;" data-toggle="collapse" data-target="#generalonecoll10" aria-expanded="true" aria-controls="generalonecoll10">
                                     <i class="fa fa-plus"></i>&nbsp;
                                     How could I record a live class through e-EdPort Virtual Learning Platform?
                                 </div>
                                 <div id="generalonecoll10" class="collapse pl-2 text-left" aria-labelledby="generalone" data-parent="#accordion">
                                     Once you launch the Google meet, you can click on the triple dot option on the lower right side where you will find an option to record your session.
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