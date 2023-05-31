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