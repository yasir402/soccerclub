<?php
include('header.php');
$id = $_GET['update_id'];







if(isset($_POST['update'])){

$result_title= $_POST['result_title'];
$result_description= $_POST['result_description'];

$result_team1name= $_POST['result_team1name'];
$result_team2name= $_POST['result_team2name'];


$emp1 = $_FILES['result_team1_image']['name'];
$tmp1 = $_FILES['result_team1_image']['tmp_name'];
$folder1 = "images/".$emp1;
$emp2 = $_FILES['result_team2_image']['name'];
$tmp2= $_FILES['result_team2_image']['tmp_name'];
$folder2 = "images/".$emp2;
$result_status = $_POST['result_status'];
$result_team1_performance = $_POST['result_team1_performance'];
$result_team2_performance = $_POST['result_team2_performance'];
$result_team1_score = $_POST['result_team1_score'];
$result_team2_score = $_POST['result_team2_score'];
$result_datetime = $_POST['result_datetime'];
$result_stadium = $_POST['result_stadium'];
$result_country = $_POST['result_country'];
$move = move_uploaded_file($tmp1,$folder1);
$move = move_uploaded_file($tmp2,$folder2);

$sql="UPDATE `latest_result` SET `result_title`='".$result_title."',`result_description`='".$result_description."',`result_team1name`='".$result_team1name."',`result_team2name`='".$result_team2name."',`result_team1_image`='".$folder1."',`result_team2_image`='".$folder2."',`result_status`='".$result_status."',`result_team1_performence`='".$result_team1_performance."',`result_team2_performence`='".$result_team2_performance."',`result_team1_score`='".$result_team1_score."',`result_team2_score`='".$result_team2_score."',`result_datetime`='".$result_datetime."',`result_stadium`='".$result_stadium."',`result_country`='".$result_country."' WHERE 	result_id= '".$id."'  ";
$res = mysqli_query($con,$sql);
if($res){
 echo "<script>alert('Successfully updated')</script>";
 echo '<script>window.location="latest_result.php"</script>';
}
else{
 echo  "sorry";
}



}

?>











<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">UPDATE LETEST NEWS</h6>

                            <a href="latest_result.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                      
                      
                            <?php
$sq=mysqli_query($con,"SELECT * FROM `latest_result` WHERE result_id  =  '".$id."' ");
$ys=mysqli_fetch_array($sq)
?>
                      
                            <form  method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">result_title</label>
                                    <input type="text" value="<?php echo $ys['result_title']?>" name="result_title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_description</label>
                                    <input type="text" value="<?php echo $ys['result_description']?>" name="result_description"  class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team1name</label>
                                    <input type="text" value="<?php echo $ys['result_team1name']?>" name="result_team1name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team2name</label>
                                    <input type="text" value="<?php echo $ys['result_team2name']?>"  name="result_team2name"  class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team1_image</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $ys['result_team1_image']?>" alt="" width="150px">
                                    <input type="file"  name="result_team1_image"  class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_team2_image</label>
                                    <br>
                                    <br>
                                    <img src="<?php echo $ys['result_team2_image']?>" alt="" width="150px">
                                    <input type="file" name="result_team2_image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_status</label>
                                    <input type="text" name="result_status"  value="<?php echo $ys['result_status']?>"  class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team1_performance</label>
                                    <input type="text" name="result_team1_performance" value="<?php echo $ys['result_team1_performence']?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team2_performance</label>
                                    <input type="text" name="result_team2_performance"  value="<?php echo $ys['result_team2_performence']?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team1_score</label>
                                    <input type="text" name="result_team1_score"  value="<?php echo $ys['result_team1_score']?>" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_team2_score</label>
                                    <input type="text" name="result_team2_score"value=" <?php echo $ys['result_team2_score']?>"class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_datetime</label>
                                    <input type="date" name="result_datetime" value="<?php echo $ys['result_datetime']?>" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_stadium</label>
                                    <input type="text"name="result_stadium" value="<?php echo $ys['result_stadium']?>" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_country</label>
                                    <input type="text"name="result_country" value="<?php echo $ys['result_country']?>" class="form-control">
                                </div>
                                


                               <div>
                         <button  type="submit" name="update" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">UPDATE</button>
                             </div>
                            </form>
                        </div>
                    </div>














<?php
include('footer.php');

?>