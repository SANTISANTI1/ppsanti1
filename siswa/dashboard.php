<?php

include('template/header.php');
include('template/navbar.php');
// include('template/sidebar.php');

?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Siswa</h1>
        </div>
        <div class="col-12 ">
            <article class="article article-style-c">
            <center><img alt="image" src="../assets/img/bg-siswa.png" width="500px" style="margin-bottom:10px;"></center>
        </div>

        <div class="col-12">
            <div class="card">
            <center><h1> Selamat Datang,  <?php echo $_SESSION['nama']; ?></div> </h1></center>
                <div class="card-header">
                    <h4>Pilih Metode Belajar</h4>
                </div>
                <div class="card-body">
                
                    <ul class="nav nav-tabs justify-content-center" id="myTab6" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-center" href="video.php" id="profile-tab6" data-toggle="tab aria-controls="home6" aria-selected="false">
                                      <span><i class="fas fa-film"></i></span> Video Pembelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="lagu.php" id="profile-tab6" data-toggle="tab aria-controls="profile" aria-selected="false">
                                <span><i class="fas fa-music"></i></span> Lagu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="kuis.php" id="contact-tab6" data-toggle="tab  aria-controls="contact" aria-selected="false">
                                <span><i class="fas fa-edit"></i></span> Kuis</a>
                        </li>
                    </ul>
                    
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