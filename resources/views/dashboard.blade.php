<html>
    <head>
      @vite('resources/css/app.css')
    </head>
    <body class='flex flex-col h-screen items-center'>
        <div class='flex flex-row w-full h-full'>
            <div class='flex flex-col w-fit h-full py-10 px-10 bg-indigo-900'>
                <h3 class='font-bold text-2xl text-white my-10'>Dashboard prueba</h3>
                <span class='py-4'>
                    <hr/>
                    <p class='my-4 w-full text center text-white text-xl'>Crear Persona</p>
                    <hr/>
                    <p class='my-4 w-full text center text-white text-xl'>Actualizar Persona</p>
                    <hr/>
                    <p class='my-4 w-full text center text-white text-xl'>Eliminar Persona</p>
                    <hr/>
                    <p class='my-4 w-full text center text-white text-xl'>Listar Personas</p>
                    <hr/>
                </span>
            </div>
            @if ($view == 'create')
                @include('create_user');
            @elseif ($view == 'update')
                @include('update_user');
            @elseif ($view == 'delete')
                @include('delete_user');
            @elseif ($view == 'lista')
                @include('lista-personas');
            @else
                <h1>No hay choquito</h1>
            @endif
        </div>
    </body>
</html>
