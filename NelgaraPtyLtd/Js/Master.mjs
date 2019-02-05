document.addEventListener("DOMContentLoaded", Initialize, false);
var active = true;
var lastSwitch = 0;
var activeDiv = 1;
var Active_Images = [
  0,
  0
];
var Image_Sources = [
  "../img/room.jpg",
  "../img/office.jpg",
];
var Image_Sources2 = [
  "../img/startup.jpg",
  "../img/startup.jpg"
];
window.onresize = function(evt) {
  var dimensions = {
      height: (evt.srcElement || evt.currentTarget).innerHeight,
      width: (evt.srcElement || evt.currentTarget).innerWidth
  };
  if(dimensions.width < 1528) {
    PageHandler.SetSmallMode(true);
    document.getElementById("Hamburger").style.display = "block";
    document.getElementById("Nav").style.display = "none";
    console.log("here!");
    document.getElementById("NavDark").style.display = "none";
  } else {
    PageHandler.SetSmallMode(false);
    document.getElementById("Hamburger").style.display = "none";
    document.getElementById("Nav").style.display = "block";
    PageHandler.GetMenuElement().className = "NavClass fadeInDown animated";
    console.log("Set Back!");
  }
};

var PageHandler;

function Initialize() {
  //Inistantiate the class.
  PageHandler = new NelgaraMaster(document);
  PageHandler.Initialize();
  window.onscroll = OnScroll;
}

function changeBackground(active)
{
    var header = document.getElementById("Header");
    var headerDark = document.getElementById("HeaderDark");
    if(active)
    {
      PageHandler.SetDarkMode(true);
      header.className = "HeaderClass animated fadeOut";
      setTimeout(()=>{
        header.style.zIndex = 10;
        headerDark.style.zIndex = 11;

        header.style.display = "block";
        header.className = "HeaderClass";
        header.style.opacity = 1;
      }, 500);
    }else{
      PageHandler.SetDarkMode(false);
      headerDark.className = "HeaderClass animated fadeOut";
      setTimeout(()=>{
        header.style.zIndex = 11;
        headerDark.style.zIndex = 10;

        headerDark.style.display = "block";
        headerDark.className = "HeaderClass";
        headerDark.style.opacity = 1;
      }, 500);
    }
}

function OnClickLightSwitch()
{
  if(active)
  {
    $('body').animate({
      backgroundColor: "#222222",
      color: "white"
    }, 500);
    changeBackground(active);
    active = false;
  }else{
    $('body').animate({
      backgroundColor: "#FFFAFA",
      color: "black"
    }, 500);
    changeBackground(active);
    active = true;
  }
}

function HideMenu(menu) {
  if(PageHandler.GetDarkMode() == false) {
    PageHandler.GetMenuElement().className = "NavClass animated fadeOutUp";
    setTimeout(()=>{
      menu.style.display = "none";
    },500);
  } else {
    PageHandler.GetDarkMenuElement().className = "NavClass animated fadeOutUp";
    setTimeout(()=>{
      PageHandler.GetDarkMenuElement().style.display = "none";
    },500);
  }
}
function DisplayMenu(menu)
{
  if(PageHandler.GetDarkMode() == false) {
    menu.style.display = "block";
    menu.style.zIndex = 1000;
    console.log(PageHandler.GetMenuElement());
    PageHandler.GetMenuElement().style.display = "block";
    PageHandler.GetMenuElement().className = "NavClass animated fadeInDown";
  } else {
    PageHandler.GetDarkMenuElement().style.display = "block";
    PageHandler.GetDarkMenuElement().className = "NavClass animated fadeInDown";
  }
}

function IsMenuOpen(menu)
{
  if(PageHandler.GetDarkMode() == false) {
    return (menu.style.display == "block") ? true : false;
  } else {
    return (PageHandler.GetDarkMenuElement().style.display == "block") ? true : false;
  }
}


function CheckMenuState() {
  var MenuElem = PageHandler.GetMenuElement();

  //console.log("Values: " + IsMenuOpen(MenuElem) + ", and, " + PageHandler.GetDisplay() + ", and " + PageHandler.GetSmallMode())
  if(!IsMenuOpen(MenuElem) && PageHandler.GetDisplay() && PageHandler.GetSmallMode() && PageHandler.GetGate()) {
    DisplayMenu(MenuElem);
    console.log("Ran!");
    PageHandler.SetGate(false)
  }
  if(IsMenuOpen(MenuElem) && !PageHandler.GetDisplay() && PageHandler.GetSmallMode() && PageHandler.GetGate()) {
    HideMenu(MenuElem);
    PageHandler.SetGate(false);


  }
}

function OnClickHM()
{
  PageHandler.SetDisplay(!PageHandler.GetDisplay());
  console.log(PageHandler.GetDisplay());
  PageHandler.SetGate(true);
}

function Change() {
  var ImageElemOne = document.getElementById("ImgOne");
  var ImageElemTwo = document.getElementById("ImgTwo");

  if(activeDiv == 1) {
    //Active div is 1
    ImageElemOne.className = "BackgroundImage animated fadeOutLeft";
    setTimeout(()=>{
      //1 second delay then...
      ImageElemOne.style.zIndex = -1;
      ImageElemOne.className = "BackgroundImage";
      ImageElemTwo.style.zIndex = 0;
      //Switch Image Element one image...
      Active_Images[0] += 1;
      //If outside image array bounds reset to 0.
      if(Active_Images[0] > Image_Sources.length-1){Active_Images[0] = 0;}
      ImageElemOne.src = Image_Sources[Active_Images[0]];
    }, 1000);
    activeDiv = 2;

  } else {
    //Active Div is 2
    ImageElemTwo.className = "BackgroundImage animated fadeOutRight";
    setTimeout(()=>{
      ImageElemTwo.className = "BackgroundImage";
      ImageElemTwo.style.zIndex = -1;
      ImageElemOne.style.zIndex = 0;

      //Switch Image Element one image...
      Active_Images[1] += 1;
      //If outside image array bounds reset to 0.
      if(Active_Images[1] > Image_Sources2.length-1){Active_Images[1] = 0;}
      ImageElemTwo.src = Image_Sources2[Active_Images[1]];

    }, 1000)

    activeDiv = 1;
  }
}

class NelgaraMaster {
  //Master Javascript class.
  constructor(document) {
    this.Display = false;
    this.ctx = document;
    if(window.innerWidth < 1528) {
      this.SmallMode = true;
      console.log("hi");
      document.getElementById("Nav").style.display = "none !important";
      document.getElementById("NavDark").style.display = "none !important";
    } else {
      this.SmallMode = false;
    }
    this.DarkMode = false;
    this.Gate = true;
  }

  InitializeBanner(arrayone, arraytwo) {
    Image_Sources = arrayone;
    Image_Sources2 = arraytwo;
    console.log(arrayone);
    document.getElementById("ImgOne").src = Image_Sources[0];
    document.getElementById("ImgOne").style.width = "100%";
    document.getElementById("ImgOne").style.height = "100%";
    document.getElementById("ImgTwo").src = Image_Sources2[0];
    document.getElementById("ImgTwo").style.width = "100%";
    document.getElementById("ImgTwo").style.height = "100%";

  }

  SetGate(value) {
    this.Gate = value
  }

  GetGate() {
    return this.Gate;
  }

  GetDarkMenuElement() {
    return document.getElementById("NavDark");
  }

  GetDarkMode() {
    return this.DarkMode;
  }

  SetDarkMode(value) {
    this.DarkMode = value;
  }

  GetSmallMode() {
    return this.SmallMode;
  }

  SetSmallMode(value) {
    this.SmallMode = value;
  }

  SetDisplay(value) {
    this.Display = value;
  }
  GetDisplay() {
    return this.Display;
  }

  GetMenuElement() {
    return this.ctx.getElementById("Nav");
  }



  OnServicesClick(page) {
    document.location.href = page;
  }



  Initialize() {
    this.MenuIcon = document.getElementById("Hamburger");
    this.MenuIcon.addEventListener("click", OnClickHM, false);

    this.DarkMenuIcon = document.getElementById("HamburgerDark");
    this.DarkMenuIcon.addEventListener("click", OnClickHM, false);

    this.LightSwitch = document.getElementById("LightSwitch");
    this.LightSwitch.addEventListener("click", OnClickLightSwitch, false);

    this.DarkLightSwitch = document.getElementById("LightSwitchDark");
    this.DarkLightSwitch.addEventListener("click", OnClickLightSwitch, false);
    var tick = 0;
    var runTime = 0;

      //Test Stuff for animating carousel...
    function animate() {
      tick += 1;
      if(tick%60 == 0) {
        runTime += 1;
      }

      if(runTime - lastSwitch >= 10) {
        Change();
        lastSwitch = runTime;
      }

      CheckMenuState();

      requestAnimationFrame(animate);
    }
    animate();
  }


}

function OnScroll(e) {
  var elem = document.getElementById("Footer");
  var val = (document.documentElement.scrollTop  + $(window).height());
  if(val >= $(document).height()) {
    if(elem.style.display == "none" || elem.style.display == "") {
      elem.style.display = "block";
      elem.className = "animated fadeInUp";
    }
  } else {
    if(elem.style.display == "block") {
      elem.className = "animated fadeOutDown";
      setTimeout(() => {
        elem.style.display = "none";
      }, 1000);
    }
  }
}

function OnServicesClick(e) {

}
