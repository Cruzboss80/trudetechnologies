<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <!-- FIXED viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Navbar</title>

  <link rel="stylesheet" href="mystyle.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

 

   header {
  width: 100%;
  height: 85px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;

  background: transparent; /* initial transparent */

  font-family: 'Montserrat', sans-serif;

  transition: background 0.6s ease, box-shadow 0.6s ease;
}


header.scrolled{
  background: cyan ;
  backdrop-filter: blur(10px);
}


    .heading {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 5%;
    }

    .logo img {
  max-height:55px;
    }

    .desktop-nav ul {
      display: flex;
      list-style: none;
      gap: 15px;
    }

    .desktop-nav ul li a {
      text-decoration: none;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .desktop-nav ul li a:hover {
      color: #1FA9E2;
    }

    .btn {
      width: 160px;
      background-color: #1784B2;
      color: white;
      padding: 13px 18px;
      border-radius: 18px;
      text-decoration: none;
      font-weight: bold;
      border: none;
      margin-top: -10px;
      margin-left: 100px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #1FA9E2;
    }

    #navicon {
      display: none;
      font-size: 30px;
      cursor: pointer;
      color: cyan;
      margin-top: -10px;
    }

    .navi {
      display: none;
      position: fixed;
      top: 0;
      left: -100%;
      width: 90%;
      height: 100vh;
      background-color: cyan;
      transition: left 0.6s ease-in-out;
      z-index: 1000;
      box-shadow: 2px 0 10px rgba(0,0,0,0.2);
    }

    .navi.active {
      left: 0;
    }

    .navi nav ul {
      list-style: none;
      padding-top: 20px;
    }

    .navi nav ul li {
      padding: 15px;
      border-top: 1px solid grey;
    }

    .navi nav ul li a {
      text-decoration: none;
      font-size: 18px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    #closeNav {
      position: absolute;
      top: 25px;
      right: 15px;
      font-size: 40px;
      cursor: pointer;
      color: #1784B2;
    }

    .Navbtn {
      width: 100%;
      background: #1784B2;
      border: none;
      font-size: 16px;
      padding: 10px;
      cursor: pointer;
      font-weight: 700;
      border-radius: 5px;
      color: white;
    }


    @media screen and (max-width: 768px) {

    header{
    padding:0 15px;
  }

      .desktop-nav {
        display: none;
      }

      #navicon {
        display: block;
        color:blue;
      }

      .navi {
        display: block;
        overflow-y: auto;
      }
    }
  </style>
</head>

<body>

<header>
  <div class="heading">
    <div class="logo">
      <a href="index.php">
        <img src="pics/logo.png" alt="Logo">
      </a>
    </div>

    <nav class="desktop-nav">
      <ul>
        <li><a href="index.php"><i class='bx bx-home'></i>Home</a></li>
        <li><a href="#aboutus"><i class='bx bxs-user'></i>About Us</a></li>
        <li><a href="#contact"><i class='bx bxs-envelope'></i>Contact Us</a></li>
        <li><a href="#services"><i class="fas fa-briefcase"></i>Services</a></li>
        <li>
          <a href="https://calendly.com/trudtechnologies/30min">
            <button class="btn"><i class='bx bxs-user-plus'></i> Get Started</button>
          </a>
        </li>
      </ul>
    </nav>

    <i class='bx bx-menu' id="navicon"></i>
  </div>

  <div class="navi" id="navMenu">
    <nav>
      <ul>
        <li>
          <img src="pics/logo.png" width="200" height="80">
          <i class='bx bxs-x-circle' id="closeNav"></i>
        </li>
        <li><a href="index.php"><i class='bx bx-home'></i>Home</a></li>
        <li><a href="#about"><i class='bx bxs-user'></i>About Us</a></li>
        <li><a href="#contact"><i class='bx bxs-envelope'></i>Contact Us</a></li>
        <li><a href="#services"><i class="fas fa-briefcase"></i>Services</a></li>
        <li>
          <a href="https://calendly.com/trudtechnologies/30min">
            <button class="Navbtn">Get Started</button>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>


<script>
document.addEventListener("DOMContentLoaded", function () {

  const navIcon = document.getElementById("navicon");
  const navMenu = document.getElementById("navMenu");
  const closeNav = document.getElementById("closeNav");
  const header = document.querySelector("header");

  navIcon.onclick = () => navMenu.classList.add("active");
  closeNav.onclick = () => navMenu.classList.remove("active");

  /* SCROLL EFFECT */
  window.addEventListener("scroll", function(){

      if(window.scrollY > 50){
          header.classList.add("scrolled");
      }else{
          header.classList.remove("scrolled");
      }

  });

});

</script>

</body>
</html>
