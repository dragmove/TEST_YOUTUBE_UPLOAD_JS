<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <title>TEST - SAMPLE</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/nanumgothic.css">
    <style type="text/css">
      body {
        font-family: 'Nanum Gothic', dotum, verdana, Arial, applegothic, sans-serif;
        font-weight: normal;
        font-style: normal;
      }
      a {text-decoration:none;}
    </style>
    <link rel="stylesheet" type="text/css" href="css/sample.css">
  </head>

  <body>
    <div class="wrap">
      this is 'test_oauth_2_redirection.php';
      redirected from 'test_oauth_2.php';
    </div>

    <script src="js/lib/jquery-1.7.0.min.js"></script>
    <script>
      (function($) {
        "use strict";
        $(document).ready(function() {
          console.log('app init');

          init();

          function init() {
            var hashStr = window.location.hash.substr(1);
            hashStr = hashStr.split('access_token=').join('').split('&')[0];
            console.log('hashStr :', hashStr);

            $.ajax({
              type: 'GET',
              url: 'https://www.googleapis.com/oauth2/v1/tokeninfo',
              data: {
                'access_token': hashStr
              },
              dataType: 'json',
              beforeSend: function() {
              },
              success: function(data) {
                console.log('success data :', data);
              },
              error: function(jqXHR) {
                console.log('error :'. jqXHR);
              }
            });
          }
        });
      }(jQuery));
    </script>
  </body>
</html>