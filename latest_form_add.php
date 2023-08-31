<?php
include('header.php');

?>
<?php
if(isset($_POST['insert'])){

$emp = $_FILES['LN_image']['name'];
$tmp = $_FILES['LN_image']['tmp_name'];
$folder = "images/".$emp;
$LN_img_title= $_POST['LN_img_title'];
$LN_img_title_description= $_POST['LN_img_title_description'];
$LN_description = $_POST['LN_description'];
$LN_date = $_POST['LN_date'];
$LN_likes = $_POST['LN_likes'];

$move = move_uploaded_file($tmp,$folder);

$sql="INSERT INTO `latest_news`(`LN_image`, `LN_img_tittle`, `LN_img_tittle_description`, `LN_description`, `LN_date`, `LN_likes`) VALUES ('".$folder."','".$LN_img_title."','".$LN_img_title_description."','".$LN_description."','".$LN_date."','".$LN_likes."')";
$res = mysqli_query($con,$sql);
if($res){
 echo "<script>alert('Successfully Inserted')</script>";
 echo '<script>window.location="latest_news.php"</script>';
}
else{
 echo  "sorry";
}
if(move_uploaded_file($tmp,$folder)){

}
}




?>




<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">ADD LETEST NEWS</h6>

                            <a href="main.php"><a href="latest_news.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form  method="POST" enctype="multipart/form-data">
                                
                                <div class="mb-3">
                                    <label class="form-label">LN_image</label>
                                    <input name="LN_image" type="file"  class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_img_title</label>
                                    <input name="LN_img_title" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_img_title_description</label>
                                    <input name="LN_img_title_description" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_description</label>
                                    <input name="LN_description" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_date</label>
                                    <input name="LN_date"  type="date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LN_likes</label>
                                    <input name="LN_likes" type="text" class="form-control">
                                </div>
                               <div>
                           <button  name="insert" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">ADD</button>
                             </div>
                            </form>
                        </div>
                    </div>






<?php
include('footer.php');
?>