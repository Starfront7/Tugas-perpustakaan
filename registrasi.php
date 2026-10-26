<?php
include 'koneksi.php';
if (isset($_POST['registrasi'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $level = $_POST['level'];

    $insert = mysqli_query($koneksi, "INSERT INTO user (nama, username, password, email, alamat, no_telepon, level) VALUES ('$nama','$username','$password','$email','$alamat','$no_telepon','$level')");
    if($insert){
        echo '<script>alert("selamat registrasi berhasil");</script>';
        echo '<script>location.href="login.php";</script>';
    }else {
        echo '<script>alert("gagal registrasi, silahkan ulangi.");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login Perpustakaan</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" required name="nama" type="text"
                                                placeholder="username" />
                                            <label for="inputEmail">Nama</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" required name="username" type="text"
                                                placeholder="username" />
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" required name="password" type="password"
                                                placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" required name="email" type="email"
                                                placeholder="Password" />
                                            <label for="inputPassword">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" required name="alamat" type="text"
                                                placeholder="Password" />
                                            <label for="inputPassword">Alamat</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" required name="no_telepon" type="text"
                                                placeholder="Password" />
                                            <label for="inputPassword">No Telepon</label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <select required name="level" class="form-control mb-4">
                                                <option>=== Pilih ===</option>
                                                <option value="petugas">Petugas</option>
                                                <option value="pelajar">Pelajar</option>
                                                <option value="admin">admin</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" name="registrasi" type="submit"
                                                value="Simpan">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>