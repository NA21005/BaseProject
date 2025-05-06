<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel</title>

    <link href="{{ asset('images/logo.png') }}" rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/custom/panel.css') }}" rel="stylesheet" />

    @yield('content-admin-css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Main content centered on screen -->
        <div class="content-wrapper">
            <div class="center-container">
                <h1 class="panel-title">Panel de Servicios</h1>
                <p class="panel-subtitle">Seleccione el tipo de servicio que desea utilizar</p>

                <div class="button-grid">

                    <a href="/number-to-words" class="action-button primary">
                        <i class="fas fa-exchange-alt"></i> Servicio SOAP
                    </a>
                    
                    <a href="/admin/mostrar-json" class="action-button primary">
                        <i class="fas fa-code"></i> JSON Puro
                    </a>

                    <a href="/admin/mostrar-tabla" class="action-button primary">
                        <i class="fas fa-table"></i> XML a Tabla
                    </a>

                    <a href="/admin/convertir-xml-a-json" class="action-button primary">
                        <i class="fas fa-balance-scale"></i> Comparar XML y JSON
                    </a>
                </div>
            </div>
        </div>
        
    </div>

</body>

</html>
