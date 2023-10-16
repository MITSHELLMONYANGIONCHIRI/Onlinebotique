<!DOCTYPE html>
<html>



<body>
  <section class="carousel-container">
    <div class="carousel-slide">
      <div class="carousel-content">
        <h2>Black Friday Specials</h2>
        <p>Massive discounts for Black Friday!</p>
        <div style="margin-left: 120px;" id="countdown"></div>
        <button style="margin-top: 30px;" class="carousel-button1">Shop Now</button>
      </div>
      <img style="width: 48%;" src="assets\img\slider\slider-1.png" alt="Slide 1">
    </div>
    <div class="carousel-slide">
      <div class="carousel-content">
        <h2>Hot promotions</h2>
        <p>Fashion Trending</p>
        <p class="description">Save more with coupons & up to 20% off. Great Collection.</p>
        <button class="carousel-button1">Shop Now</button>

      </div>
      <img src="assets\img\slider\slider-2.png" alt="Slide 2">
    </div>

    <div class="carousel-slide">
      <div class="carousel-content">
        <h2>Trade-in offer</h2>
        <p>Supper value deals</p>
        <p class="description">Save more with coupons & up to 70% off. On all products.</p>
        <button class="carousel-button">Shop Now</button>
      </div>
      <img src="assets\img\slider\slider-2.png" alt="Slide 2">
    </div>
    <style>
      /* Style for the countdown timer */
      #countdown {
        font-size: 24px;
        font-weight: bold;
        margin-top: 10px;
      }
    </style>
 <script>
    // Calculate the remaining time until Black Friday
    function calculateTimeUntilBlackFriday() {
      const now = new Date();
      const blackFridayDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 0, 0, 0);
      while (blackFridayDate.getDay() !== 5) {
        blackFridayDate.setDate(blackFridayDate.getDate() + 1);
      }
      const timeRemaining = blackFridayDate - now;
      // Calculate days, hours, minutes, and seconds
      const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
      return { days, hours, minutes, seconds };
    }
    function updateCountdown() {
      const { days, hours, minutes, seconds } = calculateTimeUntilBlackFriday();
      if (days === 0 && hours === 0 && minutes === 0 && seconds === 0) {
        document.getElementById('countdown').innerHTML = 'Black Friday is here!';
      } else {
        document.getElementById('countdown').innerHTML = ` ${days}d ${hours}h ${minutes}m ${seconds}s`;
      }
    }
    // Update the countdown every second
    setInterval(updateCountdown, 1000);
    // Initial call to set up the countdown
    updateCountdown();
  </script>


    <div class="carousel-dots"></div>
    <button class="prev-button" onclick="prevCarousel()"><i class="fas fa-chevron-left"></i></button>
    <button class="next-button" onclick="nextCarousel()"><i class="fas fa-chevron-right"></i></button>
  </section>

</body>

</html>

<script>
  const slides = document.querySelectorAll('.carousel-slide');
  const dotContainer = document.querySelector('.carousel-dots');
  const dots = [];

  let currentSlide = 0;
  let slideInterval;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.display = i === index ? 'flex' : 'none';
    });
  }

  function createDots() {
    slides.forEach((_, i) => {
      const dot = document.createElement('div');
      dot.classList.add('carousel-dot');
      dot.addEventListener('click', () => goToSlide(i));
      dotContainer.appendChild(dot);
      dots.push(dot);
    });
    updateDots();
  }

  function updateDots() {
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === currentSlide);
    });
  }

  function nextCarousel() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
    updateDots();
  }

  function prevCarousel() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
    updateDots();
  }

  function goToSlide(index) {
    currentSlide = index;
    showSlide(currentSlide);
    updateDots();
  }

  function startCarousel() {
    slideInterval = setInterval(() => nextCarousel(), 7000); // Change slide every 3 seconds
  }

  function stopCarousel() {
    clearInterval(slideInterval);
  }

  showSlide(currentSlide);
  createDots();
  startCarousel(); // Start the carousel automatically
</script>

<style>
  /* Add styles for the carousel dots */
  .carousel-button {
    background-image: url('assets/img/btn-brush-bg-2.png');
    background-color: transparent;
    background-size: cover;
    padding: 5px 30px;
    margin: 100px;
    font-size: 18px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }

  .carousel-button:hover {
    opacity: 0.8;
  }

  .carousel-button1 {
    background-image: url('assets/img/btn-brush-bg-1.png');
    background-color: transparent;
    background-size: cover;
    padding: 5px 30px;
    margin: 100px;
    font-size: 18px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }

  .carousel-button1:hover {
    opacity: 0.8;
  }


  .carousel-dots {
    text-align: center;
    margin-top: 10px;
  }

  .carousel-dot {
    width: 10px;
    height: 10px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
  }

  .carousel-dot.active {
    background-color: red;
  }

  /* Add styles for carousel slides and content */
  .carousel-slide {
    display: flex;
    align-items: center;
  }

  .carousel-slide img {
    width: 48%;
    height: auto;
    margin-top: 20px;

  }

  .carousel-content {
    flex: 1;
    padding: 20px;
  }

  .carousel-content h2 {
    font-size: 24px;
    margin-bottom: 10px;
    margin-left: 120px;
    margin-top: 60px;
  }

  .carousel-content p {
    font-size: 18px;
    margin-bottom: 10px;
    margin-left: 120px;

  }

  .carousel-content .description {
    font-size: 14px;
  }

  /* Styles for previous and next buttons */
  .prev-button,
  .next-button {
    position: absolute;
    top: 60%;
    font-size: 24px;
    background: none;
    border: none;
    cursor: pointer;

  }

  .prev-button {
    left: 10px;
    transform: translateY(-50%);

  }

  .next-button {
    right: 10px;
    transform: translateY(-50%);
  }
</style>