<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- ------------CSS------------ -->
    <link rel="stylesheet" href="../src/css/reset.css">
    <link rel="stylesheet" href="../src/css/loginPage.css">

    <!-- ------------JS------------ -->
    <!-- ------------PHP------------ -->

    
</head>
<body>
    <!-- ------------LOGO------------ -->
    <div class="container">
        <img id="loginLogo" src="../src/img/mockupLogoLogin.png" alt="Logo">
    </div>

    <!-- ------------FORMULARIO------------ -->
    <div class="container" id="formularioLogin">
        <h4>Inicio de sesión</h3>
        <form action="processLogin.php" method="post">
            <p>Usuario</p>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <p>Contraseña</p>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <p>ID Empresa</p>
            <input type="text" name="codigo" placeholder="Código" required>

            <a href="">Olvidé la contraseña</a>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>

    <!-- ------------FOOTER------------ -->
    <footer>
        <p>&copy; 2023 <a href="https://github.com/KaruzG">KaruzG</a>. All rights reserved.</p>  
    </footer>
</body>
</html>