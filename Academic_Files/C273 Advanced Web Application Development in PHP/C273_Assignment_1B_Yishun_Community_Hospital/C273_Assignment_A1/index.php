<?php #Ju Long 19013345 ?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  .mySlides {
    display: none
  }

  #slideshow-img {
    vertical-align: center;
    max-width: 90%;
    padding-top: 5%;
    padding-left: 10%;
  }

  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  .prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  @media only screen and (max-width: 300px) {
    .prev, .next, .text {
      font-size: 11px
    }
  }

  #pages {
    flex-direction: column;
    background-color: #E86F4A;
    height: auto;
  }

  #pages-section {
    border-bottom: 1px solid white;
    flex: 1;
    padding: 5px;
    color: white;
    height: 50px;
  }

  .icons {
    height: 25px;
    width: auto;
    margin-right: 5px;
  }
  </style>
</head>

<body style="background-image: './img/skgh.png'">
  <?php include './nav.php' ?>
  <div class="row">

    <div class="slideshow-container col-8">
      <div class="mySlides">
        <div class="numbertext">1 / 3</div>
        <img id="slideshow-img" src="./img/skgh.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 3</div>
        <img id="slideshow-img" src="./img/skh 1.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 3</div>
        <img id="slideshow-img" src="./img/skh 2.jpg" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


    <ul class="col-4" id="pages">
      <div style="margin-top: 100px;"></div>
      <li id="pages-section">
        <a class="nav-link text-white" href="https://www.skh.com.sg/"><img src="./img/icons/site.png" class="icons">Visit Our Offical Website</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="http://www.skh.com.sg/patient-care/visiting-specialist/Pages/make-or-change-appointment.aspx"><img src="./img/icons/booking.png" class="icons">Book an Appointment</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="http://www.skh.com.sg/patient-care/conditions-treatments#abdomen"><img src="./img/icons/search.png" class="icons">Find a Condition or Treatments</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="https://www.singhealth.com.sg/PatientCare/health-buddy/Pages/Home.aspx"><img src="./img/icons/appstore.png" class="icons">Download Buddy Health App</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="http://www.skh.com.sg/about-us/corporate-profile"><img src="./img/icons/about.png" class="icons">About Us</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="http://www.skh.com.sg/patient-care"><img src="./img/icons/patient.png" class="icons">Patient Care</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="https://www.singhealthdukenus.com.sg"><img src="./img/icons/microscope.png" class="icons">Research & Innovation</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="http://www.skh.com.sg/education-training"><img src="./img/icons/training.png" class="icons">Education & Training</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="http://www.skh.com.sg/careers"><img src="./img/icons/career.png" class="icons">Careers</a>
      </li>
      <li id="pages-section">
        <a class="nav-link text-white" href="http://www.skh.com.sg/giving"><img src="./img/icons/charity.png" class="icons">Giving</a>
      </li>
    </ul>

  </div>
  <script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = $(".mySlides");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      slides[slideIndex-1].style.display = "block";
    }
  </script>
</body>

</html>

<?php #Ju Long 19013345 ?>
