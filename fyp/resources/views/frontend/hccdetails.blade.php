<x-mainheader title="HCC Details" />
<section class="py-8">
    <div class="bg-holder bg-size" style="background-image:url({{ URL::asset('asset/img/gallery/people-bg-1.png') }});background-position:center;background-size:cover;">
    </div>
 <div class="container">
    <h2 class="text-center">Healthcare Center Details</h2>
 </div>
</section>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{ URL::asset('uploads/hcc/'.$hcc['profile_picture']) }}"><span class="font-weight-bold">{{ $hcc['name'] }}</span><span class="text-black-50">{{ $hcc['email'] }}</span><span> </span></div>
                <div class="text-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Appointment
                  </button></div>

          <!-- The Modal -->
          <div class="modal" id="myModal">
              <div class="modal-dialog modal-md">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Make an Appointment</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <form action="{{ URL::to('/insertUsers') }}" method="POST">
                      @csrf
                      <input type="hidden" name="hcc_id" value="{{ $hcc['id'] }}">
                      <div class="row">
                          <div class="col-md-12">
                              <br>
                              <label>Date:</label>
                              <br>
                              <input type="date" placeholder="Enter Date" name="date"  style="width: 380px; height:40px;" required />
                          </div>

                      </div>
                      <br><br>
                      <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-6">
                              <input type="submit" value="Submit" class="btn btn-success"/>
                          </div>
                      </div>
                   </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div></div>
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <form action="" method="GET">
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" value="{{ $hcc['name'] }}" name="name" readonly></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email" value="{{ $hcc['email'] }}" name="email" readonly></div>
                    <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{ $hcc['phone_number'] }}" name="phone" readonly></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value="{{ $hcc['address'] }}" name="address" readonly></div>
                    <div class="col-md-12"><label class="labels">Postal Code</label><input type="text" class="form-control" placeholder="enter postal code" value="{{ $hcc['postal_code'] }}" name="postal" readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter postal code" value="{{ $hcc['area'] }}" name="area" readonly></div>
                    <div class="col-md-6"><label class="labels">City</label><input type="text" class="form-control" placeholder="enter postal code" value="{{ $hcc['city'] }}" name="city" readonly></div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<x-mainfooter />
