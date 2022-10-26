<?php

if(!isset($_SESSION)){
    session_start(true);
}
if(!isset($_SESSION['id'])){
    die("Voce não esta logado, portanto nao pode acessar a pagina de confirmação de login! <p><a href='login.php' </p>");
}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>CONFIRMAÇÃO DE LOGIN!</title>
    <head>
<body>
<?php

?>
<body>
</html>
