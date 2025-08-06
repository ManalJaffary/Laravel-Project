<x-header title="Healthcare Centers" />
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                <br><br>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong>{{ session()->get('success') }}.
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Error!</strong>{{ session()->get('error') }}.
                    </div>
                @endif
               </div>
            </div>
         </div>
      </section>

      <div class="container">
        <!-- Button to Open the Modal -->
        <div class="container text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                Add Healthcare Center
              </button>
        </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Register New Healthcare Center</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form action="{{ URL::to('/insertUser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <label>Name:</label>
                            <br>
                            <input type="text" placeholder="Enter Name" name="name"  style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Email:</label>
                            <br>
                            <input type="email" placeholder="Enter Email Address" name="email" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Password:</label>
                            <br>
                            <input type="password" placeholder="Enter Password" name="password" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Phone Number:</label>
                            <br>
                            <input type="text" placeholder="Enter Phone Number" name="phone"  style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Registration Number:</label>
                            <br>
                            <input type="text" placeholder="Enter Registration Number" name="reg" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Address:</label>
                            <br>
                            <input type="text" placeholder="Enter Address" name="address" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Postal Code:</label>
                            <br>
                            <input type="text" placeholder="Enter Postal Code" name="postal" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Area:</label>
                            <br>
                            <input type="text" placeholder="Enter Area" name="area" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>City:</label>
                            <br>
                            <input type="text" placeholder="Enter City" name="city" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Profile Picture:</label>
                            <br>
                            <input type="file" placeholder="Enter File" name="file" style="width: 320px; height:40px;" required />
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
    <div class="row">
        <div class="col-md-12">
            <!-- Material tab card start -->
            <div class="card">
                <div class="card-block">
                    <!-- Row start -->
                    <div class="row m-b-30">
                        <div class="col-lg-12 col-xl-12">
                            <div class="sub-title">Healthcare Centers</div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs md-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#verified" role="tab">Verified</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#nonverified" role="tab">Deleted</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#blocked" role="tab">Blocked</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content card-block">
                                <div class="tab-pane active" id="verified" role="tabpanel">
                                    <div class="text-right">
                                        <input id="myInput" onkeyup="myFunction()"
                                         placeholder="Search by Reg #...">
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>Registration No.</th>
                                                <th>Postal Code</th>
                                                <th>City</th>
                                                <th>Details</th>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                              </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hccuser as $single)
                                            @if($single['status']=='Verified')
                                           <tr>
                                             <td>{{ $single['name'] }}</td>
                                             <td>{{ $single['email'] }}</td>
                                             <td>{{ $single['phone_number'] }}</td>
                                             <td>{{ $single['reg_number'] }}</td>
                                             <td>{{ $single['postal_code'] }}</td>
                                             <td>{{ $single['city'] }}</td>
                                             <td><a href="{{ URL::to('viewdetails/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                             <td><a href="{{ URL::to('block/'.$single['id']) }}" style="color: red">Block</a></td>
                                             <td><a href="{{ URL::to('remove/'.$single['id']) }}" style="color: red">Remove</a></td>
                                           </tr>
                                            @endif
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <div class="tab-pane" id="nonverified" role="tabpanel">
                                    <div class="text-right">
                                        <input id="myInput1" onkeyup="myFunction1()"
                                         placeholder="Search by Reg #...">
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable1">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>Registration No.</th>
                                                <th>Postal Code</th>
                                                <th>City</th>
                                                <th>Details</th>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                              </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hccuser as $single)
                                                 @if($single['status']=='Deleted')
                                                <tr>
                                                  <td>{{ $single['name'] }}</td>
                                                  <td>{{ $single['email'] }}</td>
                                                  <td>{{ $single['phone_number'] }}</td>
                                                  <td>{{ $single['reg_number'] }}</td>
                                                  <td>{{ $single['postal_code'] }}</td>
                                                  <td>{{ $single['city'] }}</td>
                                                  <td><a href="{{ URL::to('viewdetails/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                                  <td><a href="{{ URL::to('verify/'.$single['id']) }}" style="color: green">Verify</a></td>
                                                  <td><a href="{{ URL::to('block/'.$single['id']) }}" style="color: red">Block</a></td>
                                                </tr>
                                                 @endif
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <div class="tab-pane" id="blocked" role="tabpanel">
                                    <div class="text-right">
                                        <input id="myInput2" onkeyup="myFunction2()"
                                         placeholder="Search by Reg #...">
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable2">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>Registration No.</th>
                                                <th>Postal Code</th>
                                                <th>City</th>
                                                <th>Details</th>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                              </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hccuser as $single)
                                                 @if($single['status']=='Blocked')
                                                <tr>
                                                  <td>{{ $single['name'] }}</td>
                                                  <td>{{ $single['email'] }}</td>
                                                  <td>{{ $single['phone_number'] }}</td>
                                                  <td>{{ $single['reg_number'] }}</td>
                                                  <td>{{ $single['postal_code'] }}</td>
                                                  <td>{{ $single['city'] }}</td>
                                                  <td><a href="{{ URL::to('viewdetails/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                                  <td><a href="{{ URL::to('unblock/'.$single['id']) }}" style="color: red">Unblock</a></td>
                                                  <td><a href="{{ URL::to('remove/'.$single['id']) }}" style="color: red">Remove</a></td>
                                                </tr>
                                                 @endif
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Material tab card end -->
        </div>
    </div>
<x-footer />
