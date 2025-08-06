@if(session()->has('user_id'))
<x-header title="Vaccine Record" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="Vaccine Record" />
@endif
                <section class="inner_page_head">
                    <div class="container_fuild">
                    <div class="row">
                        <div class="col-md-12">
                        <br>
                        <h3 class="text-center">Vaccine Record</h3>
                        <br>
                        </div>
                    </div>
                    </div>
                </section>
                @if(session()->has('hcc_id'))
                <div class="container">
                    <!-- Button to Open the Modal -->
                    <div class="container text-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                            Add Vaccine
                        </button>
                    </div>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add New Vaccine</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
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
                                        @if(session()->has('hcc_id'))
                                        <th>&nbsp;</th>
                                        @endif
                                        <th>&nbsp;</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vaccine as $single)
                                                            <tr>
                                                            <td>{{ $single['name'] }}</td>
                                                            <td>{{ $single['quantity'] }}</td>
                                                            @if(session()->has('hcc_id'))
                                                            <td><a href="{{ URL::to('edit_vaccine/'.$single['id']) }}" style="color: green">Edit</a></td>
                                                            @endif
                                                            <td><a href="{{ URL::to('vaccineprocess/'.$single['id']) }}" style="color: blue">View Vaccine Process</a></td>
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
