<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "2106062_AsyifaFauziah";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $produk = $_POST['produk'];
    $email = $_POST['email'];
    $no_handphone = $_POST['no_handphone'];
    $produk = implode(", ", $_POST['produk']);
    $jumlah = $_POST['jumlah'];
    $catatan = $_POST['catatan'];

    $sql = "INSERT INTO pesanan (nama_pelanggan, alamat_pelanggan, email_pelanggan, no_handphone, produk_dipesan, jumlah_pesanan, catatan) 
            VALUES ('$nama', '$alamat', '$email', '$no_handphone', '$produk', $jumlah, '$catatan')";

    if ($conn->query($sql) === TRUE) {
        header("Location: berhasil.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
