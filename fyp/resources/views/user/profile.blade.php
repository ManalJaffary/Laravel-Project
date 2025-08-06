<x-header title="Profile Details" />
<div class="container">
    <div class="main-body">

          <div class="row">
            <div class="col-md-5 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ URL::asset('uploads/users/'.$user['profile_picture']) }}" alt="" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $user['firstname'] }}&nbsp;{{ $user['lastname'] }}</h4>
                      <p class="text-secondary mb-1">{{ $user['type'] }}</p>
                      <p class="text-secondary mb-1">{{ $user['email'] }}</p>
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
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $user['firstname'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $user['lastname'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['email'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['password'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['gender'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone #</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['phone_number'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CNIC #</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['cnic'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['address'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Postal Code</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['postal_code'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Area</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['area'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">City</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['city'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['type'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['status'] }}
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

<x-footer />
