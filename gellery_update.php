<?php
include('header.php');
$id = $_GET['update_id'];



if(isset($_POST['update'])){

    $players_description= $_POST['players_description'];
    $emp = $_FILES['players_image']['name'];
    $tmp = $_FILES['players_image']['tmp_name'];
    $folder = "images/".$emp;
    $players_name= $_POST['players_name'];
    $players_age= $_POST['players_age'];
    $players_date = $_POST['players_date'];
  
    $players_role = $_POST['players_role'];
    $players_like = $_POST['players_like'];
    
    $move = move_uploaded_file($tmp,$folder);
    
    $sql="UPDATE `players_gallery` SET `players_description`='".$players_description."',`players_image`='".$folder."',`players_name`='".$players_name."',`players_age`='".$players_age."',`players_date`='".$players_date."',`players_role`='".$players_role."',`players_like`='".$players_like."' WHERE players_id ='".$id."'";
    $res = mysqli_query($con,$sql);
    if($res){
     echo "<script>alert('Successfully updated')</script>";
     echo '<script>window.location="player_gallery.php"</script>';
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
                            <h6 class="mb-4">UPDATE PLAYERS GALLERY</h6>

                            <a href="player_gallery.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form method="POST" enctype="multipart/form-data">









                            <?php
$sq=mysqli_query($con,"SELECT * FROM `players_gallery` WHERE players_id = '".$id."'");
$ys=mysqli_fetch_array($sq)
?>




                                <div class="mb-3">
                                    <label class="form-label">players_description</label>
                                    <input type="text"  value="<?php echo $ys['players_description']?>" name="players_description" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">players_image</label>

                                    <img src="<?php echo $ys['players_image']?>" width="150px" alt="">
                                    <input type="file" name="players_image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">players_name</label>
                                    <input type="text"  value="<?php echo $ys['players_name']?>" name="players_name" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">players_age</label>
                                    <input type="text" value="<?php echo $ys['players_age']?>" name="players_age" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">players_date</label>
                                    <input type="date" value="<?php echo $ys['players_date']?>" name="players_date" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">players_role</label>
                                    <input type="text"value="<?php echo $ys['players_role']?>" name="players_role" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">players_like</label>
                                    <input type="text"value="<?php echo $ys['players_like']?>" name="players_like" class="form-control">
                                </div>
        
                        
                           <button name="update"  href="player_gallery.php" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">UPDATE</button>
                             </div>
                            </form>
                        </div>
                    </div>













<?php
include('footer.php');
?>