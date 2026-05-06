<style>
*{
  margin: 0;
  box-sizing: border-box;
}


.slider{
  position: relative;
  height: 100vh;
  overflow: hidden;
}

/* Slide */
.slide{
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  opacity: 0;
  transition: opacity 1s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Overlay */
.slide::before{
  content: "";
  position: absolute;
  inset: 0;
  background-color: rgba(40, 55, 151, 0.4);
}

/* Text */
.slide h2{
  position: relative;
  z-index: 1;
  color: #fff;
  font-size: clamp(1.8rem, 5vw, 5rem);
  font-family: 'Lucida Sans', Geneva, Verdana, sans-serif;
  text-align: center;
  padding: 0 20px;
  line-height: 1.3;
  max-width: 90%;
  text-shadow: 0 2px 8px rgba(0,0,0,0.5);
}

/* Active slide */
.slide.active{
  opacity: 1;
  z-index: 1;
}

/* Mobile height */
@media (max-width: 768px){
  .slider{
    height: 70vh;
  }
}

@media (max-width: 480px){
  .slider{
    height: 60vh;
  }
}
</style>


<div class="slider">
  <div class="slide active" style="background-image: url('pics/site.png');">
    <h2>We Build Develop And Deploy All Kinds Of Websites.</h2>
  </div>

  <div class="slide" style="background-image: url('pics/lgm.png');">
    <h2>Community Where TOP Notch Is The Priority.</h2>
  </div>
</div>

<script>
window.addEventListener('DOMContentLoaded', function () {
  let slides = document.querySelectorAll('.slide');
  let current = 0;

  setInterval(() => {
    slides[current].classList.remove('active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
  }, 3000);
});
</script>

