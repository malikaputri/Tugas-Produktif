<?php
class makanan{
  
    var $pemesan;
    var $jenis;
    var $jumlah;
  
   function tampil_matang() {
     return "Makanan Sudah Siap";
    }
   function tampil_mentah() {
     return "Makanan Belum Siap";
   }
}
  
$makanan1 = new Makanan();
  
$makanan1->pemesan="Malika Putri";
$makanan1->jenis="menu ayam";
$makanan1->jumlah="5 menu";
  
echo $makanan1->pemesan;
echo "<br />";
echo $makanan1->jenis;
echo "<br />";
echo $makanan1->jumlah;
echo "<br />";
  
echo $makanan1->tampil_matang();
echo "<br />";
echo $makanan1->tampil_mentah();
?>