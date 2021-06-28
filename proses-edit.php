<?php

include("tersambung.php");

if(isset($_POST['simpan'])){

    $ID= $_POST['ID_CST'];
    $TIKET =$_POST['ID_TIKET'];
    $NAMA = $_POST['NAMA_CST'];
    $ALAMAT = $_POST['ALAMAT_CST'];

    $sql = "UPDATE costumer SET ID_TIKET='$TIKET', NAMA_CST='$NAMA', ALAMAT_CST='$ALAMAT' WHERE ID_CST=$ID";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>