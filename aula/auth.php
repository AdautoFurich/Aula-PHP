<?php
    include './config/db.php';
    
    session_start();

    if(isset($_POST['email']) && isset($_POST['senha'])){

        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        if($email === '' || $senha === ''){
            $_SESSION['error'] = 'Email ou senha inválido';
        } else {
            $sql = "SELECT * FROM user WHERE email = '{$email}' AND senha = MD5('{$senha}')";
            $result = mysqli_query($conn, $sql);
            $user = $result ? mysqli_fetch_assoc($result) : null;
            
            unset($user['senha']);
            if(isset($user['id'])){
                $_SESSION['user'] = true;
                $_SESSION['dados'] = $user;
                unset($_SESSION['error']);
                header('Location: /aula/');
            } else {
                $_SESSION['user'] = 'E-mail ou senha invalida';
                header('Location: ../login.php');
                exit;
            }

            //print_r($user);
        }
  
        // if($_POST['senha'] == 123456){
        //     header('Location: dash.php');
        // }
        
    } else {
        header('Location: ./');
        exit;
    }
?>