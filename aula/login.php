<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['error'])){
            $msg = $_SESSION['error'];
            echo "<div class='alert alert-danger'>${msg}</div>";
        }
    ?>

    <form action="./auth.php" method="post">
        <img src="./img/logo.png" alt="logo">
        <input type="email" name="email" placeholder="Digite seu e-mail" required>
        <input type="password" name="senha" placeholder="Digite sua senha" minlength="6" maxlength="12" required>
        <input class="btn" type="submit" value="Entrar">
        <div style="display: block; text-align: right;">
            <a href="http://">Criar conta</a>
        </div>
    </form>
</body>
</html>