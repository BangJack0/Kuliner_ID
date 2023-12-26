<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
    <!-- Tambahkan link ke stylesheet CodeIgniter jika diperlukan -->

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/');?>css/sb-admin-21.css" rel="stylesheet">

</head>
<body>

<div>
    <h2>Selamat Datang!</h2>
    <p>Hai "<?php echo site_url('Welcome/index');?>", selamat datang di toko buku kami. <br>Klik <a href="<?php echo base_url('logout'); ?>">disini</a> untuk logout.</p>
</div>
<table>
    <tr>
        <th>Menu Navigasi</th>
    </tr>
    <tr>
        <td><a href='<?php echo base_url('halamanpelanggan'); ?>'>Halaman Pelanggan</a></td>
    </tr>
    <tr>
        <td><a href='<?php echo base_url('halamanuser'); ?>'>Halaman User</a></td>
    </tr>
</table>
</body>
<style>
        body {
            background: url(bg1.jpg);
            background-size: cover;
            color: #fff;
            background-repeat: no-repeat;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #3498db;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        a {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            text-decoration: underline;
            color: #c0392b;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 70%;
            text-align: center;
        }

        th, td {
            border: 1px solid #3498db;
            padding: 12px;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</html>
