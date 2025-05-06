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
                    <button type="button" class="action-button primary" data-toggle="modal" data-target="#modalXML">
                        <i class="fas fa-code"></i> Servicio XML
                    </button>

                    <button type="button" class="action-button success" data-toggle="modal" data-target="#modalSOAP">
                        <i class="fas fa-exchange-alt"></i> Servicio SOAP
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal XML -->
    <div class="modal fade" id="modalXML" tabindex="-1" role="dialog" aria-labelledby="modalXMLLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(135deg, #4361ee, #3a56d4); color: white;">
                    <h5 class="modal-title" id="modalXMLLabel">
                        <i class="fas fa-code mr-3"></i>Información XML
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalXMLContent">
                    <!-- El contenido se cargará aquí via AJAX -->
                    <div class="text-center py-5">
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Cargando...</span>
                        </div>
                        <p class="mt-3 text-muted">Cargando información...</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-2"></i>Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal SOAP -->
    <div class="modal fade" id="modalSOAP" tabindex="-1" role="dialog" aria-labelledby="modalSOAPLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(135deg, #2ec4b6, #29b0a3); color: white;">
                    <h5 class="modal-title" id="modalSOAPLabel">
                        <i class="fas fa-exchange-alt mr-2"></i>Servicio SOAP
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Contenido del modal SOAP -->

                    @include('frontend.soap.number_to_words', [route('number.to.words.convert')])

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="fas fa-times mr-1"></i>Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#modalXML').on('show.bs.modal', function() {
                    $.get('/admin/mostrar-tabla', function(data) {
                        $('#modalXMLContent').html(data);
                    }).fail(function() {
                        $('#modalXMLContent').html(
                            '<div class="alert alert-danger">Error al cargar los datos</div>'
                        );
                    });
                });
            });
        </script>
        @yield('content-admin-js')
</body>

</html>
