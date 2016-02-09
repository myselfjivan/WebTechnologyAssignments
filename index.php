<?php
session_start();
$SelectedItems= $_POST['productsCart'];
if (empty($SelectedItems) && empty($_SESSION["cart"])) {
    echo("Your Cart is empty.");
} else {
    $N = count($SelectedItems);
    $_SESSION["cart"] = &$SelectedItems;
    echo("Addedd $N to cart: ");
    for ($i = 0; $i < $N; $i++) {
        echo($_SESSION["cart"][$i] . " ");
    }
}
?>
<!DOCTYPE html>
<?php include 'header.php'; ?>
<html lang="en">
    <head>
    <form action="" method="POST">
        <div class="shop-grid">
            <div class="container">
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top">
                        <div class="bottom-2-top">
                            <div class="img"><img src="images/grid4.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                    </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <input type="checkbox" name="productsCart[]" value="style01"/>Add to cart
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top">
                        <div class="bottom-2-top">
                            <div class="img"><img src="images/grid6.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 02</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                    </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <input type="checkbox" name="productsCart[]" value="style02"/>Add to cart
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top">
                        <div class="bottom-2-top">
                            <div class="img"><img src="images/grid3.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 03</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                    </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <input type="checkbox" name="productsCart[]" value="style03"/>Add to cart
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top">
                        <div class="bottom-2-top">
                            <div class="img"><img src="images/grid5.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 04</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                    </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <input type="checkbox" name="productsCart[]" value="style04"/>Add to cart
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top">
                        <div class="bottom-2-top">
                            <div class="img"><img src="images/grid7.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 05</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                    </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <input type="checkbox" name="productsCart[]" value="style05"/>Add to cart
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top">
                        <div class="bottom-2-top">
                            <div class="img"><img src="images/grid8.jpg" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 06</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                    </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <input type="checkbox" name="productsCart[]" value="style06"/>Add to cart
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="sub-news">
            <div class="container">
                <form>
                    <h3>Done Shopping ??</h3>
                    <input type="submit" class="btn btn-default subs-btn"  role="button" value="Proceed to checkout"/>
                </form>
            </div>
        </div>
    </form>
<?php include("footer.php");
?> 
</body>
</html>