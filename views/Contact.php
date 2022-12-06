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
</head>
<body class="contakt">
<!--  -->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt" color="black"></i>CAPE TOWN</div>
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
  </body>
</html>
      