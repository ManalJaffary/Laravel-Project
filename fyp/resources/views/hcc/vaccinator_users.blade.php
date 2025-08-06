<x-hccheader title="Vaccinators" />
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
                Add Vaccinator
              </button>
        </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Register New Vaccinator</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form action="{{ URL::to('/insertUsers') }}" method="POST" enctype="multipart/form-data">
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
                            <label>Gender:</label>
                            <br>
                            <input type="text" placeholder="Enter Gender" name="gender" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Phone Number:</label>
                            <br>
                            <input type="text" placeholder="Enter Phone Number" name="phone"  style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>CNIC:</label>
                            <br>
                            <input type="text" placeholder="Enter CNIC" name="cnic" style="width: 320px; height:40px;" required />
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
                            <label>Type:</label>
                            <br>
                            <input type="text" placeholder="Enter Type" name="type" value="Vaccinator" style="width: 320px; height:40px;" required />
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label>Status:</label>
                            <br>
                            <input type="text" placeholder="Enter Status" name="status" value="Verified" style="width: 320px; height:40px;" required />
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
                            <div class="sub-title">Vaccinators</div>
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
                                         placeholder="Search by CNIC...">
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>CNIC</th>
                                                <th>Postal Code</th>
                                                <th>City</th>
                                                <th>Details</th>
                                                <th>History</th>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                              </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vaccinator as $single)
                                            @if($single['status']=='Verified')
                                           <tr>
                                             <td>{{ $single['firstname'] }}</td>
                                             <td>{{ $single['lastname'] }}</td>
                                             <td>{{ $single['email'] }}</td>
                                             <td>{{ $single['cnic'] }}</td>
                                             <td>{{ $single['postal_code'] }}</td>
                                             <td>{{ $single['city'] }}</td>
                                             <td><a href="{{ URL::to('viewdetailsUsers/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                             <td><a href="{{ URL::to('viewhistory/'.$single['id']) }}" style="color: blue">View History</a></td>
                                             <td><a href="{{ URL::to('blockUsers/'.$single['id']) }}" style="color: red">Block</a></td>
                                             <td><a href="{{ URL::to('removeUsers/'.$single['id']) }}" style="color: red">Remove</a></td>
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
                                         placeholder="Search by CNIC...">
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable1">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>CNIC</th>
                                                <th>Postal Code</th>
                                                <th>City</th>
                                                <th>Details</th>
                                                <th>History</th>
                                              <th>&nbsp;</th>
                                              <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vaccinator as $single)
                                                 @if($single['status']=='Deleted')
                                                <tr>
                                                    <td>{{ $single['firstname'] }}</td>
                                                    <td>{{ $single['lastname'] }}</td>
                                                    <td>{{ $single['email'] }}</td>
                                                    <td>{{ $single['cnic'] }}</td>
                                                    <td>{{ $single['postal_code'] }}</td>
                                                    <td>{{ $single['city'] }}</td>
                                                  <td><a href="{{ URL::to('viewdetailsUsers/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                                  <td><a href="{{ URL::to('viewhistory/'.$single['id']) }}" style="color: blue">View History</a></td>
                                                  <td><a href="{{ URL::to('verifyUsers/'.$single['id']) }}" style="color: green">Verify</a></td>
                                                  <td><a href="{{ URL::to('blockUsers/'.$single['id']) }}" style="color: red">Block</a></td>
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
                                         placeholder="Search by CNIC...">
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable2">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>CNIC</th>
                                                <th>Postal Code</th>
                                                <th>City</th>
                                              <th>Details</th>
                                              <th>History</th>
                                              <th>&nbsp;</th>
                                              <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vaccinator as $single)
                                                 @if($single['status']=='Blocked')
                                                <tr>
                                                    <td>{{ $single['firstname'] }}</td>
                                                    <td>{{ $single['lastname'] }}</td>
                                                    <td>{{ $single['email'] }}</td>
                                                    <td>{{ $single['cnic'] }}</td>
                                                    <td>{{ $single['postal_code'] }}</td>
                                                    <td>{{ $single['city'] }}</td>
                                                  <td><a href="{{ URL::to('viewdetailsUsers/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                                  <td><a href="{{ URL::to('viewhistory/'.$single['id']) }}" style="color: blue">View History</a></td>
                                                  <td><a href="{{ URL::to('unblockUsers/'.$single['id']) }}" style="color: red">Unblock</a></td>
                                                  <td><a href="{{ URL::to('removeUsers/'.$single['id']) }}" style="color: red">Remove</a></td>
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
<x-hccfooter />
