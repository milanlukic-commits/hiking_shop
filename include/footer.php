    <footer>
        <article  class="container">
        <h3>
            <a class="logo" href="index.php"><i class="fas fa-hiking"></i>Hiking shop</a>
        </h3>
        <nav>
            <ul>
                <li>
                    <a class="<?php if($page==index){echo 'activeItem';}?>" href="index.php">Home</a>
                </li>
                <li>
                    <a class="<?php if($page==products){echo 'activeItem';}?>" href="products.php">Products</a>
                </li>
                <li>
                    <a class="<?php if($page==about_us){echo 'activeItem';}?>" href="about_us.php">About us</a>
                </li>
                <li>
                    <a class="<?php if($page==contact_us){echo 'activeItem';}?>" href="contact_us.php">Contact us</a>
                </li>
            </ul>
        </nav>
        <div class="icons">
            <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
            <span><a href=""><i class="fab fa-instagram"></i></a></span>
            <span><a href=""><i class="fab fa-twitter"></i></a></span>
            <span><a href=""><i class="fab fa-pinterest"></i></a></span>
        </div>
        </article>
        <article>
            <p>&copy; Hiking shop 2021.</p>
        </article>
    </footer>


    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>
</html>