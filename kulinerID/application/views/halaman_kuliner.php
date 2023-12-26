<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kuliner</title>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        body {
            background-image: url('background.jpg');
            background-size: cover;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin: 0;
            padding: 0;
        }

        .jumbotron {
            background-image: url('jumbotron-image.jpg'); /* Ganti 'jumbotron-image.jpg' dengan nama file gambar jumbotron yang diinginkan */
            background-size: cover;
            padding: 10px 0;
            text-align: center;
            color: white;
        }

        .center-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .btn {
            text-decoration: none;
            color: black;
            background-color: #DFD7BF;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: white;
        }

        table {
            weight: 60%;
            border: 1px solid #DFD7BF;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #DFD7BF;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #DFD7BF;
            color: black;
            border:solid 1px black;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Gaya tambahan untuk tautan di dalam tabel */
        table a {
            text-decoration: none;
            color: blue;
            transition: color 0.3s ease;
        }

        table a:hover {
            color: #a52a2a;
        }

        /* Gaya tambahan untuk heading */
        h2 {
            margin-bottom: 20px;
        }

        /* Gaya tambahan untuk tombol kelola */
        table td a {
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 5px;
            text-decoration: none;
            color: red;
            padding: 5px 10px;
            background-color: #DFD7BF;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        table td a:hover {
            background-color: white;
            
        }

        h1,
        p,
        h2,
        h3,
        h4 {
            color: black;
            font-family: comic sans ms;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <h1>Data Kuliner</h1>
        <p>Selamat datang di halaman Data Kuliner</p>
    </div>

    <center>
     
            <h4 align="left">&lt;<?php echo anchor('Auth/Hal_utama', '<strong>KEMBALI</strong>', 'class="btn"'); ?></h4>
            <p align="right">Klik => <?php echo anchor('Auth/index', '<strong>EXIT</strong>', 'class="btn"'); ?> untuk logout.</p>
            <h2>Data Kuliner</h2>
            <p><?php echo anchor('Auth/Hal_tambah', '<strong>[+Tambah Kuliner]</strong>', 'class="btn"'); ?></p>
            <table width='80%' border='1' cellpadding="8" cellspacing="3">
                <tr>
                    <th>No</th>
                    <th>Judul Kuliner</th>
                    <th>Isi Kuliner</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Kelola</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($kuliner_data as $data) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['kuliner_judul']; ?></td>
                        <td><?php echo $data['kuliner_isi']; ?></td>
                        <td><img src="<?php echo site_url('./upload/' . $data['kuliner_gambar']); ?>" width="100%"></td>
                        <td><?php echo $data['kuliner_tanggal']; ?></td>
                        <td><a href="<?php echo site_url('Crud/edit/' . $data['kuliner_id']); ?>"><h4>[Edit]</h4></a>
                            <a href="<?php echo site_url('Crud/hapus/' . $data['kuliner_id']); ?>" onclick="return confirm(' Yakin Akan Hapus Data Ini ?')"><h4>[Hapus]</h4></a></td>
                    </tr>
                <?php } ?>
            </table>
       
    </center>
</body>

</html>