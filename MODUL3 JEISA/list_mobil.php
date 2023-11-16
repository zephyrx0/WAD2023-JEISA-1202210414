<?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $tampil = "SELECT * FROM showroom_mobil";
            $result = mysqli_query($koneksi,$tampil);
            $cars = [];
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

            while ($car = mysqli_fetch_assoc($result)) {
                $cars[] = $car;
            }
            
            


            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                        <th scope="col">Detail Mobil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($cars as $item) :?>
                    <tr>
                        <td><?=$item['nama_mobil']?></td>
                        <td><?=$item['brand_mobil']?></td>
                        <td><?=$item['warna_mobil']?></td>
                        <td><?=$item['tipe_mobil']?></td>
                        <td><?=$item['harga_mobil']?></td>
                        <td><a href="form_detail_mobil.php?id=<?=$item['id']?>">KLIK</a></td>
                    </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
        </div>
    </center>
</body>
</html>
