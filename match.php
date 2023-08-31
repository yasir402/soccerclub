
<?php
include('header.php');

?>
<?php
if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM `matches` WHERE   match_id= '".$_GET['delete_id']."'");


}
?>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <a href="match_add.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">Add New</button></a>
                            <h6 class="mb-4">MATCHES LIST</h6>
                                
                            
                          
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                    <th scope="col">match_id</th>
                                        <th scope="col">match_team1_name</th>
                                        <th scope="col">match_team2_name</th>
                                        <th scope="col">match_date</th>
                                        <th scope="col">match_time</th>
                
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
$sqlq=mysqli_query($con,"SELECT * from `matches`  " );
 while( $st=mysqli_fetch_array($sqlq)){
?>


                                        <td scope="row"><?php echo $st['match_id'] ?></td>
                                        <td><?php echo $st['match_team1_name'] ?></td>
                                        <td><?php echo $st['match_team2_name'] ?></td>
                                        <td><?php echo $st['match_date'] ?></td>
                                        <td><?php echo $st['match_time'] ?></td>
                                 
                                   
                               <td>                                     <a href="match.php?del&delete_id=<?php echo $st['match_id']?>">   <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button></a>
                                        <a  href="match_update.php?up&update_id=<?php echo $st['match_id'] ?>"><button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn">Update</button></a></td>
                                        
                                        
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
            