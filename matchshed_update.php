<?php
include('header.php');
$id = $_GET['update_id'];









if(isset($_POST['update'])){

    $ms_heading= $_POST['ms_heading'];
    $ms_description= $_POST['ms_description'];
    $emp1 = $_FILES['ms_team1_image']['name'];
    $tmp1 = $_FILES['ms_team1_image']['tmp_name'];
    $folder1 = "images/".$emp1;
    $emp2 = $_FILES['ms_team1_image']['name'];
    $tmp2 = $_FILES['ms_team1_image']['tmp_name'];
    $folder2 = "images/".$emp2;
    $ms_date= $_POST['ms_date'];
    $ms_day= $_POST['ms_day'];
    $ms_stadium = $_POST['ms_stadium'];
    $ms_city = $_POST['ms_city'];
    
    $move = move_uploaded_file($tmp,$folder);
    
    $sql="UPDATE `match_schedule` SET `ms_heading`='".$ms_heading."',`ms_description`='".$ms_description."',`ms_team1_image`='".$folder1."',`ms_team2_image`='".$folder2."',`ms_date`='".$ms_date."',`ms_day`='".$ms_day."',`ms_stadium`='".$ms_stadium."',`ms_city`='".$ms_city."' WHERE 	ms_id = '".$id."'";
    $res = mysqli_query($con,$sql);
    if($res){
     echo "<script>alert('Successfully updated')</script>";
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
                            <h6 class="mb-4">UPDATE MATCHES SHEDULE</h6>

                            <a href="match_shedule.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">



                            <?php
$sq=mysqli_query($con,"SELECT * FROM `match_schedule` WHERE ms_id = '".$id."'");
$ys=mysqli_fetch_array($sq)
?>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ms_description</label>
                                    <input type="text" value="<?php echo $ys['ms_description']?>" name="ms_description" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ms_team1_image</label>
                                    <img src="<?php echo $ys['ms_team1_image']?>" width="150px" alt="">
                                    <input type="file" name="ms_team1_image" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">ms_team2_image</label>
                                    <img src="<?php echo $ys['ms_team2_image']?>" width="150px" alt="">
                                    <input type="file" name="ms_team2_image" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">ms_date</label>
                                    <input type="text" value="<?php echo $ys['ms_date']?>" name="ms_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ms_day</label>
                                    <input type="text" name="ms_day" value="<?php echo $ys['ms_day']?>" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">ms_stadium</label>
                                    <input type="text" name="ms_stadium"  value="<?php echo $ys['ms_stadium']?>" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ms_city</label>
                                    <input type="text" name="ms_city"  value="<?php echo $ys['ms_city']?>" n class="form-control">
                                </div>
        
                        
                           <button  name="update" href="match_shedule.php" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">UPDATE</button>
                             </div>
                            </form>
                        </div>
                    </div>













<?php
include('footer.php');
?>