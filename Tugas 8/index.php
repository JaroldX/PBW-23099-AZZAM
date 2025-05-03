<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran Rute Penerbangan</title>
</head>
<body>
    <div class="container">
        <h2>Pendaftaran Rute Penerbangan</h2>
        <form action="hasil.php" method="post">
            <label for="maskapai">Nama Maskapai:</label>
            <input type="text" id="maskapai" name="maskapai" required>

            <label for="asal">Bandara Asal:</label>
            <select id="asal" name="asal" required>
                <option value="Ngurah Rai (DPS)">Ngurah Rai (DPS)</option>
            </select>

            <label for="tujuan">Bandara Tujuan:</label>
            <select id="tujuan" name="tujuan" required>
                <option value="Ngurah Rai (DPS)">Ngurah Rai (DPS)</option>
            </select>

            <label for="harga">Harga Tiket (Rp):</label>
            <input type="number" id="harga" name="harga" value="500000" required>

            <button type="submit">Proses Pendaftaran</button>
        </form>
    </div>
</body>
</html>
