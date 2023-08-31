<?php
include('header.php');
$id = $_GET['update_id'];






if(isset($_POST['update'] )){



    $products_name= $_POST['products_name'];
 
    $products_price= $_POST['products_price'];

    $emp = $_FILES['products_image1']['name'];
    $tmp = $_FILES['products_image1']['tmp_name'];+
    
    $emp1 = $_FILES['products_image2']['name'];
    $tmp1 = $_FILES['products_image2']['tmp_name'];
    
    $emp2 = $_FILES['products_image3']['name'];
    $tmp2 = $_FILES['products_image3']['tmp_name'];
    
    $emp3 = $_FILES['products_image4']['name'];
    $tmp3 = $_FILES['products_image4']['tmp_name'];
    
    $emp4 = $_FILES['products_image5']['name'];
    $tmp4 = $_FILES['products_image5']['tmp_name'];
    $emp5 = $_FILES['products_image5']['name'];
    $tmp5 = $_FILES['products_image5']['tmp_name'];
    
    $folder = "images/".$emp;
    $folder1 = "images/".$emp1;
    $folder2 = "images/".$emp2;
    $folder3 = "images/".$emp3;
    $folder4 = "images/".$emp4;
    $folder5 = "images/".$emp5;
    
    $move = move_uploaded_file($tmp,$folder);
    $move1 = move_uploaded_file($tmp1,$folder1);
    $move2 = move_uploaded_file($tmp2,$folder2);
    $move3 = move_uploaded_file($tmp3,$folder3);
    $move4 = move_uploaded_file($tmp4,$folder4);
    $move5 = move_uploaded_file($tmp5,$folder5);
    
    $query = mysqli_query ($con,"UPDATE `products` SET `products_name`='".$products_name."',`products_price`='".$products_price."',`products_image1`='".$folder."',`products_image2`='".$folder1."',`products_image3`='".$folder2."',`products_image4`='".$folder3."',`products_image5`='".$folder4."',`products_image6`='".$folder5."' WHERE products_id= '".$id."' ");
    
    echo '<script>window.location="products.php"</script>';
    }


















?>


<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update Products</h6>

                        <a href="products.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form method="POST" enctype="multipart/form-data">



                            <?php
$sqlq=mysqli_query($con,"SELECT * from `products`  where products_id = '".$id."' " );
$st=mysqli_fetch_array($sqlq);
?>





                            <div class="mb-3">
                                    <label class="form-label">products_name</label>
                                    <input type="text"  value="<?php echo $st['products_name']?>"   name="products_name" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">products_price</label>
                                    <input type="text"  value="<?php echo $st['products_price']?>"   name="products_price" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">products_image1</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $st['products_image1']?>" width="150px" alt="">
                                    <input type="file" name="products_image1" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">products_image2</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $st['products_image2']?>" width="150px" alt="">
                                    <input type="file" name="products_image2" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">products_image3</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $st['products_image3']?>" width="150px" alt="">
                                    <input type="file" name="products_image3" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">products_image4</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $st['products_image4']?>" width="150px" alt="">
                                    <input type="file" name="products_image4" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">products_image5</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $st['products_image5']?>" width="150px" alt="">
                                    <input type="file" name="products_image5" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">products_image6</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $st['products_image6']?>" width="150px" alt="">
                                    <input type="file" name="products_image6" class="form-control">
                                </div>
                               <div>
             <button  name="update" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">update</button>
                             </div>
                            </form>
                        </div>
                    </div>













<?php
include('footer.php');
?>