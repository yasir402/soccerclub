<?php
include('header.php');




if(isset($_POST['insert'])){

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
    
    $sql="INSERT INTO `players_gallery`(`players_description`, `players_image`, `players_name`, `players_age`, `players_date`, `players_role`, `players_like`) VALUES ('".$players_description."','".$folder."','".$players_name."','".$players_age."','".$players_date."','".$players_role."','".$players_like."')";
    $res = mysqli_query($con,$sql);
    if($res){
     echo "<script>alert('Successfully Inserted')</script>";
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
                            <h6 class="mb-4">ADD PLAYERS GALLERY</h6>

                            <a href="player_gallery.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">players_description</label>
                                    <input type="text" name="players_description" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">players_image</label>
                                    <input type="file" name="players_image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">players_name</label>
                                    <input type="text" name="players_name" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">players_age</label>
                                    <input type="text" name="players_age" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">players_date</label>
                                    <input type="text" name="players_date" class="form-control">
                                </div>
                          
                                <div class="mb-3">
                                    <label class="form-label">players_role</label>
                                    <input type="text" name="players_role" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">players_like</label>
                                    <input type="text" name="players_like" class="form-control">
                                </div>
        
                        
                           <button name="insert" href="player_gallery.php" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">ADD</button>
                             </div>
                            </form>
                        </div>
                    </div>













<?php
include('footer.php');
?>