@if(session()->has('user_id'))
<x-header title="Registered Child List" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="Registered Child List" />
@endif
            <div class="row">
                <div class="col-md-12">
                <br>
                <h3 class="text-center">Registered Child List</h3>
                <br>
                </div>
            </div>
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
                                                    <td>{{ $single['status'] }}</td>
                                                    <td><a href="{{ URL::to('viewdetailschild/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                                    <td><a href="{{ URL::to('viewvaccinationprocess/'.$single['id']) }}" style="color: blue">View Vaccination Process</a></td>
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
