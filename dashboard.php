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
    <title>Dashboard</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/ionicons@5.5.2/dist/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
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

    <!-- 3d image start -->
    <div class="banner">
        <img class="background1" src="asset/background.png" alt="">
        <div class="slider" style="--quantity: 10">
            <div class="item" style="--position: 1"><img src="img/mozaik1.jpg" alt=""></div>
            <div class="item" style="--position: 2"><img src="img/mozaik2.jpg" alt=""></div>
            <div class="item" style="--position: 3"><img src="img/nature1.jpeg" alt=""></div>
            <div class="item" style="--position: 4"><img src="img/nature2.jpg" alt=""></div>
            <div class="item" style="--position: 5"><img src="img/retro1.avif" alt=""></div>
            <div class="item" style="--position: 6"><img src="img/retro2.avif" alt=""></div>
            <div class="item" style="--position: 7"><img src="img/retro3.jpeg" alt=""></div>
            <div class="item" style="--position: 8"><img src="img/retro4.jpg" alt=""></div>
            <div class="item" style="--position: 9"><img src="img/abstrak1.jpeg" alt=""></div>
            <div class="item" style="--position: 10"><img src="img/abstrak2.jpeg" alt=""></div>
        </div>
        <div class="content">
            <h1>
                WELCOME
            </h1>
        </div>
    </div>
    <!-- 3d image end -->

    <!-- quotes start -->
    <section id="about">
      <div class="container">
          <div class="textBx">
              <h2 class="title">Oscar Wilde</h2>
              <br>
              <p>
                “If a work of art is rich, vital, and complete, those with an artistic instinct will see its beauty, and those interested more in ethics than in aesthetics, will see its moral lesson.” 
              </p>
          </div>
      </div>
    </section>
    <!-- quotes end -->

    <!-- slider img start -->
    <section id="tranding">
      <div class="container">
        <h3 class="text-center section-subheading">- Favorite -</h3>
        <h1 class="text-center section-heading">Art</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="img/abstrak2.jpeg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="paint-name">
                    Bacardi Roses
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="img/mozaik1.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="paint-name">
                    Woman Mozaik
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="img/nature1.jpeg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="paint-name">
                    Lake Celina
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- slider img end -->

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
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
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

// slider js start
var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  // slider js end

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