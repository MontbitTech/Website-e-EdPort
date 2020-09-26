  @extends('layouts.form.app')
  @section('content')
  <div class="card w-100 mt-5">
      <div class="card-header">
          <h4 class="modal-title">Virtual Classroom Solution</h4>
      </div>
      <div class="card-body">
          <!-- <div class="text-center" style="font-size:small;color:red;">We will provide one free consultation call and all relevant documents will be send via mail provided below</div> -->
          <form role="form" id="saveteacher" enctype="multipart/form-data" method="post" action="{{route('savecontact')}}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="contactname">Name</label>
                                            <input type="text" id="contactname" name="contactname" class="form-control" placeholder="Full Name *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contactemail">Email</label>
                                            <input type="email" id="contactemail" name="contactemail" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobileno">Mobile No.</label>
                                            <input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Phone Number *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="entityvalue">Entity</label>
                                            <select class="form-control" name="entityvalue" id="entityvalue">
                                                <option value="" selected>Select Entity</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="School">School</option>
                                                <option value="Coaching">Coaching</option>
                                                <option value="College/University">College / University</option>
                                            </select>
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