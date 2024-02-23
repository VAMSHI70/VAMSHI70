<?php
$login= false;
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    
    include 'connect.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "Select * from users where email ='$email' AND 
    pass='$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num >= 1) {
        $login = true;

    }
    else
    {
        echo '
        <header>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong style="background-color: red;">WRONG</strong> you have encounterd an problem check all the feilds.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></header>';
    }

}
$alogin = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{

    include 'connect.php';
    $aemail = $_POST['aemail'];
    $apass = $_POST['apass'];

    $sql1 = "Select * from admin where email ='$aemail' AND pass='$apass'";
    $result1 = mysqli_query($conn, $sql1);
    $num1= mysqli_num_rows($result1);
    if ($num1 >= 1) {
        $alogin = true;
    }
else
    {   echo'
        <header>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong style="background-color: red;">WRONG</strong> you have encounterd an problem check all the feilds.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></header>';
        header('Location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>


<body>
    <?php
    if ($login) {
    echo'
    <header>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong style="background-color: green;">sucess</strong> you have login now.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div></header>';
    header('Location: index1.html');
    } 

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="login.php" method="post">
                <?php
                if($alogin)
                {   echo'
                    <header>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong style="background-color: green;">sucess</strong> you have login now.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div></header>';
                    header('Location: https://crm.zoho.in/crm/org60027347093/tab/Home/begin');
                }
                ?>
                <h1>Admin Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for Login</span>
                <input name="aemail" type="email" placeholder="Name" style="border: 1px solid black;">

                <input  name="apass" type="password" placeholder="Password" style="border: 1px solid black;">

                <button>
                        Login</a></button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="post">
                <h1> User Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input name="email" type="email" placeholder="Email" style="border: 1px solid black;">
                <input name="pass" type="password" placeholder="Password" style="border: 1px solid black;">
                <a href="#">Forget Your Password?</a>
                <button> Log In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">User Log In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, User!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register"><a href="#"> Admin Log In</a></button>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>