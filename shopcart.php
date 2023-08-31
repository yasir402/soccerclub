<?php
require('index_header.php');
?>
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline>Your <span>Cart</span></h2></div>
    </div>
    <section class=cartwrap>
        <div class=cartshop>
            <div class=bg-red></div>
            <div class=container>
                <div class=row>
                    <div class=modal-body>
                        <div class="cartHeader clearfix">
                            <div class=header01><h4>your basket</h4></div>
                            <div class=header02><h4><span>you have selected <span class=cartitems></span> product</span>
                                <a href=#><i class="fa fa-cart-plus"></i> <span class=cartitems>1</span></a></h4>

                                <p>your order ID is 2221</p>

                                <p class=datetime></p></div>
                        </div>
                        <div class="card-item clearfix">
                            <div>
                            <?php
               $hero2 = mysqli_query($con,"SELECT * FROM products");
               $hero3 = mysqli_fetch_array($hero2)
               ?>
                                <div class=big-content><h4>product name</h4></div>
                                <div class="big-content medium-content"><h4>quantity</h4></div>
                                <div class="big-content small-content"><h4>price</h4></div>
                            </div>
                            <div id=cartItems></div>
                            <div class="card-item cart-total clearfix"></div>
                            <div class="card-item clearfix">
                                <div class=big-content><h4>select destination country</h4><select class=form-control>
                                    <option>Pakistan</option>
                                    <option>USA</option>
                                    <option>UAE</option>
                                    <option>india</option>
                                    <option>chaina</option>
                                </select></div>
                                <div class=big-content><h4>select delivery method</h4><select class=form-control>
                                    <option>Standard Delivery - $299.00 (7 days)</option>
                                    <option>Fast Delivery - $199.00 (7 days)</option>
                                </select></div>
                            </div>
                            <div class="card-item cart-total clearfix">
                                <div class="big-content medium-content"><h4>total cost</h4></div>
                                <div class="big-content small-content"><h4 id=carttotal>$210</h4></div>
                            </div>
                        </div>
                        <div class=modal-footer>
                            
                        <a href=shopcart02.php> <button class=btn-red>order now</button></a>
                        </div>
                        
                </div>
            </div>
        </div>
    </section>

<?php
require('index_footer.php');
?>

