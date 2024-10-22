<?php
$buah = array("apel","pisang","durian","semangka","pepaya","manggis"
);
foreach($buah as $buahan){
    echo $buahan,'<br>';
}
echo "<hr />";
$siswa = array("nama" => "Joni","umur" => "25","kota" => "stabat","jurusan" => "sistem informasi");
echo 'nama siswa :'.$siswa['nama'].'<br />';
echo 'umur siswa :'.$siswa['umur'].'<br />';
echo 'kota siswa :'.$siswa['kota'].'<br />';
echo 'jurusan siswa :'.$siswa['jurusan'].'<br />';
?>