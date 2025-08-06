@if(session()->has('user_id'))
<x-header title="Register Child" />
  @endif
  @if(session()->has('hcc_id'))
  <x-hccheader title="Register Child" />
  @endif
  <section class="why_section layout_padding">
    <div class="container">

       <div class="row">
          <div class="col-md-12">
           <br>
           <h3 class="text-center">Register Child</h3>
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
               <form action="{{ URL::to('/insertChild') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <label>First Name:</label>
                        <br>
                        <input type="text" placeholder="Enter First Name" name="fname"  style="width: 320px; height:40px;" required />
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label>Last Name:</label>
                        <br>
                        <input type="text" placeholder="Enter Last Name" name="lname"  style="width: 320px; height:40px;" required />
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label>DOB:</label>
                        <br>
                        <input type="date" placeholder="Enter DOB" name="dob" style="width: 320px; height:40px;" required />
                    </div>
                    <div class="col-md-6">
                        <br>
                     <label>Gender:</label>
                     <br>
                     <input type="text" placeholder="Enter Gender" name="gender" style="width: 320px; height:40px;" required />
                 </div>
                    {{-- <div class="col-md-6">
                        <br>
                        <label>Card ID:</label>
                        <br>
                        <input type="text" placeholder="Enter Card ID" name="card_id" style="width: 320px; height:40px;" required />
                    </div> --}}
                    <div class="col-md-6">
                        <br>
                        <label>Parent ID:</label>
                        <br>
                        <input type="text" placeholder="Enter Parent ID" name="p_id"  style="width: 320px; height:40px;" required />
                    </div>
                    <div class="col-md-6">
                        <br>
                     <label>Status:</label>
                     <br>
                     <input type="text" placeholder="Enter Status" name="status" value="Non-vaccinated" style="width: 320px; height:40px;" required readonly />
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                        <input type="submit" value="Register" class="btn btn-success" style=" height: 50px; width: 100px;" />
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

