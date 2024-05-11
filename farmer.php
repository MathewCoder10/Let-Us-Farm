<?php

@include 'confige.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head link="black">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>farmer</title>
    <style>
      a{
        
       text-decoration: none;
    }
    </style>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <!--header-->
    <header id="header" class="sticky">
        <a href="#" class="logo">LUF</a>
        <ul>
            <li><a href="#home" onclick="toggle()">Home</a></li>
            <li><a href="#about" onclick="toggle()">About</a></li>
            <li><a href="#services" onclick="toggle()">Services</a></li>
            <li><a href="logout.php" onclick="toggle()">Logout</a></li>
        </ul>
        <div class="toggle" onclick="toggle()"></div>
    </header>
    <!--Banner-->
    <!--Banner-->
    <section class="banner" id="home">
        <h2>We Make <br><span> You </span>Farmer</h2>
    </section>
    <!--About-->
    <section class="sec" id="about">
     <div class="content">
      <div class="mxw800p">
        <h3>About Us</h3>
        <p>LUF is an nonprofitable company focusing on newlycoming farmer.
            We identify the suitable farm for the new generation farmers 
            and also clear their doubts by using our advisours.<br><br>
            Our aim is to motivate and help new generation to the get 
            into farming</p>

           <a href="#services" class="btn">Our Services </a>
     </div>
     </div>
    </section>
    <!--Services-->
    <section class="sec" id="services">
        <div class="content">
         <div class="mxw800p">
           <h3>Our Services</h3>
           <p>We provide facilites like finding best farming method suitable for 
            the user and also provide chating section to clear the users doubts 
            during farming and we also working hard to provid maximum facilities 
            for the farmers volunterly.We provide mainly two services they are for
             you and avisor.In for you section we provide the facility to identify
              the suitable crop for the farmer and in advisor section we provide a 
              chat section which include the farmer and the advsor.</p>
        </div>
        <div class="services">
            <a href = "filter.php" style="color:black"> 
            <div class="box">
                <div class="iconeBx">
                    <img src="44u.png">
                </div>
                <div class="content">
                    <h2>For You</h2>
                    <p>Here you can find the farming
                        area suitable for you.
                    </p>
                </div>
            </div>
            </a>
            <a href="home.php" style="color:black">
            <div class="box">
                <div class="iconeBx">
                    <img src="advisor.png">
                </div>
                <div class="content">
                    <h2>Advisor</h2>
                    <p>Here you can clear your doubts during
                        farming.
                    </p>
                </div>
             </div>
            </a>
        </div>
       </section>
       <!--footer-->
  <section class="footer">
    <p class="text"><h1>Designed and developed by let us farm team</h1></p>
 </section>
    <script type="text/javascript">
        window.addEventListener("scroll",function()
        {
           var header = document.querySelector("header");
           header.classList.toggle("sticky",window.scrollY > 0);
        })
        function toggle()
        {
            var header = document.querySelector("header");
           header.classList.toggle("active");
        }
     </script>
</body>
</html>