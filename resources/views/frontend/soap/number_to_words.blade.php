<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Convertir Número a Palabras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Conversor de Número a Palabras</h4>
                </div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Errores:</strong>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('number.to.words.convert') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="number" class="form-label">Ingrese un número (0 - 999999999)</label>
                            <input
                                type="number"
                                class="form-control"
                                id="number"
                                name="number"
                                value="{{ old('number', $input ?? '') }}"
                                required
                                min="0"
                                max="999999999"
                            >
                        </div>

                        <button type="submit" class="btn btn-success w-100">Convertir</button>
                    </form>

                    @if (isset($result))
                        <div class="alert alert-info mt-4">
                            <strong>Resultado:</strong> {{ $result }}
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
