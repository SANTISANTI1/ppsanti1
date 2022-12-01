<?php
include('template/header.php');
include('template/navbar.php');
include('template/sidebar.php');


?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Lagu</h1>
            <div class="section-header-button">
                <a href="lagu-tambah.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Lagu</h2>
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
                                                #
                                            </th>
                                            <th>Judul Lagu</th>
                                            <th>Tanggal</th>
                                            <th>Link</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $no = 1;
                                        $lagu = mysqli_query($koneksi, "SELECT * From tb_lagu order by id_lagu DESC");
                                        while ($data = mysqli_fetch_array($lagu)) {
                                        ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?= $no++; ?>
                                                </td>
                                                <td><?= $data['judul_lagu']; ?></td>
                                                <td><?= $data['tanggal'] ?></td>
                                                <td><?= $data['link_lagu'] ?></td>
                                                <td class="text-center">
                                                    <a href="lagu-edit.php?id=<?= $data['id_lagu'] ?>" class="btn btn-success btn-hapus"><i class="fas fa-edit"></i> Ubah</a>
                                                    <a href="lagu-hapus.php?id=<?= $data['id_lagu'] ?>" class="btn btn-danger btn-hapus"><i class="fas fa-trash"></i> Hapus</a>
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
