<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class='flex items-center justify-center'>
    <div class='w-fit flex flex-col'>
        <h class='text-2xl m-10 font-bold text-center'>CRUD de personas</h>
        <div class='rounded-lg overflow-hidden'>
        <table>
        <thead class='text-xs text-black uppercase bg-blue-500 dark:bg-blue-500 dark:text-black'>
          <tr>
            <th class='text-lg px-6 py-3'>Nombre</th>
            <th class='text-lg px-6 py-3'>Correo</th>
            <th class='text-lg px-6 py-3'>URL de foto</th>
          </tr>
        </thead>
        <tbody class='border-gray-800'>
            @foreach ($personas as $persona)
              <tr class='bg-white border-b dark:bg-blue-200 dark:border-gray-400'>
                <td class='text-base px-6 py-4'>{{$persona->name}}</td>
                <td class='text-base px-6 py-4'>{{$persona->email}}</td>
                <td class='text-base px-6 py-4'>
                    <img class='w-[40px] h-[40px]' src='{{$persona->img}}'/>
                </td>
              </tr>
            @endforeach
        </tbody>
        </div>
        </table>
    </div>
    <a href='/' class='w-fit py-2 px-5 text-lg bg-red-400 rounded-md my-5'>Volver</a>
</body>
</html
