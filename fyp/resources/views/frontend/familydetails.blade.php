<x-mainheader title="Family Details" />
<section class="py-8">
    <div class="bg-holder bg-size" style="background-image:url(asset/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
    </div>
 <div class="container">
    <h2 class="text-center">Family Details</h2>
 </div>
</section>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br>
        <h3 class="text-center">Registered Child List</h3>
        <br>
        </div>
    </div>
</div>
<br>
<div class="container">
    <!-- Button to Open the Modal -->
    <div class="container text-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
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
            <form action="{{ URL::to('/insertpChild') }}" method="POST" enctype="multipart/form-data">
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
                     <label>Status:</label>
                     <br>
                     <input type="text" placeholder="Enter Status" name="status" value="Non-vaccinated" style="width: 320px; height:40px;" required />
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                        <input type="submit" value="Register" class="btn btn-primary" style=" height: 50px; width: 150px;" />
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
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
    <div class="card-header">
        <div style="text-align: right"">
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
                        <th>Actions</th>
                        <th>Details</th>
                        <th>&nbsp;</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($child as $single)
                                            <tr>
                                            <td>{{ $single['firstname'] }}</td>
                                            <td>{{ $single['lastname'] }}</td>
                                            <td>{{ $single['dob'] }}</td>
                                            <td>{{ $single['id'] }}</td>
                                            <td>{{ $single['gender'] }}</td>
                                            <td><a href="{{ URL::to('editchild/'.$single['id']) }}" style="color: green">Edit</a>/<a href="{{ URL::to('removechild/'.$single['id']) }}" style="color: red">Remove</a></td>
                                            <td><a href="{{ URL::to('child_details/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                            <td><a href="{{ URL::to('vaccinationprocess/'.$single['id']) }}" style="color: blue">View Vaccination Process</a></td>
                                            </tr>
                                            @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>
        </div>
    </div>
</div>

<br><br><br><br>
<x-mainfooter />
