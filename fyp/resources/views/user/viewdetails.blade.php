<x-header title="View Details" />
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
                      @if($hcc['status']=='Verified')
                      <a class="btn btn-danger " target="" href="{{ URL::to('block/'.$hcc['id']) }}">Block</a>
                      <a class="btn btn-danger " target="" href="{{ URL::to('remove/'.$hcc['id']) }}">Remove</a>
                      @endif
                      @if($hcc['status']=='Deleted')
                      <a class="btn btn-success " target="" href="{{ URL::to('verify/'.$hcc['id']) }}">Verify</a>
                      <a class="btn btn-danger " target="" href="{{ URL::to('block/'.$hcc['id']) }}">Block</a>
                      @endif
                      @if($hcc['status']=='Blocked')
                      <a class="btn btn-danger " target="" href="{{ URL::to('unblock/'.$hcc['id']) }}">Unblock</a>
                      <a class="btn btn-danger " target="" href="{{ URL::to('remove/'.$hcc['id']) }}">Remove</a>
                      @endif
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
                        <a class="btn btn-info " target="" href="{{ URL::to('editprofilehcc/'.$hcc['id']) }}">Edit Profile</a>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
<br>
<hr>
<br>

        <div class="container">
            <div class="row" style="margin-left: 100px;">
                <div class="col-md-6 col-xl-4">
                    <div class="card fb-card">
                        <div class="card-header">
                            <i class="fa fa-user-md"></i>
                            <div class="d-inline-block">
                                <h5>Registered Vaccinators</h5>
                            </div>
                        </div>
                        <div class="card-block text-center">
                            <a class="btn btn-primary " target="" href="{{ URL::to('a_vaccinator_users/'.$hcc['id']) }}">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                <div class="card dribble-card">
                    <div class="card-header">
                        <i class="fas fa-user-friends"></i>
                        <div class="d-inline-block">
                            <h5>Registered Parents</h5>
                        </div>
                    </div>
                    <div class="card-block text-center">
                        <a class="btn btn-danger " target="" href="{{ URL::to('a_parent_users/'.$hcc['id']) }}">View All</a>
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card twitter-card">
                        <div class="card-header">
                            <i class="fa fa-syringe"></i>
                            <div class="d-inline-block">
                                <h5>Vaccine Record</h5>
                            </div>
                        </div>
                        <div class="card-block text-center">
                            <a class="btn btn-info " target="" href="{{ URL::to('vaccinerecord/'.$hcc['id']) }}">View All</a>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
     </div>

     </section>

<x-footer />
