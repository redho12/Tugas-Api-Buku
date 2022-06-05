<?php
    require_once "index.php";


    header("Content-Type: application/json; charset=UTF-8");

    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $abstrak = $_POST['abstrak'];

    $query =  "INSERT INTO `buku`(`isbn`, `judul`, `pengarang`, `jumlah`, `tanggal`, `abstrak`) VALUES ('$isbn','$judul','$pengarang','$jumlah','$tanggal','$abstrak')";
    $execute = $dbConn->query($query);
    $response = [];



    if ($execute) {
        $response['status'] = 'succcess';
        $response['message'] = 'data berhasil ditambahkan';
    } else {
        $response['status'] = 'failed';
        $response['message'] = 'data gagal ditambahkan';
    }
    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;

    ?>
