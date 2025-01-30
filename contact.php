<?php
$insert=false;
$_SERVER="localhost";
$username= "root";
$password= "";
$database= "contact";
$con= mysqli_connect($_SERVER,$username,$password,$database);
if(!$con)
    {
      die("connection is failed". mysqli_connect_error());
    }
    $fname = isset($_POST['fname']) ? $_POST['fname']: '';
    $lname = isset($_POST['fname']) ? $_POST['lname']: '';
    $phone = isset($_POST['fname']) ? $_POST['phone']: '';
    $email = isset($_POST['fname']) ? $_POST['email']: '';
    $message = isset($_POST['fname']) ? $_POST['message']: '';
    $sql  =  "INSERT INTO `contact` (`fname`, `lname`, `phone`, `email`, `message`,`datetime`)
    VALUES ('$fname', '$lname','$phone', '$email',' $message', current_timestamp())"; 
    if($con->query($sql)=== true)
    {
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Gothic&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Gothic&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
</head>
<body>
        <section id="section-wrapper">
            <div class="box-wrapper">
                <div class="info-wrap">
                    <h2 class="info-title">Contact Information</h2>
                    <h3 class="info-sub-title">Fill up the form and our team will get back to you within 24 hours</h3>
                    <ul class="info-details">
                        <li>
                            <i class="fas fa-phone-alt">
                            <img src="images/Telephone_Line_Clipart_Transparent_Background__Telephone_Line_Icon_Vector__Telephone_Icons__Line_Icons__Whatsapp_Clipart_PNG_Image_For_Free_Download-removebg-preview.png">
                            </i> 
                            <span>Phone: </span> <a herf="+91 7680004000">+91 7680004000</a>
                        </li>
                        <li>
                            <i class="fas fa-paper-plane">
                                <img src="images/Email_Icon_Clipart_PNG_Images__Email_Icon__Email_Icons__Letter_Clipart__Address_PNG_Image_For_Free_Download-removebg-preview.png">
                            </i>
                            <span>Email: </span> <a herf="mailto:info@mikebags.com">info@mikebags.com</a>
                        </li>
                        <li>
                            <i class="fas globe">
                                <img src="images/Internet_free_icons_designed_by_Smashicons-removebg-preview.png">
                            </i>
                            <span>Website: </span> <a herf="https://mikebag">www.mikebags.com</a>
                        </li>
                    </ul>
                    <ul class="social-icons">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook">
                                    <img src="images/Facebook_Logo_Red_Transparent_-_Fb_Icon_White_Png_Clipart_-_Full_Size_Clipart___3648099__-_PinClipart-removebg-preview.png">
                                </i>                               
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter">
                                    <img src="images/Twitter_X_Logo_PNG-removebg-preview.png">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram">
                                    <img src="images/Instagram_N_Png_-_Free_PNG_Images_ID_38388___TopPNG-removebg-preview.png" width="90px" height="30px">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="form-wrap">
                    <form action="contact.php" method="POST">
                        <h2 class="form-title">Send us a message</h2>
                        <div class="form-fields">
                            <div class="form-group">
                                <input type="text" class="fname" name="fname" id="fname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="lname" name="lname" id="lname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="email" name="email" id="email" placeholder="Mail">
                            </div>
                            <div class="form-group">
                                <input type="number" class="phone" name="phone" id="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="message" name="message" id="message" placeholder="Write your message"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Send message" class="submit-button">
                    </form>
                </div>
        </section>                               
</body>
</html>