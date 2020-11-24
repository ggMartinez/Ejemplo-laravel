@include('templates/header')

    <h1>Baja de persona</h1>
    @isset($eliminado)
        Persona numero {{ $eliminado }} eliminado
    @endisset

    @isset($error)
        Hubo un error: {{ $error }}
    @endisset
    <form action="/baja" method="post">
    @csrf

    ID: <input type="text" name=id /> <br />

    <input type="submit">  </input>
    </form>

@include('templates/footer')
