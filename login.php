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
    

            <div class="form-container">
                <div class="form-group login-wrapper login_control" >
                    <h3 class="login_welcome">Welcome To Lotsconnect</h3>
                    <div class=""></div>
                    
                    <input placeholder="Email" type="email" name="email" class="form-control">
                    <input placeholder="Password" type="password" name="password" class="form-control">

                    <p><a style="display: flex; justify-content: center; align-items: center;" class="btn btn-primary " href="#">Sign In</a></p>
                    
                    <p class="divider"> or </p>

                    
                    <a href="verify.php" class="cashtokenlink snapverify-submit"><img src="./images/original-88018ccd-f944-427d-9642-d9aa85db2520.jpeg" alt=""> <p>Verify with snapchat</p></a> 
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
  </script>
</body>
</html>