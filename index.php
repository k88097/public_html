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

    <!-- Fas Icon Kit -->
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
                <img class="d-block w-100" id="slider" src="images/slider/01.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4>BME International Institute</h4>
                    <p>Shianglong International LTD. established in 1988 with a focus on Biomedical Engineering Institutions</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider/02.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4>High efficiency and low cost production</h4>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider/03.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Funds Research and Innovation</h4>
                    <p>#1 Outstanding Asia's R&D Center for Membrane Technology </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider/04.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Top CMT in Membrane Society</h4>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider/05.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Locate at the excellent location</h4>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider/06.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Technology</h4>
                    <p>With our unique BME technology resources we are able to provide funds for research and innovation </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="slider" src="images/slider/07.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Advanced Research & Training Base</h4>
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
    <!-- Products & Service -->
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2>Products & Service</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card" id="card">
                            <a href="#">
                                <img class="card-img-top" id="product" src="images/product/rnd.png" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Well known R/D Centers</h5>
                                <p class="card-text">
                                    Shianglong International has been working with over 8 Research and Development Centers throughout Taiwan.
                                </p>
                                <div style="text-align: right;">
                                    <a href="#" class="btn btn-info">More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" id="card">
                            <a href="#">
                                <img class="card-img-top" id="product" src="images/product/bag.png" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Flexible Packaging Bags</h5>
                                <p class="card-text">
                                    As a leading manufacturer of Flexible Packaging Bags, we provide Box Bottom Bags, Pouch, Paper Coffee Bag, Paper Bags, Sealable Bag, and Coffee Pouch.
                                </p>
                                <div style="text-align: right;">
                                    <a href="#" class="btn btn-info">More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Introducing Shianglong -->
    <div class="container" id="introducing">
        <div class="card">
            <div class="card-header">
                <h2>Introducing Shianglong</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="color: red;">
                    Twenty Years of Tremendous Struggle to Asia's #1
                </h5>
                <p class="card-text">
                    Shianglong International LTD. established in 1988 with a focus on Biomedical Engineering Institutions. Shianglong imports, manufactures, and focuses on research and development. Our company's core asset is love; we are not only investing in the company, but as well as in the men.
                </p>
                <p class="card-text">
                    Our story begins when Mr. Li graduated with a Biomedical Engineering degree in 1976 at Chung Yuan University in Chung-Li Taiwan. As his passion grew for Biomedical Engineering, he came to America and pursued a Master’s Degree in Clinical Engineering at Polytech Institute in Worcester-MA, then worked at the University of Massachusetts for 8 years in the Medical Center. Shortly after he created Shianglong International Ltd. company.
                </p>
                <p class="card-text">
                    Shianglong established and manufactured disposable medical gloves in 1994, in Taiwan, then expanded into Shijiazhuang City in China. In only 7 years, we became Asia's #1 in manufacturing. Our company grew even more, opening new facilities throughout China such as those plants in the city of Zibo-Shandong, Ganzhou-Jiangxi and also another plant in Taiwan, which assisted our company to become Asia's #1 in ODM facility. Shianglong has grown tremendously with our innovated team and of utilizing the GMP system.
                </p>
                <p class="card-text">
                    We are looking for more integration opportunities to assist clients to become worldwide #1 in its industry, as well as growing them to become financially free. Our goal is to create a unique biomedical industrial park. We believe biomedical products are the best products for this century and our biomedical engineering specialist and team want to help grow this industry.
                </p>
            </div>
        </div>
    </div>
    <footer id="footer" class="page-footer font-small blue-grey lighten-5">
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>