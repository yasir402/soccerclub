<?php
include('header.php');

?>
<?php
if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM `latest_video` WHERE video_id = '".$_GET['delete_id']."'");


}
?>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="table-responsive">
                            <a href="video_add.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">Add New</button></a>
                            <h6 class="mb-4">LETEST VIDEO LIST</h6>
                                
                            
                            
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">video_id</th>
                                        <th scope="col">video_date</th>
                                        <th scope="col">video_title</th>
                                        <th scope="col">video_link</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
$sqlq=mysqli_query($con,"SELECT * from `latest_video`" );
 while( $st=mysqli_fetch_array($sqlq)){
?>
                                        <td scope="row"><?php echo $st['video_id'] ?></td>
                                        <td><?php echo $st['video_date'] ?></td>
                                        <td><?php echo $st['video_title'] ?></td>
                                        <td><?php echo $st['video_link'] ?></td>
                             
                                        <td>
                                        
                                      <a href="latest_video.php?del&delete_id=<?php echo $st['video_id']?>"> <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button></a> 
                                        <a href="video_update.php?up&update_id=<?php echo $st['video_id'] ?>"><button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn">Update</button></a></td>
                                        
                                        
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
            </div>
            <?php
include('footer.php');
?>
          

