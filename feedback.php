<?php
include('header.php');

?>



         <!-- Sale & Revenue Start -->
         <div class="container-fluid pt-4 px-4">
            <div class="col-sm-10 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                     
                            <h6 class="mb-4">FEEDBACK LIST</h6>
                                
                            
                            <div class="table-responsive">
                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                    <th scope="col">id</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">subject</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">messege</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$sqlq=mysqli_query($con,"SELECT * from `feedback`" );
     while( $st=mysqli_fetch_array($sqlq))
 
 {
?>

                                    <tr>
                                        <td scope="row"><?php echo $st['id'] ?></td>
                                        <td><?php echo $st['name'] ?></td>
                                        <td><?php echo $st['email'] ?></td>
                                        <td> <?php echo $st['subject'] ?></td>
                                        <td><?php echo $st['phone'] ?></td>
                                        <td><?php echo $st['messege'] ?></td>
                                        <td>
                                    <a  href="user.php?del&delete_id=<?php echo $st['id']?>">    <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button> </a>

                                        
                                        
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