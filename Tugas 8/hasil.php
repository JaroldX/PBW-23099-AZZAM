<?php
    $maskapai = $_POST['maskapai'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $harga = $_POST['harga'];
    $pajak = $harga * 0.32; // Contoh pajak 32%
    $total = $harga + $pajak;
    $tanggal = date('d-m-Y H:i:s');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hasil Pendaftaran Penerbangan</title>
</head>
<body>
    <div class="container">
        <h2>Hasil Pendaftaran Rute Penerbangan</h2>
        <h3>Detail Penerbangan</h3>
        <table>
            <tr>
                <th>Asal Penerbangan</th>
                <td><?= $asal ?></td>
            </tr>
            <tr>
                <th>Tujuan Penerbangan</th>
                <td><?= $tujuan ?></td>
            </tr>
            <tr>
                <th>Harga Tiket</th>
                <td>Rp <?= number_format($harga, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Pajak</th>
                <td>Rp <?= number_format($pajak, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Total Harga Tiket</th>
                <td>Rp <?= number_format($total, 0, ',', '.') ?></td>
            </tr>
        </table>

        <h3>Detail Pajak</h3>
        <table>
            <tr>
                <th>Bandara</th>
                <th>Pajak</th>
            </tr>
            <tr>
                <td><?= $asal ?></td>
                <td>Rp <?= number_format($pajak / 2, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td><?= $tujuan ?></td>
                <td>Rp <?= number_format($pajak / 2, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Total Pajak</th>
                <td>Rp <?= number_format($pajak, 0, ',', '.') ?></td>
            </tr>
        </table>
        
        <p>Tanggal pendaftaran: <?= $tanggal ?></p>
        <a href="index.php">Kembali ke Form Pendaftaran</a>
        <a href="javascript:location.reload()">Bersihkan Data</a>
    </div>
</body>
</html>