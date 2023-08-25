<?php
require "config/conexionProvi.php";
session_start();

//  Verificacion para el inicio de sesion.
if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT id_usuarios, password, usuario, id_roles FROM usuarios WHERE usuario='$usuario' ";
    $resultado = $mysqli->query($sql);

    $num = $resultado->num_rows;

    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['password'];
        $pass_c = sha1($password);
        if ($password_bd == $pass_c) {
            $_SESSION['id_usuarios'] = $row['id_usuarios'];
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['id_roles'] = $row['id_roles'];
        //    Comprobación de inicion de sesión y roles
            if (isset($_SESSION['id_roles'])) {
                switch ($_SESSION['id_roles']) {
                   case 1:
                        header("Location: admin.php");
                        break;
                    case 2:
                        header("Location: presidencia.php");
                        break;
                    case 3:
                        header("Location: analista.php");
                        break;
                    case 4:
                        header("Location: tecnico.php");
                        break;
                    case 5:
                        header("Location: verificador.php");
                        break;
                    case 6:
                            header("Location: coordinador.php");
                            break;
                    default:
                           echo  "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Rol no existente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('index.php');
              });
    });
        </script>";
    
                        break;
                }

            }
        } else {
            // Envia un mensaje de alerta por si el password no coincide
             echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'La contraseña no coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('index.php');

                      });
            });
                </script>";
        }
    } else {
        // Envia un mensaje de alerta por si el usuario no coincide no coincide
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El usuario no coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('index.php');

                      });
            });
                </script>";
    }
}
?>
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
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <h1 class="title">Iniciar Sesión</h1>

            <div class="inputContainer">
                <input type="text" name="usuario" id="inputEmail" class="input" placeholder="a">
                <label for="" class="label">Usuario</label>
            </div>

            <div class="inputContainer">
                <input type="password" name="password" id="inputPassword" class="input" placeholder="a">
                <label for="" class="label">Contraseña</label>
            </div>

            <div class="button">
                <input type="submit" class="submitBtn" value="Ingresar">
            </div>
        </form>
    </div>
</body>

</html>