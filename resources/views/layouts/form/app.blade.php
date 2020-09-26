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
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);



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



    <!--====== NAVBAR PART START ======-->



    <!--====== NAVBAR PART ENDS ======-->
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-12 col-lg-12 ">
                @yield('content')
            </div>

        </div>
    </div>




    <!-- ./Contact Modal Start-->
    <!--====== FOOTER FOUR PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <!--a href="#" class="back-to-top"><i class="lni-chevron-up" style="color:white"></i></!--a-->

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->



    <!--====== PART ENDS ======-->










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
    <script src="assets/js/main.js"></script>

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