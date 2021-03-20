<?php 
require_once("../dashboard/config.php");
session_start();

?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['addTour'])) 
{
    if(!preg_match("/^([a-zA-Z' ]+)$/",$_POST['hotelName']))
    {
        session_start();
        $_SESSION['hotelName']= "Tour name is not string";
    }
    elseif(empty($_POST['hotelName']))
    {
        session_start();
        $_SESSION['hotelName']= "Tour name is empty please enter it";
    }
    else{
        $hotelName=$_POST['hotelName'];
    }

    if(!empty($_POST['hotelPrice']))
    {
        if(is_numeric($_POST['hotelPrice']))
        {
            $hotelPrice=$_POST['hotelPrice'];
        }
        else
        {
            session_start();
            $_SESSION['hotelPrice']= "Tour price is not number it must be number";
        }

    }
    else
    {
        session_start();
        $_SESSION['hotelPrice']= "Tour price is empty ";

    }


    if(!preg_match("/^([a-zA-Z' ]+)$/",$_POST['hotelAddress']))
    {
        session_start();
        $_SESSION['hotelAddress']= "Tour Address is not string";
    }
    elseif(empty($_POST['hotelAddress']))
    {
        session_start();
        $_SESSION['hotelAddress']= "Tour Address is empty please enter it";
    }
    else{
        $hotelAddress=$_POST['hotelAddress'];
    }

    $hotelType=$_POST['hotelType'];
    $hotelDetails=$_POST['hotelDetails'];
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
    
        move_uploaded_file($image_tmp[$i] , "../img/hotels/".$lastImageName);
        $all_image[]=$lastImageName;
    }
    $images=implode(',' , $all_image );
    $adminId=1;


    if(isset($_SESSION['hotelName']) || isset($_SESSION['hotelPrice']) || isset($_SESSION['hotelAddress']) )
    {
        header('Location:../addTour.php');

    }
    else{
    $sql="INSERT INTO hotels (hot_name ,hot_price, hot_address , hot_detail , hot_type , hot_image , admin_id ) 
    VALUES ('$hotelName' , '$hotelPrice' , '$hotelAddress' ,'$hotelDetails' , '$hotelType'  , '$images' , '$adminId') ";

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



