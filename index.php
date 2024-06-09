<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootsrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffe0;
        }
        .container {
            background-color: #f0e68c;
            padding:20px;
            border-radius: 10px;
            box-shadow: 0 0 10px egba(0, 0, 0, 0,1);
        }
        .bta-primary{
            background-color: #ffd700;
            border-color: #ffd700;
        }
        .btn-primary:hover {
            background-color: #ffd700;
            border-color: #ffd700;
        }
        </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Rental Motor</h1>
        <form action="" method="POST">  
            <div class="form-group">
                <div class="form-group">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="">Lama Waktu Rental</label>
                <input type="number" class="form-control" id="waktu" name="waktu" min="0" stop="1" required>
            </div>
                <label for="tipe">Jenis Motor</label>
                <select class="form-control" id="tipe" name="tipe">
                    <option value="Scooter">Scooter</option>
                    <option value="Vesmet">Vesmet</option>
                    <option value="Vario">Vario</option>
                    <option value="Aerox">Aerox</option>
             </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sewa</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdevr.net/npm/@popperjs/core@2.5.2/dist/umd/popprt.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>

<?php
require "logic.php";
$proses = new Motor();
$proses->setHarga(7000,15000,10000,20000);

if (isset($_POST['submit'])){
    $proses->member = $_POST['nama'];
    $proses->waktu = $_POST['waktu'];
    $proses->tipe = $_POST['tipe'];
    $proses->pembayaran();
}
?>