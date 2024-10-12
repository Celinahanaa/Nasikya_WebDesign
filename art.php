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
    <title>Art</title>
    <link rel="stylesheet" href="art.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
    
    <!-- kategori start -->
    <div class="button-container">
      <button class="custom-button">All</button>
      <button class="custom-button">Nature</button>
      <button class="custom-button">Abstrak</button>
      <button class="custom-button">Mozaik</button>
      <button class="custom-button">Retro</button>
    </div>
    <!-- kategori end -->
  
    <!-- img gallery start -->
    <div class="image-container" id="artimage">
      <div class="image-grid">
        <img src="img/abstrak1.jpeg" alt="image1" data-category="Abstrak" data-name="Abstrack Roses" data-author="Runay Elang" data-story="This painting could be expressing emotions, ideas, or even an abstract representation of a landscape or event, but ultimately, it invites the viewer to find their own meaning in the colors and forms.">
        <img src="img/abstrak2.jpeg" alt="image2" data-category="Abstrak" data-name="Bacardi Roses" data-author="Belezza" data-story="This particular painting could reflect a mood, a fleeting moment of inspiration, or even the artist's internal experience. The rich texture and spontaneous application of paint may suggest freedom, experimentation, or an exploration of balance between chaos and harmony.">
        <img src="img/nature1.jpeg" alt="image3" data-category="Nature" data-name="Lake Celina" data-author="Celina Hana" data-story="This painting depicts a serene, picturesque sunset scene, where the golden hues of the setting sun reflect beautifully off the calm waters. The sky is filled with warm oranges, reds, and yellows, blending into softer blues as the light fades into the horizon.">
        <img src="img/nature2.jpg" alt="image4" data-category="Nature" data-name="Sunset " data-author="Junizar Coloway" data-story="Creations inspired by serene natural moments, where the artist captures the beauty of day transitioning to night, inviting the viewer to experience the calm and beauty of a sunset at sea">
        <img src="img/mozaik1.jpg" alt="image5" data-category="Mozaik" data-name="Woman Mozaik" data-author="Benedicta Zefanya" data-story="The background of this piece likely stems from an admiration of historical portraiture, perhaps inspired by eras like the Victorian or early 20th century. ">
        <img src="img/mozaik2.jpg" alt="image6" data-category="Mozaik" data-name="Benedicta" data-author="Annel Daksha" data-story="The background of this piece likely stems from the artist’s desire to merge natural landscapes with the expressive qualities of mosaic art. ">
        <img src="img/retro1.avif" alt="image7" data-category="Retro" data-name="Uptown Girl" data-author="Westlife" data-story="The illustration depicts a stylish woman with a vintage aesthetic, evoking the 1950s or 1960s. She is wearing a green dress with a yellow belt, listening to music through headphones, and appears to be standing near a retro radio. ">
        <img src="img/retro2.avif" alt="image8" data-category="Retro" data-name="Man in Camera" data-author="Alexa" data-story="The illustration portrays a figure in a suit with a retro radio as a head, set against a bold, vivid red background. The character's attire, featuring a beige suit and red tie, suggests a classic, perhaps mid-20th century, style.">
        <img src="img/retro3.jpeg" alt="image9" data-category="Retro" data-name="Art Woman" data-author="Runay" data-story="The painting appears to be a self-portrait of a female artist, likely from the Renaissance period, given the style of clothing and painting techniques. The woman is depicted at an easel, holding a brush and palette, which suggests that she is actively engaged in her craft. ">
        <img src="img/retro4.jpg" alt="image10" data-category="Retro" data-name="Women Women" data-author="Celin" data-story="The image you provided is a well-known painting called Girl with a Pearl Earring, created by the Dutch artist Johannes Vermeer around  1665. It is often referred to as the Mona Lisa of the North because of the girl mysterious expression.">
      </div>
      <div class="popup" id="popup">
        <div class="contentBox">
            <div class="close"></div>
            <div class="imgBx">
                <img src="" id="popup-img-element" alt="">
            </div>
            <div class="content">
                <div>
                    <h3 id="image-name"></h3>
                    <h2 id="image-author"></h2>
                    <p id="image-story"></p>
                    <button class="btn-secondary like-review">
                        <i class="fa fa-heart" aria-hidden="true"></i> Like
                    </button>                    
                </div>
            </div>
        </div>    
    </div>
    </div>
    <!-- img gallery end -->

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
      // cursors js start
      const coords = { x: 0, y: 0 };
      const circles = document.querySelectorAll(".circle");
      const colors = [
        "#ef2d7c", "#e30d9b", "#d300af",
        "#a41dbd", "#8630b9",
        "#643cae", "#3e439d",
      ];
      circles.forEach(function (circle, index) {
        circle.x = 0;
        circle.y = 0;
        circle.style.backgroundColor = colors[index % colors.length];
      });
      window.addEventListener("mousemove", function(e) {
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
      
      // Filter images by category
      const buttons = document.querySelectorAll('.custom-button');
      const images = document.querySelectorAll('.image-grid img');
      buttons.forEach(button => {
        button.addEventListener('click', () => {
          const category = button.textContent; 
          images.forEach(image => {
            image.style.display = category === "All" || image.getAttribute('data-category') === category ? "block" : "none";
          });
        });
      });
      
      // Popup functionality
      const popup = document.getElementById('popup');
      const popupImg = document.getElementById('popup-img-element');
      const closeBtn = document.querySelector('.close'); 
      const imageName = document.getElementById('image-name'); 
      const imageAuthor = document.getElementById('image-author'); 
      const imageStory = document.getElementById('image-story'); 
      images.forEach(image => {
        image.addEventListener('click', () => {
          const imgSrc = image.src;
          popupImg.src = imgSrc;
          imageName.textContent = image.getAttribute('data-name');
          imageAuthor.textContent = image.getAttribute('data-author');
          imageStory.textContent = image.getAttribute('data-story') || ''; 
          popup.style.display = 'flex';
          const likeButton = document.querySelector('.like-review');
          let liked = localStorage.getItem(imgSrc) === 'true';
          if (liked) {
            likeButton.innerHTML = '<i class="fa fa-heart" aria-hidden="true"></i> You liked this';
            likeButton.querySelector('.fa-heart').classList.add('animate-like');
          } else {
            likeButton.innerHTML = '<i class="fa fa-heart" aria-hidden="true"></i> Like';
            likeButton.querySelector('.fa-heart').classList.remove('animate-like');
          }
          likeButton.onclick = function() {
            liked = !liked;
            localStorage.setItem(imgSrc, liked);
            if (liked) {
              likeButton.innerHTML = '<i class="fa fa-heart" aria-hidden="true"></i> You liked this';
              likeButton.querySelector('.fa-heart').classList.add('animate-like');
            } else {
              likeButton.innerHTML = '<i class="fa fa-heart" aria-hidden="true"></i> Like';
              likeButton.querySelector('.fa-heart').classList.remove('animate-like');
            }
          };
        });
      });
      closeBtn.addEventListener('click', () => {
        popup.style.display = 'none';
      });

      //navbar start
      let header = document.querySelector("header");
      let aboutSection = document.querySelector("#artimage");
      window.addEventListener("scroll", function() {
      let aboutSectionTop = aboutSection.offsetTop;

      if (window.scrollY >= aboutSectionTop - 50) { 
          header.classList.add("scrolled");
      } else {
          header.classList.remove("scrolled"); 
      }
      });
      </script>
    <!-- script -->
</body>
</html>
