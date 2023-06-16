<?php

?>
<html>
<head><style>
body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        .login-box {
            background-color:  #000000a1;;
            border-radius: 10px;
            padding: 20px;
        }

</style></head>
<body>
<div class="login-box">
<center>
        <h1>CADASTRAR</h1>
    <form id="cadastro" action="cadastro.php" method="POST">
            Nome: <input type="text" name="nome" required> <br>
            Login: <input type="text" name="login" required> <br>
            Senha: <input type="password" name="senha" required ><br><br>
            <input type="submit" id="" value="Cadastrar">
        </form>
    </center>    
</body>
</html>