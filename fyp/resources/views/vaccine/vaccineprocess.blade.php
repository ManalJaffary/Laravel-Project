@if(session()->has('user_id'))
<x-header title="Vaccine Process" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="Vaccine Process" />
@endif

<section class="inner_page_head">
    <div class="container_fuild">
       <div class="row">
          <div class="col-md-12">
           <br>
           <h3 class="text-center">Vaccine Process</h3>
           <br>
          </div>
       </div>
    </div>
 </section>
 <br><br>
 @if(session()->has('hcc_id'))
 <div class="container">
    <!-- Button to Open the Modal -->
    <div class="container text-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
            Add Vaccine Process
          </button>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add New Vaccine Process</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="{{ URL::to('/insertVaccineprocess') }}" method="POST">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $v_id }}">
                    <div class="col-md-6">
                        <br>
                        <label>Valid Age:</label>
                        <br>
                        <input type="text" placeholder="Enter Valid Age" name="valid_age"  style="width: 320px; height:40px;" required />
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label>Dose:</label>
                        <br>
                        <input type="text" placeholder="Enter Dose" name="dose"  style="width: 320px; height:40px;" required />
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

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

 </div>
@endif
 <br><br>
 <div class="card">
    <div class="card-header">
        <h5>Vaccine Process</h5>
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
                        <th>Valid Age</th>
                        <th>Dose</th>
                        {{-- <th>&nbsp;</th> --}}
                      </tr>
                </thead>
                <tbody>
                    @foreach ($vaccineprocess as $single)
                                             <tr>
                                               <td>{{ $single->name }}</td>
                                               <td>{{ $single->valid_age }}</td>
                                               <td>{{ $single->dose }}</td>
                                               {{-- <td><a href="{{ URL::to('edit_vaccineprocess/'.$single->id) }}" style="color: green">Edit</a></td> --}}
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
