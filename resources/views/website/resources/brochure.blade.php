 @extends('layouts.website.app')
 @section('footer') @include('layouts.website.footer-main') @endsection
 @section('content')
 <style>
     .top-margin {
         margin-top: 9.9375rem;
     }

     @media (max-width: 991.98px) {}

     @media (max-width: 575.98px) {
         .top-margin {
             margin-top: 3.9375rem !important;
         }
     }
 </style>
 <script>
     document.getElementById('home').remove();
 </script>
 <section>
     <div class="container ">
         <div class="row py-3  " style="margin-top: 6.4rem !important;">
             <div class="col-md-6 col-12 col-lg-6">
                 <img src="{{asset('assets/images/bg3.jpg')}}" alt="" class="border shadow" style="width:28.125rem; height:37.5rem">
             </div>
             <div class="col-md-6 col-12 col-lg-6 top-margin">
                 <h2 style="color: #161f33; " class="font-weight-normal "> Sales Funnel Brochure </h2>
                 <hr width="40" style=" border-top: 3px solid #161f33; ">
                 <p class="font-weight-normal">Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Aut commodi perferendis earum dicta nam
                     minima dignissimos doloribus explicabo mollitia ducimus.
                     ipsum dolor sit amet consectetur
                     adipisicing elit. Aut commodi perferendis earum dicta nam
                     minima dignissimos doloribus explicabo mollitia ducimus.
                 </p>
                 <a href="{{asset('pdf/Sales-Funnel-Brochure.pdf')}}" target="_blank" class="btn btn-success rounded-pill mt-5 px-5 py-2 font-weight-bold "> Download <span class="mb-0 pb-0">&#x25BC;</span> </a>
             </div>
         </div>
     </div>
 </section>
 <section class="bg-light">
     <div class="container ">
         <div class="row py-3">
             <div class="col-md-6 col-12 col-lg-6 top-margin">
                 <h2 style="color: #161f33; " class="font-weight-normal "> Self Learning Product </h2>
                 <hr width="40" style=" border-top: 3px solid #161f33; ">
                 <p class="font-weight-normal">Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Aut commodi perferendis earum dicta nam
                     minima dignissimos doloribus explicabo mollitia ducimus.
                     ipsum dolor sit amet consectetur
                     adipisicing elit. Aut commodi perferendis earum dicta nam
                     minima dignissimos doloribus explicabo mollitia ducimus.
                 </p>
                 <a href="{{asset('pdf/Selflearing.pdf')}}" target="_blank" class="btn btn-success rounded-pill mt-5 px-5 py-2 font-weight-bold "> Download <span class="mb-0 pb-0">&#x25BC;</span> </a>
             </div>
             <div class="col-md-6 col-12 col-lg-6">
                 <img src="{{asset('assets/images/bg3.jpg')}}" alt="" class="border shadow" style="width:28.125rem; height:37.5rem">
             </div>

         </div>
     </div>
 </section>
 <section>
     <div class="container ">
         <div class="row py-3">
             <div class="col-md-6 col-12 col-lg-6">
                 <img src="{{asset('assets/images/bg3.jpg')}}" alt="" class="border shadow" style="width:28.125rem; height:37.5rem">
             </div>
             <div class="col-md-6 col-12 col-lg-6 top-margin">
                 <h2 style="color: #161f33; " class="font-weight-normal "> Student's guide to Google Classroom </h2>
                 <hr width="40" style=" border-top: 3px solid #161f33; ">
                 <p class="font-weight-normal">Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Aut commodi perferendis earum dicta nam
                     minima dignissimos doloribus explicabo mollitia ducimus.
                     ipsum dolor sit amet consectetur
                     adipisicing elit. Aut commodi perferendis earum dicta nam
                     minima dignissimos doloribus explicabo mollitia ducimus.
                 </p>
                 <a href="{{asset('pdf/Student-guide-to-Google-Classroom.pdf')}}" target="_blank" class="btn btn-success rounded-pill mt-5 px-5 py-2 font-weight-bold "> Download <span class="mb-0 pb-0">&#x25BC;</span> </a>
             </div>
         </div>
     </div>
 </section>
 @endsection