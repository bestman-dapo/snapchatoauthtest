<?php
   $client_id = "43322312295-5qb7akajbej66dei13qs59loqop09u8l";
   $authorizeURL = 'https://accounts.google.com/o/oauth2/v2/auth';
  
   $tokenURL = 'https://www.googleapis.com/oauth2/v4/token';
   $baseURL = 'http://localhost/snapchatoauthtest/index.php';

  if(isset($_GET['action']) && $_GET['action'] == 'google-login') {
    unset($_SESSION['access_token']);
    unset($_SESSION['code_verifier']);
    unset($_SESSION['code_challenge']);
    
   
    // $_SESSION['state'] = bin2hex(openssl_random_pseudo_bytes(16));
    // $verify_bytes = random_bytes(64);
    // $code_verifier = bin2hex(random_bytes(30)).'-_~.';
    // $_SESSION['code_verifier'] = $code_verifier;
    // $hash = hash('sha256', $code_verifier);
    // $code_challenge = rtrim(strtr(base64_encode($hash), '+/', '-_'), "=");
    // $_SESSION['code_challenge'] = $code_challenge;
  
  
    function base64url_encode($plainText)
    {
        $base64 = base64_encode($plainText);
        $base64 = trim($base64, "=");
        $base64url = strtr($base64, '+/', '-_');
        return ($base64url);
    }
  
    $random = bin2hex(openssl_random_pseudo_bytes(32));
    $verifier = base64url_encode(pack('H*', $random));
    $_SESSION['code_verifier'] = $verifier;
    $challenge = base64url_encode(pack('H*', hash('sha256', $verifier)));
    $_SESSION['code_challenge'] = $challenge;
    $_SESSION['state'] = base64url_encode(hash('sha256', 'Lcp44WMupWT2_TfYP18AFnnzutB2VmYXGSk9Te5ig7E'));
    
  
  
    $params = array(
      'client_id' => $client_id,
      'redirect_uri' => 'http://localhost/snapchatoauthtest/index.php',
      'response_type' => 'code',
      'scope' => 'openid email profile',
      // 'grant_type' => 'authorization_code',
      
      'state' => $_SESSION['state'],
      // 'code_verifier'=> $_SESSION['code_verifier'],
      // 'code_challenge' => $_SESSION['code_challenge'],
      // 'code_challenge_method'=> 'S256'
    );
   
    // // // // // Redirect the user to cashToken's authorization page
    header('Location: '.$authorizeURL.'?'.http_build_query($params));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="intl-tel-input-master/intl-tel-input-master/build/css/demo.css">
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
    <title>Document</title>
</head>
<body>
    

            <div class="form-container" id="form-container">
                <div class="form-group login-wrapper login_control" style="width: auto;" >
                    <h3 class="login_welcome">SPIFFY GALLERY</h3>
                    <div class=""></div>
                    
                    <input placeholder="Email" type="email" name="email" class="form-control">
                    <input placeholder="Password" type="password" name="password" class="form-control">

                    <p><a style="display: flex; justify-content: center; align-items: center;" class="btn btn-primary " href="#">Sign In</a></p>
                    
                    <p class="divider" style="margin-bottom: 20px;"> or </p>

                    <div id="login-button"></div>
                    <!-- <button id="login-buttons" style="background-color: yellow; border: none; height: 20px; border-radius:5px;" ><img src="./images/original-88018ccd-f944-427d-9642-d9aa85db2520.jpeg" alt=""> <p>Sign In with snapchat</p></button>  -->
                    <!-- <a style=" margin-top: -10px;" href="?action=google-login" class="cashtokenlink snapverify-submit"><img style="width: 45px; margin-left: -5px;" src="./images/google-logo.jpg" alt=""> <p style="margin-left: 0;">Sign In with Google</p></a>  -->
                </div>
            </div>
            





       <script src="js/main.js"></script>
       <script src="js/bootstrap.bundle.min.js"></script>
       <script src="js/index.js"></script>
        <!-- <script src="js/intlTelInput.js"></script> -->
        <script>
    // var input = document.querySelector("#phone");
    // window.intlTelInput(input, {
    //   // allowDropdown: false,
    //   // autoHideDialCode: false,
    //   // autoPlaceholder: "off",
    //   // dropdownContainer: document.body,
    //   // excludeCountries: ["us"],
    //   // formatOnDisplay: false,
    //   // geoIpLookup: function(callback) {
    //   //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //   //     var countryCode = (resp && resp.country) ? resp.country : "";
    //   //     callback(countryCode);
    //   //   });
    //   // },
    //   // hiddenInput: "full_number",
    //   // initialCountry: "auto",
    //   // localizedCountries: { 'de': 'Deutschland' },
    //   // nationalMode: false,
    //   // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    //   // placeholderNumberType: "MOBILE",
    //   // preferredCountries: ['cn', 'jp'],
    //   // separateDialCode: true,
    //   utilsScript: "js/utils.js",
    // });
  </script>
</body>
</html>