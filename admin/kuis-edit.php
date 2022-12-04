<?php

include('template/header.php');
include('template/navbar.php');
include('template/sidebar.php');

?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="kuis.php" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Ubah Kuis</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Create New Post</h2>
            <p class="section-lead">
                On this page you can create a new post and fill in all fields.
            </p>

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ubah Data Kuis</h4>
                        </div>
                        <form action="" method="POST">
                            <?php
                            $id = $_GET['id'];
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_kuis WHERE id_kuis = '$id'");
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No.</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="no" value="<?= $data['no'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Soal Kuis</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="soal" value="<?= $data['soal_kuis'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilihan A</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="jawab_a" value="<?= $data['jawab_a'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilihan B</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="jawab_b" value="<?= $data['jawab_b'] ?>" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilihan C</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="jawab_c" value="<?= $data['jawab_c'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jawaban Benar</label>
                                        <div class="col-sm-12 col-md-7">
                                        <div>
                                            <select name="jawaban" class="form-control">
                                            <option <?php if($data['jawaban']=='a'){echo "selected"; } ?> value="a">pilihan A</option>
                                            <option <?php if($data['jawaban']=='b'){echo "selected"; } ?> value="b">Pilihan B</option>
                                            <option <?php if($data['jawaban']=='c'){echo "selected"; } ?> value="c">Pilihan C</option>
                                            </select>
                                            </div>
                                            <!-- <input type="text" name="jawaban" value="<?= $data['jawaban'] ?>" class="form-control"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </form>
                        <?php
                        if (isset($_POST['ubah'])) {
                            $id      = $_GET['id'];
                            $no      = $_POST['no'];
                            $soal    = $_POST['soal'];
                            $a       = $_POST['jawab_a'];
                            $b       = $_POST['jawab_b'];
                            $c       = $_POST['jawab_c'];
                            $jawaban = $_POST['jawaban'];

                            $query = mysqli_query($koneksi, "UPDATE tb_kuis SET no='$no',soal_kuis = '$soal', jawab_a = '$a', jawab_b = '$b',jawab_c = '$c',jawaban = '$jawaban' WHERE id_kuis = '$id'");

                            if ($query) {
                                echo "<script>alert('Data berhasil diubah');window.location='kuis.php'</script>";
                            } else {
                                echo "<script>alert('Data gagal diubah');window.location='kuis.php'</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php

include('template/footer.php');

?>
