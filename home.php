<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Ogłoszenia muzyczne</title>
</head>

<body>

    <div id ="nav-ogloszenia" class="overlay"> <!--Curtain Menu-->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="overlay-content">
            <div>
                <a href="#">Ogloszenia</a>
                <a href="#">Ogloszenia</a>
                <a href="#">Ogloszenia</a>
                <a href="#">Ogloszenia</a>
            </div>
        </div>

        <div class="center"> <!--media handlers-->
            <div class="pic">
                <a href="https://www.twitter.com" target="_blank"><img src="pics/tw_light.png" align="right"></a>
            </div>
            <div class="pic">
                <a href="https://www.facebook.com" target="_blank"><img src="pics/fb_light.png" align="right"></a>
            </div>
            <div class="pic"> <!--Check this right alignment-->
                    <a href="https://www.instagram.com" target="_blank"><img src="pics/instagram_light.png" align="right"></a>
            </div>
        </div>

    </div> <!--Curtain Menu-->

<aside> <!--menu,searchbar-->

    <div> <!--menu button-->
        <span class="menu" onclick="openNav()">&#9776;</span>
        <!--<img src="pics/menu.svg" onclick="openNav()" align="left">--><!--Powiększyć ikonę menu-->
    </div> <!--menu button-->

    <div> <!--login/registration button-->
        <img src="pics/login.png" class="open_button" style="width:2vw; float:right; padding:10px; cursor:pointer;" onclick="openLoginForm()">
    </div>

    <div class="search_container">
        <input class="search_input" type="text" placeholder="   Search">
    </div>

</aside> <!--menu,searchbar-->

<div class="logo"> <!--LOGO--> 
<h1>LOGO HERE</h1>
</div>

<nav id="navbar"> <!--main navigation, home, about, etc.-->
    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">CONTACT</a></li>
    </ul>
</nav>

<main> 
  <div class="wrapper"> <!--Display div on div-->
    <div> <!--big pic-->
        <img class="background_pic" src="pics/background_pic_copy.png">
    </div>


      <div class="white"> <!--white transparent block-->

      </div>

      <div class="beige"><!--beige block--></div>

      <p class="p_white p_join_us">Dołącz do nas!</p>
      <img class="curves_top" src="pics/ju_curves.svg"> 
    
      <p class="p_white paragraph_register_top">Brak perkusisty w zespole? To nie problem!</p>
      <p class="p_white paragraph_register_middle"> A może chcesz spróbować swoich sił w duecie?</p>
    
      <p class="p_white p_login">Zaloguj się!</p>
      
      <img class="curves_bottom" src="pics/li_curves.svg">
      <p class="p_white paragraph_register_bottom">Masz już konto?</p>

  

  </div> <!--Display div on div-->

</main>


<script>
    function openNav(){
        document.getElementById("nav-ogloszenia").style.width = "100%";
    }

    function closeNav(){
        document.getElementById("nav-ogloszenia").style.width = "0%";
    }

    function openLoginForm(){
        document.getElementById("loginForm").style.display = "block";
    }

    function closeLoginForm(){
        document.getElementById("loginForm").style.display = "none";
    }

</script>


</body>


</html>