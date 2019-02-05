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
      $BannerHandlerHelper->CreateNewContent("Commercial Construction - <b>Services</b>");
    ?>
    <?php include("../Php/maincontent.php");
      $MainContentHandlerHelper->CreateNewContent("random", "<b>The business</b>", "We have established Nelgara Pty Ltd to provide clients with industry expertise from experienced resources contracted to deliver commercial aspects for businesses and projects and can provide resources to supplement peak work demands in line with your technical brief/requirements.<br/><br/>
        We provide following services:<br/><br/>

        <li>Business and Project Risk Services;</li>
        <li>Businesses;</li>
        <li>Drafting of, or advice upon, Subcontracts, Supply Agreements, Consultancy Agreements, minor professional Services Agreements;<br/><br/>
        <li>Pre-Contract Review of Contract Terms prior to submission of bids;</li>
        <li>Advice on Contract Negotiations;</li>
        <li>Project Commercial Controls health checks;</li>
        <li>Through our partner consultants, Estimating/Planning Services;</li><br/><br/>
      ");
      $MainContentHandlerHelper->CreateNewContent("random", "<b>Projects</b>", "
        <li>Project Procurement Services (Startup /Strategy/Procurement);</li>
        <li>Preparation of Summary Key Obligations and Rights (Project Commercial Game Plan);</li>
        <li>Quantity Surveyor/Contract Administrator Services (short/long term);</li>
        <li>Program Review/Management advice;</li>
        <li>Variation/Delay/Disruption & Extension of Time Claim preparation or management;</li><br/><br/>
      ");
      $MainContentHandlerHelper->CreateNewContent("random", "<b>Management</b>", "

        Project Management<br/><br/>

        <li>Project management support;</li>
        <li>Project reviews and due diligence;</li>
        <li>Risk management analytics and advice;</li>
        <li>Contract management;</li>
        <li>Commercial Operational readiness;</li><br/><br/>
      ");
      $MainContentHandlerHelper->CreateNewContent("random", "<b>Project Controls</b>", "

        <li>Cost management;</li>
        <li>Planning and scheduling advice;</li>
        <li>Change management;</li>
        <li>Project reporting;</li><br/><br/>
      ");
      $MainContentHandlerHelper->CreateNewContent("random", "<b>Improvement Services</b>", "
        <li>Services for projects under duress;</li>
        <li>Develop and implement business commercial management processes;</li><br/><br/>

        Nelgara continues to draw on its actual delivery experience integrated with the latest technology solutions to provide a unique firm that delivers sustainable outcomes for an ever-changing world.
        ");
    ?>
    <?php include("../Php/Footer.php");
     ?>
  </body>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      PageHandler.InitializeBanner(["../img/perthday.png"], ["../img/perthnight.png"]);
    }, false);
  </script>
</html>
