<?php 
include "proseskalku.php";

$kalkulator = new Kalkulator();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><b>Oprasi Aritmatika</b></p>
    <form action="#" method="post">
        <input type="number" name="x">
        <select name="oprasi">
            <option value="tambah"> + </option>
            <option value="kurang"> - </option>
            <option value="kali"> x </option>
            <option value="bagi"> / </option>
        </select>

        <input type="number" name="y">
        <select name="oprasi">
            <option value="tambah"> + </option>
            <option value="kurang"> - </option>
            <option value="kali"> x </option>
            <option value="bagi"> / </option>
        </select>

        <input type="number" name="z">
        <label> = </label>
        <input type="submit" value="hitung">
    </form>
</body>
</html>

<?php
if ($_POST) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    if ($_POST['oprasi'] == "tambah") {
        $hasil=$kalkulator->setTambah($x,$y,$z);
        echo "Hasil :" .$x." + ".$y." + ".$z." = ".$kalkulator->setTambah($x, $y, $z). "<br / br/>";
    } elseif ($_POST['oprasi'] == "kurang") {
        $hasil=$kalkulator->setKurang($x,$y,$z);
        echo "Hasil :" .$x." - ".$y." - ".$z." = ".$kalkulator->setKurang($x, $y, $z). "<br / br/>";
    } elseif ($_POST['oprasi'] == "kali") {
        $hasil=$kalkulator->setKali($x,$y,$z);
        echo "Hasil :" .$x." x ".$y." x ".$z." = ".$kalkulator->setKali($x, $y, $z). "<br / br/>";
    } elseif ($_POST['oprasi'] == "bagi") {
        $hasil=$kalkulator->setBagi($x,$y,$z);
        echo "Hasil :" .$x." / ".$y." / ".$z." = ".$kalkulator->setBagi($x, $y, $z). "<br / br/>";
    }
}


    if(($hasil>=91) && ($hasil<=100)){
        echo "Angka di atas merupakan angka di atas A";
    }elseif(($hasil>=81) && ($hasil<=90)){
        echo "Angka di atas merupakan angka di atas B";
    }elseif(($hasil>=71) && ($hasil<=80)){
        echo "Angka di atas merupakan angka di atas C";
    }elseif(($hasil>=61) && ($hasil<=70)){
        echo "Angka di atas merupakan angka di atas D";
    }else{
        echo "nilaidiatas melebihi atau mengurangi grade yang tersedia";
    }


?>