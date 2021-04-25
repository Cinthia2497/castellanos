@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombredelproducto</th>
                <th>Codigodelproducto</th>
                <th>Referencia</th>
                <th>Descuento</th>
                <th>Impuesto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($producto as $producto)
                <tr>
                    <td> {{$producto->id}}</td>
                    <td> {{$producto->Nombredelproducto}} </td>
                    <td> {{$producto->Codigodelproducto}} </td>
                    <td> {{$producto->Referencia}} </td>
                    <td> {{$producto->Descuento}} </td>
                    <td> {{$producto->Impuesto}} </td>


                    <td>
                        <a href="{{route('producto.edit', $producto->id)}}" class="btn btn-success btn-sm">Editar</a>
                        <form action="{{route('producto.destroy', $producto->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop