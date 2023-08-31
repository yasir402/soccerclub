<?php
include('header.php');






if(isset($_POST['insert'])){

$ms_description= $_POST['ms_description'];
$emp1 = $_FILES['ms_team1_image']['name'];
$tmp1 = $_FILES['ms_team1_image']['tmp_name'];
$folder1 = "images/".$emp1;
$emp2 = $_FILES['ms_team2_image']['name'];
$tmp2 = $_FILES['ms_team2_image']['tmp_name'];
$folder2 = "images/".$emp2;
$ms_date= $_POST['ms_date'];
$ms_day= $_POST['ms_day'];
$ms_stadium = $_POST['ms_stadium'];
$ms_city = $_POST['ms_city'];

$move66 = move_uploaded_file($tmp1,$folder1);

$move266 = move_uploaded_file($tmp2,$folder2);

$sql="INSERT INTO `match_schedule`(`ms_description`, `ms_team1_image`, `ms_team2_image`, `ms_date`, `ms_day`, `ms_stadium`, `ms_city`) VALUES ('".$ms_description."','".$folder1."','".$folder2."','".$ms_date."','".$ms_day."','".$ms_stadium."','".$ms_city."')";
$res = mysqli_query($con,$sql);
if($res){
 echo "<script>alert('Successfully Inserted')</script>";
 echo '<script>window.location="match_shedule.php"</script>';
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
                            <h6 class="mb-4">ADD MATCHES SHEDULE</h6>

                            <a href="match_shedule.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form method="POST" enctype="multipart/form-data">
                            
                                <div class="mb-3">
                                    <label class="form-label">ms_description</label>
                                    <input type="text" name="ms_description" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ms_team1_image</label>
                                    <input type="file" name="ms_team1_image" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">ms_team2_image</label>
                                    <input type="file" name="ms_team2_image" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">ms_date</label>
                                    <input type="text" name="ms_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ms_day</label>
                                    <input type="text" name="ms_day" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">ms_stadium</label>
                                    <input type="text" name="ms_stadium" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ms_city</label>
                                    <input type="text" name="ms_city" name="image_1" class="form-control">
                                </div>
        
                        
                           <button name="insert"  href="latest_video.php" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">ADD</button>
                             </div>
                            </form>
                        </div>
                    </div>













<?php
include('footer.php');
?>