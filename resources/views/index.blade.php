<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Prueba técnica GenIAfy</a>

        </div>
    </nav>

    <div class="container my-5">

        <h1 class="text-center mb-4">Lista de Empleados</h1>

        <div class="mb-4">

            <form action="{{ route('empleados.buscar') }}" method="POST" class="d-flex justify-content-center">
                @csrf
                <div class="input-group w-50">
                    <input
                        type="text"
                        name="id"
                        class="form-control"
                        placeholder="Buscar por ID"
                        value="{{ old('id', request('id')) }}">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>

            <!-- Botón para limpiar filtro -->
            <div class="d-flex justify-content-center mt-3">
                <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Limpiar Filtro</a>
            </div>

        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>RUT</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="tablaEmpleados">
                    <!-- Aquí se llenarán las filas con JavaScript -->
                    @forelse ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->rut }}</td>
                        <td>{{ $empleado->email }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No hay empleados.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <div>
            {{ $empleados->links() }}
        </div>

    </div>

</body>

</html>