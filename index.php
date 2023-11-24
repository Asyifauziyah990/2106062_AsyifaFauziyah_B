<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasi Goreng Asyifa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="proses_input.php" method="post">
        <h1>Form Pemesanan</h1>

        <fieldset>
            <legend><span class="number">1</span>Identitas</legend>
            <label for="nama">Nama Anda:</label>
            <input type="text" name="nama" required placeholder="Masukkan Nama Anda"><br>

            <label for="alamat">Alamat Anda:</label>
            <input type="text" name="alamat" required placeholder="Masukkan Alamat Anda"><br>

            <label for="email">Email Anda:</label>
            <input type="email" name="email" required placeholder="Masukkan Email Anda">

            <label for="no_handphone">Nomor Handphone:</label>
            <input type="text" name="no_handphone" required placeholder="Masukkan No Handphone Anda"><br>
        </fieldset>

        <fieldset>
            <legend><span class="number">2</span>Pesanan</legend>
            <label>Produk yang Dipesan:</label>
            <input type="checkbox" name="produk[]" value="Nasi Goreng"> Nasi Goreng<br>
            <input type="checkbox" name="produk[]" value="Mie Goreng"> Mie Goreng<br>
            <input type="checkbox" name="produk[]" value="Mie Rebus"> Mie Rebus<br>
            <input type="checkbox" name="produk[]" value="Capcay Goreng"> Capcay Goreng<br>
            <input type="checkbox" name="produk[]" value="Capcay Rebus"> Capcay Rebus<br>
            <input type="checkbox" name="produk[]" value="Kwetiau Goreng"> Kwetiau Goreng<br>
            <input type="checkbox" name="produk[]" value="Kwetiau Rebus"> Kwetiau Rebus<br>

            <br>
            <label for="jumlah">Jumlah Pesanan:</label>
            <input type="number" name="jumlah" required placeholder="Masukkan Jumlah Pesanan Anda"><br>

            <label for="catatan">Catatan:</label>
            <textarea name="catatan" rows="4" placeholder="Masukkan Catatan Apabila Perlu"></textarea>

        </fieldset> 
        <button type="submit">Pesan Sekarang</button>
    </form>
</body>
</html>
