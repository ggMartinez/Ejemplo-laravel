@include('templates/header')


    <h1>Alta de Persona</h1>
    
    @isset($creado)
        <h2>Usuario creado</h2>
    @endisset

    <form action="/alta" method="post">
    
    @csrf

    Nombre: <input type="text" name=nombre /> <br />
    Apellido: <input type="text" name=apellido /> <br />
    Mail: <input type="text" name=mail /> <br />
    <input type="submit"> Enviar </input>
    </form>

@include('templates/footer')
