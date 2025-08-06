<x-header title="Dashboard" />
            @if(session()->get('user_type')=='Admin')
                                    <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="fa fa-hospital-o bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Healthcare Centers</span>
                                                        <h4>{{ $hccCount }}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                              Total Healthcare Centers
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="fa fa-user-md bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Vaccinators</span>
                                                        <h4>{{ $vaccinatorCount }}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                Total Vaccinators Registered
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="fas fa-user-friends bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Parents</span>
                                                        <h4>{{ $parentCount }}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                Total Parents Registered
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="fa fa-child bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Children</span>
                                                        <h4>{{ $childCount }}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                               Total Children Registered
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                            <!-- card1 end -->
                                            <div class="container">
                                                <br><br><br><br>
                                            </div>
                                            <div class="container">
                                                <div class="row" >
                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="card fb-card">
                                                            <div class="card-header">
                                                                <i class="fa fa-hospital-o"></i>
                                                                <div class="d-inline-block">
                                                                    <h5>Registered Healthcare Centers</h5>
                                                                </div>
                                                            </div>
                                                            <div class="card-block text-center">
                                                                <a class="btn btn-primary " target="" href="{{ URL::to('/hccusers') }}">View All</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-4">
                                                    <div class="card dribble-card">
                                                        <div class="card-header">
                                                            <i class="fa fa-child"></i>
                                                            <div class="d-inline-block">
                                                                <h5>Registered Children</h5>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <a class="btn btn-danger " target="" href="{{ URL::to('/childlist') }}">View All</a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="card twitter-card">
                                                            <div class="card-header">
                                                                <i class="fa fa-syringe"></i>
                                                                <div class="d-inline-block">
                                                                    <h5>Vaccine Record</h5>
                                                                </div>
                                                            </div>
                                                            <div class="card-block text-center">
                                                                <a class="btn btn-info " target="" href="{{ URL::to('/a_vaccine_record') }}">View All</a>
                                                            </div>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>
             @endif
             @if(session()->get('user_type')=='Vaccinator')
             <div class="row">
                <div class="col-md-0 col-xl-2"></div>
                <!-- card1 start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="fas fa-user-friends bg-c-green card1-icon"></i>
                            <span class="text-c-green f-w-600">Parents</span>
                            <h4>{{ $parents }}</h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                    Total Parents Registered
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="fa fa-child bg-c-yellow card1-icon"></i>
                            <span class="text-c-yellow f-w-600">Children</span>
                            <h4>{{ $child }}</h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                   Total Children Registered
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
             <div class="container">
                <br><br><br><br>
            </div>
            <div class="container">
                <div class="row" >
                    <div class="col-md-6 col-xl-4">
                        <div class="card fb-card">
                            <div class="card-header">
                                <i class="fas fa-user-friends"></i>
                                <div class="d-inline-block">
                                    <h5>Registered Parents</h5>
                                </div>
                            </div>
                            <div class="card-block text-center">
                                <a class="btn btn-primary " target="" href="{{ URL::to('/parent_users') }}">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                    <div class="card dribble-card">
                        <div class="card-header">
                            <i class="fa fa-child"></i>
                            <div class="d-inline-block">
                                <h5>Registered Children</h5>
                            </div>
                        </div>
                        <div class="card-block text-center">
                            <a class="btn btn-danger " target="" href="{{ URL::to('/childlist') }}">View All</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card twitter-card">
                            <div class="card-header">
                                <i class="fa fa-syringe"></i>
                                <div class="d-inline-block">
                                    <h5>Vaccine Record</h5>
                                </div>
                            </div>
                            <div class="card-block text-center">
                                <a class="btn btn-info " target="" href="{{ URL::to('/a_vaccine_record') }}">View All</a>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
             @endif
                                        <div class="container">
                                             <br><br><br><br>
                                             <h3 class="text-center">Vaccine Information</h3>
                                             <br>
                                        </div>
                                        <div class="card">
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Disease</th>
                                                                <th>Causative agent</th>
                                                                <th>Vaccine</th>
                                                                <th>Doses</th>
                                                                <th>Age of administration</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Childhood TB</td>
                                                                <td>Bacteria</td>
                                                                <td>BCG</td>
                                                                <td>1</td>
                                                                <td>Soon after birth</td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Poliomyelitis</td>
                                                                <td rowspan="2">Virus</td>
                                                                <td>OPV</td>
                                                                <td>4</td>
                                                                <td>OPV0: soon after birth
                                                                    <br>
                                                                    OPV1: 6 weeks
                                                                    <br>
                                                                    OPV2: 10 weeks
                                                                    <br>
                                                                    OPV3: 14 weeks</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IPV</td>
                                                                <td>1</td>
                                                                <td>IPV-I: 14 weeks</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diphtheria</td>
                                                                <td>Bacteria</td>
                                                                <td rowspan="5">Pentavalent vaccine
                                                                    <br>
                                                                    (DTP+Hep B + Hib)</td>
                                                                <td rowspan="5">3</td>
                                                                <td rowspan="5">Penta1: 6 weeks
                                                                    <br>
                                                                    Penta2: 10 weeks
                                                                    <br>
                                                                    Penta3: 14 weeks</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tetanus</td>
                                                                <td>Bacteria</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pertussis</td>
                                                                <td>Bacteria</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hepatitis B</td>
                                                                <td>Virus</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hib pneumonia and meningitis</td>
                                                                <td>Bacteria</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Measles</td>
                                                                <td>Virus</td>
                                                                <td>Measles</td>
                                                                <td>2</td>
                                                                <td>Measles1: 9 months
                                                                    <br>
                                                                    Measles2: 15months</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diarrhoea due to rotavirus</td>
                                                                <td>Virus</td>
                                                                <td>*Rotavirus</td>
                                                                <td>2</td>
                                                                <td>Rota 1: 6 weeks
                                                                    <br>
                                                                    Rota 2: 10 weeks</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
<x-footer />
