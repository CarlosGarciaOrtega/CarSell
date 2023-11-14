@extends('base.layaud')
@section('content')



<div class="row">
            <div class="col-12 grid-margin">
              <div class="card px-5 py-5 d-flex">
                <a href="{{url('car')}}" class="align-self-end">
                  <i class="fa fa-times align-self-end" aria-hidden="true"></i></a>
                 
                <div class="card-body px-5">
                 
                  <div class="card-title d-flex justify-content-between px-5" >
                    <div class="">
                      <h4>
                        {{$car->marca}} {{$car->modelo}} {{$car->version}}
                      </h4>

                    </div>
                    <div class="align-self-end text-left"> 
                         {{$car->precio}}€
                    </div>
                   
                  </div>

                  <div class="container justify-content-center text-center">
                    <div class="row justify-content-center ">
                      <!-- Fila 1 -->
                      <div class="col-md-2 col-sm-4 py-5">
                        <i class="fa fa-road  mr-2" aria-hidden="true"></i>
                        Kilometros
                        <br>
                        <br>
                        {{$car->km}}km
                        
                      </div>
                      <div class="col-md-2 col-sm-4 py-5">
                        <i class="fa-solid fa-gauge-high  mr-2"></i>
                        Potencia
                        <br>
                        <br>
                         
                         {{$car->cv}}</div>
                      <div class="col-md-2 col-sm-4 py-5">
                        <i class="fa-regular fa-calendar  mr-2"></i>
                         Año
                         <br>
                        <br>
                         
                         {{$car->año}}
                      </div>
                      <div class="col-md-2 col-sm-4 py-5">
                        
                        Trasmision <br>
                        <br>
                         
                         {{$car->trasmision}}
                        </div>
                      <div class="col-md-2 col-sm-4 py-5">
                        <i class="fa-solid fa-gas-pump mr-2"></i>
                        Combustible
                         <br>
                        <br>
                         
                         {{$car->combustible}}
                        </div>
                    </div>
                    <div class="row justify-content-center">
                      <!-- Fila 1 -->
                      <div class="col-md-2 col-sm-4 py-5">
                        <i class="fa-solid fa-cloud  mr-2"></i>
                        
                        
                        Emisiones
                        <br>
                        <br>
                         
                         {{$car->categoriaEmisiones}}
                      </div>
                      <div class="col-md-2 col-sm-4 py-5">
                        <i class="fa-solid fa-car-side  mr-2"></i>
                        Carroceria
                        <br>
                        <br>
                         
                         {{$car->carroceria}}
                      </div>
                      <div class="col-md-2 col-sm-4 py-5">
                        Nº Puertas
                        <br>
                        <br>
                         
                         {{$car->puertas}}
                      </div>
                      <div class="col-md-2 col-sm-4 py-5">
                        Estado
                        <br>
                        <br>
                         
                         {{$car->estado}}
                      </div>
                      <div class="col-md-2 col-sm-4 py-5">
                        <i class="fa-solid fa-flag  mr-2"></i>
                        Pais Vendedor
                        <br>
                        <br>
                         
                         {{$car->pais}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

  
@endsection