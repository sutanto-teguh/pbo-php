<?php
//include 'create-aksi.php'; // Menyambungkan dan memproses data form
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        background-color: #e7fbff;
    }

    .card {
        background-color: #b4ebec;
        border: 1px solid #9fd7fe;
    }

    h2 {
        color: #7da7fc;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Data Barang</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action='create-aksi.php' method="POST">
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input class="form-control" list="datalistOptions" id="kategori" name="kategori"
                                    required placeholder="Pilih Kategori...">
                                <datalist id="datalistOptions">
                                    <option value="1">Buku</option>
                                    <option value="2">Pakaian</option>
                                    <option value="3">Makanan</option>
                                    <option value="4">Minuman</option>
                                    <option value="5">Peralatan Rumah Tangga</option>
                                    <option value="6">Alat Tulis</option>
                                    <option value="7">Kecantikan</option>
                                </datalist>
                            </div>
							 <div class="mb-3">
                                <label for="nama" class="form-label">ID Barang</label>
                                <input type="text" class="form-control" id="id" name="id" required
                                    placeholder="Masukkan Nama Barang">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama" name="nama" required
                                    placeholder="Masukkan Nama Barang">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" required
                                    placeholder="Masukkan Harga Barang">
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok" name="stok" required
                                    placeholder="Masukkan Stok Barang">
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="satuan" required
                                    placeholder="kg/pcs/ml/dll...">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sukses -->
    <?php if (isset($success) && $success): ?>
    <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="successModalLabel">Sukses!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Data berhasil ditambahkan ke database.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if (isset($error)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>