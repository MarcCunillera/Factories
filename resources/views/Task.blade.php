<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Listado de Tareas</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <strong>{{ $task->titulo }}</strong><br>
                {{ $task->descripcion }}<br>
                Estado: {{ $task->completed ? 'Completada' : 'Pendiente' }}
            </li>
        @endforeach
    </ul>
</body>
</html>
