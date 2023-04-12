<form method="post" action="">
    Masukan Nilai <input type="text" name="bilangan">
    <input type="submit" name="submit" value="proses">
</form>
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
<?php
/* 
$angka = 17;
$hasil = true;
for ($i = 2; $i < $angka; $i++)
{
    if ($angka % $i == 0)
        $hasil = false;
}
echo 'Angka <b>'.$angka.'</b><br/>';
echo $hasil ? 'Termasuk bilangan prima' : 'Bukan bilangan prima';
*/
?>