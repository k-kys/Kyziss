</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- make add_to_cart button word -->
<script>
    $(document).ready(function(){
        // add to cart button listener
        $('.add-to-cart-form').on('submit', function(){
            // info is in the table / single product layout
            var id = $(this).find('.product_id').text();
            var quantity = $(this).find('.cart-quantity').val();
            // redirect to add_to_cart.php, with parameter values to process the the request
            window.location.href = "add_to_cart.php?id=" + id + "&quantity=" + quantity;
            return false;
        });
        
        // change product image on hover
        $(document).on('mouseenter', '.product-img-thumb', function(){
            var data_img_id = $(this).attr('data-img-id');
            $('.product-img').hide();
            $('#product-img-'+data_img_id).show();
        });
    });

    // update quantity button listener
    $('.update-quantity-form').on('submit', function(){
        // get basic information for updating the cart
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
        // redirect to update_quantity.php, with parameter values to process the request
        window.location.href = "update_quantity.php?id=" + id + "&quantity=" + quantity;
        return false;
    });
</script>
</body>
</html>