<html>
    <head>
      @vite('resources/css/app.css')
    </head>
    <body class='flex flex-col items-center'>
    <div class='flex flex-col border-2 border-blue-400 rounded-xl py-5 px-8 mt-20'>
        <h1 class='font-bold text-center text-xl'>Crear usuario</h1>
        <form class='flex flex-col items-center' action='/subir-persona' method='POST' enctype='multipart/form-data'>
            @csrf
            <span class='w-full flex flex-col'>
                <p class='font-semibold text-md mb-3'>Nombre</p>
                <input class='border-2 py-2 px-3 rounded-md mb-2' placeholder='Nombre' name='name'/>
            </span>
            <span class='w-full flex flex-col'>
                <p class='font-semibold text-md mb-3'>Correo</p>
                <input class='border-2 py-2 px-3 rounded-md mb-2' placeholder='Correo' name='email'/>
            </span>
            <span class='w-full flex flex-col'>
                <p class='font-semibold text-md mb-3'>Contraseña</p>
                <input class='border-2 py-2 px-3 rounded-md mb-2' placeholder='password' name='passwd'/>
            </span>
            <span class='flex flex-col mt-3'>
                <input type='file' name='img'/>
            </span>
            <button type='submit' class='py-2 px-4 mt-5 bg-blue-400 font-bold text-lg rounded-lg'>Crear</button>
        </form>
    </div>
    </body>
</html>
