
<?php
include('header.php');

?>
<?php
if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM `match_schedule` WHERE ms_id  = '".$_GET['delete_id']."'");


}
?>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
<a href="matchshed_add.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">Add New</button></a>

                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">MATCHES SHEDULE LIST</h6>
                                
                            
                            
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                    <th scope="col">ms_id</th>
                                        <th scope="col">ms_description</th>
                                        <th scope="col">ms_team1_image</th>
                                        <th scope="col">ms_team2_image</th>
                                        <th scope="col">ms_date</th>
                                        <th scope="col">ms_day</th>
                                        <th scope="col">ms_stadium</th>
                                        <th scope="col">ms_city</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <?php
$sqlq=mysqli_query($con,"SELECT * from `match_schedule`" );
 while( $st=mysqli_fetch_array($sqlq)){
?>  <tr>
                                        <td ><?php echo $st['ms_id'] ?></td>
                                        <td><?php echo $st['ms_description'] ?></td>
                                        <td>
                                        
                                        <img src="<?php echo $st['ms_team1_image'] ?>" width="150px" alt="">
                                        </td>
                                        <td>
                                        
                                        <img src="<?php echo $st['ms_team2_image'] ?>" width="150px" alt="">
                                        </td>
                                        <td><?php echo $st['ms_date'] ?></td>
                                        <td><?php echo $st['ms_day'] ?></td>
                                        <td><?php echo $st['ms_stadium'] ?></td>
                                        <td><?php echo $st['ms_city'] ?></td>
                                        <td>
                                      <a href="match_shedule.php?del&delete_id=<?php echo $st['ms_id']?>">  <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button></a>
                                        <a href="matchshed_update.php?up&update_id=<?php echo $st['ms_id']?>"> <button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn">Update</button></a></td>
                                        
                                        
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
            