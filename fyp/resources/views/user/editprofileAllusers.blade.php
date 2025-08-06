<x-header title="Edit Profile" />
      <!-- why section -->
      <section class="why_section layout_padding">
        <div class="container">

            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Error!</strong>{{ session()->get('error') }}.
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong>{{ session()->get('success') }}.
                        </div>
                    @endif
                     <div class="text-center">
                        <img src="{{ URL::asset('uploads/users/'.$user['profile_picture']) }}" style="width: 200px; height: 200px; border-radius: 200px;" alt="">
                    </div>
                    <br><br>
                    <h2 class="text-center">Edit Profile Details</h2>
                    <br><br>
                    <form action="{{ URL::to('/updateUsers') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user['id'] }}">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <label>First Name:</label>
                                <br>
                                <input type="text" placeholder="Enter First Name" name="fname" value="{{ $user['firstname'] }}"  style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Last Name:</label>
                                <br>
                                <input type="text" placeholder="Enter Last Name" name="lname" value="{{ $user['lastname'] }}"  style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Email:</label>
                                <br>
                                <input type="email" placeholder="Enter Email Address" name="email" value="{{ $user['email'] }}" style="width: 320px; height:40px;" readonly required  />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Password:</label>
                                <br>
                                <input type="text" placeholder="Enter Password" name="password" value="{{ $user['password'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Gender:</label>
                                <br>
                                <input type="text" placeholder="Enter Gender" name="gender" value="{{ $user['gender'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Phone Number:</label>
                                <br>
                                <input type="text" placeholder="Enter Phone Number" name="phone" value="{{ $user['phone_number'] }}"  style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>CNIC:</label>
                                <br>
                                <input type="text" placeholder="Enter CNIC" name="cnic" value="{{ $user['cnic'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Address:</label>
                                <br>
                                <input type="text" placeholder="Enter Address" name="address" value="{{ $user['address'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Postal Code:</label>
                                <br>
                                <input type="text" placeholder="Enter Postal Code" name="postal" value="{{ $user['postal_code'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Area:</label>
                                <br>
                                <input type="text" placeholder="Enter Area" name="area" value="{{ $user['area'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>City:</label>
                                <br>
                                <input type="text" placeholder="Enter City" name="city" value="{{ $user['city'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Profile Picture:</label>
                        <br>
                        <input type="file" class="form-control" name="file" value="{{ $user['profile_picture'] }}" >
                            </div>

                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <input type="submit" value="Update" class="btn btn-info" style=" height: 50px; width: 100px;" />
                            </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
        </div>
    </section>
      <!-- end why section -->
<x-footer />
