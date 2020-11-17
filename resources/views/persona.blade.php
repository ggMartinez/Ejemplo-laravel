@include('templates/header')

    <form action="/persona/crear" method="post">
    @csrf

    Nombre: <input type="text" name=nombre /> <br />
    Apellido: <input type="text" name=apellido /> <br />
    Mail: <input type="text" name=mail /> <br />
    <input type="submit"> Enviar </input>
    </form>

@include('templates/footer')
