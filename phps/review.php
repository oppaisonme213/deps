<?php 
require_once "../php/init.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TeaBag Milktea & Cafe</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section class="navbar">
<div class="container">
    <div class="logo">
        <a href="#" title="Logo">
            <img src="../images/logo1.png" alt="Restaurant Logo" class="img-responsive logos">
        </a>
    </div>

    <div class="menu text-right">
        <ul>
            <li>
                <a href="../index.php">Home</a>
            </li>
            <li>
                <a href="./menu.php">Full Menu</a>
            </li>
            <li>
                <a href="./gallery.php">Gallery</a>
            </li>
            <li>
            <a href="./about.php">About Us</a>
            </li>
            <li>
                <a href="./review.php">Review</a>
            </li>
            <li>
            <a href="../testimonial.php">testimonial</a>
            </li>
        </ul>
    </div>

    <div class="clearfix"></div>
</div>
</section>
<section class="food-search text-center">
<div class="jumbotron jumbotron-fluid">
    <div class="container1">
        <h1 class="display-4">Give Us Feedback</h1>
        <p class="lead">To make our cafe much more better</p>
    </div>
    </div>
</section>
<div class="container1111">

    <div class="revtab">
        <div class="revback">
        <?php 
        viewfeeds();
        ?>
            <div class="container mt-5">
                    <form class="revform" action="" method="GET">
                        <?php listener(); ?>
                        <div class="ett">
                        <div class="col-md-9 form-group rower">
                            <h3 class="fills">Fill Up</h3>
                        </div>
                        <div class="col-md-9 form-group rower">
                            <input class="form-control1" type="text" name="name" placeholder="Insert name" required>
                        </div>
                        <div class="col-md-9 form-group rower">
                            <input class="form-control" type="text" name="comms" placeholder="Feedback" required>
                        </div>

                        <div class="col-md form-group rower rower11">
                            <input class="btn11 btn-success" type="submit" value="SUBMIT"/>
                        </div>
                        </div>
                    </form>
        </div>
        </div>           
    </div>
</div>
<div class="e">
<section class="social footer">
    <div class="container text-center">
        <ul>
            <li>
                <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
            </li>
            <li>
                <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
            </li>
            <li>
                <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
            </li>
        </ul>
    </div>
</section>
<section class="footer">
    <div class="container text-center">
    <p>For Educational Purpose Only. Designed By <a href="#">Jay Fernando</a></p>
    </div>
</section>
</div>
</body>
</html>