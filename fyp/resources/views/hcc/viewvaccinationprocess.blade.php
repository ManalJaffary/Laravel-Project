@if(session()->has('user_id'))
<x-header title="Vaccination Process" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="Vaccination Process" />
@endif
<div class="row">
    <div class="col-md-12">
    <br>
    <h3 class="text-center">Vaccination Process</h3>
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
                        <th>Child Age</th>
                        <th>Vaccine Name</th>
                        <th>Vaccinator Name</th>
                        <th>Vaccination Date</th>
                        <th>Next Vaccination Date</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($process as $single)
                    <tr>
                        <td>{{ $single->age }}</td>
                        <td>{{ $single->name }}</td>
                        <td>{{ $single->firstname }}&nbsp;{{ $single->lastname }}</td>
                        <td>{{ $single->vaccine_date }}</td>
                        <td>{{ $single->next_date }}</td>
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
