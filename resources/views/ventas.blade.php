@extends('templates.template')

@section('template')

<h1>Ventas</h1>

<!-- <form action="venta" method="post">
    @csrf
    <label for="nombre">Nombre Producto</label>
    <input type="text" name="nombre" id="nombre">

    <label for="cantidad">Cantidad</label>
    <input type="text" name="cantidad" id="cantidad">

    <label for="valor_total">Valor Unitario</label>
    <input type="text" name="valor_total" id="valor_total">

    <button type="submit">Guardar</button>
</form> -->

<form action="venta" method="POST" class="form-venta">
    <div>
        <label for="hamburguesa">Hamburguesa</label>
        <input type="checkbox" name="hamburguesa" id="hamburguesa">
    </div>
</form>


@endsection
