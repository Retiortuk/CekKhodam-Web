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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    function khodam_program($nama, $umur) {
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
        $result = "<p>Halo $nama, Khodam Kamu $hasil_khodam</p>";
        if (array_key_exists($hasil_khodam, $kepribadian_khodam)) {
            $result .= "<p>Kepribadian $hasil_khodam Artinya " . $kepribadian_khodam[$hasil_khodam] . "</p>";
        }
        return $result;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        if (preg_match('/^[a-zA-Z\s-]+$/', $nama) && ctype_digit($umur)) {
            $umur = (int) $umur;
            echo khodam_program($nama, $umur);
        } else {
            echo "<p>Masukkan Nama dan Umur yang valid!</p>";
        }
    }
    ?>

    <div class="container_hasil">

        <div class="hasil">

        </div>
    </div>

    <form action="index.html" method="get">
        <input type="submit" value="Cek Lagi">
    </form>

</body>
</html>

 