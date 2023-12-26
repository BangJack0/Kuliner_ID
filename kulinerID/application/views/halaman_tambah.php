<!DOCTYPE html>
<html>

<head>
    <title>Halaman Input Kuliner</title>
    <style>
        body {
            background-color: #DFD7BF;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: black;
        }

        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        td input[type="text"],
        td textarea,
        td input[type="file"],
        td input[type="date"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin: 5px 0;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #DFD7BF;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #a52a2a;
        }

        center {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <center>
        <h2>Tambah Kuliner</h2>
    </center>
    <form action="<?php echo site_url('Crud/upload_data');?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td width="150">Judul Kuliner</td>
                <td>:</td>
                <td><input type="text" name="kuliner_judul" required></td>
            </tr>
            <tr>
                <td>Isi Kuliner</td>
                <td>:</td>
                <td><textarea name="kuliner_isi" rows="6" required></textarea></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="kuliner_gambar" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="kuliner_tanggal" required></td>
            </tr>
            <tr>
                <td colspan="3">
                    <center>
                        <input type="submit" name="simpan" value="Simpan">
                        <input type="reset" value="Reset">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>