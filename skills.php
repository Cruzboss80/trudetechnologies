<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Skills Section</title>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
body{
  margin: 0;
  font-family: Arial, sans-serif;
}

.skills{
  padding: 40px 20px;
  text-align: center;
}

.skills h1{
  color: black;
  font-size: 30px;
}

.sk1{
  color: black;
  font-size: 20px;
  font-weight: bolder;
}

.skbg{
  margin-top: 30px;
  background-image: url(images.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: auto;
  border-radius:15px;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 30px;
  flex-wrap: wrap;
}

.skill-card{
  width: 260px;
  padding: 20px;
  border-radius: 16px;
  background: linear-gradient(145deg, #1c2a44, #0f172a);
  color: white;
  box-shadow: 0 10px 30px rgba(0,0,0,0.4);
  text-align: left;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.skill-header{
  display: flex;
  align-items: center;
  gap: 12px;
}

.skill-header .icon{
  background: #12213a;
  color: #19b5e5;
  padding: 10px;
  border-radius: 10px;
  font-size: 20px;
}

.skill-header h3{
  color: #19b5e5;
  margin: 0;
}

.skill-card hr{
  border: none;
  height: 1px;
  background: #19b5e5;
  margin: 15px 0;
  opacity: 0.5;
}

.skill-card ul{
  list-style: none;
  padding: 0;
  margin: 0;
}

.skill-card ul li{
  margin: 8px 0;
  display: flex;
  align-items: center;
}

.skill-card ul li::before{
  content: "▶";
  color: #19b5e5;
  font-size: 10px;
  margin-right: 10px;
}

.skill-card:hover{
  transform: translateY(-12px);
  box-shadow: 0 25px 60px rgba(28, 181, 224, 0.45);
}

.cv{
    background-color:cyan;
}

@media (max-width: 768px){
  .skbg{
    height: auto;
    padding: 40px 0;
  }
}
</style>
</head>

<body>
<div class="cv">
<div class="skills">
  <h1>SKILLS</h1>

  <p class="sk1">
    I bring a comprehensive full-stack skill set with expertise in both frontend and backend development.<br>
    My experience spans creating responsive web applications, building robust server-side systems, and<br>
    developing cross-platform mobile solutions—ensuring seamless, high-performance digital<br>
    experiences across all devices and platforms.
  </p>

  <div class="skbg">

    <!-- Frontend -->
    <div class="skill-card" data-aos="zoom-in">
      <div class="skill-header">
        <span class="icon">&lt;/&gt;</span>
        <h3>Frontend</h3>
      </div>
      <hr>
      <ul>
        <li>HTML5</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>jQuery</li>
        <li>Dart</li>
        <li>Flutter</li>
        <li>Responsive Design</li>
      </ul>
    </div>

    <!-- Backend -->
    <div class="skill-card" data-aos="zoom-in">
      <div class="skill-header">
        <span class="icon">{ }</span>
        <h3>Backend</h3>
      </div>
      <hr>
      <ul>
        <li>PHP</li>
        <li>MySQL</li>
        <li>REST APIs</li>
        <li>Authentication</li>
        <li>Server Logic</li>
      </ul>
    </div>

    <!-- Mobile -->
    <div class="skill-card" data-aos="zoom-in">
      <div class="skill-header">
        <span class="icon">📱</span>
        <h3>Mobile</h3>
      </div>
      <hr>
      <ul>
        <li>Flutter</li>
        <li>Dart</li>
        <li>Android</li>
        <li>Cross-Platform</li>
      </ul>
    </div>

    <!-- Database -->
    <div class="skill-card" data-aos="zoom-in">
      <div class="skill-header">
        <span class="icon">🗄️</span>
        <h3>Database</h3>
      </div>
      <hr>
      <ul>
        <li>MySQL</li>
        <li>Firebase</li>
        <li>Supabase</li>
        <li>Data Modeling</li>
      </ul>
    </div>

    <!-- Tools (NEW — added only) -->
    <div class="skill-card"  data-aos="zoom-in">
      <div class="skill-header">
        <span class="icon">🛠️</span>
        <h3>Tools</h3>
      </div>
      <hr>
      <ul>
        <li>Cloud</li>
        <li>Postman</li>
        <li>API Docs</li>
        <li>Git</li>
        <li>Firebase</li>
        <li>Supabase</li>
      </ul>
    </div>

  </div>
</div>


</div>



  <script>
    AOS.init({
      offset: 120,
      duration: 2000,
      easing: 'ease-out',
    });
  </script>



</body>
</html>
