<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.4.slim.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <title>Formulario Candidatos</title>
</head>
<body class="inicio">

    <header>
        <section class="encabezado">
            <img id="logo" src="img/logoWhite.png" alt="Logo Campus">
        </section>
    </header>

    <nav>

    </nav>

    <main>
        <div class="container mt-5">
            <div class="card">
                <h5 class="card-header text-center">REGISTRO DEL CANDIDATO</h5>
                <div class="card-body">
                <form action="evaluarDatos.php" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Dijite su nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"/>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="apellidos" class="form-label">Dijite sus apellidos:</label>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" min="0">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Dijite su Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Dijite su numero telefononico:</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" min="0" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="estudio" class="form-label">Seleccione el nivel de estudio:</label>
                                        <select class="form-select" id="estudio" name="estudio">
                                            <option selected>Nivel de Estudios</option>
                                            <option value="1">Bachiller</option>
                                            <option value="2">Tecnico</option>
                                            <option value="3">Tecnologo</option>
                                            <option value="4">Profesional</option>
                                            <option value="4">Estudiante</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="idioma" class="form-label">Seleccione su nivel de Ingles:</label>
                                        <select class="form-select" id="idioma" name="idioma">
                                            <option selected>nivel de ingles</option>
                                            <option value="1">Basico</option>
                                            <option value="2">Intermedio</option>
                                            <option value="3">Avanzado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p>Segun sus conocimineto en programnación seleccione una o varias opciones segun el caso:</p>
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <div class="form-check">
                                        <label class="form-check-label" for="python">PYTHON</label>
                                        <input class="form-check-input" type="checkbox" value="PYTHON" id="python" name="programa[]">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="html">HTML</label>
                                        <input class="form-check-input" type="checkbox" value="HTML" id="html" name="programa[]">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="js">JS</label>
                                        <input class="form-check-input" type="checkbox" value="JS" id="js" name="programa[]">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <label class="form-check-label" for="css">CSS</label>
                                        <input class="form-check-input" type="checkbox" value="CSS" id="css" name="programa[]">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="php">PHP</label>
                                        <input class="form-check-input" type="checkbox" value="PHP" id="php" name="programa[]">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="node.js">NODE.js</label>
                                        <input class="form-check-input" type="checkbox" value="NODE.js" id="node.js" name="programa[]">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <label class="form-check-label" for="c#">C#</label>
                                        <input class="form-check-input" type="checkbox" value="C#" id="c#" name="programa[]">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="TyPeScritp">TyPeScritp</label>
                                        <input class="form-check-input" type="checkbox" value="TyPeScritp" id="TyPeScritp" name="programa[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center">
                            <button type="reset" class="btn btn-primary botonn">LIMPIAR</button>
                            <button type="submit" class="btn btn-success botonn">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer></footer>
    
</body>
</html>