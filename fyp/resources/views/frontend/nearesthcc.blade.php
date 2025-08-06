<x-mainheader title="Search HCC" />
<section class="py-8">
    <div class="bg-holder bg-size" style="background-image:url(asset/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
    </div>
 <div class="container">
    <h2 class="text-center">Search Healthcare Centers</h2>
 </div>
</section>
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
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br>
        <h3 class="text-center">My Nearest Healthcare Centers</h3>
        <br>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ URL::to('/search') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label visually-hidden" for="inputCategory">Search By</label>
                        <select class="form-select" id="inputCategory" name="type">
                            @if(@isset($type))
                          <option selected="selected">{{ $type }}</option>
                          @endif
                          <option> Postal Code</option>
                          <option> Area</option>
                          <option> City</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label class="form-label visually-hidden" for="search">Search...</label>
                        <input class="form-control form-livedoc-control" id="search" type="text" placeholder="Search..." name="search"
                        @if(@isset($search)) value="{{ $search }}" @endif />
                      </div>
                      <div class="col-md-3">
                        <div class="d-grid">
                          <button class="btn btn-primary rounded-pill" >Search</button>
                        </div>
                      </div>
                </div>
            </form>
    </div>
</div>

      </div>
      <br><br>
      <div class="container">
        @if(@isset($nearesthcc))
        <div class="row">
            <div class="col-md-12">
                <div class="card">
        <div class="card-header">
            <div style="text-align: right"">
                <input id="myInput1" onkeyup="myFunction1()"
                placeholder="Search by Reg #...">
            </div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table id="myTable1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Postal Code</th>
                            <th>Area</th>
                            <th>City</th>
                            <th>Details</th>
                            <th>Appointment</th>
                          </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($nearesthcc as $single)
                        <tr>
                            <td>{{ $single['name'] }}</td>
                            <td>{{ $single['email'] }}</td>
                            <td>{{ $single['phone_number'] }}</td>
                            <td>{{ $single['postal_code'] }}</td>
                            <td>{{ $single['area'] }}</td>
                            <td>{{ $single['city'] }}</td>
                            <td><a href="{{ URL::to('hccdetails/'.$single['id']) }}" style="color: blue">View Details</a></td>
                            <td>
                                <a href="" style="color: green" data-toggle="modal" data-target="#myModal{{$i}}">Make Appointment</a>

                          <!-- The Modal -->
                          <div class="modal" id="myModal{{$i}}">
                              <div class="modal-dialog modal-md">
                              <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Make an Appointment</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                  <form action="{{ URL::to('/makeappointment') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="hcc_id" value="{{ $single['id'] }}">
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
                          </div></td>
                          </tr>
                          @php
                              $i++;
                          @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
            </div>
        </div>
        @endif
    </div>
    <br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br>
        <h3 class="text-center">My Healthcare Center</h3>
        <br>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
    <div class="card-header">
        <div style="text-align: right"">
            <input id="myInput1" onkeyup="myFunction1()"
            placeholder="Search by Reg #...">
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table id="myTable1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Postal Code</th>
                        <th>Area</th>
                        <th>City</th>
                        <th>Details</th>
                        <th>Appointment</th>
                      </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $myhcc['name'] }}</td>
                        <td>{{ $myhcc['email'] }}</td>
                        <td>{{ $myhcc['phone_number'] }}</td>
                        <td>{{ $myhcc['postal_code'] }}</td>
                        <td>{{ $myhcc['area'] }}</td>
                        <td>{{ $myhcc['city'] }}</td>
                        <td><a href="{{ URL::to('hccdetails/'.$myhcc['id']) }}" style="color: blue">View Details</a></td>
                        <td>
                              <a href="" style="color: green" data-toggle="modal" data-target="#myModal">Make Appointment</a>

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
                                <form action="{{ URL::to('/makeappointment') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="hcc_id" value="{{ $myhcc['id'] }}">
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
                        </div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
        </div>
    </div>
</div>

<br><br><br>
<x-mainfooter />
