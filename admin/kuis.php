<?php
include('template/header.php');
include('template/navbar.php');
include('template/sidebar.php');
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Kuis</h1>
            <div class="section-header-button">
                <a href="kuis-tambah.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">DataTables</h2>
            <p class="section-lead">
                We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Basic DataTables</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No.
                                            </th>
                                            <th>Soal Kuis</th>
                                            <th>Jawab A</th>
                                            <th>Jawab B</th>
                                            <th>Jawab C</th>
                                            <th>Jawaban</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $no = 1;
                                        $kuis = mysqli_query($koneksi, "SELECT * From tb_kuis order by id_kuis DESC");
                                        while ($data = mysqli_fetch_array($kuis)) {
                                        ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?= $no++; ?>
                                                </td>
                                                <td><?= $data['soal_kuis']; ?></td>
                                                <td><?= $data['jawab_a'] ?></td>
                                                <td><?= $data['jawab_b'] ?></td>
                                                <td><?= $data['jawab_c'] ?></td>
                                                <td><?= $data['jawaban'] ?></td>
                                                <td class="text-center">
                                                    <a href="kuis-edit.php?id=<?= $data['id_kuis'] ?>" class="btn btn-success btn-hapus"><i class="fas fa-edit"></i> Ubah</a>
                                                    <a href="kuis-hapus.php?id=<?= $data['id_kuis'] ?>" class="btn btn-danger btn-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include('template/footer.php');
?>