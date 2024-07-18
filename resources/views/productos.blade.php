@extends('templates.template')
@section('template')

<h1>Productos</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->cantidad}}</td>
                </tr>
            @endforeach
    </tbody>
</table>

@endsection