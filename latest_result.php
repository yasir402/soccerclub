<?php
include('header.php');

?>
<?php
if(isset($_GET['del'])){

$del= mysqli_query($con,"DELETE FROM `latest_result` WHERE result_id = '".$_GET['delete_id']."'");


}
?>


<div class="container-fluid pt-4 px-4">
<div class="row-xl-12 row-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4">ADD LETEST RESULT</h1>
  
                            <div class="container mt-5">
                           <a href="result_add.php"> <button class="btn" style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" >ADD RESULT</button></a>
<br>
<br>
                            <table class="table table-dark table-boardered">
                            
                            <?php
$sqlq=mysqli_query($con,"SELECT * from `latest_result`" );
$st=mysqli_fetch_array($sqlq)
?>

          <th scope="col">result_id</th>
          
        <td ><?php echo $st['result_id'] ?></td>

      </tr>
      <tr>
        <th scope="col">result_title</th>
        <td><?php echo $st['result_title'] ?></td>
    
      </tr>
      <tr>
        <th scope="col">result_description</th>
        <td><?php echo $st['result_description'] ?></td>
      </tr>
      
      <th scope="col">result_team1name</th>
        <td ><?php echo $st['result_team1name'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_team2name</th>
        <td> <?php echo $st['result_team2name'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_team1_image</th>
        <td>
        <img src="<?php echo $st['result_team1_image'] ?>" width="150px" alt="">  
        
        
    </td>
      </tr>
      <tr>
        <th scope="col">result_team2_image</th>
        <td>   <img src="<?php echo $st['result_team2_image'] ?>"  width="150px" alt="">  </td>
      </tr>
      <tr>
        <th scope="col">result_status</th>
        <td><?php echo $st['result_status'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_team1_performance</th>
        <td><?php echo $st['result_team1_performence'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_team2_performance</th>
        <td><?php echo $st['result_team2_performence'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_team1_score</th>
        <td><?php echo $st['result_team1_score'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_team2_score</th>
        <td><?php echo $st['result_team2_score'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_datetime</th>
        <td><?php echo $st['result_datetime'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_stadium</th>
        <td><?php echo $st['result_stadium'] ?></td>
      </tr>
      <tr>
        <th scope="col">result_country</th>
        <td><?php echo $st['result_country'] ?></td>
      </tr>
      <tr>
<th class="text-danger">Action</th>
      <td>
      <a href="latest_result.php?del&delete_id=<?php echo $st['result_id'] ?>" > <button style="background-color:#EB1616;font-weight:bolder;color:white; margin-right:10px;" class="btn">Delete</button></a>
      <a href="result_update.php?up&update_id=<?php echo $st['result_id'] ?>"><button style="background-color:#EB1616;font-weight:bolder;color:white;" class="btn">Update</button></a></td>
      </td>
      </tr>
      
  </table>  
</div>
                        </div>




<?php
include('footer.php');
?>
 
                      