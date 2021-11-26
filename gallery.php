
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="Snapchat" />
    <meta property="og:title" content="The Fastest Way to Share!" />
    <meta property="snap:sticker" content="https://snapchatoauthtest.herokuapp.com/images/download.jpg" />
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="index-header">
  
  <div class="index-header-link" style="text-decoration: none; color:white; font-size: 25px;" onClick='clearStorage()'><span class="gallery-signin">Log Out</span></div>

  <!-- <h4 id="usersname">SPIFFY GALLERY</h4> -->
  
</div>
<section class="gallery min-vh-100 picture-gallery">
  <div></div>
    <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col">
            <img src="images/IMG_20211108_091027_192.jpg" class="gallery-item" alt="gallery">
            <div  class="snapchat-creative-kit-share" data-theme="dark" data-share-url="https://snapchatoauthtest.herokuapp.com/images/download.jpg"></div>
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091023_868.jpg" class="gallery-item" alt="gallery">
                
                <!-- <div  class="snapchat-creative-kit-share" data-theme="dark" data-share-url="https://snapchatoauthtest.herokuapp.com/images/IMG_20211108_091023_868.jpg"></div> -->
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091104_614.jpg" class="gallery-item" alt="gallery">
                <!-- <div  class="snapchat-creative-kit-share" data-theme="dark" data-share-url="https://snapchatoauthtest.herokuapp.com/images/IMG_20211108_091104_614.jpg"></div> -->
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091107_640.jpg" class="gallery-item" alt="gallery">
                <!-- <div  class="snapchat-creative-kit-share" data-theme="dark" data-share-url="https://snapchatoauthtest.herokuapp.com/images/IMG_20211108_091107_640.jpg"></div> -->
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091115_256.jpg" class="gallery-item" alt="gallery">
                <!-- <div  class="snapchat-creative-kit-share" data-theme="dark" data-share-url="https://snapchatoauthtest.herokuapp.com/images/IMG_20211108_091115_256.jpg"></div> -->
            </div>
            <div class="col">
                <img src="images/IMG_20211108_091119_950.jpg" class="gallery-item" alt="gallery">
                <!-- <div  class="snapchat-creative-kit-share" data-theme="dark" data-share-url="https://snapchatoauthtest.herokuapp.com/images/IMG_20211108_091119_950.jpg"></div> -->
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

<div id="login-button" style="visibility: hidden;"></div>
<script src="js/main.js"></script>
<script src="js/gallery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>