<?php
include('header.php');

$id = $_GET['update_id'];




if(isset($_POST['update'])){

    $match_team1_name= $_POST['match_team1_name'];
    $match_team2_name= $_POST['match_team2_name'];

    $match_date= $_POST['match_date'];
    $match_time= $_POST['match_time'];
    $match_heading= $_POST['match_heading'];
    $match_description= $_POST['match_description'];

    
    $sql= "UPDATE `matches` SET `match_id`='".$match_team1_name."',`match_team1_name`='".$match_team2_name."',`match_team2_name`='".$match_date."',`match_date`='".$match_time."',`match_time`='".$match_heading."',`match_heading`='".$match_description."' WHERE match_id=$id ";
    $res = mysqli_query($con,$sql);
    if($res){
     echo "<script>alert('Successfully updated')</script>";
     echo '<script>window.location="match.php"</script>';
    }
    else{
     echo  "sorry";
    }
}
?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">UPDATE MATCHES</h6>

                            <a href="match.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form method="POST">


                            <?php
$sq=mysqli_query($con,"SELECT * FROM `matches` WHERE   match_id  =  '".$id."' ");
$ys=mysqli_fetch_array($sq)
?>
                                <div class="mb-3">
                                    <label class="form-label">match_team1_name</label>
                                    <input type="text" value="<?php echo $ys['match_team1_name']?>"  name="match_team1_name" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">match_team2_name</label>
                                    <input type="text" value="<?php echo $ys['match_team2_name']?>"  name="match_team2_name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">match_date</label>    
                                    <input type="text" value="<?php echo $ys['match_date']?>"  name="match_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">match_time</label>
                                    <input type="text" value="<?php echo $ys['match_time']?>"  name="match_time" class="form-control">
                                </div>
                     
                            <div>
                           <button name="update"  href="match.php" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">UPDATE</button>
                             </div>
                            </form>
                        </div>
                    </div>



<?php
include('footer.php');
?>