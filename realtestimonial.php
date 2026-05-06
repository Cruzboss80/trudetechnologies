<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Testimonial Carousel</title>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  .testimonial-section {
    padding: 50px 20px;
    border-left: 9px solid #1784B2;
    border-radius:12px;
  }

  h1 {
    text-align: center;
    color: #1784B2;
    font-size: 32px;
    margin-bottom: 30px;
  }

  .testimonial-container {
    max-width: 1200px;
    margin: auto;
    overflow: hidden;
    position: relative;
  }

  .testimonial-track {
    display: flex;
    transition: transform 0.6s ease-in-out;
  }

  .testimonial-cover {
    flex: 0 0 33.3333%;
    border-radius: 12px;
    padding: 25px;
    margin: 0 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    box-sizing: border-box;
    background: #fff;
  }

  .stars {
    color: gold;
    font-size: 18px;
    margin-bottom: 15px;
  }

  .testimonial-cover p {
    font-size: 16px;
    line-height: 1.5;
    color: black;
  }

  .testimonial-cover h3 {
    margin-top: 20px;
    margin-bottom: 5px;
    font-size: 18px;
    color: black;
  }

  .testimonial-cover small {
    color: #1784B2;
  }

  .use {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .user-photo {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    object-fit: cover;
  }

  .dots {
    text-align: center;
    margin-top: 25px;
  }

  .dot {
    display: inline-block;
    height: 12px;
    width: 12px;
    background: #ccc;
    border-radius: 50%;
    margin: 0 6px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .dot.active {
    background: #1784B2;
  }

  @media (max-width: 768px) {
    .testimonial-cover {
      flex: 0 0 95%;
    }
  }
</style>
</head>

<body>

<section class="testimonial-section" id="testimony">
  <h1>Client Experiences</h1>

  <div class="testimonial-container" id="carouselContainer">
    <div class="testimonial-track" id="testimonialTrack">

      <div class="testimonial-cover">
        <div class="stars">★★★★★</div>
        <p>“Their software helped streamline our logistics in ways we didn’t think possible.”</p>
        <div class="use">
          <div>
            <h3>Linda M.</h3>
            <small>Logistics Manager</small>
          </div>
          <img src="pics/Google.png" class="user-photo">
        </div>
      </div>

      <div class="testimonial-cover">
        <div class="stars">★★★★★</div>
        <p>“We saw a 200% increase in customer engagement after the redesign.”</p>
        <div class="use">
          <div>
            <h3>James D.</h3>
            <small>Marketing Lead</small>
          </div>
          <img src="pics/Google.png" class="user-photo">
        </div>
      </div>

      <div class="testimonial-cover">
        <div class="stars">★★★★★</div>
        <p>“Truly world-class developers. Delivered exactly what we needed.”</p>
        <div class="use">
          <div>
            <h3>Tolu A.</h3>
            <small>CTO, Agrotech</small>
          </div>
          <img src="pics/Google.png" class="user-photo">
        </div>
      </div>

      <div class="testimonial-cover">
        <div class="stars">★★★★★</div>
        <p>“Support was responsive, professional, and effective every single time.”</p>
        <div class="use">
          <div>
            <h3>Sarah L.</h3>
            <small>Project Manager</small>
          </div>
          <img src="pics/Google.png" class="user-photo">
        </div>
      </div>

      <div class="testimonial-cover">
        <div class="stars">★★★★★</div>
        <p>“I was amazed at how fast and efficient the process was.”</p>
        <div class="use">
          <div>
            <h3>Ola N.</h3>
            <small>Startup Founder</small>
          </div>
          <img src="pics/Google.png" class="user-photo">
        </div>
      </div>

    </div>
  </div>

  <div class="dots" id="dotsContainer"></div>
</section>

<script>
  const track = document.getElementById("testimonialTrack");
  const dotsContainer = document.getElementById("dotsContainer");

  let cards = Array.from(track.children);
  let perView = window.innerWidth <= 768 ? 1 : 3;
  let currentIndex = perView;
  let interval;
  let dots = [];

  function cloneSlides() {
    perView = window.innerWidth <= 768 ? 1 : 3;

    const clonesBefore = cards.slice(-perView).map(c => c.cloneNode(true));
    const clonesAfter = cards.slice(0, perView).map(c => c.cloneNode(true));

    track.innerHTML = '';
    clonesBefore.forEach(c => track.appendChild(c));
    cards.forEach(c => track.appendChild(c));
    clonesAfter.forEach(c => track.appendChild(c));

    cards = Array.from(track.children);
    updatePosition();
    createDots();
  }

  function updatePosition() {
    const cardWidth = cards[0].offsetWidth + 20;
    track.style.transition = 'none';
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
  }

  function slideNext() {
    const cardWidth = cards[0].offsetWidth + 20;
    currentIndex++;
    track.style.transition = 'transform 0.6s ease-in-out';
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    updateDots();
  }

  function handleTransitionEnd() {
    if (currentIndex >= cards.length - perView) {
      currentIndex = perView;
      updatePosition();
    }
  }

  function createDots() {
    dotsContainer.innerHTML = '';
    for (let i = 0; i < 3; i++) {
      const dot = document.createElement("span");
      dot.classList.add("dot");
      if (i === 0) dot.classList.add("active");
      dotsContainer.appendChild(dot);
    }
    dots = Array.from(dotsContainer.children);
  }

  function updateDots() {
    const index = (currentIndex - perView) % 3;
    dots.forEach(d => d.classList.remove("active"));
    dots[index].classList.add("active");
  }

  function startAutoScroll() {
    interval = setInterval(slideNext, 2500);
  }

  window.addEventListener("resize", () => location.reload());
  track.addEventListener("transitionend", handleTransitionEnd);

  window.addEventListener("load", () => {
    cloneSlides();
    startAutoScroll();
  });
</script>

</body>
</html>
