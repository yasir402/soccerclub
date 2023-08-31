
    <?php
require('index_header.php');
?>
    
    
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline>our <span>shop</span></h2></div>
    </div>
    <section class=carttype02>
        <div class=container>
            <div class=row>
            <?php
               $hero2 = mysqli_query($con,"SELECT * FROM products");
               $hero3 = mysqli_fetch_array($hero2)
               ?>
                <div class="cartHeader clearfix"><h1 class=logo><a href=index-2.html><img src=images/logo.png alt=image></a>
                </h1>

                    <div class=orderId>
                        <div><p>your order id is <span>nyhsak01</span></p>

                            <p class=datetime>monday 22nd April 2015</p></div>
                    </div>
                </div>
                <div class=cartBody>
                    <div class="heading clearfix"><h5>confirm your order</h5>

                        <p>you have selected <span class="red cartitems"></span> product</p></div>
                    <ul class=salectedProduct id=cartItemsType2></ul>
                    <div class=cart-meta>
                        <div class=clearfix>
                            <div class=item-content>
                                <div><h4>your total order value is</h4>

                                    <p>after added all tax</p></div>
                            </div>
                            <div class=item-price><span id=carttotal>$44</span></div>
                        </div>
                    </div>
                    <div class=mail-cart><h3><span>your</span> details</h3>

                        <form data-parsley-validate="" name=contact class="formcontact clearfix">
                            <div class=form-group><input type=text class=form-control name=name placeholder=Name
                                                         required="" data-parsley-required-message="please insert Name">
                            </div>
                            <div class=form-group><input type=text class=form-control name=phone placeholder=Phone
                                                         required=""
                                                         data-parsley-required-message="please insert Phone No"></div>
                            <div class=form-group><input type=text class=form-control name=subject placeholder=subject
                                                         required=""
                                                         data-parsley-required-message="please insert subject"></div>
                            <div class=form-group><input type=email class=form-control name=email placeholder=Email
                                                         required=""
                                                         data-parsley-required-message="please insert Email"></div>
                            <button type=submit id=send>order now</button>
                            <div class=checkbox><label><input type=checkbox>Confirm and Proceed</label></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
require('index_footer.php');
?>
