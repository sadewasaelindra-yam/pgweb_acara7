
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7 - Dasar-Dasar PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 600px;
            max-width: 100%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #dddddd;
            text-align: center;
        }

        td:nth-child(2),
        td:nth-child(3) {
            text-align: right;
        }

        .total {
            font-weight: bold;
            background-color: #eeeeee;
        }
    </style>
</head>
<body>

    <h2>Tabel Penduduk Kecamatan</h2>

    <?php
    // Membuat array data penduduk
    $kecamatan = [
        ["Moyudan", 27.62, 31497],
        ["Minggir", 27.27, 29886],
        ["Seyegan", 26.63, 47129],
        ["Godean", 26.84, 72028],
        ["Gamping", 29.25, 108675]
    ];

    // Membuat variabel untuk menghitung jumlah penduduk
    $total_penduduk = 0;
    $total_luas = 0;
    ?>

    <table>
        <tr>
            <th>kecamatan</th>
            <th>luas</th>
            <th>jumlah_penduduk</th>
        </tr>

        <?php
        // Perulangan untuk menampilkan data
        foreach ($kecamatan as $data) {

            // Menghitung total luas dan penduduk
            $total_luas += $data[1];
            $total_penduduk += $data[2];

            echo "<tr>";
            echo "<td>" . $data[0] . "</td>";
            echo "<td>" . number_format($data[1], 2, '.', '') . "</td>";
            echo "<td>" . $data[2] . "</td>";
            echo "</tr>";
        }

        // Percabangan untuk menampilkan keterangan
        if ($total_penduduk > 200000) {
            $keterangan = "Jumlah penduduk lebih dari 200.000 jiwa";
        } else {
            $keterangan = "Jumlah penduduk tidak lebih dari 200.000 jiwa";
        }
        ?>

        <tr class="total">
            <td>Total</td>
            <td><?php echo number_format($total_luas, 2, '.', ''); ?></td>
            <td><?php echo $total_penduduk; ?></td>
        </tr>
    </table>

    <p style="text-align: center;">
        <?php echo $keterangan; ?>
    </p>

</body>
</html>
