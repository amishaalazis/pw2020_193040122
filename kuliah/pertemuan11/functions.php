<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040122');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function tambah($data)
{
  $conn = koneksi();

  $img = htmlspecialchars($data['img']);
  $nrp = htmlspecialchars($data['nrp']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $query = "INSERT INTO
              mahasiswa
                VALUES
                (null, '$img', '$nrp', '$nama', '$email', '$jurusan');                  
                 ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $img = htmlspecialchars($data['img']);
  $nrp = htmlspecialchars($data['nrp']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $query = "UPDATE mahasiswa SET
              img = '$img',
              nrp = '$nrp',
              nama = '$nama',
              email = '$email',
              jurusan = '$jurusan',
              WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
              WHERE 
              nama LIKE '%$keyword$' OR 
              nrp LIKE '%$keyword$'
              ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
