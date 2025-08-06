<x-header title="Add Vaccination" />
@if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Error!</strong>{{ session()->get('error') }}.
                    </div>
                @endif
<div class="row">
    <div class="col-md-12">
    <br>
    <h3 class="text-center">Due Vaccinations</h3>
    <br>
    </div>
</div>
<br><br>
@if(@isset($vaccinations))
<div class="d-flex justify-content-end mb-5">
    <a class="btn btn-success" href="{{ URL::to('updatevaccination/'.$cid) }}">Vaccinated</a>
</div>
<div class="card">
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table id="myTable1">
                <thead>
                    <tr>
                        <th>Vaccine Name</th>
                        <th>Valid Age</th>
                        {{-- <th>Action</th> --}}
                      </tr>
                </thead>
                <tbody>
                    @foreach ($vaccinations as $single)
                        <tr>
                          <td>{{ $single->name }}</td>
                          <td>{{ $single->valid_age }}</td>
                          {{-- <td><a href="" style="color: green">Use</a></td> --}}
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
<div class="text-center">
    <h5>Child Is Fully Vaccinated</h5>
</div>
@endif

<x-footer />
