<?php
    $new_product_item_1 = $new_product_item;
    $row= mysqli_fetch_object($new_product_item);
?>
<div class="row">
    <div class="col-xs-4">
        <div class="row" style="border-top: 1px dashed greenyellow">
            <img src="uploads/reference/big-sale-icon.jpg" style="width:27%;height:27%;margin-left: 40%;">
        </div>
        <div class="product-item row view view-first">
            <img src="<?php echo $row->product_image ?>" style="width:100%">
            <div class="row">
                <div class="col-xs-12 mask">
                    <h2>Description</h2>
                    <p><?php echo $row->description ?></p>
                </div>
                <div class="col-xs-12">
                    <a href="#" class="info">More Detail</a>
                </div>
            </div>
            <h4><?php echo $row->product_name ?></h4>
            <p><span style="text-decoration: line-through; font-size:0.7em;color:grey"><?php echo $row->price ?>&#x24;</span>&nbsp;&nbsp;&nbsp;<?php echo $row->price ?>&#x24;</p>
            <div style="text-align: center">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Add to
                    Cart
                </button>
            </div>

        </div>
    </div>

    <div class="minor-product-items col-xs-8">
        <div class="row carousel slide" id="myCarousel_1" data-ride="carousel" data-interval="3400">
            <div class="carousel-inner col-xs-12" role="listbox" style="width:100% !important;">
                <div class="item active row">
                <?php
                $count = 0; //just show 8 products each time
                $button_id = 0; //id for show more button
                while($row = mysqli_fetch_object($new_product_item)) {
                    $count++;
                    if($count % 6 == 1 || $count % 6 == 2 || $count % 6 == 3 ) {
                        ?>
                        <div class="product-item col-xs-4 view view-first no-left-right">
                            <a href="../modules/detail_product.php?product_id=<?php echo $row->product_id ?>">
                                <img src="../<?php echo $row->product_image ?>" style="width:100%;height:100%">
                            </a>
                            <div class="row">
                                <div class="col-xs-12 mask">
                                    <h2>Description</h2>
                                    <p><?php echo $row->description ?></p>
                                </div>
                                <div class="col-xs-12">
                                    <a href="#" class="info">More Detail</a>
                                </div>
                            </div>
                            <a href="../modules/detailProduct.php?product_id">
                                <h4><?php echo $row->product_name ?></h4>
                            </a>
                            <p><span style="text-decoration: line-through; font-size:0.7em;color:grey"><?php echo $row->price ?>&#x24;</span>&nbsp;&nbsp;&nbsp;<?php echo $row->price ?>&#x24;</p>
                            <div style="text-align: center">
                                <button class="btn btn-primary btnCart-<?php echo $row->product_id ?>"><span
                                        class="glyphicon glyphicon-shopping-cart"></span> Add to
                                    Cart
                                </button>
                            </div>
                        </div>
                        <?php
                        $button_id = $row->product_id;
                    if($count % 6 == 3) { ?>
                </div>
                <?php
                    }
                    }
                    else {
                        if ($count % 6 == 4) { ?>
                <div class="item row">
                        <?php } ?>

                        <div class="product-item col-xs-4 view view-first no-left-right">
                            <a href="../modules/detail_product.php?product_id=<?php echo $row->product_id ?>">
                                <img src="../<?php echo $row->product_image ?>" style="width:100%;height:100%">
                            </a>
                            <div class="row">
                                <div class="col-xs-12 mask">
                                    <h2>Description</h2>
                                    <p><?php echo $row->description ?></p>
                                </div>
                                <div class="col-xs-12">
                                    <a href="#" class="info">More Detail</a>
                                </div>
                            </div>
                            <a href="../modules/detailProduct.php?product_id">
                                <h4><?php echo $row->product_name ?></h4>
                            </a>
                            <p><span style="text-decoration: line-through; font-size:0.7em;color:grey"><?php echo $row->price ?>&#x24;</span>&nbsp;&nbsp;&nbsp;<?php echo $row->price ?>&#x24;</p>
                            <div style="text-align: center">
                                <button class="btn btn-primary btnCart-<?php echo $row->product_id ?>"><span
                                        class="glyphicon glyphicon-shopping-cart"></span> Add to
                                    Cart
                                </button>
                            </div>
                        </div>
                        <?php
                        $button_id = $row->product_id;
                        if ($count % 6 == 0) { ?>
                </div>
                            <?php
                            break;}
                    }
                } ?>
            </div>
        </div>
    </div>
</div>