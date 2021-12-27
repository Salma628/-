<?php
session_start();
if(empty($_SESSION["id_mother"])){header("location: ID_mother.php");
        exit;
    }
require_once 'connection.php';
$id=$_SESSION["id_mother"];
if(isset($_POST['submit'])){
$ABRR = $_POST['ABRR'];
$ABRL = $_POST['ABRL'];
$TympanometryR = $_POST['TympanometryR'];
$TympanometryL = $_POST['TympanometryL'];
$OAER = $_POST['OAER'];
$OAEL = $_POST['OAEL'];

/*$ABR_Date = CURDATE();
$Tymp_Date = CURDATE();
$OAE_Date = CURDATE();*/

$DEC_r = $_POST['dec-r'];
$DEC_L = $_POST['dec-l'];
$query1 = "0";
$query2 = "0";
$query3 = "0";
$query4 = "0";


//1
if ($ABRR != "not" && $ABRL !="not")
{
    $insert1 = "UPDATE hearing_disorders SET ABR_r = '$ABRR', ABR_L = '$ABRL' , ABR_Date = current_date()  WHERE ID_Mother='$id';";
    $query1= mysqli_query($conn,$insert1) or die("error:".mysqli_error($conn));
}
//2
if ($TympanometryR != "not" && $TympanometryL != "not")
{
    $insert2 = "UPDATE hearing_disorders SET Tympanometry_r = '$TympanometryR', Tympanometry_L = '$TympanometryL', Tymp_Date = current_date()   WHERE ID_Mother='$id'; ";
    $query2= mysqli_query($conn,$insert2) or die("error:".mysqli_error($conn));
}
//3
if ($OAER != "not" && $OAEL != "not")
{
    $insert3 = "UPDATE hearing_disorders SET OAE_r = '$OAER', OAE_L = '$OAEL' , OAE_Date = current_date()  WHERE ID_Mother='$id'; ";
    $query3= mysqli_query($conn,$insert3) or die("error:".mysqli_error($conn));
}
//Decision
if ($DEC_r != "not" &&  $DEC_L != "not")
{
    $insert4 = "UPDATE hearing_disorders SET Decision_r='$DEC_r' ,Decision_L='$DEC_L'  WHERE ID_Mother='$id';";
    $query4= mysqli_query($conn,$insert4) or die("error:".mysqli_error($conn));
}



if($query1 || $query2 || $query3 || $query4) {

    echo 'DONE';
}
else{
    echo 'FAILD';
}
}


else if(isset($_POST['close'])){
    header("Location: index.php");
}

session_destroy();
?>