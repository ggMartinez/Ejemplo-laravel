@include('templates/header')


    <h1>Baja de Persona</h1>
    
    @isset($eliminado)
        <h2>Usuario {{ $eliminado }} eliminado</h2>
    @endisset

    @isset($persona)

        <form action="/baja" method="post">
        
            @csrf

            ID: <input type="text" name=id value={{ $persona->id }} readonly /> <br />
            Nombre: <input type="text" name=nombre value={{ $persona->nombre  }} readonly /> <br />
            Apellido: <input type="text" name=apellido value={{ $persona->apellido }} readonly /> <br />
            Mail: <input type="text" name=mail value={{ $persona->mail }} readonly /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')
