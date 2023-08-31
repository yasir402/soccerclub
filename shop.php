<?php
require('index_header.php');
?>
    <div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline>our <span>shop</span></h2></div>
    </div>
    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>best soccer <span>accessories shop</span></h2>

                    <aside class=contentinner>
                        <div class="bg-red shop_select clearfix">
                            <div class=select_shopping>
                            </div>
                        </div>
                        <div class="shop-wrap-slider clearfix">
                            <div class=shop_detais>
                                <div class="shop01 clearfix">
                                <?php
               $hero2 = mysqli_query($con,"SELECT * FROM products");
               while($hero3 = mysqli_fetch_array($hero2)){
               ?>
                                    <div class=shop-img>
                                        <div class=bgimg><img src=" <?php echo $hero3['products_image1']?>" alt=""> </div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html><?php echo $hero3['products_name']?></a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                    <div class=headline01>$<?php echo $hero3['products_price']?></div>
                                        <div class=addcart-wrap><a href=shop-details.html class="btn-addcart addToCart"
                                                                   data-productid=1 data-productname="soccer club"
                                                                   data-productprice=199
                                                                   data-productimage=images/product/product01.jpg>add to
                                            cart</a> 
                                            
                                            <a href="product-details.php?id=<?php echo $hero3['products_id']?>" class=btn-fav>product datail</a></div>
                                    </div>
                                    <?php
               }
               ?>


                                </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <?php
require('index_footer.php');
?>