@extends('base.layaud')
@section('content')
  <div class="col-md-12 grid-margin stretch-card" >
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" method="post" action="{{url('/car')}}">

                      @csrf
                      <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" name="marca"  value="{{old('marca')}}"  class="form-control" id="marca" placeholder="Marca">
                      </div>
                      <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="modelo" placeholder="Modelo">
                      </div>
                      <div class="form-group">
                        <label for="version">Version</label>
                        <input type="text"  name="version" value="{{old('version')}}" class="form-control" id="version" placeholder="Version">
                      </div>
                      <div class="form-group">
                        <label for="km">Kilometros</label>
                        <input type="text"  value="{{old('km')}}"  name="km" class="form-control" id="km" placeholder="Kilometros">
                      </div>
                       <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" value="{{old('precio')}}"  name="precio"  class="form-control" id="precio" placeholder="Precio">
                      </div>
                       <div class="form-group">
                        <label for="año">Año</label>
                        <input type="text"  name="año" value="{{old('año')}}" class="form-control" id="año" placeholder="Año">
                      </div>
                      <div class="form-group">
                        <label for="trasmision">Trasmision</label>
                        <input type="text"  name="trasmision" value="{{old('trasmision')}}" class="form-control" id="trasmision" placeholder="Trasmision">
                      </div>
                      <div class="form-group">
                        <label for="combustible">Combustible</label>
                        <input type="text" name="combustible" value="{{old('combustible')}}" class="form-control" id="combustible" placeholder="Combustible">
                      </div>
                      <div class="form-group">
                        <label for="cv">Potencia</label>
                        <input type="text" name="cv" value="{{old('cv')}}" class="form-control" id="cv" placeholder="Potencia">
                      </div>
                       <div class="form-group">
                        <label for="pais">Pais</label>
                        <input type="text"  name="pais" value="{{old('pais')}}" class="form-control" id="pais" placeholder="Pais">
                      </div>
                       <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text"  name="estado" value="{{old('estado')}}" class="form-control" id="estado" placeholder="Estado">
                      </div>
                      <div class="form-group">
                        <label for="carrociria">Carrociria</label>
                        <input type="text"  name="carroceria" value="{{old('carroceria')}}" class="form-control" id="carrociria" placeholder="Carrociria">
                      </div>
                      <div class="form-group">
                        <label for="categoriaEmisiones">Categoria Emisiones</label>
                        <input type="text"  name="categoriaEmisiones" value="{{old('categoriaEmisiones')}}" class="form-control" id="categoriaEmisiones" placeholder="Categoria Emisiones">
                      </div>
                      <div class="form-group">
                        <label for="puertas">Numero de puertas</label>
                        <input type="text"  name="puertas"  value="{{old('puertas')}}" class="form-control" id="puertas" placeholder="Numero de puertas">
                      </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection