<!-- <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Hasil Khodam</title>
</head>


<body>

    <?php 
        /* function kodam_program($nama, $umur){
        // DATABASE
        $data_kodam = ['Kak Gem', 'Macan Hitam', 'Macan Putih', 'Aing Maung', 'Singa', 'Gajah', 'Tukang Parkir
        ', 'Burung Dara', 'Pak Vinsen', 'Tidak Memiliki Khodam', 'Daffa Ariq', 'Genderuwo', 'Sosok Hitam Tinggi Kiris'] ;

        $kepribadian_kodam = [
            'Kak Gem'=>'Ikan Teri Ikan Tongkol, PAHAM!!',
            'Macan Hitam'=>'Seseorang Yang Sangar',
            'Macan Putih'=>'Cenderung Memiliki Hati Dan Sifat Yang Bersih Dompet Anda Pun Bersih',
            'Aing Maung'=>'Kamu Memiliki Sifat Yang Mudah Marah Emosian',
            'Singa'=>'Cenderung Memiliki sifat yang Pemberani dan Rajin',
            'Gajah'=>'Memiliki Hati Yang Besar',
            'Tukang Parkir'=>'Memiliki Sifat Suka Mengatur Dan Suka Muncul Tiba-Tiba',
            'Burung Dara'=>'Seseorang Yang Baik Hati dan Setia',
            'Pak Vinsen'=>'Suka Minta Nasi 2 Sama ***** Satu',
            'Tidak Memiliki Khodam'=>'Orang Yang Bersih Dan Suci Agamis',
            'Daffa Ariq'=>'Bahaya Sebentar Lagi Kamu Berubah Menjadi Anomali',
            'Genderuwo'=>'Sosok Tunggu Kiris',
            'Sosok Hitam Tinggi Kiris'=>'Seseorang Yang Misterius',
        ];

        // OUTPUT
        $hasil_khodam = $data_kodam[array_rand($data_kodam)];
        $result = "<p>Halo <strong>$nama</strong> Ternyata Sosok Yang menetap Di Diri Anda <strong>$hasil_khodam</strong></p>";
        if(array_key_exists($hasil_khodam, $kepribadian_kodam)){
            $result.= "<p>Kepribadian $hasil_khodam Artinya ". $kepribadian_kodam[$data_kodam] . "</p>";
        }
        return $result;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        if (preg_match('/^[a-zA-Z\s-]+$/', $nama) && ctype_digit($umur)) {
            $umur = (int) $umur;
            echo kodam_program($nama, $umur);
        } else {
            echo "<p>Masukkan Nama dan Umur yang valid!</p>";
        }
    } */
    ?>


    
</body>
</html>





 -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /* function khodam_program($nama, $umur) {
        // DATABASE
        $data_khodam = ['Kak Gem', 'Macan Hitam', 'Macan Putih', 'Aing Maung', 'Singa', 'Gajah', 'Tukang Parkir
        ', 'Burung Dara', 'Pak Vinsen', 'Tidak Memiliki Khodam', 'Daffa Ariq', 'Genderuwo', 'Sosok Hitam Tinggi Kiris'];

        $kepribadian_khodam = [
            'Kak Gem'=>'Ikan Teri Ikan Tongkol, PAHAM!!',
            'Macan Hitam'=>'Seseorang Yang Sangar',
            'Macan Putih'=>'Cenderung Memiliki Hati Dan Sifat Yang Bersih Dompet Anda Pun Bersih',
            'Aing Maung'=>'Kamu Memiliki Sifat Yang Mudah Marah Emosian',
            'Singa'=>'Cenderung Memiliki sifat yang Pemberani dan Rajin',
            'Gajah'=>'Memiliki Hati Yang Besar',
            'Tukang Parkir'=>'Memiliki Sifat Suka Mengatur Dan Suka Muncul Tiba-Tiba',
            'Burung Dara'=>'Seseorang Yang Baik Hati dan Setia',
            'Pak Vinsen'=>'Suka Minta Nasi 2 Sama ***** Satu',
            'Tidak Memiliki Khodam'=>'Orang Yang Bersih Dan Suci Agamis',
            'Daffa Ariq'=>'Bahaya Sebentar Lagi Kamu Berubah Menjadi Anomali',
            'Genderuwo'=>'Sosok Tunggu Kiris',
            'Sosok Hitam Tinggi Kiris'=>'Seseorang Yang Misterius',
        ];

        // OUTPUT
        $hasil_khodam = $data_khodam[array_rand($data_khodam)];
        $result = "Halo $nama, Khodam Kamu $hasil_khodam";
        if (array_key_exists($hasil_khodam, $kepribadian_khodam)) {
            $result .= "Kepribadian $hasil_khodam Artinya $kepribadian_khodam[$hasil_khodam]" ;
        }
        return $result;
    }

    $result = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        if (preg_match('/^[a-zA-Z\s-]+$/', $nama) && ctype_digit($umur)) {
            $umur = (int) $umur;
            echo khodam_program($nama, $umur);
        } else {
            echo "<p>Masukkan Nama dan Umur yang valid!</p>";
        }
    } */
    ?>

    <div class="container_hasil">
        <h1>Hasil Khodam</h1>
        <div class="hasil">
            <p> Test</p>
        </div>
    </div>

    <form action="index.html" method="get">
        <input type="submit" value="Cek Lagi">
    </form>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Khodam</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(0, 4, 20);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container_hasil {
            /* background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%; */
            background-color: rgb(27, 36, 53);
            height: 352px;
            width: 470px;
            padding: 10px;
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
       }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background: #5cb85c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background: #4cae4c;
        }

        .hasil{
            margin-top: 134px;
        }
    </style>
</head>

<body>

    <div class="container_hasil">
        <?php
        function khodam_program($nama, $umur) {
            // DATABASE
            $data_khodam = ['Kak Gem', 'Macan Hitam', 'Macan Putih', 'Aing Maung', 'Singa', 'Gajah', 'Tukang Parkir', 'Burung Dara', 'Pak Vinsen', 'Tidak Memiliki Khodam', 'Daffa Ariq', 'Genderuwo', 'Sosok Hitam Tinggi Kiris'];

            $kepribadian_khodam = [
                'Kak Gem' => 'Ikan Teri Ikan Tongkol, PAHAM!!',
                'Macan Hitam' => 'Seseorang Yang Sangar',
                'Macan Putih' => 'Cenderung Memiliki Hati Dan Sifat Yang Bersih Dompet Anda Pun Bersih',
                'Aing Maung' => 'Kamu Memiliki Sifat Yang Mudah Marah Emosian',
                'Singa' => 'Cenderung Memiliki sifat yang Pemberani dan Rajin',
                'Gajah' => 'Memiliki Hati Yang Besar',
                'Tukang Parkir' => 'Memiliki Sifat Suka Mengatur Dan Suka Muncul Tiba-Tiba',
                'Burung Dara' => 'Seseorang Yang Baik Hati dan Setia',
                'Pak Vinsen' => 'Suka Minta Nasi 2 Sama ***** Satu',
                'Tidak Memiliki Khodam' => 'Orang Yang Bersih Dan Suci Agamis',
                'Daffa Ariq' => 'Bahaya Sebentar Lagi Kamu Berubah Menjadi Anomali',
                'Genderuwo' => 'Sosok Tunggu Kiris',
                'Sosok Hitam Tinggi Kiris' => 'Seseorang Yang Misterius',
            ];

            // OUTPUT
            $hasil_khodam = $data_khodam[array_rand($data_khodam)];
            $result = "<p>Halo <strong>$nama</strong>, Khodam Kamu adalah <strong>$hasil_khodam</strong></p>";
            if (array_key_exists($hasil_khodam, $kepribadian_khodam)) {
                $result .= "<p>Kepribadian $hasil_khodam Artinya " . $kepribadian_khodam[$hasil_khodam] . "</p>";
            }
            return $result;
        }

        $result = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            if (preg_match('/^[a-zA-Z\s-]+$/', $nama) && ctype_digit($umur)) {
                $umur = (int)$umur;
                $result = khodam_program($nama, $umur);
            } else {
                $result = "<p>Masukkan Nama dan Umur yang valid!</p>";
            }
        }
        ?>

        <h1>Hasil Khodam</h1>
        <div class="hasil">
            <?= $result ?>
        </div>
        <a href="index.html" class="btn">Cek Lagi</a>
        <div class="by">
            <i>By GitHub: Retiortuk 2024</i>
        </div>
    </div>

</body>

</html>
