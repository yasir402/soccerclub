<?php
include('header.php');
?>




<?php
if(isset($_POST['insert'])){

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

$sql="INSERT INTO `latest_result`(`result_title`, `result_description`, `result_team1name`, `result_team2name`, `result_team1_image`, `result_team2_image`, `result_status`, `result_team1_performence`, `result_team2_performence`, `result_team1_score`, `result_team2_score`, `result_datetime`, `result_stadium`, `result_country`) VALUES ('".$result_title."','".$result_description."','".$result_team1name."','".$result_team2name."','".$folder1."','".$folder2."','".$result_status."','".$result_team1_performance."','".$result_team2_performance."','".$result_team1_score."','".$result_team2_score."','".$result_datetime."','".$result_stadium."','".$result_country."')";
$res = mysqli_query($con,$sql);
if($res){
 echo "<script>alert('Successfully Inserted')</script>";
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
                            <h6 class="mb-4">ADD LETEST RESULT</h6>

                            <a href="latest_result.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form  method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">result_title</label>
                                    <input type="text" name="result_title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_description</label>
                                    <input type="text" name="result_description" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team1name</label>
                                    <input type="text" name="result_team1name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team2name</label>
                                    <input type="text" name="result_team2name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team1_image</label>
                                    <input type="file" name="result_team1_image" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_team2_image</label>
                                    <input type="file" name="result_team2_image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_status</label>
                                    <input type="text" name="result_status" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team1_performance</label>
                                    <input type="text" name="result_team1_performance" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team2_performance</label>
                                    <input type="text" name="result_team2_performance" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">result_team1_score</label>
                                    <input type="text" name="result_team1_score" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_team2_score</label>
                                    <input type="text" name="result_team2_score" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_datetime</label>
                                    <input type="date" name="result_datetime" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_stadium</label>
                                    <input type="text" name="result_stadium" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">result_country</label>
                                    <input type="text" name="result_country" class="form-control">
                                </div>
                                


                               <div>
                           <button  href="latest_result.php" name="insert" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">ADD</button>
                             </div>
                            </form>
                        </div>
                    </div>



<?php
include('footer.php');

?>