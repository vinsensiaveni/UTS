<?php
if (isset($_POST['Tambah'])){
    $jumlah = $_POST['jumlah'];
    $Tgl = $_POST['Tgl'];
    $penghutang = $_POST['penghutang'];
    $alasan = $_POST['alasan'];
    echo "Jumlah  :<b>$jumlah</b><br>";
    echo "Tanggal  :<b>$Tgl</b><br>";
    echo "Penghutang :<b>$penghutang</b><br>";
    echo "Alasan  :<b>$alasan</b><br>";
}
?>