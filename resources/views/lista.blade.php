@include('templates/header')

<h1>Lista de personas</h1>

<b><a href=/alta>Agregar nueva persona</a></b> <br /> <br />
    @foreach ($personas as $p)

    <a href='/listado/{{ $p-> id}}'>ID: {{ $p-> id}} </a> {{ $p->nombre }} {{ $p->apellido }} {{ $p->mail }} 
        <a href="/modificacion/{{ $p-> id}}"> Modificar </a>   <a href="/baja/{{ $p-> id}}"> Eliminar </a> <br />

    @endforeach

@include('templates/footer')
