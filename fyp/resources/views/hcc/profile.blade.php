<x-hccheader title="Profile Details" />
<div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-5 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ URL::asset('uploads/hcc/'.$hcc['profile_picture']) }}" alt="" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $hcc['name'] }}</h4>
                      <p class="text-secondary mb-1">{{ $hcc['type'] }}</p>
                      <p class="text-muted font-size-sm">{{ $hcc['address'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $hcc['name'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['email'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['password'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone #</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['phone_number'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Registration #</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['reg_number'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['address'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Postal Code</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['postal_code'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Area</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['area'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">City</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['city'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['type'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $hcc['status'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                        <a class="btn btn-info " target="" href="{{ URL::to('/editprofile') }}">Edit Profile</a>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>

<x-hccfooter />
