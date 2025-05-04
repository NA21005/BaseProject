<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla De Empleados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: rgb(255, 255, 255);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            text-align: center;
            color: #343a40;
            margin-bottom: 30px;
        }

        .table-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        table th {
            background-color: #0d6efd;
            color: black;
            text-align: center;
        }

        table td {
            vertical-align: middle;
        }

        @media (max-width: 768px) {
            table {
                font-size: 0.9rem;
            }

            h2 {
                font-size: 1.5rem;
            }
        }

        .highlight-full {
            background-color: #007aff;
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5 table-container">
        <h2 class="highlight-full">Lista De Empleados</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Dirección</th>
                        <th>DUI</th>
                        <th>Teléfono</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados['Empleado'] as $empleado)
                        <tr>
                            <td class="text-center">{{ $empleado['ID'] }}</td>
                            <td>{{ $empleado['Nombres'] }}</td>
                            <td>{{ $empleado['Apellidos'] }}</td>
                            <td>{{ $empleado['Direccion'] }}</td>
                            <td>{{ $empleado['DUI'] }}</td>
                            <td>{{ $empleado['Telefono'] }}</td>
                            <td>{{ $empleado['Cargo'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
