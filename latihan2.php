<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .button {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="get" action="latihan3.php">
        <label for="inputAngka">Input Angka:</label>
        <input type="number" class="form-control" id="inputAngka" name="inputAngka" required>
        <br>
        <label for="inputOperasi">Pilih Opsi Operasi:</label>
        <select class="form-control" id="inputOperasi" name="inputOperasi" required>
            <option value = "tambah">Tambah</option>
            <option value = "kurang">Kurang</option>
            <option value = "kali">Perkalian</option>
            <option value = "bagi">Pembagian</option>
         </select>
            
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $angka = $_POST["inputAngka"];
                $operasi = $_POST["inputOperasi"];
                $hasil = 0;
            
                if ($operasi == "tambah") {
                    $hasil = $angka + $angka;
                } elseif ($operasi == "kurang") {
                    $hasil = $angka - $angka;
                } elseif ($operasi == "kali") {
                    $hasil = $angka * $angka;
                } elseif ($operasi == "bagi") {
                    if ($angka != 0) {
                        $hasil = $angka / $angka;
                    } else {
                        $hasil = "Tidak bisa membagi dengan 0";
                    }
                }
            }
            ?>
        <br>
        <button type="submit" class="button">Hitung</button>
    </form>
</div>



</body>
</html>