<!-- topbar -->
<?php $page = index; include "include/nav.php" ?>

    <!-- header -->
    <header>
        <article>
            <h1>Online outdoor shop, buy online outdoor clothing & trekking</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos pariatur architecto hic ex exercitationem veniam, non, ullam excepturi, fuga reprehenderit laudantium consequuntur veritatis alias voluptate inventore placeat officia minima?</p>
            <button>Order now</button>
        </article>
    </header>

    <!-- featuredItems -->
    <section class="featuredItems container">
        <h2>Featured items</h2>
        <article class="owl-carousel owl-theme">
            <?php include "include/products_temp.php" ?>
        </article>
    </section>

    <!-- subscribe -->
    <?php include "include/subscribe.php" ?>

    <!-- footer -->
    <?php include "include/footer.php" ?>