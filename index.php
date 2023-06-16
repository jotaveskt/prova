<?php
session_start();
?>
<html>
<body>
<center>
Olá, <?php 
if (isset($_SESSION['nome'])==null){
 ?>   visitante
 <a href="login.php">login</a>
 <?php }else {
    echo $_SESSION['nome'];?>
    <a href="cadastrar.php">CADASTRAR</a><br>
    <a href="logout.php">SAIR</a>
    <?php }
    ?>
</center>
</body>
</html>
<html>
<head><style>
body{
background-image:linear-gradient(45deg, cyan, yellow);
}
</style></head>
<body>
</body>
</html>
