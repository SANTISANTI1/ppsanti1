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
            <h1>Tambah Kuis</h1>
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
                            <h4>Data Kuis</h4>
                        </div>
                        <form action="" method="POST">
                            <div class="card-body">
                            <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NOMOR</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="no"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Soal Kuis</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="soal"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">A</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="jawab_a"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">B</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="jawab_b"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">C</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="jawab_c"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jawaban Benar</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div>
                                            <select name="jawaban" class="form-control">
                                            <option  value="a">pilihan A</option>
                                            <option  value="b">Pilihan B</option>
                                            <option  value="c">Pilihan C</option>
                                            </select>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['tambah'])) {
                            $id      = $_GET['id'];
                            $no      = $_POST['no'];
                            $soal    = $_POST['soal'];
                            $a       = $_POST['jawab_a'];
                            $b       = $_POST['jawab_b'];
                            $c       = $_POST['jawab_c'];
                            $jawaban = $_POST['jawaban'];
                            
                            $query = mysqli_query($koneksi, "INSERT INTO tb_kuis VALUES(null,'$no','$soal','$a','$b','$c','$jawaban')");
                            if ($query) {
                                echo "<script>alert('Data Berhasil Ditambahkan');window.location='kuis.php';</script>";
                            } else {
                                echo "<script>alert('Data Gagal Ditambahkan');window.location='kuis.php';</script>";
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