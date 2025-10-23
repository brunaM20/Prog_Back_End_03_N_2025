<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07_01</title>
</head>
<body>
    <h1>Aula 07</h1>
    <h2></h2>
    <?php
    $a=50;
    $b=120;
    $c= ($a<=$b);  //a<=b    50<=120
    $d= !($a<=$b); // !a<=b     50<=120
    var_dump($c);//t
    echo "<br>";
    var_dump($d);//f
    $e=(($a<=$b) &&  ($a>=200));
    echo "<br>";
    echo "<br>";
    var_dump($e);//f
    $f=(($a<=$b) ||  ($a>=200));
    echo "<br>";
    echo "<br>";
    var_dump($f);//t
    $g=(($a<=$b) xor  ($a>=200));
    $h=(!($a<=$b) xor  ($a<=200));
    echo "<br>";
    echo "<br>";
    var_dump($g);//t
    echo "<br>";
    var_dump($h);//f
    ?>
    <h2>Operador Ternário </h2>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=($a<=$b) ? "Verdadeiro" : "Falso";
    $e=($a>=$c) ? "Verdadeiro" : "Falso";
    echo "d = $d<br>e = $e";
    ?>
</body>
</html>