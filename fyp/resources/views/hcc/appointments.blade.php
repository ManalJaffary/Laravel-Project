@if(session()->has('user_id'))
<x-header title="View Details" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="View Details" />
@endif
<div class="row">
    <div class="col-md-12">
    <br>
    <h3 class="text-center">Today's Appointments List</h3>
    <br>
    </div>
</div>
@if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong>{{ session()->get('success') }}.
                    </div>
                @endif
<br><br>
<div class="card">
<div class="card-header">
    <h4>Appointments</h4>
    <div class="text-right">
        <input id="myInput1" onkeyup="myFunction1()"
        placeholder="Search by CNIC...">
    </div>
</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table id="myTable1">
            <thead>
                <tr>
                    <th>Parent Name</th>
                    <th>Parent Email</th>
                    <th>Parent Phone Number</th>
                    <th>Parent CNIC</th>
                    <th>Parent Postal Code</th>
                    <th>Date</th>
                    <th>Completion</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $single)
                                        <tr>
                                        <td>{{ $single->firstname }}&nbsp;{{ $single->lastname }}</td>
                                        <td>{{ $single->email }}</td>
                                        <td>{{ $single->phone_number }}</td>
                                        <td>{{ $single->cnic }}</td>
                                        <td>{{ $single->postal_code }}</td>
                                        <td>{{ $single->date }}</td>
                                        <td><a href="{{ URL::to('removeappointment/'.$single->id) }}" style="color: green">Done</a></td>
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
