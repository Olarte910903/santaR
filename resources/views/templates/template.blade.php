<head>
    <!-- <link rel="stylesheet" href="{{asset('css/styles.css')}}"> -->
    @vite(['resources/css/app.css'])
</head>

<div class="flex items-center p-6 w-auto bg-sky-700">
    <p class="w-1/4 text-7xl text-white">Santa-R</p>
    <nav class="w-2/4">
        <ul class="flex items-center p-2 space-x-36">
            <li class=" text-2xl hover:text-white"><a href="{{route('productos')}}" class="">Productos</a></li>
            <li class=" text-2xl hover:text-white"><a href="{{route('inventario')}}">Inventario</a></li>
            <li class=" text-2xl hover:text-white"><a href="{{route('compras')}}">Compras</a></li>
            <li class=" text-2xl hover:text-white"><a href="{{route('ventas')}}">Ventas</a></li>
            <li class=" text-2xl hover:text-white"><a href="{{route('ingredientesCostos')}}">Costos</a></li>
        </ul>
    </nav>
</div>

@yield('template')
