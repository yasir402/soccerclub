<?php
include('header.php');

?>
<?php


if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM ` user` WHERE  user_id = '".$_GET['delete_id']."'");


}
?>

               
         <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                     
                            <h6 class="mb-4">User LIST</h6>
                                
                            
                            <div class="table-responsive">
                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                    <th scope="col">user_id</th>
                                        <th scope="col">user_name</th>
                                        <th scope="col">user_email</th>
                                        <th scope="col">user_image</th>
                                        <th scope="col">user_password</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$sqlq=mysqli_query($con,"SELECT * from `user`" );
     while( $st=mysqli_fetch_array($sqlq))
 
 {
?>




                                    <tr>
                                        <td scope="row"><?php echo $st['user_id'] ?></td>
                                        <td><?php echo $st['user_name'] ?></td>
                                        <td><?php echo $st['user_email'] ?></td>
                                        <td>
                                        <img src="<?php echo $st['user_image'] ?>" alt=""></td>
                                        <td> <?php echo $st['user_password'] ?></td>
                        
                                    <td></td>
                                        <td>
                                    <a  href="user.php?del&delete_id=<?php echo $st['user_id']?>">    <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button> </a>

                                        
                                        
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