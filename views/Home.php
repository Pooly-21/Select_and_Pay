<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/stylesheet.css">
    <title>STRAWHATS ` STORE</title>
</head>
<body>
<section id="home">

<div class="slider">
  <div class="slide active">
    <img src="../img/HomeBackground.jpg" alt="">
    <div class="info">
      <h2>WELCOME!</h2>
      <p>Hope you find the reservation you're looking for, click anywhere on carousel or click on sign up above when youre done sightseeing ;) </p>
    </div>
  </div>
  <div class="slide">
    <img src="../img/HomeBackground.jpg" alt="">
    <div class="info">
      <h2>SINGLES</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="slide">
    <img src="../img/HomeBackground.jpg" alt="">
    <div class="info">
      <h2>DOUBLES</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="slide">
    <img src="../img/HomeBackground.jpg" alt="">
    <div class="info">
      <h2>HOTELS WITH THE BEST VIEWS</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="slide">
    <img src="../img/HomeBackground.jpg" alt="">
    <div class="info">
      <h2>BEST DEALS</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="navigation">
    <i class="fas fa-chevron-left prev-btn"></i>
    <i class="fas fa-chevron-right next-btn"></i>
  </div>
  <div class="navigation-visibility">
    <div class="slide-icon active"></div>
    <div class="slide-icon"></div>
    <div class="slide-icon"></div>
    <div class="slide-icon"></div>
    <div class="slide-icon"></div>
  </div>
</div>
</section>


<!-- ================================= JAVASCRIPT FOR INTERACTIVITY OF HOME HOTEL SLIDER =================================== -->
<script type="text/javascript"> 
    const slider = document.querySelector(".slider");
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        const slides = document.querySelectorAll(".slide");
        const slideIcons = document.querySelectorAll(".slide-icon");
        const numberOfSlides = slides.length;
        var slideNumber = 0;

        //image slider next button
        nextBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumber++;

        if(slideNumber > (numberOfSlides - 1)){
            slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
        });

        //image slider previous button
        prevBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumber--;

        if(slideNumber < 0){
            slideNumber = numberOfSlides - 1;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
        });

        //image slider autoplay
        var playSlider;

        var repeater = () => {
        playSlider = setInterval(function(){
            slides.forEach((slide) => {
            slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
            });

            slideNumber++;

            if(slideNumber > (numberOfSlides - 1)){
            slideNumber = 0;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        }, 4000);
        }
        repeater();

        //stop the image slider autoplay on mouseover
        slider.addEventListener("mouseover", () => {
        clearInterval(playSlider);
        });

        //start the image slider autoplay again on mouseout
        slider.addEventListener("mouseout", () => {
        repeater();
        });

</script>
</body>
</html>