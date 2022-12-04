<?php

include('template/header.php');
include('template/navbar.php');
// include('template/sidebar.php');

?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Metode Pembelajaran Melalui Kuis</h1>
        </div>
        <!-- <div class="col-12 ">
            <article class="article article-style-c">
            <center><img alt="image" src="../assets/img/bg-siswa.png" width="500px" style="margin-bottom:10px;"></center>
        </div> -->

        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <a href="dashboard.php" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                            <h1>Back to Dashboard</h1>
                        </center>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <?php
                            $no = 1;
                            $noo = 1;
                            $kuis = mysqli_query($koneksi, "SELECT * from tb_kuis order by id_kuis desc");
                            $total_soal = mysqli_num_rows($kuis);
                            while ($data = mysqli_fetch_array($kuis)) {
                                ?>
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4><?= $data['soal_kuis']; ?></h4>
                                        <div class="card-header-action">
                                            <label class="btn btn-primary">
                                                (<?= $noo++ . " of " . $total_soal; ?>)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jawaban[<?= $data['id_kuis']; ?>]" value="a">
                                                <label class="form-check-label">
                                                    <?= $data['jawab_a'] ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jawaban[<?= $data['id_kuis']; ?>]" value="b">
                                                <label class="form-check-label">
                                                    <?= $data['jawab_b'] ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jawaban[<?= $data['id_kuis']; ?>]" value="c">
                                                <label class="form-check-label">
                                                    <?= $data['jawab_c'] ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                                                        <div class="card-footer text-center">
                                                            <button class="btn btn-lg btn-primary" type="submit" name="finish">Finish</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="card card-success">
                                                <div class="card-header text-center">
                                                    <h3>Nilai Tertinggi yang Pernah Kamu Capai</h3>
                                                </div>
                                                <div class="card-body">
                                                    <h1><?php
                                                        $id = $_SESSION['id'];
                                                        $score = mysqli_query($koneksi, "SELECT MAX(hasil) as hasil from tb_nilai where id_siswa = $id");
                                                        $data = mysqli_fetch_array($score);
                                                        if ($data <= 0) {
                                                            echo "0";
                                                        } else {
                                                            echo $data['hasil'];
                                                        }
                                                        ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </section>
</div>

<?php

if (isset($_POST['finish'])) {
    $id_siswa = $_SESSION['id'];
    $jawaban = $_POST['jawaban'];
    $benar = 0;
    $salah = 0;
    $kosong = 0;
    foreach ($jawaban as $key => $value) {
        $cek_jawaban = mysqli_query($koneksi, "SELECT * from tb_kuis where id_kuis='$key' and jawaban='$value'");
        if (mysqli_num_rows($cek_jawaban) > 0) {
            $benar++;
        } else if ($value == "") {
            $kosong++;
        } else {
            $salah++;
        }
    }
    $nl = $benar * 100 / $total_soal;
    $hasil = mysqli_query($koneksi, "INSERT INTO tb_nilai (id_nilai, id_siswa, benar, salah, kosong, hasil) VALUES (null,'$id_siswa', '$benar', '$salah', '$kosong', '$nl')");
    if ($hasil) {
        echo "<script>alert('Selamat Anda Telah Menyelesaikan Kuis');window.location='kuis.php'</script>";
    }
}

include('template/footer.php');

?>  

                            

