<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Invoice - Spasi Komputer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="title-bar">
            <h1>TAMPILAN</h1>
        </div>


        <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $processor = $_POST['processor'];
        $ram = $_POST['ram'];
        $storage = $_POST['storage']  ;
        $vga = $_POST['vga'];
        $psu = $_POST['psu'];
        ?>

        <label>Nama</label>
        <div class="input"><?= $nama ?></div><br>

        <label>Email</label>
        <div class="input"><?= $email ?></div><br>

        <label>Alamat</label>
        <div class="input"><?= $alamat ?></div><br>

        <h2>Perangkat Komputer</h2>
        <label>Processor</label>
        <div class="input"><?= $processor ?></div><br>

        <label>RAM</label>
        <div class="input"><?= $ram ?></div><br>

        <label>Storage</label>
        <div class="input"><?= $storage ?></div><br>

        <label>VGA</label>
        <div class="input"><?= $vga ?></div><br>

        <label>PSU</label>
        <div class="input"><?= $psu ?></div><br>
    </div>
</body>
</html>
