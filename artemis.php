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
    <title>Artemis</title>
</head>
<body class="artemis">

    <header>
        <section class="encabezado">
            <img id="logo" src="img/logoWhite.png" alt="Logo Campus">
        </section>
    </header>

    <nav></nav>

    <main>
        <div class="contenedor">
                
            <h1>...... BIENVENIDO A ARTEMIS 😊......</h1>
            <h2>
                <?php
                        session_start();

                        echo $_SESSION['nombre'];
                        echo "  " .$_SESSION['apellidos'];
                ?>
            </h2>
                
        </div>
    </main>

    <footer></footer>
    
</body>
</html>