<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
div{
    
    display: block;
    width: 700px; 

    margin-top: 200px;
    margin-left: auto;
    margin-right: auto; 
   text-align: center;
}


</style>
<body>
    
<div>
<form action="pagina_datos_perfiles.php" method="get">

<p>
    <label>Usuario :
        <input type="text" name="usu">
    </label>
    <br>
    <label>Contraseña:
        <input type="password" name="con">
    </label>
</p>
<p>
<input type="submit" name="enviando" value="Login">
</p>

</form>
</div>

</body>
</html>