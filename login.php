
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="
    width=device-witdth, intial-scale=1">
    <title>website ga;leri foto</title>
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
                    <h5>login aplikasi</h5>
                </div>
                <form action="config/aksi_login.php" method="POST">
                    <label class="form-label">username</label>
                    <input type="text" name="username" class="form-control" required>
                    <label class="form-label">password</label>
                    <input type="text" name="password" class="form-control" required>
                    <div class="d-grid mt-2">
                        <button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
                    </div>
                </form>
                <hr>
                <div class="col-12">
                <p>belom punya akun? <a href="register.php">daftar di sini</a></p>
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