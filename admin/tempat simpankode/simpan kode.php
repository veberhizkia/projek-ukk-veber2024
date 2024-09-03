<label class="form-label">deskripsi</label>
               <textarea class="form control" name="deskripsi" required></textarea>
               

               <?php
session_start();
$userid = $_SESSION['userid'];
if ($_SESSION['status'] !='login') {
echo "<script>;
alert('anda belom login!');
location.href='../index.php';
</script";
}

?>

<html>
    <head>
    <meta charset="utf-8">
    <mate name="viewport" content="
    width=device-witdth, intial-scale=1">
    <title>website ga;leri foto</title>
   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
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
      <a href="home.php" class="nav-link">home</a>
     <a href="album.php" class="nav-link">album</a>
     <a href="foto.php" class="nav-link">foto</a>
     
</div>

        
        <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">keluar</a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-3">
  album:
  <?php
$query = mysqli_query($koneksi, "SELECT * FROM foto1 WHERE userid='$userid'");
while($data = mysqli_query_array($query)){
?>
<div class="col-md-3">
      <div class="card">
      <img style="height: 12rem;" src="../assets/img/<?php echo $data['lokasifile'] ?>" class="card-img-top"title="<?php echo $data['judulfoto'] ?>">
        <div class="card-footer text-center">
          <a href=""><i class="fa-regular fa-heart m-1"></i></a>103 suka
          <a href=""><i class="fa-regular fa-heart m-1"></i></a>60 komentar
          </div>
        </div>
      </div>
<?php } ?>
</div>
</div>


<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
  <p>&copy; ukk 2024 l nama veber hizkia</p>
</footer>
<script> type="text/javascript"src="../assets/js/bootstrap.min.js"></script>
</body>
</html>

punya index
<?php
session_start();
$userid = $_SESSION['userid'];
if ($_SESSION['status'] !='login') {
echo "<script>;
alert('anda belom login!');
location.href='../index.php';
</script";
}

?>

<html>
    <head>
    <meta charset="utf-8">
    <mate name="viewport" content="
    width=device-witdth, intial-scale=1">
    <title>website ga;leri foto</title>
   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
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
     <a href="home.php" class="nav-link">home</a>
     <a href="album.php" class="nav-link">album</a>
     <a href="foto.php" class="nav-link">foto</a>
     
</div>
        
        <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">keluar</a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-2">
  <div class="row">
    <?php 
  $query = mysqli_query($koneksi, "SELECT * FROM foto1 INNER JOIN user ON foto.uderid=user.userid INNER JOIN album ON foto.albumid=album.albumid");
          while ($data = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-3">
            <a type="button" data-bs-toggle="modal" data-bs-target="#komentar<?php echo $data['fotoid']
            ?>">

              <div class="card mb-2">
                <img src="../assets/img/<?php echo $data['lokasifile'] ?>" class="card-img-top" 
                title= <?php echo $data['judulfoto'] ?> style="height: 12rem;">
                <div class="card-footer text-center">
                  <?php 
                  $fotoid = $data['fotoid'];
                  $ceksuka = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");
                  if (mysqli_num_rows($ceksuka) == 1) { ?>
                    <a href="../config/proses_like.php?fotoid=<?php echo $data['fotoid'] ?>" type="submit"
                     name="batalsuka"><i class="fa fa-heart"></i></a> 
                  <?php } else { ?>
                    <a href="../config/proses_like.php?fotoid=<?php echo $data['fotoid'] ?>" type="submit" 
                    name="suka"><i class="fa-regular fa-heart"></i></a>
                  <?php }
                  $like = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE fotoid='$fotoid'");
                  echo mysqli_num_rows($like) . ' suka';
                  ?>
                  <a href=""><i class="fa-regular fa-comment"></i></a> 10 komentar
                </div>
              </div>
              </a>

              <!-- Modal -->
<div class="modal fade" id="<?php echo $data['fotoid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-x1">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
          <img src="../assets/img/<?php echo $data['lokasifile'] ?>" class="card-img-top" 
          title=" <?php echo $data['judulfoto'] ?>">
          </div>
          <div class="col-md-4">
            <div class="m-2">
              <div class="overflow-auto">
                <div class="sticky-top">
                  <strong><?php echo $data['judulfoto'] ?></strong>
                  <span class="badge bg-secondary"<?php echo $data['userid'] ?>></span>
                  <span class="badge bg-secondary"<?php echo $data['tanggalunggah'] ?>></span>
                  <span class="badge bg-secondary"<?php echo $data['albumid'] ?>></span>
                   </div>
                  </div>
                 </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
              
            </div>
            <?php } ?>
  </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
  <p>&copy; ukk 2024 l nama veber hizkia</p>
</footer>
<script> type="text/javascript"src="../assets/js/bootstrap.min.js"></script>
</body>
</html>