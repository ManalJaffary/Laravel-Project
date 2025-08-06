@if(session()->has('user_id'))
<x-header title="History" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="History" />
@endif
<div class="row">
    <div class="col-md-12">
    <br>
    <h3 class="text-center">Vaccinator History</h3>
    <br>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Child Name</th>
                        <th>Card Id</th>
                        <th>Child Age</th>
                        <th>Vaccine Name</th>
                        <th>Vaccination Date</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($history as $single)
                    <tr>
                        <td>{{ $single->firstname }}&nbsp;{{ $single->lastname }}</td>
                        <td>{{ $single->id }}</td>
                        <td>{{ $single->age }}</td>
                        <td>{{ $single->name }}</td>
                        <td>{{ $single->vaccine_date }}</td>
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
  <br><br><br>

@if(session()->has('user_id'))
  <x-footer />
  @endif
  @if(session()->has('hcc_id'))
  <x-hccfooter />
  @endif
