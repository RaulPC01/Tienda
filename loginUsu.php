<?php require 'baseD.php' ?>
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
<form action="" method="post">

<p>
    <label>E-mail :
        <input type="email" name="e-mail">
    </label>
    <br>
    <label>Contraseña:
        <input type="password" name="con">
    </label>
</p>
<p>
<input type="submit" name="enviando" value="Login">
<a href="registroUsu.php"><input type="button" value="Registro"></a>
</p>

</form>
</div>

</body>
</html>