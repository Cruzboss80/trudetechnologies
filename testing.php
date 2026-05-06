ff<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Info</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    body{
      background:#111;
      font-family: Arial, sans-serif;
      padding:40px;
    }

    .contact-box {
      background: #000;
      color: #fff;
      padding: 25px 30px;
      width: fit-content;
      border-radius: 10px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 15px;
      font-size: 16px;
    }

    .contact-item a {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 15px;
      transition: color 0.3s ease;
    }

    .contact-item a:hover {
      color: #00bcd4;
    }

    .contact-item i {
      color: #00bcd4;
      font-size: 18px;
      width: 20px;
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="contact-box">

    <div class="contact-item">
      <a href="tel:09030615876">
        <i class="fa-solid fa-phone"></i>
        <span>09030615876</span>
      </a>
    </div>

    <div class="contact-item">
      <a href="https://wa.me/2349030615876" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
        <span>09030615876</span>
      </a>
    </div>

    <div class="contact-item">
      <a href="mailto:info@ocmtechnologies.com">
        <i class="fa-solid fa-envelope"></i>
        <span>info@ocmtechnologies.com</span>
      </a>
    </div>

    <div class="contact-item">
      <a href="https://facebook.com/" target="_blank">
        <i class="fa-brands fa-facebook"></i>
        <span>Ocm Technologies</span>
      </a>
    </div>

    <div class="contact-item">
      <a href="https://instagram.com/" target="_blank">
        <i class="fa-brands fa-instagram"></i>
        <span>Ocm Technologies</span>
      </a>
    </div>

    <div class="contact-item">
      <a href="https://twitter.com/OcmTechnologies" target="_blank">
        <i class="fa-brands fa-twitter"></i>
        <span>@OcmTechnologies</span>
      </a>
    </div>

    <div class="contact-item">
      <a href="https://linkedin.com/" target="_blank">
        <i class="fa-brands fa-linkedin"></i>
        <span>OCM Technologies</span>
      </a>
    </div>

    <div class="contact-item">
      <a href="https://youtube.com/" target="_blank">
        <i class="fa-brands fa-youtube"></i>
        <span>OCM Technologies Tv</span>
      </a>
    </div>

  </div>

</body>
</html>
