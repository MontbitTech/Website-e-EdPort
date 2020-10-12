<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <script type="text/javascript" src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>

<body style="background: -webkit-linear-gradient(left, #2d3d5f, #686e7a);">


    <div class="register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img style="width: 50%;" src="{{asset('image/career.png')}}" alt="" />
                <h2>Welcome</h2>
                <h4>Plan your career in the best way!</h4>
                <!-- <a href="{{ route('login') }}"><input type="button" class="btn btn-primary" name="" value="Login" /></a><br /> -->

            </div>
            <div class="col-md-9 register-right">
                <div class="float-right">
                    <a href="{{route('services.careercounselling')}}" class="btn text-white mt-2 rounded" style="border-radius: 31px !important;background-color: #0062cc;">
                        Back</a>
                </div>
                <div class="m-auto text-center">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading"><b>Career Counselling </b></h3>
                            <div class="row register-form">
                                <form role="form" id="saveteacher" method="post" action="{{route('savecontact')}}">
                                    <input type="hidden" name="requestType" value="career counselling service demo">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" id="contactname" name="contactname" class="form-control" placeholder="Parent Name *" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" id="contactemail" name="contactemail" class="form-control" placeholder="Parent Email *" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Parent Phone Number *" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="institutionname" name="institutionname" class="form-control" placeholder="School/College Name*" value="" />
                                            </div>
                                        </div>
                                        <!-- <input type="hidden" id="entityvalue" name="entityvalue" value="Individual" />
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="selectlevel" id="selectlevel">
                                                    <option value="" selected>Select Certification Level</option>
                                                    <option value="beginner">Beginner</option>
                                                    <option value="intermediate">Intermediate</option>
                                                    <option value="advanced">Advanced</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control filter" name="state" id="state" style="text-transform: capitalize;">
                                                    <option value="" selected>Select State</option>
                                                    @foreach($state as $st)
                                                    <option data-id="{{$st->id}}" value="{{$st->name}}">{{$st->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="city" id="city" style="text-transform: capitalize;">
                                                    <option value="" selected>Select City</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="stream" name="stream" class="form-control" placeholder="stream Name*" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btnRegister">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script type="text/javascript">
            toastr.error('{{$error}}');
        </script>
        @endforeach
        @endif
        <script>
            $(document).ready(function() {
                $('.filter').on('change', function() {
                    var state_id = $('#state').find(':selected').attr('data-id');
                    //alert(state_id);
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
                                listItems1 += "<option value='" + data[i].name + "'>" + data[i].name + "</option>";
                            }

                            $("#city").html(listItems1);

                        }
                    });
                });
            });
        </script>
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
                        required: true
                    },
                    selectlevel: {
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
                        required: "Enter Teacher Name",
                        minlength: "Please, at least {0} characters are necessary"
                    },
                    contactemail: {
                        required: "Enter Teacher Email",
                        email: "Please, Enter Valid Email"
                    },
                    mobileno: {
                        required: "Enter Phone No."
                    },
                    selectlevel: {
                        required: "Select Level Of Certification"
                    },
                    institutionname: {
                        required: "Enter Institution Name"
                    },
                    city: {
                        required: "Enter City"
                    },
                    state: {
                        required: "Enter State"
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
    <script type="text/javascript">
        $('body').on('click', '.entity', function(event) {
            var entity_value = $(this).attr('data-value');
            $('#entityvalue').val(entity_value);
            $('#ent').html(entity_value);
        });
    </script>
</body>

</html>