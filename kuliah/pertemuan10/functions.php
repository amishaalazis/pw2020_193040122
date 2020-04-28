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
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
