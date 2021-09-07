<!-- topbar -->
<?php $page = single; include 'include/nav.php' ?>

<section class="single container">
    <article class="row">
        <h2>Single product</h2>
    </article>
    <article class="row">
        <div>
            <img src="img/skirts.jpg" alt="skirts">
        </div>
        <div>
            <h3>Skirts</h3>
            <div class="price">$90</div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim placeat dicta quas ea, minus asperiores officia in cumque voluptate! Tempore quidem voluptates animi praesentium laudantium commodi impedit dolorem fuga magnam minus, quas vel, ut est voluptas. Vel, non, sunt consequatur deleniti dolores aperiam excepturi, repellendus amet explicabo nobis incidunt quod dolorum nulla eius dolor?</p>
            <form>
                <label>Quantity</label>
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <button>Order now</button>
            </form>
            <hr>
            <p>Category:
                <a href="">Women</a>,
                <a href="">Skirts</a>
            </p>
            <hr>
            <span>Share:</span>
            <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
            <span><a href=""><i class="fab fa-instagram"></i></a></span>
            <span><a href=""><i class="fab fa-twitter"></i></a></span>
            <span><a href=""><i class="fab fa-pinterest"></i></a></span>
        </div>
    </article>
</section>

<!-- subscribe -->
<?php include 'include/subscribe.php' ?>

<!-- footer -->
<?php include 'include/footer.php' ?>