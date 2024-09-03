<html>
    <head>
    <meta charset="utf-8">
    <mate name="viewport" content="
    width=device-witdth, intial-scale=1">
    <title>website galeri foto</title>
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">website galeri foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <a href="register.php" class="btn btn-outline-primary m-1">daftar</a>
        <a href="login.php" class="btn btn-outline-success m-1">masuk</a>
      </div>
    </div>
  </div>
</nav>

<div class="container py-5">
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body bg-light">
                <div class="text-center">
                    <h5>daftar akun baru</h5>
                </div>
                <form action="config/aksi_register.php" method="post">
                    <label class="form-label">username</label>
                    <input type="text" name="username" class="form-control" required>
                    <label class="form-label">password</label>
                    <input type="password" name="password" class="form-control" required>
                    <div class="d-grid mt-2">
                    <label class="form-label">email</label>
                    <input type="email" name="email" class="form-control" required>
                    <label class="form-label">nama lengkap</label>
                    <input type="text" name="namalengkap" class="form-control" required>
                    <label class="form-label">alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                        <button class="btn 
                        btn-primary" type="submit" name="kirim">daftar</button>
                    </div>
                </form>
                <hr>
                <div class="col-12">
                <p>sudah punya akun? <a href="login.php">login di sini</a></p>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
  <p>&copy; ukk 2024 l nama veber hizkia</p>
</footer>
<script> type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>