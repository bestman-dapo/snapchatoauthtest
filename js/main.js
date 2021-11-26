

var login_submit = document.querySelector('.login_submit');

var avatar = document.getElementById('avatar');

var users_name = document.getElementById('usersname');

// window.localStorage.setItem('inneritem', "<div class='index-header'><div onClick='clearStorage()' id='log_out' class='index-header-link' style='cursor:pointer; text-decoration: none; color:white; font-size: 25px; backgorung-color: transparent;' ><span class='gallery-signin'>Log Out</span></div> <div style='display: flex;'><img id='avatar' src=''><div id='usersname'  style='margin-left: 40px;'></div> </div></div>  <section class='gallery min-vh-100 picture-gallery'><div class='container-lg'><div class='row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3'><div class='col'><img src='images/IMG_20211108_091023_868.jpg' class='gallery-item' alt='gallery'></div> <div class='col'> <img src='images/IMG_20211108_091027_192.jpg' class='gallery-item' alt='gallery'></div> <div class='col'><img src='images/IMG_20211108_091104_614.jpg' class='gallery-item' alt='gallery'></div><div class='col'><img src='images/IMG_20211108_091107_640.jpg' class='gallery-item' alt='gallery'></div><div class='col'><img src='images/IMG_20211108_091115_256.jpg' class='gallery-item' alt='gallery'></div><div class='col'><img src='images/IMG_20211108_091119_950.jpg' class='gallery-item' alt='gallery'></div></div></div></section><div class='modal fade' id='gallery-modal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'><div class='modal-dialog modal-dialog-centered modal-md'><div class='modal-content'><div class='modal-header'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></div><div class='modal-body'><img src='images/Snapchat-1917058687.jpg' class='modal-img' alt='modal img'></div></div></div></div>");

    


window.snapKitInit = () => {
  snap.loginkit.mountButton("login-button", {
    clientId: "6657a894-7ddc-49a4-902e-94240dbb6577",
    redirectURI: "https://snapchatoauthtest.herokuapp.com/gallery.php",
    scopeList: [
      "user.display_name",
      "user.bitmoji.avatar"
    ],
    handleResponseCallback: () => {
      snap.loginkit.fetchUserInfo().then(data => {

        window.localStorage.setItem('userimage', data["data"]["me"]["bitmoji"]["avatar"]);
        window.localStorage.setItem('username', data["data"]["me"]["displayName"]);

        
        users_name.innerText = window.localStorage.getItem('username');
        

        window.location.href = "https://snapchatoauthtest.herokuapp.com/gallery.php";

        
        // console.log(data["data"]["me"]["bitmoji"]["avatar"]);
        // window.localStorage.setItem('inneritem', "<div class='index-header'><div onClick='clearStorage()' id='log_out' class='index-header-link' style='cursor:pointer; text-decoration: none; color:white; font-size: 25px; backgorung-color: transparent;' ><span class='gallery-signin'>Log Out</span></div> <div style='display: flex;'><img id='avatar' src=''><div id='usersname'  style='margin-left: 40px;'></div> </div></div>  <section class='gallery min-vh-100 picture-gallery'><div class='container-lg'><div class='row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3'><div class='col'><img src='images/IMG_20211108_091023_868.jpg' class='gallery-item' alt='gallery'></div> <div class='col'> <img src='images/IMG_20211108_091027_192.jpg' class='gallery-item' alt='gallery'></div> <div class='col'><img src='images/IMG_20211108_091104_614.jpg' class='gallery-item' alt='gallery'></div><div class='col'><img src='images/IMG_20211108_091107_640.jpg' class='gallery-item' alt='gallery'></div><div class='col'><img src='images/IMG_20211108_091115_256.jpg' class='gallery-item' alt='gallery'></div><div class='col'><img src='images/IMG_20211108_091119_950.jpg' class='gallery-item' alt='gallery'></div></div></div></section><div class='modal fade' id='gallery-modal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'><div class='modal-dialog modal-dialog-centered modal-md'><div class='modal-content'><div class='modal-header'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></div><div class='modal-body'><img src='images/Snapchat-1917058687.jpg' class='modal-img' alt='modal img'></div></div></div></div>");


        // const innerhtml = window.localStorage.getItem('inneritem');
        
        // document.body.innerHTML = innerhtml;

      
      })
    },
  })
}

// Load the SDK asynchronously
(function (d, s, id) {
  var js, sjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://sdk.snapkit.com/js/v1/login.js";
  sjs.parentNode.insertBefore(js, sjs);
}(document, "script", "loginkit-sdk"));

(function (d, s, id) {
  var js,
    sjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://sdk.snapkit.com/js/v1/create.js";
  sjs.parentNode.insertBefore(js, sjs);
})(document, "script", "snapkit-creative-kit-sdk");

// const mainhtml = localStorage.getItem('inneritem');
// function my_code(){
//     if(!mainhtml){
//         document.body.innerHTML = '<div class="form-container" id="form-container"><div class="form-group login-wrapper login_control" style="width: auto;" ><h3 class="login_welcome">SPIFFY GALLERY</h3><div class=""></div><input placeholder="Email" type="email" name="email" class="form-control"><input placeholder="Password" type="password" name="password" class="form-control"><p><a style="display: flex; justify-content: center; align-items: center;" class="btn btn-primary " href="#">Sign In</a></p><p class="divider" style="margin-bottom: 20px;"> or </p><div id="login-button"></div><!-- <button id="login-button" style="background-color: yellow; border: none; height: 20px; border-radius:5px;" ><img src="./images/original-88018ccd-f944-427d-9642-d9aa85db2520.jpeg" alt=""> <p>Sign In with snapchat</p></button>  --><!-- <a style=" margin-top: -10px;" href="?action=google-login" class="cashtokenlink snapverify-submit"><img style="width: 45px; margin-left: -5px;" src="./images/google-logo.jpg" alt=""> <p style="margin-left: 0;">Sign In with Google</p></a>  --></div> </div>';
//     }else{
      
//         document.body.innerHTML = mainhtml;
//     }
// }

// window.onload=my_code();

function clearStorage(){
    location.href = "localstr.php";
    
    // document.body.innerHTML = '<div class="form-container" id="form-container"><div class="form-group login-wrapper login_control" style="width: auto;" ><h3 class="login_welcome">SPIFFY GALLERY</h3><div class=""></div><input placeholder="Email" type="email" name="email" class="form-control"><input placeholder="Password" type="password" name="password" class="form-control"><p><a style="display: flex; justify-content: center; align-items: center;" class="btn btn-primary " href="#">Sign In</a></p><p class="divider" style="margin-bottom: 20px;"> or </p><div id="login-button"></div><!-- <button id="login-button" style="background-color: yellow; border: none; height: 20px; border-radius:5px;" ><img src="./images/original-88018ccd-f944-427d-9642-d9aa85db2520.jpeg" alt=""> <p>Sign In with snapchat</p></button>  --><!-- <a style=" margin-top: -10px;" href="?action=google-login" class="cashtokenlink snapverify-submit"><img style="width: 45px; margin-left: -5px;" src="./images/google-logo.jpg" alt=""> <p style="margin-left: 0;">Sign In with Google</p></a>  --></div> </div>';
}