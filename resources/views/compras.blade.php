@extends('templates.template')

@section('template')

<h1>Compras</h1>

<form action="ingresarIngrediente" method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="cantidad">Cantidad</label>
    <input type="text" name="cantidad" id="cantidad">

    <label for="valor_total">Valor Total</label>
    <input type="text" name="valor_total" id="valor_total">

    <button type="submit">Guardar</button>
</form>

@endsection
