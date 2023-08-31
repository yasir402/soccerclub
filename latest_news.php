<?php
include('header.php');



?>
<?php
if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM `latest_news` WHERE LN_id = '".$_GET['delete_id']."'");


}
?>

   <!-- Sale & Revenue Start -->
   <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <a href="form.php"><a href="latest_form_add.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">Add New</button></a>
                            <h6 class="mb-4">Latest_News</h6>
                                
                            
                          
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">LN_id</th>
                                        <th scope="col">LN_image</th>
                                        <th scope="col">LN_img_title</th>
                                        <th scope="col">LN_img_title_description</th>
                                        <th scope="col">LN_description</th>
                                        <th scope="col">LN_date</th>
                                        <th scope="col">LN_likes</th>
                                        <th style="padding-left:50px;">Action</th>
                                    </tr>
                                </thead>

                                <?php
$sqlq=mysqli_query($con,"SELECT * from `latest_news`" );
 while( $st=mysqli_fetch_array($sqlq)){
?>



                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $st['LN_id'] ?></th>
                                        
                                        <td><img src=" <?php echo $st['LN_image'] ?>" width="150px" alt=""></td>
                                        <td><?php echo $st['LN_img_tittle'] ?></td>
                                        <td><?php echo $st['LN_img_tittle_description'] ?></td>
                                        <td><?php echo $st['LN_description'] ?></td>
                                        <td><?php echo $st['LN_date'] ?></td>
                                        <td><?php echo $st['LN_likes'] ?></td>
                                   
                                       
                                        <td>       <a href="latest_news.php?del&delete_id=<?php echo $st['LN_id']?>" >   <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;"  class="btn">Delete</button></a>
                                        <a href="latest_form_update.php?up&update_id=<?php echo $st['LN_id'] ?>"><button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn"> Update</button></a></td>
                                        
                                        
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