<?php
    // echo "Hello world";
    // Variabel dan Tipe data
    $nama_siswa = "Jan";
    $usia_siswa = 20;
    $status_kelulusan = false;
    $list_siswa = ["Budi", "Andi", "Rudi"];

    $angka_a = 30;
    $angka_b = 40;
    $hasil_penjumlahan = $angka_a + $angka_b;

    $angka_a += 30;

    // var_dump($angka_a > $angka_b);
    // echo $angka_a;

    // Kondisi
    
    // $cuaca_sekarang = "deras";

    // if($cuaca_sekarang == "hujan"){
    //     echo "bawa payung";
    // }

    // elseif($cuaca_sekarang == "panas"){
    //     echo "bawa Jaket";
    // }

    // elseif($cuaca_sekarang == "mendung"){
    //     echo "bawa jaket dan payung";
    // }

    // else{
    //     echo "Kondisi tidak diketahui";
    // }
    

    // Looping
    // for($i=0 ; $i<10 ; $i++){
    //         echo $i;
    //         echo "<br>";
    // }

    $list_siswa = ["Ali", "Ani", "Rudi"];
    foreach($list_siswa as $nama){
        echo $nama."<br>";
    }




?>