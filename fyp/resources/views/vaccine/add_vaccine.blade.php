@if(session()->has('user_id'))
<x-header title="Add Vaccine" />
  @endif
  @if(session()->has('hcc_id'))
  <x-hccheader title="Add Vaccine" />
  @endif
  <section class="why_section layout_padding">
    <div class="container">

       <div class="row">
          <div class="col-md-12">
           <br>
           <h3 class="text-center">Add Vaccine</h3>
           <br>
          </div>
          <div class="col-lg-8 offset-lg-2">
             <div class="full">
               @if(session()->has('error'))
                   <div class="alert alert-danger alert-dismissible">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                       <strong>Error!</strong>{{ session()->get('error') }}.
                   </div>
               @endif
               @if(session()->has('success'))
                   <div class="alert alert-success alert-dismissible">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                       <strong>Success!</strong>{{ session()->get('success') }}.
                   </div>
               @endif
               <form action="{{ URL::to('/insertVaccine') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <label>Name:</label>
                        <br>
                        <input type="text" placeholder="Enter Vaccine Name" name="name"  style="width: 320px; height:40px;" required />
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label>Description:</label>
                        <br>
                        <input type="text" placeholder="Enter Description" name="description"  style="width: 320px; height:40px;" required />
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label>Quantity:</label>
                        <br>
                        <input type="number" placeholder="Enter Quantity" name="quantity" value="1" style="width: 320px; height:40px;" required />
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                        <input type="submit" value="Add" class="btn btn-success" style=" height: 50px; width: 100px;" />
                    </div>
                </div>
             </form>
             </div>
          </div>
       </div>
    </div>
  </section>
 @if(session()->has('user_id'))
 <x-footer />
 @endif
 @if(session()->has('hcc_id'))
 <x-hccfooter />
 @endif

