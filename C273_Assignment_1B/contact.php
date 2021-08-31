<!-- LI SHUFANG - 19039480 -->
<!DOCTYPE html>

<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact Us</h2>
        </div>

    </div>

    <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.783176671704!2d103.85102661475398!3d1.3051810990480595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19b901654d07%3A0x3654270fc7d2718d!2sSingapore%20After-Care%20Association!5e0!3m2!1sen!2ssg!4v1619338051540!5m2!1sen!2ssg" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>81 Dunlop St, Singapore 209408</p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>enquiries@saca.org.sg<br>help@saca.org.sg</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+65 6294 2350 <br>+65 6294 2763</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="doMessage.php" method="POST" role="form" class="php-email-form">
                    <div class="row">

                        <!-- name-->
                        <div class="col form-group mt-3"">
                            <input type="text" name="visitor_name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>

                        <!-- email-->
                        <div class="col form-group mt-3">
                            <input type="email" class="form-control" name="visitor_email" id="email" placeholder="Your Email" required>
                        </div>

                    </div>

                    <!-- subject-->
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="visitor_subject" id="subject" placeholder="Subject" required>
                    </div>


                    <!-- message-->
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="visitor_message" rows="5" placeholder="Message" required></textarea>
                    </div>


                    <div class="text-center">

                        <button type="submit">Send Message</button>
                        <button type="reset" class="btn btn-danger">Reset</button>

                    </div>



                </form>
            </div>

        </div>

    </div>
</section>
<!-- End Contact Section -->