<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("127.0.0.1" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "tubes_193040122") or die("Database Salah!");
    
    return $conn;
}

//function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//functions untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $img             = htmlspecialchars($data['img']);
    $nama            = htmlspecialchars($data['nama']);
    $asal            = htmlspecialchars($data['asal']);
    $harga_pasaran   = htmlspecialchars($data['harga_pasaran']);
    $bahan_dasar     = htmlspecialchars($data['bahan_dasar']);

    $query = "INSERT INTO makanan
                VALUES 
                (NULL,'$img','$nama','$asal','$harga_pasaran' , '$bahan_dasar')";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

//functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) {
    $conn = koneksi();

    $id             = $data['id'];
    $img             = htmlspecialchars($data['img']);
    $nama            = htmlspecialchars($data['nama']);
    $asal            = htmlspecialchars($data['asal']);
    $harga_pasaran   = htmlspecialchars($data['harga_pasaran']);
    $bahan_dasar     = htmlspecialchars($data['bahan_dasar']);

    $query = "UPDATE makanan SET
            img = '$img',
            nama = '$nama',
            asal = '$asal',
            harga_pasaran = '$harga_pasaran',
            bahan_dasar = '$bahan_dasar'
            WHERE id = $id
    ";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data){
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah digunakan');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES (NULL , '$username' , '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}



?>