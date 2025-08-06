<x-hccheader title="Edit Profile" />
      <!-- end inner page section -->
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
                        <img src="{{ URL::asset('uploads/hcc/'.$hcc['profile_picture']) }}" style="width: 200px; height: 200px; border-radius: 200px;" alt="">
                    </div>
                    <br><br>
                    <h2 class="text-center">Edit Profile Details</h2>
                    <br><br>
                     <form action="{{ URL::to('updateUser') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <label>Name:</label>
                                <br>
                                <input type="text" placeholder="Enter Your Name" name="name" value="{{ $hcc['name']  }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Email:</label>
                                <br>
                                <input type="email" placeholder="Enter Your Email Address" name="email" value="{{ $hcc['email'] }}" style="width: 320px; height:40px;"readonly required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Password:</label>
                                <br>
                                <input type="text" placeholder="Enter Your Password" name="password" value="{{ $hcc['password'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Phone Number:</label>
                                <br>
                                <input type="text" placeholder="Enter Your Phone Number" name="phone" value="{{ $hcc['phone_number'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Registration Number:</label>
                                <br>
                                <input type="text" placeholder="Enter Your Registration Number" name="reg" value="{{ $hcc['reg_number'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Address:</label>
                                <br>
                                <input type="text" placeholder="Enter Your Address" name="address" value="{{ $hcc['address'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Postal Code:</label>
                                <br>
                                <input type="text" placeholder="Enter Your Postal Code" name="postal" value="{{ $hcc['postal_code'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Area:</label>
                                <br>
                                <input type="text" placeholder="Enter Your Area" name="area" value="{{ $hcc['area'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>City:</label>
                                <br>
                                <input type="text" placeholder="Enter Your City" name="city" value="{{ $hcc['city'] }}" style="width: 320px; height:40px;" required />
                            </div>
                            <div class="col-md-6">
                                <br>
                                <label>Profile Picture:</label>
                                <br>
                                <input type="file" class="form-control" name="file" value="{{ $hcc['profile_picture'] }}" >
                            </div>

                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <input type="submit" class="btn btn-info" value="Update" style=" height: 50px; width: 100px;" />
                            </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
        </div>
      </section>
      <!-- end why section -->
<x-hccfooter />
