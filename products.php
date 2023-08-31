<?php
include('header.php');

?>
<?php


if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM `products` WHERE products_id  = '".$_GET['delete_id']."'");


}
?>

               
<div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <a href="add_product.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">Add New</button></a>
                        
                            <h6 class="mb-4">Products LIST</h6>
                                
                            
                          <div class="table-responsive">
                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                    <th scope="col">products_id</th>
                                        <th scope="col">products_name</th>
                                        <th scope="col">products_price</th>
                                        <th scope="col">products_image1</th>
                                        <th scope="col">products_image2</th>
                                        <th scope="col">products_image3</th>
                                        <th scope="col">products_image4</th>
                                        <th scope="col">products_image5</th>
                                         <th scope="col">products_image6</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>


                                <?php
$sqlq=mysqli_query($con,"SELECT * from `products`" );
     while( $st=mysqli_fetch_array($sqlq))
 
 {
?>
                                    <tr>
                                        <td scope="row"><?php echo $st['products_id'] ?></td>
                                        <td><?php echo $st['products_name'] ?></td>

                                        <td><?php echo $st['products_price'] ?></td>
                                        <td>
                                        
                                        <img src="  <?php echo $st['products_image1'] ?>" width="150px" alt="">
                                        
                                      </td>
                                        <td>
                                        <img src="<?php echo $st['products_image2'] ?>" width="150px" alt=""></td>
                                        <td>
                                        <img src="<?php echo $st['products_image3'] ?>"width="150px" alt=""> </td>
                                        <td>
                                        <img src="<?php echo $st['products_image4'] ?>"width="150px" alt=""></td>
                                        <td>
                                        <img src="<?php echo $st['products_image5'] ?>"width="150px" alt=""></td>
                                        <td>
                                        <img src="<?php echo $st['products_image6'] ?>"width="150px" alt=""></td>
                                    
                                        <td>
                                        
                                        
                                 <a href="products.php?del&delete_id=<?php echo $st['products_id']?>">  <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button></a> 
                                        <a href="product_update.php?up&update_id=<?php echo $st['products_id']?>"><button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn">Update</button></a></td>
                                        
                                        
                                    </tr>
                        <?php
                           }
                        ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
            </div>
<?php
include('footer.php');
?>