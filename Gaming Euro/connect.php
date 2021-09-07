
<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gamer's Ecstasy</title>

  <!-- CSS Stylesheet Linked Here -->
    <link rel="stylesheet" href="styles.css">

  <!-- Font Icon -->
    <script src="https://kit.fontawesome.com/25f8e87069.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Bootstrap JS   -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </head>
  <body>

    <!-- MOVING EYE -->



    <!-- Navigation-Bar -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-default">
      <a class="navbar-Heading" href="#"><i class="fa fa-lg fa-gamepad" aria-hidden="true"></i></a>
      <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarToggleDemo02" aria-controls="navbarToggleDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarToggleDemo02">

          <ul class="navbar-nav ">

            <li class="nav-item">
              <a class="nav-link" href="#HOME">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#GamingSection">GAMING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#SlideShows">UPCOMING's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ContactUs-Section">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">COMING SOON</a>
            </li>

            <li class="nav-item marginna">
              <a class="nav-link" href="#"> <?php echo $_SESSION['username']; ?></a>
            </li>
            <li  class="nav-item" >
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
            <li>   <a href="#">    <div class="eyes">
                <div class="eye">
                  <div class="ball">

                  </div>

                </div>

              </div>

              <script>
                var balls = document.getElementsByClassName("ball");
                document.onmousemove = function() {
                  var x= event.clientX * 100/ window.innerWidth + "%";
                  var y= event.clientY * 100/ window.innerHeight + "%";

                  for(var i=0; i<2;i++)
                  {
                    balls[i].style.left = x;
                    balls[i].style.top = y;
                    balls[i].style.transform = "translate(-"+x+",-"+y+")";
                  }
                }

              </script></a>

            </li>


          </ul>
      </div>

    </nav>

    <!-- GamingEuro-Intro -->
  <section id="HOME">
    <div class="homePageControllerImage">
      <img class="IntroLogo" src="images/GamingLogo01.png" alt="Your Logo">
      <h1 class="FpageHeading">Gamer's Ecstasy</h1>
      <h3 class="FpageHeading">"Gamers don't DIE, they RESPAWN"</h3>

    </div>
  </section>




    <!-- Gaming -->


    <section id="GamingSection" class="GamingSectionBackgroundImage">


    <div class="GamingTitle-margin">
    <h1 class="GamingHeading">GAMING</h1>


      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
          <a href="COD.html"><img class="GamingImages" src="images/COD.png" alt=""></a>

        </div>
        <div class="col-lg-6 col-md-6  col-sm-12 ">
          <a href="ASSC.html"><img class="GamingImages" src="images/AcOrigin.jpg" alt=""></a>

        </div>
      </div>

      <div class="row">
        <div class="col-lg-4  col-md-4 col-sm-12 ">
          <img class="GamingImages" src="images/Destiney2.jpg" alt="">
        </div>
        <div class="col-lg-4  col-md-4 col-sm-12 ">
          <img class="GamingImages" src="images/FC2.jpg" alt="">
        </div>
        <div class="col-lg-4 col-md-4  col-sm-12 ">
          <img class="GamingImages" src="images/TheResidentEveil.jpg" alt="">
        </div>
      </div>


      <div class="row">
        <div class="col-lg-4 col-md-4  col-sm-12 ">
          <img class="GamingImages" src="images/Rdr.jpg" alt="">
        </div>
        <div class="col-lg-4 col-md-4  col-sm-12 ">
          <img class="GamingImages" src="images/Wolfenstien.jpg" alt="">
        </div>
        <div class="col-lg-4 col-md-4  col-sm-12 ">
          <img class="GamingImages" src="images/Allison.png" alt="">
        </div>
      </div>
    </div>
    </section>



    <!-- SlideShow -->

<section id="SlideShows">
    <h1 class="slideshowHeading">UPCOMING's</h1>
  <div id="xyz" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slidershow1.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="images/slideshow2.png" alt="">
      </div>
      <div class="carousel-item">
        <img src="images/slideshow3.jpg" alt="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#xyz" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#xyz" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  <h1 class="container-fluid">In this section you will find all the POSTORS of upcoming games.</h1>
  <h3 class="container-fluid">Don't forget to register for the beta verson.</h3>
</section>




    <!-- AboutUs -->



    <!-- ContactUs -->
  <section id="ContactUs-Section">
    <h1 class="contactusHeading">CONTACT US</h1>
  <div class="Flex-Contact">
    <div class="ContactUs-div">
      <form class="" action="connect.php" method="POST">
        <input class="ContactUsForm" type="text" name="username" value="Your Name">
        <input class="ContactUsForm" type="text" name="emailid" value="Your Email-ID">
        <input class="ContactUsForm" type="text" name="password" value="Contact No">
        <input class="ContactUsForm" type="text" name="" value="Subject">
        <input class="ContactUsForm btn btn-dark"type="submit" name="" value="Submit">
      </form>

   </div>
   <div class="textarea-div">
     <textarea class="textareaForm" name="message" rows="10" cols="60" value="message">Enter Your Message</textarea>
   </div>
  </div>


  </section>


    <!-- Footer -->
    <footer id="footer">
      <a href="https://twitter.com/?lang=en"><i class="fab footer-img fa-twitter"></i></a>
      <a href="https://www.facebook.com/"><i class="fab footer-img fa-facebook"></i></a>
      <a href="https://www.instagram.com/?hl=en"><i class="fab footer-img fa-instagram"></i></a>
      <a href="https://mail.google.com/mail/u/0/#inbox"><i class="fas footer-img fa-envelope"></i></a>



      <p class="footer-p">© Copyright 2020 Gamer's Ecstasy </p>

    </footer>
    <!-- ______________PHP___________________ -->
    <?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $emailid = filter_input(INPUT_POST, 'emailid');
    $message = filter_input(INPUT_POST, 'message');


    if (!empty($username)) {
      if (!empty($password)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbemailid = "";
        $dbmessage = "";
        $dbname = "contactus";

        //CREATE connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
          die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
        }
        else {
          $sql= "INSERT INTO contactus (username, password, emailid, message) values ('$username','$password','$emailid','$message')";
          if ($conn->query($sql)) {
            echo "Message sent succesfully";
          }
          else {
            echo "Error: ".$sql. "<br />". $conn->error;
          }
          $conn->close();
        }
      }
      else {
        echo "Contact Number should not be empty";
        die();
      }
    }
    else {
      echo "Username Should not be empty";
      die();
    }
     ?>

  </body>
</html>
