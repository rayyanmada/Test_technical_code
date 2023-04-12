<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Masukkan Angka <input type="text" name="bilangan">
        <input type="submit" name="submit" value="proses">
        <br> <br>         
            <button id="Generate_Segitiga.php" value="val_1" name="" >Generate Segitiga</button>
            <button id="Generate_Bil_Ganjil.php" value="val_2" name="" >Generate Bilangan Ganjil</button>
            <button id="Generate_Bil_Prima.php" value="val_3" name="" >Generate Bilangan Prima</button>
        </form>
        <br>
        <?php
            for($r=1; $r<=6; $r++){
                for($s=1; $s<$r; $s++){
                    echo "$s";
                }
                    echo "<br>";
            }
        ?>
        <br> <br>
        <?php 
        if (isset($_POST['submit'])){
            $bilangan = $_POST['bilangan'];
            if ($bilangan % 2 == 0 ){
                echo $bilangan . " adalah bilangan genap ";
            } else {
                echo $bilangan . " adalah bilangan ganjil ";
            }
        }
        ?>
        <br><br>
        <?php    
        for($i=1;$i<=50;$i++){ 
            $a = 0; 
            for($j=1;$j<=$i;$j++){ 
                if($i % $j == 0){ 
                    $a++; 
                }
            }
            if($a == 2){ 
                echo $i.' '; 
            }
        }
        ?>
</body>
</html>
