<?php
include('header.php');

?>
<?php
$id = $_GET['update_id'];


?>
<?php
if(isset($_POST['update'])){


$emp = $_FILES['LN_image']['name'];
$tmp = $_FILES['LN_image']['tmp_name'];
$folder = "images/".$emp;
$LN_img_title= $_POST['LN_img_title'];
$LN_img_title_description= $_POST['LN_img_title_description'];
$LN_description = $_POST['LN_description'];
$LN_date = $_POST['LN_date'];
$LN_likes = $_POST['LN_likes'];

$move = move_uploaded_file($tmp,$folder);

$sql="UPDATE `latest_news` SET `LN_image`='".$folder."',`LN_img_tittle`='".$LN_img_title."',`LN_img_tittle_description`='".$LN_img_title_description."',`LN_description`='".$LN_description."',`LN_date`='".$LN_date."',`LN_likes`='".$LN_likes."' WHERE  LN_id =  '".$id."'";
$res = mysqli_query($con,$sql);
if($res){
 echo "<script>alert('Successfully updated')</script>";
 echo '<script>window.location="latest_news.php"</script>';
}
else{
 echo  "sorry";
}
if(move_uploaded_file($tmp,$folder)){

}
}




?>

<?php
$sq=mysqli_query($con,"SELECT * FROM `latest_news` WHERE LN_id =  '".$id."' ");
$ys=mysqli_fetch_array($sq)
?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Latest News Update</h6>

                            <a href="latest_news.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form  method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">LN_link1</label>
                                    <input value="<?php echo $ys['LN_link1']?>" name="LN_link1" type="text" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_link2</label>
                                    <input value="<?php echo $ys['LN_link2']?>" type="text" name="LN_link2" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_image</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $ys['LN_image']?>" width="150px" alt="">
                                    <br>
                                    <br>
                                    <input  type="file" name="LN_image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_img_title</label>
                                    <input value="<?php echo $ys['LN_img_tittle']?>" type="text" name="LN_img_title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_img_title_description</label>
                                    <input value="<?php echo $ys['LN_img_tittle_description']?>" type="text" name="LN_img_title_description" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_description</label>
                                    <input value="<?php echo $ys['LN_description']?>" type="text"name="LN_description" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_date</label>
                                    <input value="<?php echo $ys['LN_date']?>" type="date" name="LN_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_likes</label>
                                    <input value="<?php echo $ys['LN_likes']?>" type="text" name="LN_likes" class="form-control">
                                </div>
                               <div>
                           <button  name="update" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">Update</button>
                             </div>
                            </form>
                        </div>
                    </div>
                    <?php
include('footer.php');

?>