
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="products.php">XYZ Webstore</a>
        </div> <!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li <?= $page_title=="Products" ? "class='active'" : ""; ?> ><a href="products.php" class="dropdown-toggle">Products</a></li>
                <li <?= $page_title=="Cart" ? "class='active'" : ""; ?> >
                    <a href="cart.php">
                        <?php 
                        //count products in cart
                        $cart_count = count($_SESSION['cart']);
                        ?>
                        Cart <span class="badge" id="comparison-count"><?= $cart_count ?></span>
                    </a>
                </li>
            </ul>
            
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav> <!-- /.navbar-default -->
