@if(session()->has('user_id'))
<x-header title="Registered Child List" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="Registered Child List" />
@endif

<section class="inner_page_head">
    <div class="container_fuild">
       <div class="row">
          <div class="col-md-12">
           <br>
           <h3 class="text-center">Registered Child List</h3>
           <br>
          </div>
       </div>
    </div>
 </section>
@if(session()->has('hcc_id'))
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
                    <div class="col-md-6">
                        <br>
                        <label>Parent ID:</label>
                        <br>
                        <input type="text" placeholder="Enter Parent ID" name="p_id"  style="width: 320px; height:40px;" required />
                    </div>
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
@endif
 <br><br>
 <div class="card">
    <div class="card-header">
        <h4>Child</h4>
        <div class="text-right">
            <input id="myInput1" onkeyup="myFunction1()"
            placeholder="Search by Card ID...">
        </div>
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
                        @if(session()->has('user_id'))
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
                                               @if(session()->has('user_id'))
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

  @if(session()->has('user_id'))
  <x-footer />
  @endif
  @if(session()->has('hcc_id'))
  <x-hccfooter />
  @endif
