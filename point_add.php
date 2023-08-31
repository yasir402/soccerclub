<?php
include('header.php');




if(isset($_POST['insert'])){

    $p_teamname= $_POST['p_teamname'];
 
    $p_points= $_POST['p_points'];
    $p_heading= $_POST['p_heading'];
    $p_description = $_POST['p_description'];
    $sql="INSERT INTO `point_table`(`p_teamname`, `p_points`) VALUES ('". $p_teamname."','". $p_points."')";
    $res = mysqli_query($con,$sql);
    if($res){
     echo "<script>alert('Successfully Inserted')</script>";
     echo '<script>window.location="point_table.php"</script>';
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
                            <h6 class="mb-4">ADD POINT TABLE</h6>

                            <a href="point_table.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">p_teamname</label>
                                    <input type="text" name="p_teamname" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">p_points</label>
                                    <input type="text" name="p_points" class="form-control">
                                </div>
                           <button name="insert"  href="point_table.php" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">ADD</button>
                             </div>
                            </form>
                        </div>
                    </div>













<?php
include('footer.php');
?>