<x-mainheader title="Services" />
<br><br>
<section class="pb-0">

    <div class="container">
      <div class="row">
          <h1 class="text-center">Services</h1>
        </div>
      </div>
    <!-- end of .container-->

  </section>
<div class="container">
    <div class="row flex-center">
<div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
    <div class="col-md-4 mb-8 mb-md-0">
      <div class="card card-span h-100 shadow">
        <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ URL::asset('uploads/services/hcc.png') }}" style="height: 185px; width: 270px;" alt="..." />
          <br>
            <h3 class="mt-3">Nearest Healthcare Centers</h3>
            <br>
          <div class="text-center">
            <a href="{{ URL::to('/nearesthcc') }}"><button class="btn btn-outline-secondary rounded-pill" type="submit">View</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-8 mb-md-0">
        <div class="card card-span h-100 shadow">
          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ URL::asset('uploads/services/download.jpg') }}" style="height: 185px; width: 270px;" alt="..." />
            <br>
              <h3 class="mt-3">Family Details</h3>
              <br>
            <div class="text-center">
              <a href="{{ URL::to('/mychild') }}"><button class="btn btn-outline-secondary rounded-pill" type="submit">View</button></a>
            </div>
          </div>
        </div>
      </div>
    <div class="col-md-4 mb-8 mb-md-0">
      <div class="card card-span h-100 shadow">
        <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ URL::asset('uploads/services/appointment.png') }}" style="height: 185px; width: 270px;" alt="..." />
          <br>
            <h3 class="mt-3">Make Appointment</h3>
            <br>
          <div class="text-center">
            <a href="{{ URL::to('/nearesthcc') }}"><button class="btn btn-outline-secondary rounded-pill" type="submit">View</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>
<br><br><br>
<x-mainfooter />
