@extends('adminlte::page')

@section('title', 'Producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <form method="post" action="{{route('producto.update', $producto->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Nombredelproducto:</label>
                    <input type="text" class="form-control" name="Nombredelproducto" value="{{$producto->Nombredelproducto}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Codigodelproducto:</label>
                    <textarea type="text" class="form-control" rows="3" name="Codigodelproducto" >{{$producto->Codigodelproducto}}</textarea>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">Referencia:</label>
                    <input type="text" class="form-control" name="Referencia" value="{{$producto->Referencia}}">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Descuento:</label>
                    <input type="text" class="form-control" name="Descuento" value="{{$producto->Descuento}}">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Impuesto:</label>
                    <input type="text" class="form-control" name="Impuesto" value="{{$producto->Impuesto}}">
                </div>
                <div class="col col-lg-6">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop