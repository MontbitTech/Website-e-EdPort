@extends('layouts.app')

@section('content')
<style>
    .selection {
        width: 100% !important;
    }
</style>
<div class="container-fluid mt-5 ">
    <div class="row">

        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-12 col-lg-12 ">
                    <div class="card w-100 mt-5">
                        <div class="card-header">
                            <h4 class="modal-title">Get In Touch </h4>

                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{route('contacts.update',$contact->id)}}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contactname">Name</label>
                                                <input type="text" id="contactname" name="contactname" class="form-control" placeholder="Full Name *" value="{{$contact->name}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="contactemail">Email</label>
                                                <input type="email" id="contactemail" name="contactemail" class="form-control" placeholder="Email *" value="{{$contact->email}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobileno">Mobile No.</label>
                                                <input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Phone Number *" value="{{$contact->mobileno}}" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="institutionname">Institution Name</label>
                                                <input type="text" id="institutionname" name="institutionname" class="form-control" placeholder="Institution Name *" value="{{$contact->institutionname}}" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary w-100" style="background:#161f33;">Update</button>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</div>


</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


@endsection