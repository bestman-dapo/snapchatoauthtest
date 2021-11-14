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
        <h3 class="login_welcome">Welcome To Lotsconnect</h3>
        
                <span style="display: flex; justify-content: flex-end; align-items: center; font-size:17px; margin-bottom: 10px;" id="phonesample" style="width:200px; height:30px;"></span>
                                    
                <div class="pd-telephone-input" style="display: flex; justify-content: center; align-items: flex-start;">
                <input style="width: 0;" type="tel" name="tel" id="phone" class="form-control" >
                <input style="margin-left: 5px;"  placeholder="Telephone" type="tel" name="tel" id="phoneinput" class="form-control">
                </div>

                <a align="center" style="width:auto;" class="login_submit btn btn-sm btn-primary snapverify-submit" href="#"><img src="./images/original-88018ccd-f944-427d-9642-d9aa85db2520.jpeg" alt=""> <span style="font-size: 19px;">Verify</span> </a>
         
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
       
       
       
       