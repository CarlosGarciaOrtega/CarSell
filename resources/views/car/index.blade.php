@extends('base.layaud')
@section('content')
 
  <div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Coches a la venta</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  
                  <th> Marca </th>
                  <th> Modelo </th>
                  <th> Version </th>
                  <th> Año </th>
                  <th> Km</th>
                  <th> Precio </th>
                  <th>  </th>
                </tr>
              </thead>
              <tbody>
                  @foreach($cars as $car)
                <tr>
                  <td> {{$car->marca}}</td>
                  <td> {{$car->modelo}} </td>
                  <td> {{$car->version}} </td>
                  <td> {{$car->año}} </td>
                  <td> {{$car->km}} </td>
                  <td> {{$car->precio}} €</td>
                  <td>
                   
                      <a href="{{url('car/' . $car->id) }}" class="btn btn-outline-info btn-fw">Ver mas</a>
                   
                    
                  </td>
                  <td>
                   
                      <a href="{{url('car/' . $car->id . '/edit')}}" class="btn btn-outline-info btn-fw">Editar</a>
                   
                    
                  </td>
                  <td>
                   
                      <form class="formDelete" action="{{ url('car/' . $car->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-outline-info btn-fw">Eliminar</button>
                    </form>
                   
                    
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
@endsection
@section('script')
<script>
  const forms = document.querySelectorAll(".formDelete");
  forms.forEach(function(form) {
      form.onsubmit = (event) => {
          return confirm('Seguro?');
      };
  });
</script>
@endsection