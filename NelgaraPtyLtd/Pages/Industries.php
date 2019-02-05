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
    <script type="text/javascript">
      new WOW().init();
    </script>
    <title> Nelgara Pty Ltd </title>
  </head>
  <body>
    <?php include("../Php/header.php"); ?>
    <?php include("../Php/banner.php");
      $BannerHandlerHelper->CreateNewContent("Commercial Construction - <b>Industries</b>");
    ?>
    <?php include("../Php/maincontent.php");
      $MainContentHandlerHelper->CreateNewContent("Random", "<b>Marine</b>", "
        <li>Humber International Terminal;</li>
        <li>Immingham Western Lead in Jetty;</li>
        <li>Great Yarmouth Outer Harbour;</li>
        <li>Mersey Docks Framework;</li>
        <li>Gladstone Lock Gates;</li>
        <li>Ipswich Ro-Ro Terminal;</li>
        <li>Teeside Ro-Ro Terminal;</li>
        <li>Multiple Limpet Dam Projects around the UK;</li>
        <li>Cromer Slipway;</li><br/><br/>
        ");

      $MainContentHandlerHelper->CreateNewContent("Random", "<b>LNG</b>", "
        <li>Pluto 2;</li>
        <li>Devil Creek (including Camp);</li>
        <li>Gorgon Utilities Package;</li>
        <li>Inpex Browse Ltd ECI (JV Clough/Maunsell)</li>
        <li>Newgen Kwinana Power Station (Alstom)</li><br/><br/>
        ");
      $MainContentHandlerHelper->CreateNewContent("Random", "<b>Resource Projects</b>", "
        <li>RTIO Cape Lambert A & B camp;</li>
        <li>RTIO North West Coastal Highway (Road Diversion & Bridge over Rail);</li>
        <li>RTIO Mesa J TSF3 (indigenous JV);</li>
        <li>RTIO Mesa J TSF4 (Indigenous JV);</li>
        <li>RTIO Rosella Bellbird Sidings (Indigenous JV);</li>
        <li>RTIO Dampier Fuel Wharf;</li>
        <li>RTIO Argyle Diamond Mine;</li>
        <li>BHP Primary & Secondary Crushers;</li>
        <li>BHP Finucane Water Main Services Relocation;</li>
        <li>BHP Jimblebar (including dewatering package);</li>
        <li>BHP 3 Bridges (launch over 5 live Rail);</li>
        <li>BHP Mulla Mulla Village Expansion;</li>
        <li>FMG Dewatering Framework Christmas creek & Cloudbreak (Indigenous JV);</li>
        <li>FMG Solomon Airstrip & Fly Camp;</li>
        <li>Roy Hill Marble Bar Road;</li>
        <li>Tianqi Lithium Kwinana;</li>
        <li>Talison Greenbushes Mine Expansion (Lithium);</li><br/><br/>
        ");
      $MainContentHandlerHelper->CreateNewContent("Random", "<b>Rail Related</b>", "
        <li>Aubin Grove Train Station;</li>
        <li>RTIO Rosella Bellbird Sidings (Indigenous JV);</li>
        <li>BHP 3 Bridges (Launch over 5 live Rail);</li>
        <li>RTIO North West Coastal Highway (Bridge over Rail);</li>
        <li>PTA escalator Replacement Framework;</li>
        <li>Perth City Link;</li>
        <li>Narngulu Rail Depot;</li><br/><br/>
        ");
      $MainContentHandlerHelper->CreateNewContent("Random", "<b>Main Roads</b>", "
        <li>Mandurah Traffic Bridge;</li>
        <li>Reid Highway;</li>
        <li>Bruce Highway (Queensland);</li>
        <li>Dawson Highway (Queensland);</li>
        <li>Gateway Alliance;</li>
        <li>Main Roads Infrastructure Alliance (MRIA);</li>
        <li>New Lord Street;</li>
        <li>Ellenbrook;</li>
        <li>Russell Road ECI And Bridge dueling Project;</li>
        <li>Great Northern Highway ‘Team Savanah”;</li>
        <li>Abraham Street Geraldton;</li>
        <li>Greenhough Bridge Geraldton</li>
        <li>Many Projects UK based inclusive of Frameworks (Alliances)</li><br/><br/>
        ");
      $MainContentHandlerHelper->CreateNewContent("Random", "<b>Water Related</b>", "
        <li>Ellenbrook Water Tank;</li>
        <li>Harvey Water Tank;</li>
        <li>Denmark Water Tank;</li>
        <li>Spring Gulley Pond C;</li>
        <li>Many Projects UK based inclusive of Frameworks (Alliances);</li><br/><br/>
        ");
      $MainContentHandlerHelper->CreateNewContent("Random", "<b>Airport Related;</b>", "
        <li>Perth Airport Skybridge;</li>
        <li>Tindall Airforce Base NT;</li>
        <li>RAAF Base Amberley Buildings & Refurbishments (QLD);</li><br/><br/>
        ");
      $MainContentHandlerHelper->CreateNewContent("Random", "<b>Building Projects</b>", "
        <li>Primehouse Office Development;</li>
        <li>Mount Hospital – Hybrid and Catheter Lab Refurbishment, Medical Gas Equipment Upgrade;</li>
        <li>RAAF Base Amberley Buildings & Refurbishments (QLD);</li>
        <li>240 St Georges Terrace Office Refurbishment;</li>
        <li>Fisher & Paykel Industrial Warehouse;</li>
        <li>Scarborough Surf Club;</li>
        <li>Many Projects UK based inclusive of Schools, Warehouses, Housing and Hospitals;</li>
        <li>Others;</li>
        <li>Multiple Projects Sandvik (Stacker Reclaimer construction);</li>
        <li>Muja Coal demolition and refurbishment (Cost Plus Contract Negotiation and agreement);</li>
        <li>ECI /Alliance Contracts include Team Savanah (MRWA), Inpex, Russell Road, Aubin Grove, Escalators Replacement Project, Solomon Airport, Alcoa, Oz Minerals;</li>
        ");
    ?>
    <?php include("../Php/Footer.php");
     ?>
  </body>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      PageHandler.InitializeBanner(["../img/melbourneday.png"], ["../img/melbournenight.png"]);
    }, false);
  </script>
</html>
