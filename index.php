<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
        integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LOGINOAUTHTEST</title>
</head>
<body>
    
    
<?php
$client_id = "43322312295-5qb7akajbej66dei13qs59loqop09u8l";
$snap_client_id = '6657a894-7ddc-49a4-902e-94240dbb6577';
// $client_id = "43322312295-5qb7akajbej66dei13qs59loqop09u8l";
$authorizeURL = "https://accounts.snapchat.com/accounts/oauth2/auth";

$tokenURL =
"https://accounts.snapchat.com/accounts/oauth2/token";

// $APIurlBASE = "https://id-sandbox.cashtoken.africa";
// $authorizeURL = 'https://accounts.google.com/o/oauth2/v2/auth';
  
// $tokenURL =
// 'https://www.googleapis.com/oauth2/v4/token';


$baseURL = 'http://localhost/snapchatoauthtest/index.php';
// echo $baseURL;








////Make a request to endpoint server for Access Token Request
////Make a request to endpoint server for Access Token Request
////Make a request to endpoint server for Access Token Request
  if(isset($_GET['code'])) {
    // Verify the state matches our stored state
    if (isset($_GET['prompt'])) {
      if(!isset($_GET['state'])) {
   
      header('Location: ' . $baseURL . '?error=invalid_state');
      die();
    }
  
    $authorization_code = $_GET['code'];
    $state = $_GET['state'];
   // Exchange the auth code for an access token
    $fields = [
        'grant_type' => 'authorization_code',
        'client_id' => $client_id,
        'client_secret' => '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',
        'redirect_uri' => $baseURL,
        'state' => $state,
        // 'code_verifier'=> $_SESSION['code_verifier'],
        // 'code_challenge' => $_SESSION['code_challenge'],
        // 'code_challenge_method'=> 'S256',
        'code' => $authorization_code
    ];
    $fileds_string = http_build_query($fields);

    $headers = array(
      "Content-Type: application/x-www-form-urlencoded"
   );

    $ch = curl_init();
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/oauth2/v4/token');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fileds_string);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    $_SESSION['result'] = $result;
    $variable = substr($result, 21);
    $access_token = substr($variable, 0, strpos($variable, '"'));
    $access_token = str_replace(' ','',$access_token); 
    $_SESSION['access_token'] = $access_token;

    $refresh_token = strpos($result, 'refresh_token');
    $refresh = substr($result, $refresh_token);
    $refresh = ltrim($refresh, 'refresh_token":" ');
    $refreshs = 'e'.$refresh;
    $refresh_token = substr($refreshs, 0, strpos($refreshs, '"'));
    $_SESSION['refresh_token'] = $refresh_token;

    $expires = strpos($result, 'expires_in');
    $expires = substr( $result, $expires);
    $expires = ltrim( $expires, 'expires_in":');
    $expires = substr($expires, 0, strpos($expires, ','));
    $_SESSION['expires'] = $expires;
    curl_close($ch);

    echo $result; ?> <br><br> <?php
    var_dump($_SESSION['access_token']) ; ?> <br><br> <?php
    // echo $_SESSION['refresh_token']; ?> <br><br> <?php
    // echo $_SESSION['expires'];

    $_SESSION['google'] = 'active';
    header('Location: userinfo.php');
   die();
    }else {
      if(!isset($_GET['state'])
      || $_SESSION['state'] != $_GET['state']) {
   
      header('Location: ' . $baseURL . '?error=invalid_state');
      die();
    }
  
    $authorization_code = $_GET['code'];
    $state = $_GET['state'];
   // Exchange the auth code for an access token
    $fields = [
        'grant_type' => 'authorization_code',
        'client_id' => $snap_client_id,
        'client_secret' => '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',
        'redirect_uri' => $baseURL,
        'state' => $state,
        'code_verifier'=> $_SESSION['code_verifier'],
        'code_challenge' => $_SESSION['code_challenge'],
        'code_challenge_method'=> 'S256',
        'code' => $authorization_code
    ];
    $fileds_string = http_build_query($fields);

    $headers = array(
      "Content-Type: application/x-www-form-urlencoded"
   );

    $ch = curl_init();
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_URL, $tokenURL);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fileds_string);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    $variable = substr($result, 21);
    $access_token = substr($variable, 0, strpos($variable, '"'));
    $access_token = str_replace(' ','',$access_token); 
    $_SESSION['access_token'] = $access_token;

    $refresh_token = strpos($result, 'refresh_token');
    $refresh = substr($result, $refresh_token);
    $refresh = ltrim($refresh, 'refresh_token":" ');
    $refreshs = 'e'.$refresh;
    $refresh_token = substr($refreshs, 0, strpos($refreshs, '"'));
    $_SESSION['refresh_token'] = $refresh_token;

    $expires = strpos($result, 'expires_in');
    $expires = substr( $result, $expires);
    $expires = ltrim( $expires, 'expires_in":');
    $expires = substr($expires, 0, strpos($expires, ','));
    $_SESSION['expires'] = $expires;
    curl_close($ch);

    // echo $result; ?> <br><br> <?php
    // var_dump($_SESSION['access_token']) ; ?> <br><br> <?php
    // echo $_SESSION['refresh_token']; ?> <br><br> <?php
    // echo $_SESSION['expires'];


    header('Location: userinfo.php');
    
    
    
    die();
    }
    
  }



  






///LoginPage  LoginPage
///LoginPage  LoginPage
///LoginPage  LoginPage

if (!isset($_GET['action'])) {
      
      echo 
            '
            <video autoplay muted loop id="myVideo">
              <source src="videos/1605013148-videezy-1.mp4" type="video/mp4">
            </video>
            <div class="blurr">
              <div class="index-header">
                <span class="logo">SPIFFY GALLERY</span>
                <a class="index-header-link" style="text-decoration: none; color:white; font-size: 25px;" href="login.php"><span class="gallery-signin">Sign In</span></a>
              </div>
              
              <div class="welcome-div">
                <h1>WELCOME TO SPIFFY GALLERY</h1>
                <h3>Please Sign In To Experience The Thrill</h3>
                <p><a style="margin-top: 15px; display: flex; justify-content: center; align-items: center;" class="btn btn-primary " href="login.php">Sign In</a></p>
              </div>
            </div>
            
           ';
            die();
    }
    










// Start the login process by sending the user
// to cashtoken's authorization page
// Start the login process by sending the user
// to cashtoken's authorization page



  




  ?>

        <script src="js/index.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"
        integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw=="
        crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw=="
        crossorigin="anonymous"></script>
</body>
</html>
