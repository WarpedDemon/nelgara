<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Css/LandingPage.css">
    <link rel="stylesheet" href="../Css/Mobile.css">
    <link rel="stylesheet" href="../Css/Extras.css">
    <link rel="stylesheet" href="../Css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="../Js/Master.mjs"></script>
    <script src="../Js/jquery.min.js"></script>
    <script src="../Js/wow.min.js"></script>
    <script src="../Js/jquery-ui.min.js"></script>

    <script type="text/javascript">
      new WOW().init();
    </script>
    <title> Nelgara Pty Ltd </title>
  </head>
  <body>
    <?php include("../Php/header.php"); ?>
    <?php include("../Php/banner.php");
      $BannerHandlerHelper->CreateNewContent("Commercial Construction - <b>About</b>");
    ?>
    <?php include("../Php/maincontent.php");
      $MainContentHandlerHelper->CreateNewContent("random", "<b>Contact</b>", "Executive Headquarters<br/><br/>
        28 Henderson Drive<br/><br/>
        Kallaroo, Perth,<br/><br/>
        WA 6025<br/><br/>
        TEL: +61 (0)434 33 161<br/><br/>
        E-Mail: Nelgara@outlook.com<br/><br/>
        ");

    ?>
    <?php include("../Php/Footer.php");
     ?>
  </body>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      PageHandler.InitializeBanner(["../img/sydneyday.png"], ["../img/sydneynight.png"]);
    }, false);
  </script>
</html>
