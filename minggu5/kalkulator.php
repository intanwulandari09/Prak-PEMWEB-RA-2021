<?php
function kalkulator(){

    function penjumlahan($x, $y){
        $hasil = $x + $y;
        echo "<br/>Penjumlahan<br/>";
        echo "Operator : + <br/>";
        echo "Hasil : $hasil <br/>";
    }

    function pengurangan($x, $y){
        $hasil = $x - $y;
        echo "<br/>Pengurangan<br/>";
        echo "Operator : - <br/>";
        echo "Hasil : $hasil <br/>";
    }

    function perkalian($x, $y){
        $hasil = $x * $y;
        echo "<br/>Perkalian<br/>";
        echo "Operator : * <br/>";
        echo "Hasil : $hasil <br/>";
    }

    function pembagian($x, $y){
        $hasil = $x / $y;
        echo "<br/>Pembagian<br/>";
        echo "Operator : / <br/>";
        echo "Hasil : $hasil <br/>";
    }

    function modulus($x, $y){
        $hasil = $x % $y;
        echo "<br/>Modulus<br/>";
        echo "Operator : % <br/>";
        echo "Hasil : $hasil <br/>";
    }

    $i=$_POST['bil1'];
    $j=$_POST['bil2'];
    echo "Bilangan 1 = $i <br/>";
    echo "Bilangan 2 = $j <br/>";
    echo "<br/> Berikut merupakan hasil dari setiap operasi <br/>";
    penjumlahan($i,$j);
    pengurangan($i,$j);
    perkalian($i,$j);
    pembagian($i,$j);
    modulus($i,$j);
}
    if (isset($_POST['hasil'])) {
       kalkulator();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<form method="POST">
    <label>
    bilangan1 = <input type="number" name="bil1">    
    </label>

     <label>
        bilangan2 = <input type="number" name="bil2">    
    </label>

    <button type="submit" name="hasil"> hasil </button>

</form>


</body>
</html>