<!DOCTYPE html>
<html>

<head>
    <title>Tambah Penumpang</title>
</head>

<body>
    <header>
        <h3>Menambahkan Penumpang baru</h3>
    </header>

    <form action="proses-add.php" method="POST">

        <fieldset>
            <p>
                <label for="id">ID Tiket: </label>
                <input type="text" name="ID_TIKET" placeholder="ID Tiket
                " />
            </p>

            <p>
                <label for="nama">Nama Penumpang: </label>
                <input type="text" name="NAMA_CST" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="ALAMAT_CST"></textarea>
            </p>
            <p>
                <input type="submit" value="Tambahkan Penumpang" name="tambah" />
            </p>

        </fieldset>

    </form>

</body>

</html>