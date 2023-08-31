<?php
include('header.php');
$id = $_GET['update_id'];






if(isset($_POST['update'])){

    $p_teamname= $_POST['p_teamname'];
 
    $p_points= $_POST['p_points'];
    $sql="UPDATE `point_table` SET `p_teamname`='". $p_teamname."',`p_points`='". $p_points."' WHERE p_id= '".$id."'";
    $res = mysqli_query($con,$sql);
    if($res){
     echo "<script>alert('Successfully updated')</script>";
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

                            
                            <?php
$sqlq=mysqli_query($con,"SELECT * from `point_table`  where p_id ='".$id."' " );
$st=mysqli_fetch_array($sqlq);
?>
                            <div class="mb-3">
                                    <label class="form-label">p_teamname</label>
                                    <input type="text" value="<?php echo $st['p_teamname']?>"   name="p_teamname" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">p_points</label>
                                    <input type="text" value="<?php echo $st['p_points']?>" name="p_points" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">p_heading</label>
                                    <input type="text" value="<?php echo $st['p_heading']?>" name="p_heading" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">p_description</label>
                                    <input type="text" value="<?php echo $st['p_description']?>" name="p_description" class="form-control">
                                </div>
                            
                        
                           <button name="update" href="point_table.php" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">ADD</button>
                             </div>
                            </form>
                        </div>












<?php
include('footer.php');
?>