 <?php

 class BannerHandler {

   function CreateNewContent($Title) {
     echo '
         <div id="Banner">
           <h1 id="BannerId">'. $Title .'</h1>
           <div id="slider">
             <div class="gradient-left"></div>
             <div class="gradient-right"></div>
             <img id="ImgTwo" class="BackgroundImage"  src="../img/startup.jpg"/>
             <img id="ImgOne" class="BackgroundImage" src="../img/room.jpg"/>
           </div>
         </div>
       ';
   }
 }

 $BannerHandlerHelper = new BannerHandler();
 ?>
