<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="CRM Callcenter">
        <meta name="author" content="Buenos Aires Ciudad">
        
        <title>Buenos Aires Ciudad</title>
        
        <link rel="shortcut icon" href="assets/bastrap3/favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="assets/bastrap3/favicon.ico">
        <link rel="stylesheet" href="assets/bastrap3/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bastrap3/bastrap.css">
        
        <!-- STYLES -->
        <link rel="stylesheet" href="assets/css/combined-datos.css">

        <!--[if lt IE 9]>
            <script src="bastrap3/ba-modernizr.js"></script>
        <!--[endif]-->
    </head>
    <body>
        
        <!-- BRANDING -->
        <header class="navbar navbar-primary navbar-top" >
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img src="assets/img/logoba.png" alt="Buenos Aires Ciudad">
                </a>
            </div>
        </header>
        
        <div class="container">
            
            <!-- MENÚ -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <ul class="nav navbar-header navbar-left">
                        <li class="navbar-brand">CRM Callcenter</li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=".<?php echo \Base::instance()->alias('form'); ?>">Nuevo</a></li>
                        <li class="active"><a href=".<?php echo \Base::instance()->alias('datos'); ?>">Datos</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#modal-exportar">Exportar</a></li>
                        <li><a href="#" id="salir">Salir</a></li>
                    </ul>
                </div>
            </nav>
            
            <!-- TÍTULO -->        
            <div class="col-md-12">
                <div class="row title text-center">
                    <h2>Datos</h2>
                </div>              
            </div>
            
            <!-- MODAL EXPORTAR -->
            <div class="col-md-12">
                <div class="modal fade" id="modal-exportar" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" id="modal-title">Exportar</h4>
                            </div>
                            <div class="modal-body">
                                <ul class="nav nav-tabs">
                                    <li role="presentation" class="active"><a href="#dia" data-toggle="tab" role="tab">Día</a></li>
                                    <li role="presentation"><a href="#semana" data-toggle="tab" role="tab">Semana</a></li>
                                    <li role="presentation"><a href="#mes" data-toggle="tab" role="tab">Mes</a></li>
                                    <li role="presentation"><a href="#personalizado" data-toggle="tab" role="tab">Rango Personalizado</a></li>
                                    <li role="presentation"><a href="#todo" data-toggle="tab" role="tab">Todo</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="dia">
                                        <div class="input-group date day">
                                            <input class="form-control dia" name="dia" placeholder="Día" type="text" readonly>
                                            <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-calendar"></i>
                                            </span>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn btn-primary btn-large xlsx" href="#">
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                Excel
                                            </a>
                                            <a class="btn btn-primary btn-large csv" href="#">
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                CSV
                                            </a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="semana">
                                        <div class="input-group date week">
                                            <input class="form-control semana" name="semana" placeholder="Semana" type="text" readonly>
                                            <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-calendar"></i>
                                            </span>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn btn-primary btn-large xlsx" href="#">
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                Excel
                                            </a>
                                            <a class="btn btn-primary btn-large csv" href="#">
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                CSV
                                            </a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="mes">
                                        <div class="input-group date month">
                                            <input class="form-control fecha" name="mes" placeholder="Mes" type="text" readonly>
                                            <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-calendar"></i>
                                            </span>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn btn-primary btn-large xlsx" href="#">
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                Excel
                                            </a>
                                            <a class="btn btn-primary btn-large csv" href="#">
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                CSV
                                            </a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="personalizado">
                                         <div class="input-daterange input-group date range" id="rango">
                                            <input type="hidden" class="form-control" name="start" id="range-start" readonly>
                                            <input type="text" class="form-control" name="end" placeholder="Rango" id="range-end" readonly>
                                            <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-calendar"></i>
                                            </span>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn btn-primary btn-large xlsx" href="#">
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                Excel
                                            </a>
                                            <a class="btn btn-primary btn-large csv" href="#">
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                CSV
                                            </a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="todo">
                                        <div class="text-center">
                                            <h3 class="stat"><span class="registros">0</span><small class="stat-label">Registros</small></h3>
                                            <h3 class="stat"><span class="llamadas-concretadas">0</span><small class="stat-label">Llamadas Concretadas</small></h3>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn btn-primary btn-large xlsx" href="api/xlsx" download>
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                Excel
                                            </a>
                                            <a class="btn btn-primary btn-large csv" href="api/csv" download>
                                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                                CSV
                                            </a>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="tooltip" data-placement="bottom" title='o con Esc'>Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- TABLA -->
            <table id="grid" class="col-md-12 table table-condensed table-hover table-responsive table-bordered display" cellspacing="0">
            </table>           

        </div>
            
        <script src="assets/js/combined-datos.js"></script>
        
    </body>
</html> 

