<?php
include('header.php');

if(isset($_GET['del'])){

    $del= mysqli_query($con,"DELETE FROM `banner` WHERE banner_id= '".$_GET['delete_id']."'");

   
}


?>
</script>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <a href="form.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">Add New</button></a>
                            <h6 class="mb-4">Banner_List</h6>
                                
                            

                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">banner_id</th>
                                        <th scope="col">banner_image_player</th>
                                        <th scope="col">banner_image_front</th>
                                        <th scope="col">banner_image_background</th>
                                        <th scope="col">banner_image_back</th>
                                        <th scope="col">banner_image_ball</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    <?php
$sqlq=mysqli_query($con,"SELECT * from `banner`" );
 while( $st=mysqli_fetch_array($sqlq)){
?>



                                        <td ><?php echo $st['banner_id'] ?></td>
                                        <td> <img src="<?php echo $st['banner_image_player']?>" width="100px" height="100px"> </td>
                                        <td><img src="<?php echo $st['banner_image_front']?>" width="100px" height="100px"></td>
                                        <td><img src="<?php echo $st['banner_image_background']?>" width="100px" height="100px"></td>
                                        <td><img src="<?php echo $st['banner_image_back']?>" width="100px" height="100px"></td>
                                        <td><img src="<?php echo $st['banner_image_ball']?>" width="100px" height="100px"></td>
                                        <td>
                                            
                                     <a href="main.php?del&delete_id=<?php echo $st['banner_id']?>">   <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;"  class="btn">Delete</button></a>
                                        <a href="main_update.php?up&update_id=<?php echo $st['banner_id'] ?>"><button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn">Update</button></a></td>
                                        
                                        
                                    </tr>
                        <?php
 }
                        ?>
                                </tbody>
                            </table>
</div>
                        </div>
                    </div>
            </div>
            <?php


    
include('footer.php');
?>

