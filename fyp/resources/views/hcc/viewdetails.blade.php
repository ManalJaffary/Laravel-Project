@if(session()->has('user_id'))
<x-header title="View Details" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="View Details" />
@endif
<div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-5 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ URL::asset('uploads/users/'.$user['profile_picture']) }}" alt="" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $user['firstname'] }}&nbsp;{{ $user['lastname'] }}</h4>
                      <p class="text-secondary mb-1">{{ $user['type'] }}</p>
                      <p class="text-muted font-size-sm">{{ $user['address'] }}</p>
                 @if(session()->has('hcc_id')||(session()->has('user_id')&&session()->get('user_type')=='Admin'))
                      @if($user['status']=='Verified')
                      <a class="btn btn-danger " target="" href="{{ URL::to('blockUsers/'.$user['id']) }}">Block</a>
                      <a class="btn btn-danger " target="" href="{{ URL::to('removeUsers/'.$user['id']) }}">Remove</a>
                      @endif
                      @if($user['status']=='Deleted')
                      <a class="btn btn-success " target="" href="{{ URL::to('verifyUsers/'.$user['id']) }}">Verify</a>
                      <a class="btn btn-danger " target="" href="{{ URL::to('blockUsers/'.$user['id']) }}">Block</a>
                      @endif
                      @if($user['status']=='Blocked')
                      <a class="btn btn-danger " target="" href="{{ URL::to('unblockUsers/'.$user['id']) }}">Unblock</a>
                      <a class="btn btn-danger " target="" href="{{ URL::to('removeUsers/'.$user['id']) }}">Remove</a>
                      @endif
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
                      <h6 class="mb-0">CNIC</h6>
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
                  @if(session()->has('hcc_id'))
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                        <a class="btn btn-info " target="" href="{{ URL::to('editprofileUsers/'.$user['id']) }}">Edit Profile</a>
                    </div>
                  </div>
                @endif
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
    <br>
    <hr>
    <br>
    @if($user['type']=='Parent')
    @if(session()->has('hcc_id'))
    <section class="inner_page_head">
        <div class="container_fuild">
           <div class="row">
              <div class="col-md-12">
               <h3 class="text-center">Registered Child Record</h3>
              </div>
           </div>
        </div>
     </section>

     <div class="container">
       <!-- Button to Open the Modal -->
       <div class="container text-right">
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
               Add Child
             </button>
       </div>

       <!-- The Modal -->
       <div class="modal" id="myModal">
           <div class="modal-dialog modal-lg">
           <div class="modal-content">

             <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title">Register New Child</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>

             <!-- Modal body -->
             <div class="modal-body">
               <form action="{{ URL::to('/insertChild') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                   <div class="row">
                       <div class="col-md-6">
                           <br>
                           <label>First Name:</label>
                           <br>
                           <input type="text" placeholder="Enter First Name" name="fname"  style="width: 320px; height:40px;" required />
                       </div>
                       <div class="col-md-6">
                           <br>
                           <label>Last Name:</label>
                           <br>
                           <input type="text" placeholder="Enter Last Name" name="lname"  style="width: 320px; height:40px;" required />
                       </div>
                       <div class="col-md-6">
                           <br>
                           <label>DOB:</label>
                           <br>
                           <input type="date" placeholder="Enter DOB" name="dob" style="width: 320px; height:40px;" required />
                       </div>
                       <div class="col-md-6">
                           <br>
                        <label>Gender:</label>
                        <br>
                        <input type="text" placeholder="Enter Gender" name="gender" style="width: 320px; height:40px;" required />
                    </div>
                       {{-- <div class="col-md-6">
                           <br>
                           <label>Card ID:</label>
                           <br>
                           <input type="text" placeholder="Enter Card ID" name="card_id" style="width: 320px; height:40px;" required />
                       </div> --}}
                       <input type="hidden" name="p_id" value="{{ $user['id'] }}" id="">
                       <div class="col-md-6">
                           <br>
                        <label>Status:</label>
                        <br>
                        <input type="text" placeholder="Enter Status" name="status" value="Non-vaccinated" style="width: 320px; height:40px;" required />
                       </div>
                   </div>
                   <br><br>
                   <div class="row">
                       <div class="col-md-5"></div>
                       <div class="col-md-7">
                           <input type="submit" value="Register" class="btn btn-success" style=" height: 50px; width: 100px;" />
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
       </div>

    </div>
    <br><br>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="sub-title">Child</div>
                 <div class="text-right">
                    <input id="myInput1" onkeyup="myFunction1()"
                    placeholder="Search by Card ID...">
                </div>
            <br>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table id="myTable1">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>DOB</th>
                            <th>Card ID</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Details</th>
                            @if(session()->get('user_type')=='Vaccinator')
                            <th>Vaccination</th>
                            @endif
                            <th>&nbsp;</th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach ($child as $single)
                            <tr>
                              <td>{{ $single->firstname }}</td>
                              <td>{{ $single->lastname }}</td>
                              <td>{{ $single->dob }}</td>
                              <td>{{ $single->id }}</td>
                              <td>{{ $single->gender }}</td>
                              <td>{{ $single->status }}</td>
                              <td><a href="{{ URL::to('viewdetailschild/'.$single->id) }}" style="color: blue">View Details</a></td>
                              @if(session()->get('user_type')=='Vaccinator')
                                <td><a href="{{ URL::to('add_vaccination/'.$single->id) }}" style="color: green">Add Vaccination</a></td>
                            @endif
                              <td><a href="{{ URL::to('viewvaccinationprocess/'.$single->id) }}" style="color: blue">View Vaccination Process</a></td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
     @endif
    </div>
</div>

@if(session()->has('user_id'))
  <x-footer />
  @endif
  @if(session()->has('hcc_id'))
  <x-hccfooter />
  @endif
