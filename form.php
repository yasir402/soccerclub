
<?php
include('header.php');

?>


<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">ADD BANNER</h6>

                            <a href="main.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form  method="POST" enctype="multipart/form-data" >
                                <div class="mb-3">
                                    <label class="form-label">banner_image_player</label>
                                    <input type="file" name="image_1" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">banner_image_front</label>
                                    <input type="file" name="image_2" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">banner_image_back</label>
                                    <input type="file" name="image_3" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">banner_image_ball</label>
                                    <input type="file" name="image_4" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">banner_image_background</label>
                                    <input type="file" name="image_5" class="form-control">
                                </div>
                               <div>
                           <button name="insert" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">ADD</button>
                             </div>
                            </form>
                        </div>
                    </div>


<?php

                    if(isset($_POST['insert'] )){

$emp = $_FILES['image_1']['name'];
$tmp = $_FILES['image_1']['tmp_name'];+

$emp1 = $_FILES['image_2']['name'];
$tmp1 = $_FILES['image_2']['tmp_name'];

$emp2 = $_FILES['image_3']['name'];
$tmp2 = $_FILES['image_3']['tmp_name'];

$emp3 = $_FILES['image_4']['name'];
$tmp3 = $_FILES['image_4']['tmp_name'];

$emp4 = $_FILES['image_5']['name'];
$tmp4 = $_FILES['image_5']['tmp_name'];

$folder = "images/".$emp;
$folder1 = "images/".$emp1;
$folder2 = "images/".$emp2;
$folder3 = "images/".$emp3;
$folder4 = "images/".$emp4;


$move = move_uploaded_file($tmp,$folder);
$move1 = move_uploaded_file($tmp1,$folder1);
$move2 = move_uploaded_file($tmp2,$folder2);
$move3 = move_uploaded_file($tmp3,$folder3);
$move4 = move_uploaded_file($tmp4,$folder4);


$query = mysqli_query ($con,"INSERT INTO `banner`(`banner_image_player`, `banner_image_front`, `banner_image_background`, `banner_image_back`, `banner_image_ball`) VALUES ('".$folder."','".$folder1."','".$folder2."','".$folder3."','".$folder4."') ");

echo '<script>window.location="main.php"</script>';
}
?>
<?php
include('footer.php');
?>