<?php
include "koneksi.php";

$koneksi = new mysqli($host, $user, $pass, $name);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

$Q = $koneksi->query("SELECT * FROM jasaweb") or die($koneksi->error);

if ($Q) {
    $posts = array();

    if ($Q->num_rows) {
        while ($post = $Q->fetch_assoc()) {
            $posts[] = $post;
        }
    }

    $data = json_encode(array('results' => $posts));

    // Membuat array dari string JSON
    $dataArray = json_decode($data, true);
    foreach ($dataArray['results'] as $haha) {
        echo $haha['nama_perusahaan'];
    }

}

// Tutup koneksi
$koneksi->close();
?>
