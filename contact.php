<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>

    <!-- import Css Javascript jQuery -->
    <?php include "head.html"; ?>

    <!-- Google Maps api -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4fQcXzl6jAoakdN2whVheO3l32abWjCM&callback=initMap" type="text/javascript"></script>

    <!-- Google reCAPTCHA v3 api -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdvELgZAAAAANbAtR1m4TSoTz0Z2RUqp9PlgTug"></script>

    <script type="text/javascript">
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdvELgZAAAAANbAtR1m4TSoTz0Z2RUqp9PlgTug', {
                action: 'contact'
            }).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
        // Contant Form_Submit
        function contant_form_submit() {
            var name = document.getElementsByName("name").value;
            var email = document.getElementsByName("email").value;
            var subject = document.getElementsByName("subject").value;
            var message = document.getElementsByName("message").value;

            if (name == null) {
                alert("name is null");
                return false;
            }
        }
    </script>
</head>

<body>
    <!-- import Header -->
    <?php include "header.html"; ?>
    <div class="container" id="contact">
        <div class="card">
            <div class="card-header text-center">
                <h2>Contact Customer Service</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <!-- Phone Card -->
                        <div class="card" id="card">
                            <div class="card-header text-center">
                                <h3>
                                    <i class="fas fa-phone mr-3"></i>Phone
                                </h3>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-text">
                                    +886 3-463-5901
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Tax Card -->
                        <div class="card" id="card">
                            <div class="card-header text-center">
                                <h3>
                                    <i class="fas fa-print mr-3"></i>Tax
                                </h3>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-text">
                                    +886 3-463-5906
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- Contact Us -->
                        <div class="card" id="card">
                            <div class="card-header text-center">
                                <h3><i class="fas fa-envelope mr-3"></i>Contact Us</h3>
                            </div>
                            <div class="card-body">
                                <p>
                                    Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.
                                </p>

                                <!-- Contact Form -->
                                <section class="mb-4" id="contact-form">
                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col">
                                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                                <!--Grid row-->
                                                <div class="row">
                                                    <!-- Your name -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group row">
                                                            <label for="name" class="col-lg-3 col-form-label">Name:</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Your email -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group row">
                                                            <label for="email" id="maillabel" class="col-lg-3 col-form-label">
                                                                Email:
                                                            </label>
                                                            <div class="col-lg-9">
                                                                <input type="mail" id="email" name="email" class="form-control" placeholder="Your Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Grid row-->
                                                <div class="row">
                                                    <!-- Subject -->
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label for="subject" id="subjectlabel" class="col-xl-2 col-form-label">
                                                                Subject:
                                                            </label>
                                                            <div class="col-xl-12">
                                                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Grid row-->
                                                <div class="row">
                                                    <!-- Message -->
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label for="message" id="messagelabel" class="col-xl-2 col-form-label">Message:</label>
                                                            <div class="col-xl-12">
                                                                <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
                                                <div class="text-center text-md-right">
                                                    <button class="btn btn-primary " onclick="contant_form_submit()">
                                                        Send
                                                    </button>
                                                </div>
                                                <div class="status"></div>
                                            </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- Location Card -->
                        <div class="card" id="card">
                            <div class="card-header text-center">
                                <h3><i class="fas fa-map-marker-alt mr-3"></i>Location</h3>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">
                                    2F, 68 Jilin Road, Chungli City Taoyuan, Taiwan
                                </h4>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14466.40180697411!2d121.2477741!3d24.979705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x829e173dc621db46!2z56Wl6b6N5ZyL6Zqb5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1596088876668!5m2!1szh-TW!2stw" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- import Footer -->
    <?php include "footer.html"; ?>
</body>

</html>