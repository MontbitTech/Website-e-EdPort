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
                            <h4 class="modal-title">Update User </h4>

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

                                        @if($contact->requestType == 'virtual classroom product demo' || $contact->requestType == 'teacher trainaing service demo' || $contact->requestType == 'teacher certification service demo')
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="institutionname">Institution Name</label>
                                                <input type="text" id="institutionname" name="institutionname" class="form-control" placeholder="Institution Name *" value="{{$contact->institutionname}}" />
                                            </div>
                                        </div>
                                        @endif

                                         @if($contact->requestType == 'student self learning product demo')
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="institutionname">Qualification</label>
                                                <select class="form-control" name="qualification" id="qualification">
                                                    <option value="" selected>Qualification</option>
                                                    <option value="high school(10th)" @if($contact->qualification=="high school(10th)") selected @endif>High School(10th)</option>
                                                    <option value="higher school(12th)" @if($contact->qualification=="higher school(12th)") selected @endif>Higher School(12th)</option>
                                                    <option value="graduation(bachelors)" @if($contact->qualification=="graduation(bachelors)") selected @endif>Graduation(Bachelors)</option>
                                                    <option value="post praduation(masters)" @if($contact->qualification=="post praduation(masters)") selected @endif>Post Graduation(Masters)</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif

                                        @if($contact->requestType == 'teacher trainaing service demo' || $contact->requestType == 'teacher certification service demo')
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="institutionname">Certificate Level</label>
                                               <select class="form-control" name="certificate" id="certificate">
                                                    <option value="" selected>Select Certification Level</option>
                                                    <option value="beginner" @if($contact->certificate=="beginner") selected @endif>Beginner</option>
                                                    <option value="intermediate" @if($contact->certificate=="intermediate") selected @endif>Intermediate</option>
                                                    <option value="advanced" @if($contact->certificate=="advanced") selected @endif>Advanced</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif

                                          @if($contact->requestType == 'parental control app product demo')
                                         <div class="col-md-6">
                                         <div class="form-group">
                                                <label for="institutionname">Child's Age</label>
                                                <input type="tesxt" id="agee" name="age" class="form-control" placeholder="Child's Age *" value="{{$contact->child_age}}" />
                                            </div>
                                        </div>
                                        @endif


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