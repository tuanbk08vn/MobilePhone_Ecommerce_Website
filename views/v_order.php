<?php
if(!isset($_SESSION))
{
    session_start();
}
?>

<script type="text/javascript">
    $(function () {
        $("#orderModal").appendTo("body");
    });
</script>
<!-- Order view -->
<!-- Modal -->
<div id="orderModal" class="modal fade" role="dialog">
    <!-- ORDER -->
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">ORDER</h4>
            </div>
            <div class="modal-body">
                <div class="col-xs-6" style="margin-top:15px">
                    <?php foreach($order_infos as $order_info) {
                        $row = mysqli_fetch_object($order_info); ?>
                        <div class="row" style="border:1px dashed black;font-size:1.1em;color:#808080;font-family:Lato">
                        <div class="col-xs-12 order-img" style="text-align: center"><img src="../<?php echo $row->product_image ?>" alt="<?php echo $row->product_name ?>" style="height:100%"/></div>
                        <div class="col-xs-12 order-name" style="text-align: center"><?php echo $row->product_name ?></div>
                        <div class="col-xs-12 order-brand" style="text-align: center"><?php echo $row->brand ?></div>
                        <div class="col-xs-12 order-model" style="text-align: center"><?php echo $row->model ?></div>
                        <div class="col-xs-12 order-price" style="text-align: center"><?php echo $row->price ?></div>

<!--                        <div class="col-xs-12 order-quantity">--><?php //echo $row->product_imgage ?><!--</div>-->
                        <div class="col-xs-12 order-policy1">
                            <span class="glyphicon glyphicon-check"></span>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        </div>
                        <div class="col-xs-12 order-policy2">
                            <span class="glyphicon glyphicon-check"></span>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        </div>
                        <div class="col-xs-12 order-policy3">
                            <span class="glyphicon glyphicon-check"></span>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="col-xs-6">
                    <form action="../modules/order_info.php" method="post">
                        <div class="form-group">
                            <p>Name *</p>
                            <input class="form-control" value="" id="order-name" name="order-name" placeholder="Your Name" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <p>Phone *</p>
                            <input class="form-control" value="" id="order-phone" name="order-phone" placeholder="Your Phone" type="number">
                        </div>
                        <div class="form-group">
                            <p>Address *</p>
                            <input class="form-control" value="" id="order-address" name="order-address" placeholder="Your Address" type="text">
                        </div>
                        <div class="form-group">
                            <p>Note </p>
                            <textarea class="form-control" value="" id="order-note" name="order-note" placeholder="Note" type="text"></textarea>
                        </div>
                        <div>
                            <p>Our staff will contact directly to you after receiving the Order.</p>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 center" style="text-align: center">
                                <input type="submit" id="order-submit" class="btn btn-danger btn-block btn-lg" value="ORDER">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="border-top:none !important">
                <p id="order-display"></p>

            </div>
        </div>
    </div>
</div>