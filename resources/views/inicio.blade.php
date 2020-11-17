@include('templates/header')

<h1>Pagina de inicio </h1>

@isset($user)

    Hola {{ $user }} 

@endisset

@include('templates/footer')
