
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Hasil Khodam</title>


   <!------------------- STYLE CSS LIBRARY ---------------------->
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
            background-color: rgb(27, 36, 53);
            width: 540px;
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
            max-width: 90vw; 
        }
       
        h1 {
            color: rgb(255, 217, 0);
            font-family: 'Poppins', sans-serif;
        }

        p {
            color: white;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: rgb(255, 217, 0);
            color: rgb(27, 36, 53);
            text-decoration: none;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .btn:hover {
            background-color: white;
		    color: rgb(43, 43, 43);
            transition: all 0.1s;
        }

        .hasil{
            margin-top: 85px;
            font-family: 'Poppins', sans-serif;
            color: #4cae4c;
        }

        .by {
            color: rgb(221, 221, 221);
            font-size: 11px;
            padding: 13px;
            font-family: 'Poppins', sans-serif;
        }

        .a{
            color: rgb(180, 180, 180);
		    font-size: 11px;
            text-decoration: none;
        }

        .a:hover{
            color: inherit;
            text-decoration: underline;
            text-decoration: none
        }

        @media only screen and (max-width: 414px) {
            .container_hasil {
                height: 480px;
            }
        }

        @media only screen and (min-width: 415px) {
            .container_hasil {
                height: 380px;
            }
        }
    </style>
    <!------------------- STYLE CSS LIBRARY END ---------------------->
</head>


<!------------------------------------------------ MAIN PROGRAM ---------------------------------------------------------------------------------------------------------------------------------------------->
<body>

    <!------------------------------- START PHP ----------------------------------->
    <div class="container_hasil">
        <?php
        function khodam_program($nama, $umur) {
            
            // ------------------------ DATABASE KHODAM NYEEE ----------------------------------//
            $data_khodam = ['Kak Gem', 'Macan Hitam', 'Macan Putih', 'Aing Maung', 'Singa', 'Gajah', 'Tukang Parkir', 
		    'Burung Dara', 'Pak Vinsen', 'Tidak Memiliki Khodam', 'Sapi', 'Genderuwo', 'Sosok Hitam Tinggi Kiris',
		    'Swiftie', 'Kambing', 'Panda', 'Marmut', 'MrBean', 'Cappybara', 'Naga', 'Ratu Kidul', 'Ular Kobra', 'Burung Garuda', 'Kera Sakti'];

            $kepribadian_khodam = [
                'Kak Gem' => 'Anda Seseorang Yang Memotivasi Banyak Orang, PAHAM!!',
                'Macan Hitam' => 'Lo Adalah Seseorang Yang Sangar',
                'Macan Putih' => 'Anda Cenderung Memiliki Hati Dan Sifat Yang Bersih Dompet Anda Pun Bersih',
                'Aing Maung' => 'Kamu Memiliki Sifat Yang Mudah Marah Emosian',
                'Singa' => 'Kamu Cenderung Memiliki sifat yang Pemberani dan Rajin',
                'Gajah' => 'Kamu Memiliki Hati Yang Besar Dan Suka Menolong',
                'Tukang Parkir' => 'Kamu Memiliki Sifat Suka Mengatur Dan Datang Kalo Butuh',
                'Burung Dara' => 'Kamu orang Yang Baik Hati dan Setia',
                'Pak Vinsen' => 'Kamu Makanan Nya Banyak Seperti Pak Vinsen',
                'Tidak Memiliki Khodam' => 'Kamu Orang Yang Bersih Dan Suci Agamis',
                'Sapi' => 'Kamu Penyayang Dan Royal Disayangi Oleh Orang India',
                'Genderuwo' => 'Kamu Sangar Dan Suka Menakuti Orang',
                'Sosok Hitam Tinggi Kiris' => 'Kamu Seseorang Yang Misterius Dan Enggan Kreamaian',
                'Swiftie' => 'Anda Baik Hati Menghargai Usaha-Usaha Kecil Namun Mudah Baper',
                'Kambing' => 'Anda Memiliki Banyak Kepribadian Dan Ber-Kharisma',
                'Panda' => 'Anda Berperilaku Tidak Disangka Tidak Disiplin Dan Selalu Mengeluh',
                'Marmut' => 'Kamu Pendiam Baik Hati Dan Teratur Hidupnya Mudah Mengatur Duit',
                'MrBean' => 'Anda Susah Bergaul, Susah Fokus, Dan Berisik',
                'Cappybara' => 'Kamu Orang Nya Santai Dan Mudah Bergaul Masbro',
                'Naga'=>'Kamu Orang Nya Teliti Berwibawa Dan Penuh Akal Cocok Menjadi Pembisnis',
                'Ratu Kidul'=>'Kamu Mudah Dihormati dan disegani Oleh Seluruh Makhluk Di Dunia Goib',
                'Ular Kobra'=>'Kamu Adalah Orang Yang Pemberani Dan Tidak Mudah Takut',
                'Burung Garuda'=>'kamu Adalah Orang Yang Pekerja Keras Berjiwa Patriot Dan Setia',
                'Kera Sakti'=>'Kamu Adalah Orang Yang Rakus Dan Penuh Dengan Omongan Kosong'
            ];
            // ------------------------ DATABASE KHODAM NYEEE END ----------------------------------//

            //-------------------------------- LOGIKA OUTPUT ----------------------------------------------//
            $hasil_khodam = $data_khodam[array_rand($data_khodam)];
            $result = "<p>Halo <strong>$nama</strong>, Khodam Kamu adalah <strong>$hasil_khodam</strong></p>";
            if (array_key_exists($hasil_khodam, $kepribadian_khodam)) {
                $result .= "<p>Kepribadian $hasil_khodam Artinya " . $kepribadian_khodam[$hasil_khodam] . "</p>";
            }
            return $result;
            //-------------------------------- LOGIKA OUTPUT END ----------------------------------------------//
        }

        //-------------------------------- LOGIKA UTAMA PHP ----------------------------------------------//
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
        //-------------------------------- LOGIKA UTAMA PHP ----------------------------------------------//
        }
        ?>
      <!------------------------------------------ END PHP ------------------------------------------------>

        <!------------------------------- OUTPUT HTML ----------------------------------->
        <h1>Hasil Khodam</h1>
        <div class="hasil">
            <?= $result ?>
        </div>
        <a href="index.html" class="btn">Cek Lagi</a>
        <div class="by">
        <a href="https://github.com/Retiortuk" class="a" target="_blank"><i>By GitHub: Retiortuk ~2024~</i></a>
        </div>
    </div>
</body>
        <!------------------------------- END PROGRAM ----------------------------------->
</html>
