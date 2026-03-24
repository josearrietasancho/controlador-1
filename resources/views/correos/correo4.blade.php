<?php
$estudiantes = [
    ['nombre' => 'Anthony García',  'edad' => 20, 'carrera' => 'Ingeniería'],
    ['nombre' => 'Erick Pérez',  'edad' => 22, 'carrera' => 'Medicina'],
    ['nombre' => 'Sebas López', 'edad' => 19, 'carrera' => 'Arquitectura'],
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Correo 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .contenedor {
            text-align: center;
        }

        h1 {
            color: #1e3a5f;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #1e3a5f;
            color: white;
            padding: 10px 16px;
            text-align: left;
        }

        td {
            padding: 10px 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        tr:hover td {
            background-color: #f0f4ff;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 20px;
            background-color: #1e3a5f;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn-back:hover {
            background-color: #2d5080;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <h1>Información de Estudiantes de Programación Web 2026 - <strong>versión 4</strong></h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Carrera</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante): ?>
                    <tr>
                        <td><?php echo $estudiante['nombre']; ?></td>
                        <td><?php echo $estudiante['edad']; ?></td>
                        <td><?php echo $estudiante['carrera']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="{{ route('dashboard') }}" class="btn-back">← Go Back</a>

    </div>
</body>

</html>