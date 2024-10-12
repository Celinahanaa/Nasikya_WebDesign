<?php 
session_start(); 
require 'koneksi.php';

if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://unpkg.com/ionicons@5.5.2/dist/ionicons.css" rel="stylesheet">
</head>
<body>
    <!-- cursor start -->
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <!-- cursor end -->

    <!-- navbar start -->
    <header>
        <h2 class="logo">MAHANTA</h2>
        <nav class="navigation">
            <a href="dashboard.php">Home</a>
            <a href="about.php">About</a>
            <a href="art.php">Art</a>
            <a href="logout.php" class="btnlogout-popup">Logout</a>
        </nav>
    </header>
    <!-- navbar end -->
    
    <!-- parallax start -->
    <section class="banner">
      <img src="asset/background.png" id="bg" alt="">
      <img src="asset/love.png" id="love" alt="">
      <img src="asset/mahanta.png" id="text" alt="">
      <img src="asset/ombak1.png" id="ombak" alt="">
      <img src="asset/ombak2.png" id="ombik" alt="">
    </section>
    <!-- parallax end -->

    <!-- about start -->
    <section id="about">
        <div class="container">
            <div class="textBx">
                <h2 class="title">What Is Mahanta ?</h2>
                <br>
                <p>
                Mahanta is a digital platform created specifically to highlight and promote visual arts by various artists. We are here with a strong vision to become a bridge between artists and art lovers through the concept we are promoting, namely "Empowering Interaction". Our platform is specifically designed to expand opportunities for artists to showcase their work to the world, while art lovers can easily explore and appreciate the various works on display. <br> <br> Carrying the theme of interaction, Mahanta is not only an exhibition venue, but also a community where artists can share the stories behind each work they create. Users, both artists and art fans, can interact more closely through comments, discussions and various other forms of creative collaboration. This is a platform that empowers artists to continue creating, while opening a space for art fans to better understand and actively engage with the work they love.
            </div>
            <div class="imgBx">
                <img src="asset/y2k.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- about end -->
    
    <!-- chat start -->
    <a href="https://wa.me/62895371405852" target="_blank">
      <button class="btn-floating-whatsapp">
          <span class="iconwa"><ion-icon name="chatbubbles-outline"></ion-icon></span>
      </button>
    </a>
    <!-- chat end -->
    
    <!-- footer start -->
    <footer class="footer">
      <div class="containers">
        <div class="rows">
          <div class="footer-logo">
            <h4>MAHANTA</h4>
          </div>
          <div class="footer-col">
            <h4>Kategori</h4>
            <ul>
            <li><a href="art.php" target="_blank">Nature</a></li>
                <li><a href="art.php" target="_blank">Abstrak</a></li>
                <li><a href="art.php" target="_blank">Mozaik</a></li>
                <li><a href="art.php" target="_blank">Retro</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow</h4>
            <div class="social-links">
              <a href="https://www.youtube.com" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
              <a href="https://www.instagram.com" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
              <a href="https://x.com" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-bar">
        <p>&copy; 2024 MAHANTA. All rights reserved</p>
      </div>
   </footer>
   <!-- footer end -->

<!-- script -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
// parallax start
let pyramid = document.getElementById('love');
let text = document.getElementById('text');
let stone = document.getElementById('ombak');
let man = document.getElementById('ombik');
window.addEventListener('scroll',function(){
  let value = window.scrollY; 
  love.style.right = value * 0.25 +'px';
  text.style.left = value * 2 +'px';
  ombak.style.right = value * 1 +'px';
  ombik.style.left = value * 0.5  +'px';
});
// parallax end

//cursors js start
const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle");
const colors = [
  "#ef2d7c",
  "#e30d9b",
  "#d300af",
  "#be00ba",
  "#a41dbd",
  "#8630b9",
  "#643cae",
  "#3e439d",
];
circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});
window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
});
function animateCircles() { 
  let x = coords.x;
  let y = coords.y; 
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    circle.style.scale = (circles.length - index) / circles.length; 
    circle.x = x;
    circle.y = y;
    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.3;
    y += (nextCircle.y - y) * 0.3;
  });
  requestAnimationFrame(animateCircles);
}
animateCircles();
// cursors js end

//navbar start

let header = document.querySelector("header");
  let aboutSection = document.querySelector("#about");

  window.addEventListener("scroll", function() {
      let aboutSectionTop = aboutSection.offsetTop;

      if (window.scrollY >= aboutSectionTop - 50) { 
          header.classList.add("scrolled");
      } else {
          header.classList.remove("scrolled"); 
      }
  });
//navbar end
</script>
<!-- script -->
</body>
</html>