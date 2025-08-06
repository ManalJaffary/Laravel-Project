@if(session()->has('user_id'))
<x-header title="View Child Details" />
@endif
@if(session()->has('hcc_id'))
<x-hccheader title="View Child Details" />
@endif
<section class="inner_page_head">
    <div class="container_fuild">
       <div class="row">
          <div class="col-md-12">
           <br>
           <h1 class="text-center">Child Details</h1>
           <br>
          </div>
       </div>
    </div>
 </section>
<div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-5 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <div class="mt-3">
                      <h4>{{ $child->firstname }}&nbsp;{{ $child->lastname }}</h4>
                      <p class="text-secondary mb-1">{{ $child->gender }}</p>
                      <p class="text-muted font-size-sm">{{ $child->dob }}</p>
                      @if(session()->get('user_type')=='Vaccinator')
                      <a class="btn btn-success " target="" href="{{ URL::to('add_vaccination/'.$child->id) }}">Add Vaccination</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $child->firstname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $child->lastname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">DOB</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $child->dob }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $child->gender }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Card ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $child->id }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Parent Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $child->fname }}&nbsp;{{ $child->lname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Parent CNIC</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $child->cnic }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Parent Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $child->phone_number }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $child->status }}
                    </div>
                  </div>
                  <hr>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
<br>
@if(session()->has('user_id'))
  <x-footer />
  @endif
  @if(session()->has('hcc_id'))
  <x-hccfooter />
  @endif

