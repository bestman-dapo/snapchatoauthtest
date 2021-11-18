<?php
  session_start();

  // $client_id = "43322312295-5qb7akajbej66dei13qs59loqop09u8l";
  // $authorizeURL = 'https://accounts.google.com/o/oauth2/v2/auth';
  
  // $tokenURL =
  // 'https://www.googleapis.com/oauth2/v4/token';
  
  // $APIurlBASE = "https://id-sandbox.cashtoken.africa";
  $client_id = "6657a894-7ddc-49a4-902e-94240dbb6577";
  $authorizeURL = "https://accounts.snapchat.com/accounts/oauth2/auth";

$tokenURL =
"https://accounts.snapchat.com/accounts/oauth2/token";
  
  
  $baseURL = 'http://localhost/snapchatoauthtest/index.php';
  // echo $baseURL;
  
  





if(isset($_GET['action']) && $_GET['action'] == 'login') {
  unset($_SESSION['access_token']);
  unset($_SESSION['code_verifier']);
  unset($_SESSION['code_challenge']);
  unset($_SESSION['google']);
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
    'scope' => 'https://auth.snapchat.com/oauth2/api/user.display_name https://auth.snapchat.com/oauth2/api/user.bitmoji.avatar',
    // 'grant_type' => 'authorization_code',
    
    'state' => $_SESSION['state'],
    'code_verifier'=> $_SESSION['code_verifier'],
    'code_challenge' => $_SESSION['code_challenge'],
    'code_challenge_method'=> 'S256'
  );
 
  // // // // // Redirect the user to cashToken's authorization page
  header('Location: '.$authorizeURL.'?'.http_build_query($params));


//   $fields = [
//     'grant_type' => 'authorization_code',
//     'client_id' => $client_id,
//     'response_type' => 'code',
//     'redirect_uri' => $baseURL,
//     'state' => $_SESSION['state'],
//     'client_secret' => 'sRzS62FiaG_xaAHjsfomw_A3cUBVUSXFs1AtM67KjwE',
//     'code_verifier'=> $_SESSION['code_verifier'],
//     'code_challenge' => $_SESSION['code_challenge'],
//     'code_challenge_method'=> 'S256'
// ];
// $fileds_string = http_build_query($fields);

// $headers = array(
//   "Content-Type: application/x-www-form-urlencoded"
// );

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $authorizeURL.'?'.$fileds_string);
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET' );
// curl_setopt($ch, CURLOPT_POSTFIELDS, $fileds_string);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

// $result = curl_exec($ch);
// $main_result = json_decode($result);
// $variable = substr($result, 17);
// $access_token = substr($variable, 0, strpos($variable, '"'));
// $_SESSION['access_token'] = $access_token;
// curl_close($ch);

//  echo $main_result;

  die();
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
        <link rel="stylesheet" href="intl-tel-input-master/intl-tel-input-master/build/css/demo.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
      <title>Document</title>
  </head>
  <body>
      


    <div class="form-container container-fluid">
        <div class="form-group login-wrapper login_control" >
        <h3 class="login_welcome">SPIFFY GALLERY</h3>
             
                  <span style="display: flex; justify-content: flex-end; align-items: center; font-size:17px; margin-bottom: 10px;" id="phonesample" style="width:200px; height:30px;"></span>
                               
                    <div class="pd-telephone-input" style="display: flex; justify-content: center; align-items: flex-start;">
                    <input style="width: 0;" type="tel" name="tel" id="phone" class="form-control" >
                    <input style="margin-left: 5px;"  placeholder="Telephone" type="tel" name="tel" id="phoneinput" class="form-control">
                    </div>
                  
                    <a type="submit" style="width:auto; display: flex; justify-content: center; align-items: center;" class="login_submit btn btn-sm btn-success" href="?action=login" name="snap_verify"><img style="margin-right: 15px; height: 25px; border-radius: 5px;"  src="./images/original-88018ccd-f944-427d-9642-d9aa85db2520.jpeg" alt=""> <span style="font-size: 19px;">Verify</span> </a>
                   
                
         
        </div>
    </div>
    








        <script src="js/index.js"></script>
        
        <script src="js/intlTelInput.js"></script>
        <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "js/utils.js",
    });


    window.snapKitInit = function () {
  /* Add your code here */
    };
  </script>
  </body>
  </html>     
       
       
       
       