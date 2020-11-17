@foreach ($personas as $p)

{{ $p-> id}} {{ $p->nombre }} {{ $p->apellido }} {{ $p->mail }} </br> 

@endforeach