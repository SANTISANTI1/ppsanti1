<?php

include('template/header.php');
include('template/navbar.php');
// include('template/sidebar.php');

?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Metode Pembelajaran Melalui Video</h1>
        </div>
        <!-- <div class="col-12 ">
            <article class="article article-style-c">
            <center><img alt="image" src="../assets/img/bg-siswa.png" width="500px" style="margin-bottom:10px;"></center>
        </div> -->

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <center>
                <a href="dashboard.php" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                <h1>Back to Dashboard</h1>
                </center>
                </div>
                <div class="card-body">

                <div class="tab-content tab-bordered" id="myTabContent6">
                        <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home-tab6">

                        <div class="row">
                                <?php
                                $lagu = mysqli_query($koneksi, "SELECT * from tb_lagu order by id_lagu desc");
                                while ($data = mysqli_fetch_array($lagu)) {
                                ?>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <article class="article article-style-c">
                                            <div class="article-header">
                                            <iframe class="article-image" src="<?= $data['link_lagu']; ?>" title="Head Shoulders Knees and Toes | Lagu Anak Eza dan Adi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                                    <iframe class="article-image"  src="<?= $data['link_lagu']; ?>" title="Lagu ABC Bahasa Inggris" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_lagu']; ?>" title="Lagu Belajar Bahasa Inggris | Buah-Buahan (Fruits) | Lagu Anak 2019 Terbaru | Bibitsku" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_lagu']; ?>" title="Mengenal ABC Dalam Bhs. INGGRIS ● Anak Mudah Menirukan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_lagu']; ?>" title="Belajar Bahasa Inggris Cara Memperkenalkan Diri (How to introduce yourself for kids)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                                        </div>         
                                            <div class="article-details">
                                                <div class="article-category"><a href="#">News</a>
                                                    <div class="bullet"></div> <a href="#"><?= $data['tanggal']; ?></a>
                                                </div>
                                                <div class="article-title">
                                                    <h2><a href="#"><?= $data['judul_lagu']; ?></a></h2>
                                                </div>
                                                <p>Dalam Video Belajar ini anak-anak dapat belajar sambil bermain dengan kosa kata Bahasa Inggris </p>
                                            </div>
                                        </article>
                                    </div>
                                <?php } ?>
                            </div>
                            </div>

                        </div>
                        </div>
        </div>
</div>

    <div class="section-body">
    </div>
    </section>
</div>

<?php

include('template/footer.php');

?>