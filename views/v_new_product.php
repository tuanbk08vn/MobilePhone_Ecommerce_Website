<div class="row">
    <?php
    $count = 0; //just show 8 products each time
    $button_id = 0; //id for show more button
        while($row = mysqli_fetch_object($new_product_item)) {
            if ($count < 8) {
                ?>
                <div class="product-item no-left-right col-xs-3 view view-first">
                    <a href="../modules/detail_product.php?product_id=<?php echo $row->product_id ?>">
                        <img src="../<?php echo $row->product_image ?>" style="width:100%;height:100%">
                    </a>
                    <div class="row">
                        <div class="col-xs-12 mask">
                            <h2>Description</h2>
                            <p><?php echo $row->description ?></p>
                        </div>
                        <div class="col-xs-12">
                            <a href="../modules/detail_product.php?product_id=<?php echo $row->product_id ?>" class="info">More Detail</a>
                        </div>
                    </div>
                    <a href="../modules/detailProduct.php?product_id">
                        <h4><?php echo $row->product_name ?></h4>
                    </a>
                    <p><?php echo $row->price ?>&#x24;</p>
                    <div style="text-align: center">
                        <button class="btn btn-primary btnCart-<?php echo $row->product_id ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Add to
                            Cart
                        </button>
                    </div>
                </div>
                <?php
                $count++;
                $button_id= $row->product_id;
            }
            else break;
        } ?>
</div>
<?php
    if($button_id > 1) { ?>
        <div><a class="btn-show-more" id="<?php echo $button_id - 1 ?>">Show more...</a></div>
        <?php
    }
?>
