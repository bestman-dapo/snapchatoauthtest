<?php
  session_start();
  if (!isset($_SESSION['access_token'])) {
    header("location:javascript://history.go(-1)");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="index-header">
  <span class="logo">SPIFFY GALLERY</span>
  <a class="index-header-link" style="text-decoration: none; color:white; font-size: 25px;" href="login.php"><span class="gallery-signin">Log Out</span></a>
</div>
<section class="gallery min-vh-100 picture-gallery">
    <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col">
                <img src="images/IMG_20211108_091023_868.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091027_192.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091104_614.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091107_640.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091115_256.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091119_950.jpg" class="gallery-item" alt="gallery">
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <img src="images/Snapchat-1917058687.jpg" class="modal-img" alt="modal img">
      </div>
     
    </div>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>