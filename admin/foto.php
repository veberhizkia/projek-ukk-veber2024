<?php
session_start();
include '../config/koneksi.php';
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
    <title>website galeri foto</title>
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
   </div>
  
           <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">keluar</a>
       </div>
    </div>
</nav>

  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-2">
              <div class="card-header">tambah foto</div>
                 <div class="card-body">
            <form action="../config/aksi_foto.php" method="POST" enctype="multipart/form-data">
               <label class="form-label">judul foto</label>
               <input type="text" name="judulfoto" class="form-control" required>
               <label class="form-label">deskripsi</label>
               <textarea type="text" name="deskripsifoto" class="form-control" required></textarea>
               <label class="form-label">album</label>
               <select class="form-control" name="albumid" required>
                <?php
                $userid = $_SESSION['userid'];
                $sql_album = mysqli_query($koneksi, "SELECT * FROM album");
while($data_album = mysqli_fetch_array($sql_album)){ ?>
  <option value=" <?php echo $data_album['albumid'] ?>"><?php echo $data_album['namaalbum'] ?></option>
  <?php } ?>             
               </select>
               <label class="form-label">file</label>
               <input type="file" class="form-control" name="lokasifile" required>
               <button type="submit" class="btn btn-primary mt-2" name="tambah">
                tambah data</button>
         </form>
      </div>
   </div>
 </div>
 
<div class="col-md-8">
<div class="card mt-2">
    <div class="card header">data galery foto</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
            <th>#</th>
            <th>foto</th>
            <th>judulfoto</th>
            <th>deskripsi</th>
            <th>tanggal</th>
            <th>aksi</th>
         </tr>
  <thead> 
    <tbody>
      <?php
      $no = 1;
      $userid = $_SESSION['userid'];
      $sql = mysqli_query($koneksi, "SELECT * FROM foto1 WHERE userid='$userid'");
while($data = mysqli_fetch_array($sql)){ 
  ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><img src="../assets/img/<?php echo $data['lokasifile'] ?>" width="100"></td>
            <td><?php echo $data['judulfoto'] ?></td>
            <td><?php echo $data['deskripsifoto'] ?></td>
            <td><?php echo $data['tanggalunggah'] ?></td>
            <td>         
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['fotoid'] ?>">
edit
</button>

<div class="modal fade" id="edit<?php echo $data['fotoid'] ?>"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">edit data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../config/aksi_foto.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="fotoid" value="<?php echo $data['fotoid'] ?>">
          <label class="form-label">judulfoto</label>
               <input type="text" name="judulfoto" value="<?php echo $data['judulfoto'] ?>" class="form-control" required>
               <label class="form-label">deskripsi</label>
               <textarea type="text" name="deskripsifoto" class="form-control" required><?php echo $data['deskripsifoto'] ?></textarea>              
               <label class="form-label">album</label>
               <select class="form-control" name="albumid" required>
                <?php
                $userid = $_SESSION['userid'];
                $sql_album = mysqli_query($koneksi, "SELECT * FROM album WHERE userid='$userid'");
while($data_album = mysqli_fetch_array($sql_album)){ ?>
  <option <?php if($data_album['albumid'] ==$data['albumid']){?>selected="selected" <?php } ?> value="<?php echo $data_album['albumid'] ?>"><?php echo $data_album['namaalbum'] ?></option>
  <?php } ?>             
               </select>  
               <label class="form-label">foto</label> 
               <div class="row">
                <div class="col-md-4">
                <img src="../assets/img/<?php echo $data['lokasifile'] ?>" width="100">
               </div>          
               <div class="col-md-8">
               <label class="form-label">ganti file</label>
               <input type="file" class="form-control" name="lokasifile">              
               </div>               
              </div>


           </div>
      <div class="modal-footer">
        <button type="submit" name="edit" class="btn btn-primary">edit data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['fotoid'] ?>">
hapus
</button>

<div class="modal fade" id="hapus<?php echo $data['fotoid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">hapus data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../config/aksi_foto.php" method="POST">
          <input type="hidden" name="fotoid" value="<?php echo $data['fotoid'] ?>">
          apakah andah yakin akan menghapus data <strong> <?php echo $data['judulfoto'] ?></strong>
</textarea>

      </div> 
      <div class="modal-footer">
        <button type="submit" name="hapus" class="btn btn-primary">hapus data</button>
</form>
      </div>
    </div>
  </div>
</div>

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

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
  <p>&copy; ukk 2024 l nama veber hizkia</p>
</footer>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>