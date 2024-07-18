<head>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<div class="template">
    <p>Santa-R</p>
    <nav>
        <ul>
            <li><a href="{{route('productos')}}">Productos</a></li>
            <li><a href="{{route('inventario')}}">Inventario</a></li>
            <li><a href="{{route('compras')}}">Compras</a></li>
            <li><a href="{{route('ventas')}}">Ventas</a></li>
            <li><a href="{{route('ingredientesCostos')}}">Costos</a></li>
        </ul>
    </nav>
</div>

@yield('template')
