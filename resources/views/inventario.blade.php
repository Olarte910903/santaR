@extends('templates.template')

@section('template')

<h1>Inventario</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Valor Unitario</th>
            <th>Valor Total</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($ingredientes as $ingrediente)
                <tr>
                    <td>{{$ingrediente->id}}</td>
                    <td>{{$ingrediente->nombre}}</td>
                    <td>{{$ingrediente->cantidad}}</td>
                    <td>${{number_format($ingrediente->valor_unitario, 2, '.', ',')}}</td>
                    <td>$ {{number_format($ingrediente->valor_total, 2, '.', ',')}}</td>
                </tr>
            @endforeach
    </tbody>
</table>

@endsection
