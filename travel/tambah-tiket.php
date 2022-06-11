<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Akap Travel</title>
  </head>

  <!-- content -->
  <header>
      <div class="content">

      <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><strong>Akap Travel</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="container collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tambah-tiket.php">Tiket</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="data-tiket.php">Harga</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="index.php">Transaksi</a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
  </header>

    <!-- body -->
    <body>
        <div class="container">
            <div class="py-5 text-center">
                <h2>Pemesanan Tiket</h2>
                <p class="lead">Silahkan isi data diri dibawah ini</p>
            </div>
            <form class="card p-2" action="simpan-tiket.php" method="POST">
                <div class="col-12 mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Nomor Identitas</label>
                    <input type="text" class="form-control" name="no_id">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">No. Hp</label>
                    <input type="text" class="form-control" name="no_hp">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-group">Kelas Penumpang</label>
                    <select type="text" class="form-control" name="kelas">
                        <option>Ekonomi</option>
                        <option>Bisnis</option>
                        <option>Eksekutif</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Jadwal Keberangkatan</label>
                    <input type="date" class="form-control" name="jadwal">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Jumlah Penumpang</label>
                    <input type="number" class="form-control" nama="jumlah_penumpang">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Jumlah Penumpang Lansia</label>
                    <input type="number" class="form-control" nama="jumlah_lansia">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Harga Tiket</label>
                    <input type="number" class="form-control" name="harga" value="100.000" readonly>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Total Harga</label>
                    <input type="text" class="form-control" name="total_harga">
                </div>
                <div class="col-12 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="persetujuan">
                    <label class="form-check-label" for="persetujuan">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.</label>
                </div>
                <div>
                    <td col-12 my-4>
                        <button type="button" onclick="total_harga()" class="btn btn-secondary">Hitung Total Bayar</button>
                        <input type="submit" value="Pesan Tiket" class="btn btn-primary">
                        <input type="submit" value="Batal" class="btn btn-outline-primary">
                    </td>
                </div>
            </form>

            <!-- fungsi -->
            <script>
                function total_harga(){
                    document.getElementById("total_harga").value=(document.getElementById("jumlah_penumpang").value*
                    document.getElementById("harga").value+document.getElementById("jumlah_lansia").value*
                    document.getElementById("harga").value*90/100);
                    }
            </script>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">Copyright &copy; 2022</p>
            </footer>
        </div>
       
    </body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</html>
