<?php

include('template/header.php');
include('template/navbar.php');
// include('template/sidebar.php');

                    $id = $_SESSION['id'];
                        if (isset($_POST['ubah'])) {
                            $id = $_SESSION['id'];
                            $username   = $_POST['username'];
                            $name       = $_POST['name'];
                            $email      = $_POST['email'];
                            $umur       = $_POST['umur'];
                            $alamat = $_POST['alamat'];
                            $no_hp = $_POST['no_hp'];
                            
                            $query = mysqli_query($koneksi, "UPDATE tb_user SET nama_user = '$username', nama_lengkap = '$name', email_user = '$email', umur = '$umur', alamat = '$alamat', no_hp = '$no_hp' WHERE id_user = '$id'");
                        
                            if ($query) {
                                echo "<script>alert('Data berhasil diubah');window.location='profile.php'</script>";
                            } else {
                                echo "<script>alert('Data gagal diubah');window.location='profile.php'</script>";
                            }
                        }
                        
                        if (isset($_POST['pass'])) {
                            $id = $_SESSION['id'];
                            $pass = md5($_POST['pass_lama']);
                            $pass_baru = md5($_POST['pass_baru']);
                            $pass_confirm = md5($_POST['pass_confirm']);
                            
                            $cek = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user = '$id'");
                            $data_cek = mysqli_fetch_array($cek);
                        
                            if ($pass != $data_cek['password_user']) {
                                echo "<script>alert('Katasandi lama salah');window.location='profile.php'</script>";
                            } else if ($pass_baru != $pass_confirm) {
                                echo "<script>alert('Katasandi baru tidak sama');window.location='profile.php'</script>";
                            } else {
                                $query = mysqli_query($koneksi, "UPDATE tb_user SET password_user = '$pass_baru' WHERE id_user = '$id'");
                                echo "<script>alert('Katasandi berhasil diubah');window.location='profile.php'</script>";
                            }
                        }

?>
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
          
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi, <?php echo $_SESSION['nama']; ?></div>
            <p class="section-lead">
              Change information about yourself on this page.
            </p>

                
                <div class="card>
                  <form action="" method="POST">
                    <div class="card-header">
                    <div class="section-header">
                      <h4>Edit Profile</h4>
                    </div>
                        <form action="" method="POST">
                            <?php
                            
                             $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user = '$id'");
                             while ($data = mysqli_fetch_array($query)){
                            ?>

                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Username</label>
                            <input type="text" name="username" value="<?= $data['nama_user'] ?>" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the username
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="email" name="email" value="<?= $data['email_user'] ?>" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" value="<?= $data['nama_lengkap'] ?>" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the nama lengkap
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Umur</label>
                            <input type="text" name="umur" value="<?= $data['umur'] ?>" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the nama lengkap
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the alamat
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>No. HP</label>
                            <input type="number" name="no_hp" value="<?= $data['no_hp'] ?>" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the no hp
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit" name="ubah">Save Changes</button>
                    </div>
                    </div>
                    <div class="card-header">
                    <div class="section-header">
                      <h4>Edit Password</h4>
                    </div>
                            <div class="form-group col-md-6 col-12">
                            <label>Password Lama</label>
                                <input type="password" name="pass_lama" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the alamat
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Password Baru</label>
                            <input type="password" name="pass_baru" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the no hp
                            </div>
                          </div>
                            <div class="form-group col-md-6 col-12">
                            <label>Ulangi Password</label>
                            <input type="password" name="pass_confirm" class="form-control">
                            <div class="invalid-feedback">
                              Please fill in the no hp
                            </div>
                            </div>
                             </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary" type="submit" name="pass">Save Changes</button>
                          </div>
                        </div>
                     </div>
                </div> 
                </div>
                <?php } ?>
            </form>
         </div>
    </div> 
            </div>
        </div>
    </section>
</div>

<?php

include('template/footer.php');

?>
