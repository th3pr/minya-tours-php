<?php 
require_once("../Dashboard/config.php");
session_start();

?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['addTour'])) 
{
    if(!preg_match("/^([a-zA-Z' ]+)$/",$_POST['tourName']))
    {
        session_start();
        $_SESSION['tourName']= "Tour name is not string";
    }
    elseif(empty($_POST['tourName']))
    {
        session_start();
        $_SESSION['tourName']= "Tour name is empty please enter it";
    }
    else{
        $tourName=$_POST['tourName'];
    }

    if(empty($_POST['startDate']))
    {
        session_start();
        $_SESSION['startDate']= "Start Date is empty please enter it";
    }
    else
    {
        $startDate=$_POST['startDate'];
    }
    if(empty($_POST['endDate']))
    {
        session_start();
        $_SESSION['endDate']= "End Date is empty please enter it";
    }
    else
    {
     $endDate=$_POST['endDate'];

    }
    if(!empty($_POST['tourPrice']))
    {
        if(is_numeric($_POST['tourPrice']))
        {
            $tourPrice=$_POST['tourPrice'];
        }
        else
        {
            session_start();
            $_SESSION['tourPrice']= "Tour price is not number it must be number";
        }

    }
    else
    {
        session_start();
        $_SESSION['tourPrice']= "Tour price is empty ";

    }
    
    $tourGuide=$_POST['tourGuideId'];
    $tourGuideId=explode("-",$tourGuide);
    $GuideId=$tourGuideId[0];
    $tourDetails=$_POST['tourDetails'];
    //add tour images
    $all_image=array();
    $gallery=$_FILES["fileToUpload_gallery"];
    //$fileTmpPath = $_FILES['profile']['tmp_name'];
    $image_name=$gallery['name'];
    $image_tmp=$gallery['tmp_name'];
    $file_count=count($image_name);
    for($i = 0 ; $i < $file_count ; $i++)
    {
        $lastImageName=time().$image_name[$i];
    
        move_uploaded_file($image_tmp[$i] , "./image/".$lastImageName);
       // move_uploaded_file($image_tmp[$i]  , "".$image_name[$i]);

        $all_image[]=$lastImageName;
    }
    $images=implode(',' , $all_image );
    $adminId=1;
    $tourReview="good";


    if(isset($_SESSION['tourName']) || isset($_SESSION['startDate']) || isset($_SESSION['endDate']) || isset($_SESSION['tourPrice'])  )
    {
        header('Location:../addTour.php');

    }
    else{
    $sql="INSERT INTO tours (tour_name ,start_date , end_date , tour_detail , tour_review , tour_price , tour_image , adminID , tour_guide_id) 
    VALUES ('$tourName' , '$startDate' , '$endDate' ,'$tourDetails' , '$tourReview' , '$tourPrice' , '$images' , '$adminId' , '$GuideId') ";

    if(mysqli_query($mysqli , $sql))
    {
        header('location:../dashboard.php');

    }
    else
    echo "Error";
  }
}
}
?>



