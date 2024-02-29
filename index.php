<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario OAC</title>
    <!-- FAVICON -->
    <link rel="icon" href="img/Canaima.png">
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="signupFrm">
        <form action="login_all.php" method="POST" class="form">
            <h1 class="title">Iniciar Sesión</h1>

            <div class="inputContainer">
                <input type="text" name="usuario" id="inputEmail" class="input" placeholder="a" pattern="[a-zA-Z0-9]{4,30}">
                <label for="" class="label">Usuario</label>
            </div>

            <div class="inputContainer">
                <input type="password" name="password" id="inputPassword" class="input" placeholder="a" pattern="(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,25}" title="La contraseñano cumple con los caracteres establecidos.">
                <label for="" class="label">Contraseña</label>
            </div>

            <div class="button">
                <input type="submit" class="submitBtn" value="Ingresar">
            </div>
        </form>
    </div>
</body>

</html>