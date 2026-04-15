<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>
<body>
    Olá mundo
    <br/>
    <?php 

    echo "Olá mundo"; 
    echo '<br/>';
    $nome = 'Diogo Muneratto';
    $email = 'diogo@diogo.com.br';
    //echo $nome;

    /*$a = 20;
    $b = 35;
    echo $a+$b;*/

    function soma($a, $b){
        return $a+$b;
    }

    $s = soma(25,55);
    if($s >= 60){
        echo 'Olá, valor > que ' . 60;
    } else {
        echo 'Olá, valor < que ' . 60;
    }

    $arr = ['morango', 'uva', 'abacaxi', 'abacate'];
    // print_r($arr);
    // var_dump($arr);
    // echo $arr[1];
    $arr1 = array(
        'nome' => 'Diogo',
        'email' => 'diogo@diogo.com',
        0 => 'dfsfsdfs',
        1 => 'dfsdfsds'
    );
    //echo json_encode($arr1);
    //print_r($arr1);


    for($i=0; $i<10; $i++){
        //echo $i.' <br/>';
    }

    $c = 10;
    while($c < 100){
        //echo $c.' <br/>';
        $c++;
    }

    $d = 1;
    do{
        echo $d;
        $d++;
    } while($d < 10);



    
    ?>
</body>
</html>