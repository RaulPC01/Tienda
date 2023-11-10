<?php require 'baseD.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<style>
div{
    
    display: block;
    width: 700px; 
text-align: center;
    margin-top: 200px;
    margin-left: auto;
    margin-right: auto; 
   
   
}

</style>

<body>

<div>
    <form action="" method="post">

        <p>
            <label>Introduzca su email:
                <input type="email" name="email">
            </label>
            <br>
            <label>Introduzca su nombre de usuario:
                <input type="text" name="nick">
            </label>
            <br>
            <label>Introduzca su contraseña:
                <input type="password" name="contrasena">
            </label>
            <br>
            <label>Repita la contraseña:
                <input type="password" name="confirmacion_contrasena">
            </label>
        </p>
        <p>Perfil:
            <label for="perfil"></label>
            <select name="perfil" id="perfil">
                <option value="admin">administrador</option>
                <option value="cliente">usuario</option>
            </select>
        </p>
        <p>
            <input type="submit" name="registrar" value="Registro">
            <a href="loginUsu.php"><input type="button" value="Login"></a>
            
        </p>
    </form>

    </div>
</body>

</html>