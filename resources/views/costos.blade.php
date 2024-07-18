@extends('templates.template')

@section('template')

<h1>Costos</h1>

<form action="#" method="POST" class="form-costos">
    @foreach($ingredientes as $ingrediente)
    <div>
    <label for="">{{$ingrediente->nombre}}</label>
    <input type="number" name="" id="">
    </div>
    @endforeach
    <button type="submit">Enviar</button>
</form>

@endsection
