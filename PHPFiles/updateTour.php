<?php 
require_once("../dashboard/config.php");
session_start();

?>

<?php 
$id=$_SESSION['tourId'];
$sql="SELECT * FROM tours WHERE tour_id=$id";
$result = mysqli_query($mysqli , $sql);
$row = mysqli_fetch_assoc($result);




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['editTour'])) 
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


        if(isset($_FILES['fileToUpload_gallery']['name']) && ($_FILES['fileToUpload_gallery']['name'][0]!=""))
        { 

            //add tour images
            $all_image=array();
            $gallery=$_FILES["fileToUpload_gallery"];
            //$fileTmpPath = $_FILES['profile']['tmp_name'];
            $image_name=$gallery['name'];
            $image_tmp=$gallery['tmp_name'];
            $file_count=count($image_name);

            $all_images=explode(',' , $row['tour_image'] );
            for($i=0 ;$i< count($all_images) ; $i++ )
            {
                unlink("img/".$all_images[$i]);
            }

            for($i = 0 ; $i < $file_count ; $i++)
            {
                $lastImageName=time().$image_name[$i];
            
                move_uploaded_file($image_tmp[$i] , "../img/tours/".$lastImageName);
                $all_image[]=$lastImageName;
            }   
            $images=implode(',' , $all_image );

     
        }
         
     else 
     {
         $images=$row['tour_image'];
     
     }


        $adminId=1;
        $tourReview="good";
    
    
        if(isset($_SESSION['tourName']) || isset($_SESSION['startDate']) || isset($_SESSION['endDate']) || isset($_SESSION['tourPrice'])  )
        {
            header('Location:../addTour.php');
    
        }
        else{
        $sql="UPDATE  tours SET tour_name ='$tourName' , start_date='$startDate' , end_date ='$endDate' , tour_detail='$tourDetails' , tour_review ='$tourReview', tour_price='$tourPrice' , tour_image='$images' , adminID='$adminId'  , tour_guide_id='$GuideId' 
        where tour_id = $id ";
    
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