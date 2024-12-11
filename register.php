<?php   include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
  <link rel="stylesheet" href="style3.css">
</head>
<body>
   
  <header>
    <div class="navbar">
       <div class="navlogo">
        <div class="logo" onclick="location.href='index.php'"></div>
       </div>
    
       <div class="navs">
        <a href="index2.php"><p>HOME</p></a> 
        <a href="About.php"><p>ABOUT US</p></a>      
        <a href="photography.php"><p>PHOTOGRAPHY</p></a> 
        <a href="contact.php"><p>GET IN TOUCH</p></a> 
        <a href="#"><p>RECENT EVENTS</p></a> 
       </div>
    </div>

</header>

<div class="register-container">

  <div class="registeration-box1">
    <h2>WELCOME</h2>
    <p>Enter your details and start your journey with us!</p>
  </div>

  <div class="register-box2">
   <div class="popup-container">
       <div class="popup-register">
           <form method="POST" action="login&register.php">
              <h2>
                 <span>USER REGISTER</span>
                 
              </h2>
              <input type="text" placeholder= "Full Name" name="fullname">
              <input type="text" placeholder="Username" name="username">
              <input type="email" placeholder="E-mail" name="email">
              <input type="password" placeholder="Password" name="password">
              <button class="login-btn" name="register">REGISTER</button>
           </form>
           <p>Already have an account?<a href="login.php">Login now</a></p>
       </div>
    </div>
 </div>

</div>

<div class="social">
   <h2>#JKPHOTOSTUDIO</h2>
   <div class="social-btn">
   <button class="social-button" type="button" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='">
     <span class="icon"><svg height="33" viewBox="0 0 128 128" width="33" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientTransform="matrix(1 0 0 -1 594 633)" gradientUnits="userSpaceOnUse" x1="-566.711" x2="-493.288" y1="516.569" y2="621.43"><stop offset="0" stop-color="#ffb900"></stop><stop offset="1" stop-color="#9100eb"></stop></linearGradient><circle cx="64" cy="64" fill="url(#a)" r="64"></circle><g fill="#fff"><path d="m82.333 104h-36.666c-11.947 0-21.667-9.719-21.667-21.667v-36.666c0-11.948 9.72-21.667 21.667-21.667h36.666c11.948 0 21.667 9.719 21.667 21.667v36.667c0 11.947-9.719 21.666-21.667 21.666zm-36.666-73.333c-8.271 0-15 6.729-15 15v36.667c0 8.271 6.729 15 15 15h36.666c8.271 0 15-6.729 15-15v-36.667c0-8.271-6.729-15-15-15z"></path><path d="m64 84c-11.028 0-20-8.973-20-20 0-11.029 8.972-20 20-20s20 8.971 20 20c0 11.027-8.972 20-20 20zm0-33.333c-7.352 0-13.333 5.981-13.333 13.333 0 7.353 5.981 13.333 13.333 13.333s13.333-5.98 13.333-13.333c0-7.352-5.98-13.333-13.333-13.333z"></path><circle cx="85.25" cy="42.75" r="4.583"></circle></g></svg></span>
     <span class="text1">Follow US</span> 
     <span class="text2">JK STUDIO</span>
   </button>
   </div>
</div>

<div class="social-img">
        <div class="boxs1 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs2 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs3 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs4 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs5 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs6 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs7 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs8 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs9 boxs" onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
        <div class="boxs10 boxs"onclick="location.href='https://www.instagram.com/jk_photo_studios?igsh=MTVyN2tzeGE0ajNtcQ=='"></div>
</div>

<footer>
  <div class="footer-container">
      <div class="footer-section">
          <h4>ABOUT US</h4>
          <p>In the year 1995, Mr. Mahesh Prajapati started his brand known as JK Photo Studio in Mehesana, Gujarat. His son, Mr. Parth Prajapati, joined him, and since then they have set high standards in the field of photography and cinematography. With over 29 years of experience, they have made a special place in the hearts and memories of more than 300 clients.</p>
      </div>
      <div class="footer-section2">
          <h4>QUICK LINKS</h4>
          <ul>
              <li><a href="index2.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="photography.php">Photography</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="#">Recent Events</a></li>
          </ul>
      </div>
      <div class="footer-section3">
          <h4>SERVICES</h4>
          <ul>
              <li><a href="prewed.php">Pre Wedding Shoot</a></li>
              <li><a href="wed.php">Wedding Photography</a></li>
              <li><a href="prt.php">Portraits</a></li>
              <li><a href="baby.php">Baby Shower & Party</a></li>
          </ul>
      </div>
  </div>

  <div class="footer-bg">
      <div class="footer-msg">
          <p>COPYRIGHT © 2024 JK PHOTO STUDIO, ALL RIGHTS RESERVED.
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            DEVELOPED BY SUJAL PRAJAPATI.
          </p>
      </div>
  </div>
</footer>

</body>
</html>


