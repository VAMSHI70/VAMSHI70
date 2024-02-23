<?php
$err = false;
if($_SERVER['REQUEST_METHOD'] == "POST")
{   
    
    include 'connect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $exists=false;
    if(($pass == $cpass) && $exists==false && $username!="" && $email!="" &&$pass!="" && $cpass!=""){
    $sql ="INSERT INTO `users` ( `username`, `email`, `date`, `pass`) VALUES ('$username', '$email', 
        current_timestamp(), '$pass')"; 
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $err =true;
        }
    }
    else{
        echo'
        <header>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong style="background-color: red;">WRONG</strong> you have encounterd an problem check all the feilds.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></header>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">

    <title>sign in</title>
</head>



<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="login.js "></script>
    
        <?php
        if($err)
        {

        
        echo'
        <header>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong style="background-color: green;">sucess</strong> you have created a account login now.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></header>';
        header('Location: login.php');
        }
        ?>
    



    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="/Website/signup.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" name="email" placeholder="Email" style="border: 1px solid black;">
                <input type="password" name="pass" placeholder="Password" style="border: 1px solid black;">
                <a href="#">Forget Your Password?</a>
                <button><a href="index1.html" style="text-decoration: none;">Sign In</a></button>
            </form>
        </div>
        <div class="form-container sign-in">

            <form action="/Website/signup.php" method="post">
                <h2>Create Account</h2>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" name="username" placeholder="Name" style="border: 1px solid black;">
                <input type="email" name="email" placeholder="Email" style="border: 1px solid black;">
                <input type="password" name="pass" placeholder="password " style=" border: 1px solid black; ">
                <input type="password" name="cpass" placeholder=" confirm Password " style="border: 1px solid black; ">

                <button style="text-decoration: none; color: white; "> Sign Up</a></button>
            </form>
        </div>
        <div class="toggle-container ">
            <div class="toggle ">
                <div class="toggle-panel toggle-left ">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden " id="login ">Sign Up</button>
                </div>
                <div class="toggle-panel toggle-right ">
                    <h1>Hello, User!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden " id="register " ><a style="text-decoration:none" href="login.php">Sign In</a></button>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>