<?php
session_start();
if (!isset($_SESSION['access_token'])) {
    header("location:javascript://history.go(-1)");
}
if (isset($_SESSION['google']) && $_SESSION['google'] == 'active') {
    $fields = [
        'token_type' => 'Bearer',
        'access_token' => $_SESSION['access_token'],
        'redirect_uri' => 'http://localhost/snapoauthtest/index.php',
        'client_secret' => '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',
        'scope' => 'openid email profile',
    ];
    $fileds_string = http_build_query($fields);

    $headers = array(
        "Content-Type: application/x-www-form-urlencoded"      
    );
    $headers_string = http_build_query($headers);

    $ch = curl_init('https://www.googleapis.com/oauth2/v3/userinfo');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'Authorization: Bearer '.$_SESSION['access_token']
    ]);
    
    $chr = curl_init();
    curl_setopt($chr, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($chr, CURLOPT_URL, 'https://www.googleapis.com/oauth2/v3/userinfo');
    curl_setopt($chr, CURLOPT_POST, true);
    curl_setopt($chr, CURLOPT_POSTFIELDS, $fileds_string);

    curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);


    $results = curl_exec($ch);
    echo $result;
   
    curl_close($ch);
    
    header('Location: gallery.php');
    
   
    
}else {
    $client_id = '6657a894-7ddc-49a4-902e-94240dbb6577';
    $fields = [
        'token_type' => 'Bearer',
        'access_token' => $_SESSION['access_token'],
        'redirect_uri' => 'http://localhost/snapoauthtest/index.php',
        'client_secret' => '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'
    ];
    $fields_string = http_build_query($fields);

    $headers = array(
        "Content-Type: application/x-www-form-urlencoded",
        "Authorization: Bearer ".$_SESSION['access_token']
    );
   

    
    $chr = curl_init();
    curl_setopt($chr, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($chr, CURLOPT_URL, 'https://kit.snapchat.com/v1/me');
    curl_setopt($chr, CURLOPT_POST, true);
    curl_setopt($chr, CURLOPT_POSTFIELDS, $fields_string);

    curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);


    $result = curl_exec($chr);
    
    
    echo $result;
    curl_close($chr);

    // var_dump($result);
//     ?><br><br> <?php
//     //user_email extraction
//     //user_email extraction
//     $email_location = strpos($result, 'email');
//     $email = substr($result, $email_location);
//     $email = ltrim($email, 'email":"');
//     $email = explode('","',$email);
//     $_SESSION['user_email'] = $email[0];


//     ?><br><br> <?php
//     //display_name extraction
//     //display_name extraction
//     $display_name_location = strpos($result, 'display_name');
//     $display_name = substr($result, $display_name_location);
//     $display_name = ltrim($display_name, 'display_name":"');
//     $display_name = explode('","',$display_name);
//     $_SESSION['display_name'] = $display_name[0];


//     ?><br><br> <?php
//     //gender extraction
//     //gender extraction
//     $gender_location = strpos($result, 'gender');
//     $gender = substr($result, $gender_location);
//     $gender = ltrim($gender, 'gender":"');
//     $gender = explode('","',$gender);
//     $_SESSION['gender'] = $gender[0];


//     ?><br><br> <?php
//     //first_name extraction
//     //first_name extraction
//     $first_name_location = strpos($result, 'first_name');
//     $first_name = substr($result, $first_name_location);
//     $first_name = ltrim($first_name, 'first_name":"');
//     $first_name = explode('","',$first_name);
//     $_SESSION['first_name'] = $first_name[0];


//     ?><br><br> <?php
//     //last_name extraction
//     //last_name extraction
//     $last_name_location = strpos($result, 'last_name');
//     $last_name = substr($result, $last_name_location);
//     $last_name = ltrim($last_name, 'last_name":"');
//     $last_name = explode('","',$last_name);
//     $_SESSION['last_name'] = $last_name[0];


//     ?><br><br> <?php
//     //username extraction
//     //username extraction
//     $username_name_location = strpos($result, 'username');
//     $username = substr($result, $username_name_location);
//     $username = ltrim($username, 'username_name":"');
//     $username = explode('"',$username);
//     $_SESSION['user_name'] = $username[0];

//   header('Location: profile.php');
}
    