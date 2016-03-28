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
      <a href="#" id="btn-g-account">google oauth2.0</a>
    </div>

    <script src="js/lib/jquery-1.7.0.min.js"></script>
    <script>
      (function($) {
        "use strict";
        $(document).ready(function() {
          console.log('app init');

          init();

          function init() {
            var gAccountApiDomain = 'https://accounts.google.com/o/oauth2/auth';

            var params = '?client_id=' + window.encodeURIComponent('50482933306-aomg7os8cfl7544h65qqihi82jf0tnn9.apps.googleusercontent.com') +
            '&redirect_uri=' + window.encodeURIComponent('http://localhost/_20160328_TEST_YOUTUBE_API/test_oauth_2_redirection.php') +
            '&response_type=' + window.encodeURIComponent('token') + 
            '&scope=' + window.encodeURIComponent('https://www.googleapis.com/auth/youtube https://www.googleapis.com/auth/youtube.upload');

            var uri = gAccountApiDomain + params;

            $('#btn-g-account').on('click', function(event) {
              event.preventDefault();
              window.location.href = uri;
              // -> 유저의 승인 후, 아래 URL로 redirect 된다.
              // http://localhost/_20160328_TEST_YOUTUBE_API/test_oauth_2_redirection.php#access_token=ya29.swLFX0qYVymdPToch7SaRCavQTAX0Y8AfOlxfGAEXMCzEm4QE4BPlrTZF_Bh99XMoA&token_type=Bearer&expires_in=3600
            });
          }
        });
      }(jQuery));
    </script>
  </body>
</html>