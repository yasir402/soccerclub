
<?php
include('header.php');

if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM `point_table` WHERE p_id  = '".$_GET['delete_id']."'");


}
?>

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <a href="point_add.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">Add New</button></a>
                            <h6 class="mb-4">POINT TABLE LIST</h6>
                                
                            
                            <div class="table-responsive">
                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                    <th scope="col">p_id</th>
                                        <th scope="col">p_teamname</th>
                                        <th scope="col">p_points</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    <?php
$sqlq=mysqli_query($con,"SELECT * from `point_table`" );
 while( $st=mysqli_fetch_array($sqlq)){
?>
                                        <td scope="row"><?php echo $st['p_id'] ?></td>
                                        <td><?php echo $st['p_teamname'] ?></td>
                                        <td><?php echo $st['p_points'] ?></td>
                                    
                                        <td>
                                        
                                        
                                   <a href="point_table.php?del&delete_id=<?php echo $st['p_id']?>"> <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button> </a>  
                                        <a href="point_update.php?up&update_id=<?php echo $st['p_id']?>"><button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn">Update</button></a></td>
                                        
                                        
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
            