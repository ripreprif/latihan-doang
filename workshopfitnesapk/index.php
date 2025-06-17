<?php include('db.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Selamat Datang di Aplikasi Fitness</h1>
    <p class="text-center">Gunakan menu berikut untuk mengakses fitur-fitur aplikasi:</p>

    <?php
    $result = $conn->query("SELECT COUNT(*) AS jumlah FROM member WHERE status = 'Tidak Aktif'");
    $row = $result->fetch_assoc();
    $jumlah_tidak_aktif = $row['jumlah'];

    if ($jumlah_tidak_aktif > 0) {
        echo "<div class='alert alert-warning text-center'>
                <strong>Perhatian!</strong> Terdapat <strong>$jumlah_tidak_aktif member</strong> yang statusnya <strong>Tidak Aktif</strong>. 
                <a href='tampil_member.php?status=Tidak+Aktif' class='alert-link'>Lihat sekarang</a>.
              </div>";
    }

    $conn->close();
    ?>

    <div class="row text-center mt-5">
        <div class="col-md-4 mb-4">
            <a href="form_pendaftaran.php" class="btn btn-primary btn-lg w-100">Daftar Member Baru</a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="tampil_member.php" class="btn btn-success btn-lg w-100">Lihat Daftar Member</a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="kelola_paket.php" class="btn btn-info btn-lg w-100">Kelola Paket</a>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>