<?php 

// koneksi ke database mysql
$db = mysqli_connect("localhost", "root", "", "students_database");

// jika koneksi eror
if (!$db) {
    echo mysqli_connect_error($db);
    exit();
} 


// membuat function untuk mengkoneksikan halaman web dengan database mysql
function query($query){
    global $db;    
    // ambil data dari tabel pegawai kebersihan
    $result = mysqli_query($db, $query);
    // membuat array kosong untuk wadah hasil query dari database
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) :
        $rows[] = $row;
    endwhile;

    return $rows;
}

?>