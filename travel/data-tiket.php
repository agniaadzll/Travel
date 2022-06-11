<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
    
        <title>Akap Travel</title>
    </head>

    <!-- content -->
    <header>
        <div class="align-items-center pb-3 mb-2">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="container navbar-brand" href="#"><strong>Akap Travel</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- navbar -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="tambah-tiket.php">Tiket</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="data-tiket.php">Harga</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="index.php">Transaksi</a>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pricing-header p-3 mt-5 pb-md-4 mx-auto text-center">
                <h1 class="fw-normal">Harga</h1>
                <p class="fs-5 text-muted">Pilih kelas Bus</p>
            </div>
        </div>
    </header>

    <body>
        <!-- card price -->
        <main>
            <div class="container py-3">
                <div class="row row-cols-1 row-cols-md-3 pb-3 mb-4 border-bottom text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Ekonomi</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp100.000</h1>
                            <a href="tambah-tiket.php" type="button" class="w-100 btn btn-lg btn-outline-primary">Pesan</a>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Bisnis</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp150.000</h1>
                            <a href="tambah-tiket.php" type="button" class="w-100 btn btn-lg btn-outline-primary">Pesan</a>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 ">
                            <h4 class="my-0 fw-normal">Eksekutif</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp200.000</h1>
                            <a href="tambah-tiket.php" type="button" class="w-100 btn btn-lg btn-outline-primary">Pesan</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>