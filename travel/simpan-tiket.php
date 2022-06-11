<!-- aksi php yang terkoneksi file database -->
<?php
    $nama = $_POST['nama'];
    $no_id = $_POST['no_id'];
    $no_hp = $_POST['no_hp'];
    $kelas = $_POST['kelas'];
    $jadwal = $_POST['jadwal'];
    $jumlah_penumpang = $_POST['jumlah_penumpang'];
    $jumlah_lansia = $_POST['jumlah_lansia'];

    include 'db.php';
    $query="INSERT INTO travel SET nama='$nama',no_id='$no_id',no_hp='$no_hp',kelas='$kelas',
        jadwal='$jadwal',jumlah_penumpang='$jumlah_penumpang',jumlah_lansia='$jumlah_lansia'";
    mysqli_query($conn, $query);

    echo "Nama Pemesan              : " .$nama. '<br>';
    echo "Nomor Identitas           : " .$no_id. '<br>';
    echo "No. HP                    : " .$no_hp. '<br>';
    echo "Kelas Penumpang           : " .$kelas. '<br>';
    echo "Jadwal Keberangkatan      : " .$jadwal. '<br>';
    echo "Jumlah Penumpang          : " .$jumlah_penumpang. '<br>';
    echo "Jumlah Penumpang Lansia   : " .$jumlah_lansia. '<br>';
?>