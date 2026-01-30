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
            <p>
                <strong>Título:</strong> {{ $task->titulo }} <br>
                <strong>Descripción:</strong> {{ $task->descripcion }} <br>
                <strong>Completada:</strong> {{ $task->completed ? 'Completada' : 'Pendent' }} <br>
                <strong>ID:</strong> {{ $task->id }}
            </p>
            <hr>
        @endforeach
    </ul>
</body>
</html>