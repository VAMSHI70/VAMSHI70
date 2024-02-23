<?php
$alogin = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{

    include 'connect.php';
    $aemail = $_POST['aemail'];
    $apass = $_POST['apass'];

    $sql = "Select * from admin where email ='$aemail' AND pass='$apass'";
    $result = mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    if ($num >= 1) {
        $alogin = true;
    }
    else
    {
        header('Location:login.php');
    }
}
?>
