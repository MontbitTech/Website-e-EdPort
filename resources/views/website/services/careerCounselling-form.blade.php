@extends('layouts.form.app')
@section('content')
<div class="card w-100 mt-5">
    <div class="card-header">
        <h4 class="modal-title">Smart Teacher Training</h4>

    </div>
    <div class="card-body">
        <!-- <div class="text-center" style="font-size:small;color:red;">We will provide one free consultation call and all relevant documents will be send via mail provided below</div> -->
        <form role="form" id="saveteacher" enctype="multipart/form-data" method="post" action="{{route('savecontact')}}">
            <div class="card-body m-0 p-0">
                <div class="row m-0 p-0 pb-3">
                    <div class="col-md-4 col-4">
                        <div class="form-group">
                            <label for="contactname">Name</label>
                            <input type="text" id="contactname" name="contactname" class="form-control" placeholder="Full Name *" value="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-4">
                        <div class="form-group">
                            <label for="contactemail">Email</label>
                            <input type="email" id="contactemail" name="contactemail" class="form-control" placeholder="Email *" value="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-4">
                        <div class="form-group">
                            <label for="mobileno">Mobile No.</label>
                            <input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Mobile No *" value="" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="institutionname">Institution Name</label>
                            <input type="text" id="institutionname" name="institutionname" class="form-control" placeholder="Institution Name *" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="entityvalue">Certification Level</label>
                            <select class="form-control" name="entityvalue" id="entityvalue">
                                <option value="" selected>Select Certification Level</option>
                                <option value="Teacher">Beginner</option>
                                <option value="School">Intermedite</option>
                                <option value="Coaching">Advanced</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">State</label>
                            <select class="form-control filter" name="state" id="state" style="text-transform: capitalize;">
                                <option value="" selected>Select State</option>
                                @foreach($states as $st)
                                <option value="{{$st->id}}">{{$st->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="form-control" name="city" id="city" style="text-transform: capitalize;">
                                <option value="" selected>Select City</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary w-100" style="background:#161f33;">Submit</button>
            </div>
        </form>


    </div>
</div>
@endsection