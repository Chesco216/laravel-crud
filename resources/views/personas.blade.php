
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class='flex items-center justify-center'>
    <div class='w-fit flex flex-col'>
        <h class='text-xl m-10 font-bold'>CRUD de personas</h>
        <a class='w-full text-center py-2 px-4 bg-blue-400 rounded-lg mb-5' href='/crear-persona' method='GET'>Crear usuario</a>
        <a class='w-full text-center py-2 px-4 bg-blue-400 rounded-lg mb-5' href='/actualizar-persona' method='GET'>Modificar usuarios</a>
        <a class='w-full text-center py-2 px-4 bg-blue-400 rounded-lg mb-5' href='/lista-personas' method='GET'>Listar usuarios</a>
        <a class='w-full text-center py-2 px-4 bg-blue-400 rounded-lg mb-5' href='/eliminar-persona' method='GET'>Eliminar usuarios</a>
    </div>
</body>
</html
