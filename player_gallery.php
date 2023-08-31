
<?php
include('header.php');

?>
<?php
if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM `players_gallery` WHERE  players_id = '".$_GET['delete_id']."'");


}
?>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <a href="gellery_add.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">Add New</button></a>
                        
                            <h6 class="mb-4">PLAYERS GALLERY LIST</h6>
                                
                            
                          <div class="table-responsive">
                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                    <th scope="col">players_id</th>
                                        <th scope="col">players_description</th>
                                        <th scope="col">players_image</th>
                                        <th scope="col">players_name</th>
                                        <th scope="col">players_age</th>
                                        <th scope="col">players_date</th>
                                        <th scope="col">players_role</th>
                                        <th scope="col">players_like</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
$sqlq=mysqli_query($con,"SELECT * from `players_gallery`" );
 while( $st=mysqli_fetch_array($sqlq)){
?>

                                        <td scope="row"><?php echo $st['players_id'] ?></td>
                                        <td><?php echo $st['players_description'] ?></td>
                                        <td>
                                        <img src="<?php echo $st['players_image'] ?>" width="150px" alt="">
                                      </td>
                                        <td><?php echo $st['players_name'] ?></td>
                                        <td><?php echo $st['players_age'] ?></td>
                                        <td><?php echo $st['players_date'] ?></td>
                                    
                                        <td><?php echo $st['players_role'] ?></td>
                                        <td>  <?php echo $st['players_like'] ?> </td>
                                        <td>
                                        
                                   <a href="player_gallery.php?del&delete_id=<?php echo $st['players_id']?>">  <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button></a>
                  <a href="gellery_update.php?up&update_id=<?php echo $st['players_id']?>"><button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn">Update</button></a></td>
                                        
                                        
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
            