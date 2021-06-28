<?php

include("tersambung.php");

if( isset($_GET['ID_CST']) ){

    // ambil id dari query string
    $ID = $_GET['ID_CST'];

    // buat query hapus
    $sql = "DELETE FROM costumer WHERE ID_CST=$ID";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>