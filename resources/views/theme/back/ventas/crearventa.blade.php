@extends('theme.back.app')
@section('contenido')

@section('titulo', 'CrearVenta')
<link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
<!-- FONT AWESOEM -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<form method="POST" action="{{ route('guardar_venta')}}">
@csrf

<main class="container p-4">
  
  <div class="row">
    <h3>Crear venta</h1>
    <div class="col-md-4">
      <!-- MESSAGES -->

      </div>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="{{ url('/ventas') }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- LLAVE DE SEGURIDAD -->

          <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">                                                    
                    <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
                </div>
                <input type="date" name="fecha" id="fechadenacimiento" min="1000-01-01"
                  max="3000-12-31" class="form-control">                                                   
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
              <div class="input-group-prepend">                                                    
                  <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
              </div>
              <input type="time" name="hora" id="fechadenacimiento" class="form-control">                                                   
        </div>
      </div>
          <div class="form-group">
            <textarea name="importe" rows="2" class="form-control" placeholder="Importe: 25698,55"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="id_producto" class="form-control" placeholder="ID producto: 2,3,etc" autofocus>
          </div>
          <div class="form-group">
            <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion: Excelente calidad"></textarea>
          </div>

          <button type="submit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Guardar</button>
          <a href="{{ route('cancelar') }}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>


          
        </form>
      </div>
    </div>  
  </div>
</main>
</form>
@endsection
