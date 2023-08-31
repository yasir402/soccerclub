<?php
require('index_header.php');
?>

    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline>product <span>details</span></h2></div>
    </div>
    <section class=shopDpage>
        <div class=container>
            <div class=row><h2 class="heading small">best soccer <span>Accessories shop</span></h2>
<br>
<br>
<br>
<?php
$id = $_GET['id'];
$pd = mysqli_query($con,"SELECT * FROM `products`  WHERE products_id =  '".$id."' ");
$pd1 = mysqli_fetch_array($pd);
?>

                <div class=shop-wrap >
                    <div class=product-image-wrap>
                        <div class=p_wrap>
                            <div class="product-image active" id=product01><img src="<?php echo $p_f['products_image1']?>"
                                                                                alt=image></div>
                            <div class=product-image id=product02><img src="" alt=image>
                            </div>
                            <div class=product-image id=product03><img src="<?php echo $pd1['products_image2']?> " alt=image>
                            </div>
                            <div class=product-image id=product04><img src="<?php echo $pd1['products_image3']?>" alt=image>
                            </div>
                            <div class=product-image id=product05><img src="<?php echo $pd1['products_image4']?>" alt=image>
                            </div>
                            <div class=product-image id=product06><img src="<?php echo $pd1['products_image5']?>" alt=image>
                            </div>
                            <div class=product-image id=product07><img src="<?php echo $pd1['products_image6']?>" alt=image>
                            </div>
                        </div>
                        <div class=wrap-slide><h5>select color</h5>

                            <div><a class=prvProduct></a> <a class=nxtProduct></a>
                                <ul class="product-details-slider clearfix">
                                    <li class=active><a href=#product01><img src="<?php echo $p_f['products_image1']?>"
                                                                             alt=image></a></li>
                                    <li><a href=#product02><img src="" alt=image></a></li>
                                    <li><a href=#product03><img src="<?php echo $pd1['products_image3']?>" alt=image></a></li>
                                    <li><a href=#product04><img src="<?php echo $pd1['products_image4']?>" alt=image></a></li>
                                    <li><a href=#product05><img src="<?php echo $pd1['products_image5']?>" alt=image></a></li>
                                    <li><a href=#product06><img src="<?php echo $pd1['products_image6']?>" alt=image></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=product-content><h4><?php echo $pd1['products_name']?></h4>
                        <ul class="product-content01 clearfix">
                            <li><span><i class="fa fa-star reviewGood"></i> <i class="fa fa-star reviewGood"></i> <i
                                    class="fa fa-star reviewGood"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i></span> <span>38</span> <span>12 reviews</span></li>
                            <li></li>

                        </ul>
                        <div class="rate-product clearfix">
                            <div class=rate-item>
                                <div>$<?php echo $pd1['products_price']?> <span>42% off</span></div>
                                <p>seling price (Free delivery)</p></div>
                                <div class=addcart-wrap><a href=shop-details.html class="btn-addcart addToCart"
                                                                   data-productid=1 data-productname="soccer club"
                                                                   data-productprice=199
                                                                   data-productimage=images/product/product01.jpg>add to
                                            cart</a>
                                            </div>

                        <div class=product-list><h5>product details</h5>
                            <ul class=clearfix>
                                <li>Cash returns</li>
                                <li>pay securley</li>
                                <li>brand new</li>
                                <li>30 day exchange guarantee</li>
                                <li>100% original</li>
                                <li>free delivery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <?php
 require('index_footer.php');
 ?>