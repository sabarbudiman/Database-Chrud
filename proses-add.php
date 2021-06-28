<?php

include("tersambung.php");

if(isset($_POST['tambah'])){

    $ID = $_POST['ID_CST'];
    $ID_TIKET = $_POST['ID_TIKET'];
    $NAMA = $_POST['NAMA_CST'];
    $ALAMAT = $_POST['ALAMAT_CST'];

    // buat query
    $sql = "INSERT INTO costumer (ID_TIKET, NAMA_CST, ALAMAT_CST) VALUE ('$ID_TIKET', '$NAMA', '$ALAMAT')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>