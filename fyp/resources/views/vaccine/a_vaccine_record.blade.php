<x-header title="Vaccine Record" />
 <br><br>
 <div class="card">
    <div class="card-header">
        <h4>Vaccine Record</h4>
        <div class="text-right">
            <input id="myInput3" onkeyup="myFunction3()"
             placeholder="Search for names...">
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table id="myTable3">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Healthcare Center Name</th>
                        <th>&nbsp;</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($vaccine as $single)
                    <tr>
                      <td>{{ $single->name }}</td>
                      <td>{{ $single->quantity }}</td>
                     <td>{{ $single->hcc_name }}</td>
                      <td><a href="{{ URL::to('vaccineprocess/'.$single->id) }}" style="color: blue">View Vaccine Process</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
  <x-footer />
