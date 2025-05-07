<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendataan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="title-bar">
            <h1>FORMULIR PENDATAAN KOMPUTER</h1>
        </div>

        <form action="tampil.php" method="post">
            <label>Nama Lengkap</label><br>
            <input type="text" name="nama" class="input" required><br>

            <label>Email</label><br>
            <input type="email" name="email" class="input" required><br>

            <label>Alamat</label><br>
            <textarea name="alamat" class="input" required></textarea><br>

            <h2>Perangkat Komputer</h2>

            <label>Processor</label><br>
            <select name="processor" class="input" required>
                <option value="Ryzen 3">AMD Ryzen 3</option>
                <option value="Ryzen 5">AMD Ryzen 5</option>
                <option value="Ryzen 7">AMD Ryzen 7</option>
                <option value="Ryzen 9">AMD Ryzen 9</option>
                <option value="i3">Intel Core i3</option>
                <option value="i5">Intel Core i5</option>
                <option value="i7">Intel Core i7</option>
                <option value="i9">Intel Core i9</option>
            </select>

            <label>RAM</label><br>
            <select name="ram" class="input" required>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
            </select>

            <label>Storage</label><br>
            <select name="storage" class="input" required>
                <option value="256 GB">256 GB</option>
                <option value="500 GB">500 GB</option>
                <option value="1 TB">1 TB</option>
                <option value="2 TB">2 TB</option>
            </select>

            <label>VGA</label><br>
            <select name="vga" class="input" required>
                <option value="GT">GT</option>
                <option value="GTX">GTX</option>
                <option value="RX">RX</option>
                <option value="RTX">RTX</option>
            </select>

            <label>PSU</label><br>
            <select name="psu" class="input" required>
                <option value="250 watt">250 WATT</option>
                <option value="500 watt">500 WATT</option>
                <option value="900 watt">900 WATT</option>
            </select>

            <br>
            <button type="submit">KIRIM</button>
        </form>
    </div>
</body>
</html>
