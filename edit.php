<?php

include("tersambung.php");

// kalau tidak ada id di query string
if( !isset($_GET['ID_CST']) ){
    header('Location: index.php');
}

//ambil id dari query string
$ID = $_GET['ID_CST'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM costumer WHERE ID_CST=$ID";
$query = mysqli_query($db, $sql);
$cst = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Penumpang</title>
</head>

<body>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="ID_CST" value="<?php echo $cst['ID_CST'] ?>" />

            <p>
                <label for="ID_TIKET">ID Tiket: </label>
                <input type="text" name="ID_TIKET" placeholder="ID_Tiket"
                    value="<?php echo $cst['ID_TIKET'] ?>" />
            </p>
            <p>
                <label for="NAMA_CST">Nama Penumpang: </label>
                <input type="text" name="NAMA_CST" placeholder="Nama Penumpang" value="<?php echo $cst['NAMA_CST'] ?>" />
            </p>
            <p>
                <label for="ALAMAT_CST">Alamat: </label>
                <textarea name="ALAMAT_CST"><?php echo $cst['ALAMAT_CST'] ?></textarea>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>