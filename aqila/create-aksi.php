<?php
include 'config.php'; // Menyambungkan ke database

// Cek apakah form dikirim via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
	$id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $satuan = $_POST['satuan'];

    // Query untuk memasukkan data ke database
    $sql = "INSERT INTO barang (ID_Barang,ID_Kategori, Nama_Barang, Harga, Stok, Satuan) 
            VALUES ($id, $kategori, '$nama', $harga, $stok, '$satuan')";
         // Eksekusi query
    if ($conn->query($sql) === TRUE) {
    // Redirect ke index.php setelah berhasil
    echo "Data berhasil ditambahkan!";
   
    }else {
    // Tampilkan error jika gagal
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Tutup koneksi
    $conn->close();
    }
    ?>