<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula06_01</title>
</head>
<body>
    <h1>Aula06_01 - 16/09</h1>
    <h2>Operador Aritmético</h2>
    <?php
        $a = 10;
        $b = 2;
        echo "Adição: ".($a + $b)."<br>";
        echo "Subtração: ".($a - $b)."<br>";
        echo "Multiplicação: ".($a * $b)."<br>";
        echo "Divisão: ".($a / $b)."<br>";
        echo "Módulo: ".($a % $b)."<br>";
        echo "Exponenciação: ".($a ** $b)."<br>";
         
    ?>
<h2>Operador de Atribuição</h2>
<?php
        $a = 10;
        $b = 2;
        $a += $b; // a = a + b    a = 10 + 2 = 12
        $b-=5; // b = b - 5      b = 2 - 5 = -3
        echo "a = ".$a; // 12
        echo "<br>b = ".$b; // -3
        $c = 11;
        $d = 6;
        $c%= $d; // c = c % d     c= 11 % 6 = 5
        $d+=$a; // d = d + a     d = 6 + 12 = 18
        echo "<br>c = ".$c; // 5
        echo "<br>d = ".$d; // 18
        ?>
        <h2>Operador de String</h2>
        <?php
        $a = "Bete ";
        echo "$a <br>";
        $b = "Beto ";
        echo "$b <br>";
        echo $a . $b;
        $b .= $a;
        echo "<br>$b";
        ?>
        <h2>Operador de Incremento/Decremento</h2>
        <?php
        $x = 100;
        echo "x = ".$x++;
        echo "<br>x final = ".$x;
        $i=10;
        echo "<br>i = ".$i; // 10
        // $i++; //11
        // $i++;//12
        // ++$i;//13
        // ++$i;//14
        $i+=4;
        echo "<br>i = ".$i;//14
        $i--;//13
        $i--;//12
        --$i;//11
        --$i;//10
        echo "<br>i = ".$i;//10
        ?>
        <h2>Operadores de Comparação</h2>
        <?php
        $a="10";
        $b="10";
        echo "Igualdade = ".($a==$b)."<br>";
        echo "Idêntico = ".($a===$b)."<br>";
        echo "Não igual = ".($a!=$b)."<br>";
        echo "Não Idêntico = ".($a!==$b)."<br>";
        echo "<hr>";
        $a=10;
        $b=10;
        $c=11;
        echo "Menor: ".($a<$b)."<br>";
        echo "Menor ou igual: ".($a<=$b)."<br>";
        echo "Maior: ".($c>$b)."<br>";
        echo "Maior ou igual: ".($c>=$b)."<br>";
        ?>

    </body>
</html>