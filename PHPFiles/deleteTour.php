<?php 
require_once("../dashboard/config.php");
session_start();

?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
$sql="DELETE FROM tours WHERE tour_id= $id";
if(mysqli_query($mysqli , $sql))
{
    header('location:../dashboard.php');
}
else
echo "error";
}

?>