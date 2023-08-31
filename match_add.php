<?php
include('header.php');










if(isset($_POST['insert'])){

    $match_team1_name= $_POST['match_team1_name'];
    $match_team2_name= $_POST['match_team2_name'];

    $match_date= $_POST['match_date'];
    $match_time= $_POST['match_time'];
  

    
    $sql= "INSERT INTO `matches`(`match_team1_name`, `match_team2_name`, `match_date`, `match_time`) VALUES ('".$match_team1_name."','".$match_team2_name."','".$match_date."','".$match_time."')";
    $res = mysqli_query($con,$sql);
    if($res){
     echo "<script>alert('Successfully inserted')</script>";
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
                            <h6 class="mb-4">ADD MATCHES</h6>

                            <a href="match.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">match_team1_name</label>
                                    <input type="text" name="match_team1_name" class="form-control" >
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">match_team2_name</label>
                                    <input type="text" name="match_team2_name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">match_date_</label>
                                    <input type="text" name="match_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">match_time</label>
                                    <input type="text" name="match_time" class="form-control">
                                </div>
                             
                            <div>
                           <button name="insert"  href="latest_video.php" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">ADD</button>
                             </div>
                            </form>
                        </div>
                    </div>













<?php
include('footer.php');
?>