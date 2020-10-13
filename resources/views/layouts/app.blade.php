<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Certificate') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <script type="text/javascript" src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Datatables -->
    <script src="https://kit.fontawesome.com/a3a1b3a803.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <style>
        .dropdown-item.active {
            color: #161f33 !important;
            text-decoration: none !important;
            background-color: white !important;
        }
    </style>
</head>

<body>
    <section class="header-area ">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('assets/images/logo-1.png')}}" style="height:70px;" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @else

                                    <?php
                                    $role = explode(',', Auth::user()->role);
                                    ?>
                                    <li class="nav-item dropdown ml-5 {{ (request()->is('product/request/*')) ? 'active' : '' }}">
                                        <a id=" navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Product <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                             @if(Auth::user()->role=='admin' || in_array('e-EdPort Virtual Classroom Solution',$role))

                                            <a class="dropdown-item {{ (request()->routeIs('products.virtual-classroom-solution')) ? 'active' : '' }}" href="{{ route('products.virtual-classroom-solution') }}">
                                                e-EdPort Virtual Classroom Solution
                                            </a>
                                            @endif

                                            @if(Auth::user()->role=='admin' || in_array('e-EdPort Student Self Learning Solution',$role))
                                            <a class="dropdown-item {{ (request()->routeIs('products.student-selflearning-solution')) ? 'active' : '' }}" href="{{ route('products.student-selflearning-solution') }}">
                                                e-EdPort Student Self-Learning Solution
                                            </a>
                                            @endif

                                            @if(Auth::user()->role=='admin' || in_array('e-EdPort Parental Control App',$role))
                                            <a class="dropdown-item {{ (request()->routeIs('products.parental-control-app')) ? 'active' : '' }}" href="{{ route('products.parental-control-app') }}">
                                                e-EdPort Parental Control App
                                            </a>
                                            @endif


                                        </div>



                                    </li>
                                    <li class="nav-item dropdown ml-5 {{ (request()->is('services/*')) ? 'active' : '' }}">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Service <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                            @if(Auth::user()->role=='admin' || in_array('e-EdPort Smart Teacher Training',$role))
                                            <a class="dropdown-item {{ (request()->routeIs('services.teacher-training-show')) ? 'active' : '' }}" href="{{ route('services.teacher-training-show') }}">
                                                e-EdPort Smart Teacher Training
                                            </a>
                                            @endif

                                            @if(Auth::user()->role=='admin' || in_array('e-EdPort Smart Teacher Certification',$role))
                                            <a class="dropdown-item {{ (request()->routeIs('services.teacher-certification-show')) ? 'active' : '' }}" href="{{ route('services.teacher-certificate-show') }}">
                                                e-EdPort Smart Teacher Certification
                                            </a>
                                            @endif
                                            <!-- <a class="dropdown-item {{ (request()->routeIs('services.careecounselling-show')) ? 'active' : '' }}" href="{{ route('services.careecounselling-show') }}">
                                                e-EdPort Student Career Counselling
                                            </a> -->


                                        </div>



                                    </li>
                                    @endguest
                                    @auth
                                    @if(Auth::user()->role=='admin')
                                    <li class="nav-item dropdown ml-5 {{ (request()->is('teacher/*')) ? 'active' : '' }}">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Teacher <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <!-- <a class="dropdown-item {{ (request()->routeIs('teachers')) ? 'active' : '' }}" href="{{ route('teachers') }}">
                                                Leads
                                            </a> -->
                                            <a class="dropdown-item {{ (request()->routeIs('course')) ? 'active' : '' }}" href="{{ route('course') }}">
                                                Add Certificate
                                            </a>
                                            <a class="dropdown-item {{ (request()->routeIs('certificates')) ? 'active' : '' }}" href="{{ route('certificate') }}">
                                                Generate Certificate
                                            </a>
                                        </div>
                                    </li>
                                    @endif
                                    <li class="nav-item dropdown ml-5 {{ (request()->is('registeruser')) ? 'active' : '' }}">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            @if(Auth::user()->role=='admin')
                                            <a class="dropdown-item {{ (request()->routeIs('registershow')) ? 'active' : '' }}" href="{{ route('registershow') }}">
                                                {{ __('Register') }}
                                            </a>
                                            @endif
                                            @endauth
                                        </div>


                                    </li>

                                </ul>
                            </div>

                            <!--div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </!--div-->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script type="text/javascript">
            toastr.error('{{$error}}')
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
            })
        </script>
        @endif
        <div class="mt-5 pt-5"></div>
        @yield('content')

    </section>
    <script type="text/javascript" src="{{asset('js/adminlte.min.js')}}"></script>
</body>

</html>