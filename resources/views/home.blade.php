@extends('layouts.panel')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header" style="color:#DA8C77;font-size: 1.3rem;">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif                  
                </div>
            </div>
        </div>    
    </div>
</div>
<div class="container-fluid py-3">
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-3">
          <div class="card" style="border-color: #DA8C77 !important;">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Citas pendientes</p>
                    
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder" style="font-size: 32px !important;color: #DA8C77 !important;font-weight: bold !important; font-family: 'Open Sans', sans-serif !important;">
                      {{ count($pendingAppointments)}}</span>
                     
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-successcard shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-3">
          <div class="card" style="border-color: #DA8C77 !important;">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Citas confirmadas</p>
                   
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder" style="font-size: 32px !important;color: #DA8C77 !important;font-weight: bold !important; font-family: 'Open Sans', sans-serif !important;">
                      {{ count($confirmedAppointments)}}</span>
                     
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-successcard shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-3">
          <div class="card" style="border-color: #DA8C77 !important;">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de citas</p>
                    
                    <p class="mb-0">
                      <span class="text-danger text-sm font-weight-bolder" style="font-size: 32px !important;color: #DA8C77 !important;font-weight: bold !important; font-family: 'Open Sans', sans-serif !important;">
                      {{ count($confirmedAppointments) + count($pendingAppointments)}}</span>
                      
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-successcard shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
   
     
@endsection
