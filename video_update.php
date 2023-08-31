<?php
include('header.php');
$id = $_GET['update_id'];





if(isset($_POST['update'])){

    $video_date= $_POST['video_date'];


    $video_title= $_POST['video_title'];
    $video_link= $_POST['video_link'];


    
    $sql= "UPDATE `latest_video` SET `video_date`='". $video_date."',`video_title`='".$video_title."',`video_link`='".$video_link."' WHERE video_id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
     echo "<script>alert('Successfully updated')</script>";
     echo '<script>window.location="latest_video.php"</script>';
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
                            <h6 class="mb-4">UPDATE VIDEO</h6>

                            <a href="latest_video.php"><button style="background-color:#EB1616;font-weight:bolder;color:white;float:right;margin-bottom:5px;" class="btn">back to list</button></a>
                            <form  method="POST" >


                            <?php
$sq=mysqli_query($con,"SELECT * FROM `latest_video` WHERE   video_id =  '".$id."' ");
$ys=mysqli_fetch_array($sq)
?>
                      
                                <div class="mb-3">
                                    <label class="form-label">video_date</label>
                                    <input type="text" value="<?php echo $ys['video_date']?>"  name="video_date" class="form-control" >
                                    
                                </div>
                              
                                <div class="mb-3">
                                    <label class="form-label">video_title</label>
                                    <input type="text"  value="<?php echo $ys['video_title']?>"  name="video_title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">video_link</label>
                                    <input type="text"   value="<?php echo $ys['video_link']?>"    name="video_link"  class="form-control">
                                </div>
                            <div>
                           <button  href="latest_video.php" name="update" type="submit" class="btn"  style="background-color:#EB1616;font-weight:bolder;color:white;">UPDATE</button>
                             </div>
                            </form>
                        </div>
                    </div>













<?php
include('footer.php');
?>