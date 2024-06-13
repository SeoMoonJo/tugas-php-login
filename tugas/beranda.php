<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TugasMinggu6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="navbar-brand" href="#">Aldyth</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda.php">
                            <p class="text-white bg-primary">Beranda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="biodata.php">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jadwal kuliah.php">Jadwal Kuliah</a>
                    </li>
                </ul>

                <div class="mb-3">
                    <input type="text" class="form-control" id="formGroupExampleInput">
                    <label for="formGroupExampleInput" class="form-label bg-primary">
                        <p class="text-white">Search Information</p>
                    </label>
                </div>
                <div>
                    <form action="hapus.php" method="post" style="text-align: center; margin-top: 20px;">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
            <!-- Main content -->
            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <h1>Me and My Activities</h1>
                <p>Hello, I'm excited to share insights into my life and activities. My name is Aldyth, and I find joy in exploring various interests and engaging in diverse activities. From creative pursuits like writing and painting to outdoor adventures such as hiking and cycling, I thrive on discovering new experiences. This journey has not only shaped my identity but also broadened my perspective on life. Join me as I delve into the depths of my passions and the vibrant tapestry of activities that define who I am.</p>
                        
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/motor.webp" class="img-fluid mb-3" alt="Dawn">
                        <p>sunmori<br>motor</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/mobil.JPG" class="img-fluid mb-3" alt="Sunset">
                        <p>nightride<br>mobil</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/gaming.jpeg" class="img-fluid mb-3" alt="Wolf">
                        <p>gaming room<br>chill</p>
                    </div>
                                  
                    <h2>Really informative info</h2>
                    <p>Welcome to a glimpse into my world! I'm [Aldyth Prabowo], an individual with a rich tapestry of interests and activities. At the core of my pursuits lies a deep passion for creativity and exploration. My journey has led me to fall in love with the art of expression and in means of connecting with others through the power of words. My canvas becomes alive with strokes of paint, reflecting my innermost thoughts and emotions.</p>
                    <p>I find solace in the grandeur of outdoor spaces. I feel solace in the great outdoors. Hiking through lush trails or cycling along scenic routes invigorates my spirit and nourishes my soul. Nature, with its breathtaking beauty, becomes my sanctuary.</p>
                    <p>In essence, my life is a mosaic of creativity, adventure, and intellectual curiosity. Through my activities, I seek not only personal fulfillment but also the opportunity to inspire and connect with others on a deeper level. Join me on this journey of discovery and exploration!</p>
                </div>
            </div>
        </div>
    </div>
                

</body>
</html>