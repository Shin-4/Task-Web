<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$rumus = $_POST["rumus"]; 
?>
<?php 
echo "<h2>HASIL HITUNG RUMUS</h2> <br />";
echo "Nilai 1 adalah = $n1<br />";
echo "Nilai 2 adalah = $n2<br />";
if ($rumus == "rumus1"){
    $hasil=0.5*$n1*$n2;
    $rumusnama="Segitiga";
} elseif 
    ($rumus == "rumus2"){
    $hasil=$n1*$n2;
    $rumusnama="Persegi Panjang";
}else{
    $rumusnama = "Tidak ada hasil perhitungan";
}
echo "Rumus yang dipilih adalah = $rumusnama<br />" ;
if($hasil == 0){
    $hasil = "Tidak ada hasil perhitungan";
}
echo "Hasil perhitungan rumus = $hasil";

echo "<br /><a href='task-01.php'>Kembali</a>";
?>