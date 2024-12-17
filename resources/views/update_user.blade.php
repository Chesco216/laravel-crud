<html>
    <head>
      @vite('resources/css/app.css')
    </head>
    <body class='flex flex-col items-center'>
    <div class='flex flex-col border-2 border-blue-400 rounded-xl py-5 px-8 mt-20'>
        <h1 class='font-bold text-center text-xl'>Crear usuario</h1>
        <form class='flex flex-col items-center' action='/actualizar-persona' method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <span class='w-full flex flex-row items-center mt-5'>
                <p class='font-semibold text-md mb-3 mr-5'>Id del usuario:</p>
                <input class='border-2 py-2 px-3 rounded-md mb-2' placeholder='id' name='id'/>
            </span>
            <span class='w-full flex flex-col'>
                <p class='font-semibold text-md mb-3'>Nombre</p>
                <input class='border-2 py-2 px-3 rounded-md mb-2' placeholder='Nombre' name='name'/>
            </span>
            <span class='w-full flex flex-col'>
                <p class='font-semibold text-md mb-3'>Correo</p>
                <input class='border-2 py-2 px-3 rounded-md mb-2' placeholder='Correo' name='email'/>
            </span>
            <span class='flex flex-col mt-3'>
                <input type='file' name='img'/>
            </span>
            <div class='w-full flex justify-around'>
                <button type='submit' class='py-2 px-4 mt-5 bg-blue-400 font-bold text-lg rounded-lg'>Actualizar</button>
                <a href='/' class='py-2 px-4 mt-5 bg-red-400 font-bold text-lg rounded-lg'>Volver</a>
            </div>
        </form>
    </div>
    </body>
</html>
