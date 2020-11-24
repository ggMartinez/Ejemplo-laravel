@include('templates/header')

<h1>Lista de personas</h1>

    @foreach ($personas as $p)

    <a href='/listado/{{ $p-> id}}'>ID: {{ $p-> id}} </a> {{ $p->nombre }} {{ $p->apellido }} {{ $p->mail }} 
        <a href="/modificacion/{{ $p-> id}}"> Modificar </a>
    @endforeach

@include('templates/footer')
