<?php 
require_once "php/init.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TeaBag Milktea & Cafe</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body> 
<section class="navbar">
<div class="container">
    <div class="logo">
        <a href="#" title="Logo">
            <img src="images/logo1.png" alt="Restaurant Logo" class="img-responsive logos">
        </a>
    </div>
    <div class="menu text-right">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="phps/menu.php">Full Menu</a>
            </li>
            <li>
                <a href="phps/gallery.php">Gallery</a>
            </li>
            <li>
            <a href="phps/about.php">About Us</a>
            </li>
            <li>
                <a href="phps/review.php">Review</a>
            </li>
            <li>
                <a href="./testimonial.php">testimonial</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
</section>
<section class="food-search text-center">
<div class="jumbotron jumbotron-fluid">
<div class="container1">
    <h1 class="display-4">TESTIMONIAL</h1>
    <p class="lead">Admin Page</p>
</div>
</div>
</section>
<section>
<div class="revtab">
<div class="container">
<nav class="navbar navbar-dark bg-dark shadow">   
</nav>  
</div>
<div class="container44 mt-5">

<?php listener(); ?>
<?php 
viewpends();
?>
</div>
</div>
</section>
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