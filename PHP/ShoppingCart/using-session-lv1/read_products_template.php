<?php 
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
?>
    <!-- // creating box -->
    <div class="col-md-4 m-b-20px">
        <!-- product id for javascript access -->
        <div class="product-id display-none"><?= $id ?></div>
        <a href="product.php?id=<?= $id ?>" class="product-link">
        <?php 
        // select and show first product image
        $product_image->product_id = $id;
        $stmt_product_image = $product_image->readFirst();
        while ($row_product_image = $stmt_product_image->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="m-b-10px">
            <img src="uploads/images/<?= $row_product_image['name'] ?>" class="w-100-pct" alt="" />
        </div>
        <?php
        }
        ?>
        <!-- product name -->
        <div class="product-name m-b-10px"><?= $name ?></div>
        </a>
        <!-- add to cart button -->
        <div class="m-b-10px">
            <?php 
            if (array_key_exists($id, $_SESSION['cart'])) {
                echo "<a href='cart.php' class='btn btn-success w-100-pct'>";
                echo "Update Cart";
                echo "</a>";
            } else {
                echo "<a href='add_to_cart.php?id={$id}&page={$page}' class='btn btn-primary w-100-pct'>Add to Cart</a>";
            }
            ?>
        </div>
    </div>
<?php
}
include_once "paging.php";
?>