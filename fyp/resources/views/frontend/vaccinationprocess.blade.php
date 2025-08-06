<x-mainheader title="Vaccination Process" />
<br><br>
<section class="pb-0">

    <div class="container">
      <div class="row">
          <h1 class="text-center">Vaccination Process</h1>
        </div>
      </div>
    <!-- end of .container-->

  </section>
  <br><br>
  @if($child['age']>=15)
  <div class="d-flex justify-content-end mb-5" style="margin-right: 150px;">
    <a class="btn btn-primary" href="{{ URL::to('generatecard/'.$cid)}}">Generate Card
    </a>
</div>
  @endif
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
<x-mainfooter />
