<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- OWL carousel -->
    <link rel="stylesheet" href="../hiking_shop/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../hiking_shop/css/owl.theme.default.min.css">

    <title>Hiking shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- topbar -->
    <section class="topbar">
        <h1>
            <a class="logo" href="index.php"><i class="fas fa-hiking"></i>Hiking shop</a>
        </h1>
    </section>

    <!-- nav -->
    <nav>
        <ul>
            <li>
                <a class= "<?php if($page==index){echo 'activeItem';}?>" href="index.php">Home</a>
            </li>
            <li>
                <a class = "<?php if($page==products){echo 'activeItem';}?>" href="products.php">Products</a>
            </li>
            <li>
                <a class=" <?php if($page==about_us){echo 'activeItem';}?> " href="about_us.php">About us</a>
            </li>
            <li>
                <a class=" <?php if($page==contact_us){echo 'activeItem';}?> " href="contact_us.php">Contact us</a>
            </li>
        </ul>
    </nav>