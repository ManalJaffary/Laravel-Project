<x-mainheader title="Family Details" />
<section class="py-8">
    <div class="bg-holder bg-size" style="background-image:url(asset/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
    </div>
 <div class="container">
    <h2 class="text-center">Family Details</h2>
 </div>
</section>
<br><br>
<div class="row">
    <div class="col-md-12">
    <br>
    <h3 class="text-center">Registered Child List</h3>
    <br>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
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
                                        <td><a href="{{ URL::to('viewdetailschild/'.$single['id']) }}" style="color: blue">View Details</a></td>
                                        <td><a href="{{ URL::to('vaccinationprocess/'.$single['id']) }}" style="color: blue">View Vaccination Process</a></td>
                                        </tr>
                                        @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
    </div>
    <div class="col-md-2"></div>
</div>

<br><br><br><br>

<x-mainfooter />
