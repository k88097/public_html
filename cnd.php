<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinical & Diagnostics </title>

    <!-- import Css Javascript jQuery -->
    <?php include "head.html"; ?>
</head>

<body>
    <!-- import Header -->
    <?php include "header.html"; ?>

    <!-- Clinical & Diagnostics -->
    <div class="container" id="contact">
        <div class="card">
            <div class="card-header text-left">
                <h2>Clinical & Diagnostics</h2>
            </div>
            <div class="card-body">
                <h4 class="card-title text-left" id="title-cnd">
                    Equipments
                </h4>
                <div class="row">
                    <!-- Images -->
                    <div class="col" id="col-img">
                        <!-- Image1 -->
                        <div id="img-cnd" class="row">
                            <img src="images/cnd/aed.jpg" alt="aed">
                        </div>

                        <!-- Image2 -->
                        <div class="row" id="img-cnd">
                            <img src="images/cnd/measurement.jpg" alt="measurement">
                        </div>
                    </div>
                    <div class="col align-self-center">
                        <ul>
                            <li>Analysis & Measurement</li>
                            <li>Chromatography</li>
                            <li>Endoscopy</li>
                            <li>Imaging</li>
                            <li>Patient Handling</li>
                            <li>Radiology</li>
                            <li>Etc...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- import Footer -->
    <?php include "footer.html"; ?>
</body>

</html>