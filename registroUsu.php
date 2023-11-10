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
    <form action="pagina_datos_perfiles.php">

        <p>
            <label>Introduzca su email:
                <input type="email" name="email">
            </label>
            <br>
            <label>Introduzca su nombre de usuario:
                <input type="text" name="usu">
            </label>
            <br>
            <label>Introduzca su contraseña:
                <input type="password" name="con">
            </label>
            <br>
            <label>Repita la contraseña:
                <input type="password" name="con2">
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
            <input type="submit" name="enviando" value="Registro">
            
        </p>
    </form>

    </div>
</body>

</html>