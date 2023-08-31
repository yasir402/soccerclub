<?php
require('index_header.php');

?>
    <?php
if(isset($_POST['insert'] )){

    $p_title = $_POST['name'];
    $p_dec = $_POST['phone'];
    $category_type = $_POST['subject'];
    $price = $_POST['email'];
    $comment = $_POST['comment'];
    

    $abc = "INSERT INTO `feedback`(`name`, `email`, `subject`, `phone`, `messege`) VALUES ('".$p_title."','".$p_dec."','".$category_type."','".$price."','".$comment."')";
$res = mysqli_query($con,$abc);
    if($res){
     echo "<script>alert('Successfully Inserted')</script>";
    }
    else{
     echo  "sorry";
    }
  
    } 
 
?>
<div class=innerbannerwrap>
        <div class=content></div>
        <div class=innerbanner><h2 class=bannerHeadline>FEED <span>BACK</span></h2></div>
    </div>
<div class="container" >
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<form method="POST" >
                                <div class="mb-3">
                                    <label class="form-label">name</label>
                                    <input class="form-control" type="text" name="name" class="form-control" >
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label">phone</label>
                                    <input class="form-control" type="number" name="phone" class="form-control">
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label">subject</label>
                                    <input class="form-control" type="text" name="subject" class="form-control">
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label">email</label>
                                    <input class="form-control" type="text" name="email" class="form-control">
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label">comment</label>
                                     <textarea class="form-control" type="text" name="comment" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <br>
                                <br>
                           <button name="insert"  type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">send</button>
                        <br>
                        <br>     
                        </div>
                            </form>
                            </div>
    <?php
require('footer.php');
?>

