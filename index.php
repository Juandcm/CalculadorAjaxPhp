<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/ABeeZee.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="pill" href="#tab-1">Calculadora Básica</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-2">Calculadora Científica</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="subirUnPoco">
                    <form action="calculadorabasica.php" method="POST">
                        <div class="container estiloDeCalculadora">
                            <div>
                                <div class="container-fluid">
                                    <div class="form-row color">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 offset-0 offset-sm-0 offset-xl-0 d-flex flex-column align-items-center">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text subirUnPoco"><i class="fa fa-pencil"></i></span></div><input id="numero1" class="form-control number subirUnPoco numeros" type="text" name="numero1" required placeholder="Escribe el Número"
                                                    inputmode="numeric"></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 offset-0 offset-sm-0 d-flex flex-column align-items-center">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text subirUnPoco"><i class="fa fa-pencil"></i></span></div><input id="numero2" class="form-control number subirUnPoco numeros" type="text" name="numero2" required placeholder="Escribe el Número"
                                                    inputmode="numeric"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<div class="form-row">
    <div class="col-6 col-sm-6 col-md-6 subirUnPoco"><button class="btn btn-primary d-flex ml-auto botones text-center" type="button" name="sumar" onclick="CalcularSuma();"><i class="fa fa-plus"></i></button></div>
    <div class="col-6 col-sm-6 col-md-6 subirUnPoco"><button class="btn btn-primary d-flex mr-auto text-center botones" type="button" name="restar" onclick="CalcularResta();"><i class="fa fa-minus"></i></button></div>
    <div class="col-6 col-sm-6 col-md-6 subirUnPoco"><button class="btn btn-primary d-flex ml-auto botones text-center" type="button" name="multiplicar" onclick="CalcularMultiplicacion();"><i class="fa fa-asterisk"></i></button></div>
    <div class="col-6 col-sm-6 col-md-6 subirUnPoco"><button class="btn btn-primary d-flex mr-auto text-center botones" type="button" name="dividir" onclick="CalcularDivision();">/<br></button></div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 subirUnPoco"><button class="btn btn-danger d-flex m-auto text-center botones" type="reset"><i class="fa fa-trash-o fuenteicono"></i></button></div>
                            </div>
                        </div>
                    </form>
                    <div class="subirUnPoco">
                        <div class="container-fluid">
                            <div class="row color">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-0 offset-sm-0 offset-xl-0 d-flex flex-column align-items-center">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text subirUnPoco"><i class="fa fa-bars"></i></span></div><input class="form-control number subirUnPoco numeros" id="resultadoBasico" type="text" readonly="" required="" placeholder="Resultado"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="subirUnPoco">
                    <form action="calculadoracientifica.php" method="POST">
                        <div class="container estiloDeCalculadora">
                            <div>
                                <div class="container-fluid">
                                    <div class="form-row color">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-0 offset-sm-0 offset-xl-0 d-flex flex-column align-items-center">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text subirUnPoco"><i class="fa fa-pencil"></i></span></div><input id="numero3" class="form-control number subirUnPoco numeros" type="text" name="numero3" required="" placeholder="Escribe el Número"
                                                    inputmode="numeric"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-6 col-sm-6 col-md-6 col-xl-4 subirUnPoco"><button class="btn btn-primary d-flex m-auto botones text-center" type="button" name="sen" onclick="CalcularSen();">sen</button></div>
                                <div class="col-6 col-sm-6 col-md-6 col-xl-4 subirUnPoco"><button class="btn btn-primary d-flex m-auto text-center botones" type="button" name="cos" onclick="CalcularCos();">cos</button></div>
                                <div class="col-6 col-sm-6 col-md-6 col-xl-4 subirUnPoco"><button class="btn btn-primary d-flex m-auto text-center botones" type="button" name="tan" onclick="CalcularTan();">tan</button></div>
                                <div class="col-6 col-sm-6 col-md-6 col-xl-4 subirUnPoco"><button class="btn btn-primary d-flex m-auto botones text-center" type="button" name="elevado" onclick="CalcularElevado();"><i class="fa fa-superscript fuenteicono"></i></button></div>
                                <div class="col-6 col-sm-6 col-md-6 col-xl-4 subirUnPoco"><button class="btn btn-primary d-flex m-auto text-center botones" type="button" name="raiz" onclick="CalcularRaiz();">raiz</button></div>
                                <div class="col-6 col-sm-6 col-md-6 col-xl-4 subirUnPoco"><button class="btn btn-primary d-flex m-auto text-center botones" type="button" name="factorial" onclick="CalcularFactorial();">n!</button></div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 subirUnPoco"><button class="btn btn-danger d-flex m-auto text-center botones" type="reset"><i class="fa fa-trash-o fuenteicono"></i></button></div>
                            </div>
                        </div>
                    </form>
                    <div class="subirUnPoco">
                        <div class="container-fluid">
                            <div class="row color">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-0 offset-sm-0 offset-xl-0 d-flex flex-column align-items-center">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text subirUnPoco"><i class="fa fa-bars"></i></span></div><input class="form-control number subirUnPoco numeros" type="text" id="resultadoCientifico" readonly="" required="" placeholder="Resultado"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerPagina">
        <div class="container">
            <h1 class="text-center tituloPrincipal">Calculadora</h1>
            <hr>
            <p class="text-center tituloSecundario">Desarrollado en el 2018</p>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.formance.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>