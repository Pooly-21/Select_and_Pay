<?php 

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $subject = $_POST['subject'];
//     $mailFrom = $_POST['mail'];
//     $message = $_POST['message'];
// }

// $mailTo = "";
// $headers = "From: " . $mailFrom;
// $txt = "You have recieved an e-mail from " . $name . ".\n\n" . $message;

// mail($mailTo, $subject, $txt, $headers);
// header("Location: Contact.php?mailsend");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/stylesheet.css">
    <title>Document</title>
    <style>
      .background-image {
        background-image: url('https://images.unsplash.com/photo-1638730559083-2935c9bf6542?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80') ;
        background-size: cover;
        background-repeat: no-repeat;
        width: 180vh;
        height: 80vh;
      }
      .contact-form h2{
        color: rgb(255, 255, 255);
        text-align: center;
        font-size: 35px;
        text-transform: uppercase;
      }
      
    </style>
</head>
<body class="contakt">
<!--  -->

<div class="background-image">
    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>CAPE TOWN</div>
        <div><i class="fas fa-envelope"></i>nuhrvanderschyff727@gmail.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
          <form class="contact" action="" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your e-mail">
            <input type="text" name="subject" placeholder="subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">Send mail</button>
          </form>


        <!-- <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" >
          <input type="email" name="email" class="text-box" placeholder="Your Email" >
          <input name="message" rows="5" placeholder="Your Message" ><input>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form> -->
      </div>
    </div>
    </div>
  </body>
</html>
      