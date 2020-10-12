<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>e-EdPort</title>

    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-1.png')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .dropdown-item:hover {
            color: white !important;
            text-decoration: none !important;
            background-color: #484f59 !important;
        }

        .dropdown-item.active {
            color: #161f33 !important;
            text-decoration: none !important;
            background-color: white !important;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;

            text-align: center;
            font-family: arial;

        }

        .hidden {
            display: none;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176741089-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-176741089-1');
    </script>

</head>

<body>
    @if((request()->is('/'))|| (request()->routeIs('services.careercounselling')))
    @else
    <style>
        .header-hero::before {
            background: -webkit-linear-gradient(rgb(232 237 255 / 66%), rgb(239 254 255 / 28%) 100%, rgba(254, 255, 244, 0.3) 0%, rgba(255, 255, 255, 0.12)) !important;
            /* background: -webkit-linear-gradient(rgba(232, 237, 255, 0.9), rgba(239, 254, 255, 0.9) 100%, rgba(254, 255, 244, 0.3) 0%, rgba(255, 255, 255, 0.12)) !important; */
            background: -o-linear-gradient(rgba(232, 237, 255, 0.9), rgba(239, 254, 255, 0.9) 100%, rgba(254, 255, 244, 0.3) 0%, rgba(255, 255, 255, 0.12)) !important;
            /* background: linear-gradient(rgba(232, 237, 255, 0.9), rgb(239 254 255 / 28%) 100%, rgb(254 255 244 / 0%) 0%, rgb(255 255 255 / 0%)) !important; */
            background: linear-gradient(rgb(241 239 241 / 65%), rgb(234 241 241), #f8f9fa5e 0%) !important;
        }
    </style>
    @endif
    <!--====== PRELOADER PART START ======-->

    <!-- <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg mx-5">
                            <a class="navbar-brand" href="{{route('index')}}">
                                <img src="{{asset('assets/images/logo-1.png')}}" style="height:70px;" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item   {{ (request()->is('/')) ? 'active' : '' }}">
                                        <a class="page-scroll" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown  {{ (request()->is('products/*')) ? 'active' : '' }}">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Products <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item {{ (request()->routeIs('products.classroomsolution')) ? 'active' : '' }}" href="{{route('products.classroomsolution')}}">
                                                e-EdPort Virtual Classroom Solution
                                            </a>
                                            <a class="dropdown-item {{ (request()->routeIs('products.studentselflLearning')) ? 'active' : '' }}" href="{{route('products.studentselflLearning')}}">
                                                e-EdPort Student Self-Learning Solution
                                            </a>
                                            <a class="dropdown-item {{ (request()->routeIs('products.parentalcontrol')) ? 'active' : '' }}" href="{{route('products.parentalcontrol')}}">
                                                e-EdPort Parental Control App
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown {{ (request()->is('services/*')) ? 'active' : '' }}">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Services <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item {{ (request()->routeIs('services.teachertraining')) ? 'active' : '' }}" href="{{route('services.teachertraining')}}">
                                                e-EdPort Smart Teacher Training
                                            </a>
                                            <a class="dropdown-item {{ (request()->routeIs('services.teachercertification')) ? 'active' : '' }}" href="{{route('services.teachercertification')}}">
                                                e-EdPort Smart Teacher Certification
                                            </a>
                                            {{-- <a class="dropdown-item {{ (request()->routeIs('services.careercounselling')) ? 'active' : '' }}" href="{{route('services.careercounselling')}}">
                                            e-EdPort Student Career Counselling
                                            </a> --}}
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown {{ (request()->is('resources/*')) ? 'active' : '' }}">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Resources <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item  {{ (request()->routeIs('resources.brochure')) ? 'active' : '' }}" href="{{route('resources.brochure')}}">
                                                Brochure
                                            </a>
                                            <!-- <a class="dropdown-item  {{ (request()->routeIs('resources.events')) ? 'active' : '' }}" href="{{route('resources.events')}}">
                                                Events
                                            </a> -->
                                            <a class="dropdown-item  {{ (request()->routeIs('resources.faqs')) ? 'active' : '' }}" href="{{route('resources.faqs')}}">
                                                FAQ’s
                                            </a>
                                        </div>
                                    </li>
                                    <!-- <li class="nav-item dropdown ">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            About <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item {{ (request()->routeIs('about.companyoverview')) ? 'active' : '' }}" href="{{route('about.companyoverview')}}">
                                                Company Overview
                                            </a>
                                            <a class="dropdown-item {{ (request()->routeIs('about.leadershipteam')) ? 'active' : '' }}" href="{{route('about.leadershipteam')}}">
                                                Leadership Team
                                            </a>
                                            <a class="dropdown-item {{ (request()->routeIs('about.latestnews')) ? 'active' : '' }}" href="{{route('about.latestnews')}}">
                                                Latest News
                                            </a>
                                            <a class="dropdown-item {{ (request()->routeIs('about.careers')) ? 'active' : '' }}" href="{{route('about.careers')}}">
                                                Careers
                                            </a>
                                            <a class="dropdown-item {{ (request()->routeIs('about.contactus')) ? 'active' : '' }}" href="{{route('about.contactus')}}">
                                                Contact Us
                                            </a>
                                        </div>
                                    </li> -->
                                    <li class="nav-item   {{ (request()->routeIs('about')) ? 'active' : '' }}">
                                        <a class="page-scroll" href="{{route('about')}}">About Us</a>
                                    </li>
                                    <li class="nav-item   {{ (request()->routeIs('about.contactus')) ? 'active' : '' }}">
                                        <a class="page-scroll" href="{{route('about.contactus')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div>
        </div>
        <div id="home" class="header-hero bg_cover" @yield('image')>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 mx-0">
                        <div class="header-content text-center mx-0">
                            <h3 class="header-title wow fadeInUp mx-0" data-wow-duration=".7s" data-wow-delay="0.8s">@yield('heading')</h3>
                            <p class="text wow fadeInUp" style="color:#1a1a1a" data-wow-duration=".7s" data-wow-delay="0.9s">@yield('sub-heading')</p>
                            <ul class="header-btn rounded-buttons mb-2">
                                <li class="remove"><a style="background-color: #ffffffb3" class="main-btn btn-two video-popup wow fadeInUp" data-wow-duration=".7s" data-wow-delay="1s" href="#">WATCH
                                        THE VIDEO <i class="lni-play"></i></a></li>
                                <li><a @yield('demo') class="main-btn rounded-three wow fadeInUp " data-wow-duration=".7s" data-wow-delay="1s">BOOK FREE DEMO</a></li>
                            </ul>
                            <!--iframe style="border-radius:7px;" src="https://drive.google.com/file/d/1aLc0rCbCVlwTV4Yc5j0k5b0FJ3nQ_jD5/preview" width="300" height="190" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                                picture-in-picture" allowfullscreen></iframe-->
                        </div> <!-- header content -->
                    </div>
                </div>
            </div>
            <div class="header-shape">
                <img src="{{asset('assets/images/header-shape.svg')}}" alt="shape">
            </div>
        </div> <!-- header content -->
    </section>

    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SIDEBAR PART START ======-->

    @yield('content')

    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row justify-content-center">
                    @yield('footer')
                </div>
            </div>
        </div> <!-- footer widget -->

        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">© Copyright 2020, All Rights Reserved |<a style="color: #253372" rel="nofollow" href="{{url('/')}}"> Montbit Technologies.</a></p>
                        </div> <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10">
                            <a href="index.html"><img style="height: 100px !important;" src="{{asset('assets/images/logo-1.png')}}" alt="Logo"></a>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <li><a target="_blank" href="https://www.facebook.com/eEdPort/?ref=aymt_homepage_panel&eid=ARCBqzK2__TNHwk7BNW0sZ_oWFM0IvHmdY-FDdEfmU53ssgLiCXbgwFPlB9YkVl9yHDyQSyJrafLcVi-"><i class="lni-facebook-filled"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCy76UlnIMTWXk_aN4ZnmDdA"><i class="lni-youtube"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/e_edport/?hl=en"><i class="lni-instagram-original"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/showcase/electroniceducationportal"><i class="fa fa-linkedin"></i></a></li>
                        </ul> <!-- social -->
                    </div>
                </div>
            </div>
        </div> <!-- footer copyright -->
    </footer>


    <!--====== jquery js ======-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('assets/js/slick.min.js')}}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Scrolling js ======-->
    <script src="{{ asset('assets/js/scrolling-nav.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js')}}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('assets/js/ajax-contact.js')}}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>

    <!--=====Jquery Validate====-->
    <script type="text/javascript" src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <script type="text/javascript" src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <audio id="myAudio">
        <source src="{{asset('sound/e-EdPort Audio John.mp3')}}" type="audio/mpeg">
    </audio>
</body>
<script>
    // $(document).ready(function() {
    //   setTimeout(function() {
    //     $('#modal-contact').modal('show');
    //     $("#myAudio")[0].play();
    //   }, 20000);
    // });
</script>
<script>
    $(document).ready(function() {
        $('.filter').on('change', function() {
            var state_id = $('#state').val();
            $.ajax({
                url: "{{route('getcity')}}",
                type: 'POST',
                dataType: "json",
                data: {
                    'state_id': state_id
                },
                success: function(data) {
                    var listItems1;
                    listItems1 += "<option value=''>Select City</option>";
                    for (var i = 0; i < data.length; i++) {
                        listItems1 += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
                    }

                    $("#city").html(listItems1);

                }
            });
        });
    });
</script>
<script>
    function showhide() {
        $('.portfolio-card').addClass('hidden');
        var a = document.getElementById("virtual");
        a.classList.toggle('hidden');
    }


    function showinstitutional() {

        $('.portfolio-card').addClass('hidden');
        var b = document.getElementById("institutional");
        b.classList.toggle('hidden');
    }

    function showsmart() {

        $('.portfolio-card').addClass('hidden');
        var c = document.getElementById("smart");
        c.classList.toggle('hidden');
    }

    function showstudent() {

        $('.portfolio-card').addClass('hidden');
        var d = document.getElementById("student");
        d.classList.toggle('hidden');
    }

    function showinternational() {

        $('.portfolio-card').addClass('hidden');
        var e = document.getElementById("International");
        e.classList.toggle('hidden');
    }
</script>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v8.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution=setup_tool page_id="111542750588557" logged_in_greeting="Hi! We can provide you a product demo. Interested?" logged_out_greeting="Hi! We can provide you a product demo. Interested?">
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $.validator.setDefaults({
            submitHandler: function(form) {
                form.submit();
            }
        });
        $('#saveteacher').validate({
            rules: {
                contactname: {
                    required: true,
                    minlength: 5
                },
                contactemail: {
                    required: true,
                    email: true
                },
                mobileno: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 12
                },
                entityvalue: {
                    required: true
                },
                institutionname: {
                    required: true
                },
                city: {
                    required: true
                },
                state: {
                    required: true
                }
            },
            messages: {
                contactname: {
                    required: "Enter The Name",
                    minlength: "Please, at least {0} characters are necessary"
                },
                contactemail: {
                    required: "Enter The Email",
                    email: "Please, Enter Valid Email"
                },
                mobileno: {
                    required: "Enter Phone No."
                },
                entityvalue: {
                    required: "Select The Entity"
                },
                institutionname: {
                    required: "Enter The Institution Name"
                },
                city: {
                    required: "Enter The City"
                },
                state: {
                    required: "Enter The State"
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
<script>
    $('body').on('click', '.goto', function(event) {
        var id = $(this).attr('data-id');
        $("#" + id).trigger("click");
    });
</script>
@if ($errors->any())
@foreach ($errors->all() as $error)
<script type="text/javascript">
    toastr.error('{{$error}}');
</script>
@endforeach
@endif

@if ( Session::has('flash_message') )
<script type="text/javascript">
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        timer: 3000,
        padding: '1em',
        showConfirmButton: false,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });


    Toast.fire({
        icon: "{{ Session::get('flash_type') }}",
        title: "<h6><b>{{ Session::get('flash_message') }}</b></h6>"
    });
</script>
@endif

</html>