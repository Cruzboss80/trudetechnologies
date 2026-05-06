<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);


function success_alert($msg, $redirect = null) {
  echo '
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: rgba(0,0,0,0.85);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .alert-container {
      backdrop-filter: blur(5px);
      background: rgba(0,0,0,0.65);
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      box-sizing: border-box;
    }
    .alert-box {
      background: #fff;
      width: 100%;
      max-width: 400px;
      padding: 25px 20px;
      border-radius: 16px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
      animation: fadeIn 0.4s ease forwards;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }
    .alert-box i {
      font-size: 55px;
      color: #0abf30;
    }
    .alert-box h2 {
      margin: 10px 0;
      color: #333;
      font-size: 1.6rem;
    }
    .alert-box p {
      color: #555;
      font-size: 1rem;
      margin-bottom: 20px;
      line-height: 1.4;
    }
    .alert-box button {
      background: #111;
      color: #fff;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
      font-size: 1rem;
      width: 100%;
      max-width: 150px;
    }
    .alert-box button:hover {
      background: #222;
      transform: scale(1.05);
    }

    @media (max-width: 480px) {
      .alert-box {
        padding: 20px 15px;
        border-radius: 12px;
      }
      .alert-box i {
        font-size: 45px;
      }
      .alert-box h2 {
        font-size: 1.4rem;
      }
      .alert-box p {
        font-size: 0.9rem;
      }
      .alert-box button {
        font-size: 0.95rem;
        padding: 10px 20px;
      }
    }


@media (max-width: 400px) {

  .alert-box {
    max-width: 95%;
    padding: 30px 20px;
    border-radius: 18px;
  }

  .alert-box i {   
    font-size: 70px;
  }

  .alert-box h2 {
    font-size: 1.8rem; 
  }

  .alert-box p {
    font-size: 1.1rem; 
    line-height: 1.5;
  }

  .alert-box button {
    font-size: 1.1rem; 
    padding: 14px 25px;
    max-width: 180px;
  }
}

  </style>

  <div class="alert-container" id="alertContainer">
    <div class="alert-box success-alert">
      <i class="fa-solid fa-circle-check"></i>
      <h2>Success!</h2>
      <p>'.htmlspecialchars($msg).'</p>
      <button id="closeAlert">OK</button>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const closeBtn = document.getElementById("closeAlert");
      closeBtn.addEventListener("click", function() {
        document.getElementById("alertContainer").style.display = "none";
        '.($redirect ? 'window.location.href = "'.$redirect.'";' : '').'
      });
    });
  </script>
  ';
  exit;
}

function error_alert($msg, $redirect = null) {
  echo '
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: rgba(0,0,0,0.85);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .alert-container {
      backdrop-filter: blur(5px);
      background: rgba(0,0,0,0.65);
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      box-sizing: border-box;
    }
    .alert-box {
      background: #fff;
      width: 100%;
      max-width: 400px;
      padding: 25px 20px;
      border-radius: 16px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
      animation: fadeIn 0.4s ease forwards;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }
    .alert-box i {
      font-size: 55px;
      color: #e74c3c;
    }
    .alert-box h2 {
      margin: 10px 0;
      color: #333;
      font-size: 1.6rem;
    }
    .alert-box p {
      color: #555;
      font-size: 1rem;
      margin-bottom: 20px;
      line-height: 1.4;
    }
    .alert-box button {
      background: #111;
      color: #fff;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
      font-size: 1rem;
      width: 100%;
      max-width: 150px;
    }
    .alert-box button:hover {
      background: #222;
      transform: scale(1.05);
    }

    
    @media (max-width: 480px) {
      .alert-box {
        padding: 20px 15px;
        border-radius: 12px;
      }
      .alert-box i {
        font-size: 45px;
      }
      .alert-box h2 {
        font-size: 1.4rem;
      }
      .alert-box p {
        font-size: 0.9rem;
      }
      .alert-box button {
        font-size: 0.95rem;
        padding: 10px 20px;
      }
    }


@media (max-width: 400px) {

  .alert-box {
    max-width: 95%;
    padding: 30px 20px;
    border-radius: 18px;
  }

  .alert-box i {
    font-size: 70px;
  }

  .alert-box h2 {
    font-size: 1.8rem; 
  }

  .alert-box p {
    font-size: 1.1rem; 
    line-height: 1.5;
  }

  .alert-box button {
    font-size: 1.1rem; 
    padding: 14px 25px;
    max-width: 180px;
  }
}

  </style>

  <div class="alert-container" id="alertContainer">
    <div class="alert-box error-alert">
      <i class="fa-solid fa-circle-xmark"></i>
      <h2>Oops!</h2>
      <p>'.htmlspecialchars($msg).'</p>
      <button id="closeAlert">OK</button>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const closeBtn = document.getElementById("closeAlert");
      closeBtn.addEventListener("click", function() {
        document.getElementById("alertContainer").style.display = "none";
        '.($redirect ? 'window.location.href = "'.$redirect.'";' : '').'
      });
    });
  </script>
  ';
  exit;
}


function loader() {
  echo '
  <style>
    /* --- Preloader Styles --- */
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.85);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 99999999999;
      opacity: 1;
      transition: opacity 0.6s ease, visibility 0.6s ease;
    }

    .preloader.hide {
      opacity: 0;
      visibility: hidden;
    }

    .preloader i {
      font-size: 65px;
      color: #33cc99;
      
    }

    @keyframes bounce {
      0% { transform: translateY(0); }
      100% { transform: translateY(-10px); }
    }
  </style>

  <div class="preloader" id="preloader">
    <i class="fa-solid fa-coins fa-spin-pulse"></i>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const loader = document.getElementById("preloader");
      if (loader) {
        window.addEventListener("load", () => {
          setTimeout(() => {
            loader.classList.add("hide");
            setTimeout(() => loader.style.display = "none", 600);
          }, 1200);
        });
      }
    });
  </script>
  ';
}


function send_email($mailhead, $email, $message, $name) {
    $mail = new PHPMailer(true);
    
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'mail.trudetechnologies.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@trudetechnologies.com';
        $mail->Password   = 'Nzubetrudtechnologies1.'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->SMTPKeepAlive = true;
        
        // Increase timeout for better reliability
        $mail->Timeout = 30;

        // Email Headers
        $mail->setFrom('info@trudetechnologies.com', 'TrudTechnologies');
        $mail->addReplyTo('info@trudetechnologies.com', 'TrudTechnologies');
        $mail->addAddress($email, $name);

        // Content Settings
        $mail->isHTML(true);
        $mail->Subject = $mailhead;
        $mail->Body    = $message;
        $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $message));
        $mail->CharSet = 'UTF-8';
        
        // Remove base64 encoding as it might cause issues
        // $mail->Encoding = 'base64';

        return $mail->send();
        
    } catch (Exception $e) {
        error_log("PHPMailer Error: " . $e->getMessage());
        return false;
    }
}
?>