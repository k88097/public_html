<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shianglong</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Fas Kit -->
    <script src="https://kit.fontawesome.com/1c02f86e41.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="header">
        <?php include "header.php"; ?>
    </header>
    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" id="slider" src="images/slider_01.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>BME International Institute</h5>
                    <p>Shianglong International LTD. established in 1988 with a focus on Biomedical Engineering Institutions</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider_02.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>High efficiency and low cost production</h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider_03.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Funds Research and Innovation</h5>
                    <p>#1 Outstanding Asia's R&D Center for Membrane Technology </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider_04.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Top CMT in Membrane Society</h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider_05.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Locate at the excellent location</h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider_06.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Technology</h5>
                    <p>With our unique BME technology resources we are able to provide funds for research and innovation </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider_07.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Advanced Research & Training Base</h5>
                    <p>Our BME institute is here to provide GMP training camp for doctors, nurses, directors, and more as well as help with global marketing with our O2O network marketing center. </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span>
                <i class="fas fa-angle-left fa-5x" style="color: black;"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span>
                <i class="fas fa-angle-right fa-5x" style="color: black;"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <footer id="footer" class="page-footer font-small blue-grey lighten-5">
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>