<?php
$txtNombre="";
if ($_POST ){
$txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="dith=device-width, initial-scale=1.0">
<title>Formulario</title>
</head>
<body>
    <strong> Hola </strong>:<?php echo $txtNombre;?>
    <form action="ejercicio31.php" method="post">
    <input type="text" name="txtNombre" id="">
    <input type="submit" value="Enviar informacion">
</form>
</body>
</html>