@extends('theme.back.app')
@section('contenido')

@section('titulo', 'Index')
<main class="container p-8">

    @if (session('datos'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('datos') }}
        <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span arial-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('cancelar'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('cancelar') }}
        <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span arial-hidden="true">&times;</span>
        </button>
    </div>
    @endif



    <div class="col-md-8">
        <h3>Index</h3>
        <div class="row float-right">
            <a href="{{ route('crear_venta')}}" name="Nueva Venta" class="btn btn-success btn-block">
            <i class="fas fa-user-plus"></i>Agregar nueva VENTA</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Precio</th>
                <th>Id Producto</th>
                <th>Descripcion</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                    <?php $sum = 0; ?>
                    @foreach ($venta as $ventaitem)
                    <tr>
                        <td> {{ $ventaitem->id }} </td>
                        <td> {{ $ventaitem->fecha }} </td>
                        <td> {{ $ventaitem->hora }} </td>
                        <td> {{ $ventaitem->importe }} </td>
                        <td> {{ $ventaitem->id_producto }} </td>
                        <td> {{ $ventaitem->descripcion }} </td>
                        <td>
                            <a href="" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $sum += $ventaitem->importe; ?>
                    @endforeach
            </tbody>
        </table>
        Suma totales: $ {{ $sum }}
    </div>
</main>
@endsection


    
        