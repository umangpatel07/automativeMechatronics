<?php
$conn = mysqli_connect("localhost","root","","automative_mechatronics");
session_start();

if(isset($_POST['email']) && isset($_POST['password']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select_data = "SELECT * FROM register WHERE email='$email' AND password = '$password'";
    $selectData = mysqli_query($conn,$select_data);
    if(mysqli_num_rows($selectData) == 1)
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header("location:home.php");
    }
    else
    {
        echo '<div class="alert alert-danger">please  check yor email and password</div>';
    }
}


if(isset($_SESSION["email"]))
{
  header("location:index.php");
}



// if(isset($_POST['submit']))
// {
//   $email = $_POST['email'];
//   $password = $_POST['password'];

//   $selectData = "SELECT * FROM register WHERE email='$email' AND password='$password'";
//   $result = mysqli_query($conn,$selectData);

//   if(mysqli_num_rows($result) == 1)
//   {
//     $_SESSION['email']=$email;
//     $_SESSION['password']=$password;

//     header("location: index.php");  
//   }
//   else
//   {
//     echo '<div class="alert alert-danger">please  check yor email and password</div>';
//   }
// }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>img{
    width: 100%;
}
.login {
    height: 1000px;
    width: 100%;
    background: radial-gradient(#653d84, #332042);
    position: relative;
}
.login_box {
    width: 1050px;
    height: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #fff;
    border-radius: 10px;
    box-shadow: 1px 4px 22px -8px #0004;
    display: flex;
    overflow: hidden;
}
.login_box .left{
  width: 41%;
  height: 100%;
  padding: 25px 25px;
  
}
.login_box .right{
  width: 59%;
  height: 100%  
}
.left .top_link a {
    color: #452A5A;
    font-weight: 400;
}
.left .top_link{
  height: 20px
}
.left .contact{
    display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin: auto;
}
.left h3{
  text-align: center;
  margin-bottom: 40px;
}
.left input {
    border: none;
    width: 80%;
    margin: 15px 0px;
    border-bottom: 1px solid #4f30677d;
    padding: 7px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-weight: 600;
    font-size: 14px;
}
.left{
    background: linear-gradient(-45deg, #dcd7e0, #fff);
}
.submit {
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    margin: auto;
    margin-top: 120px;
    background: #583672;
    color: #fff;
    font-weight: bold;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
}



.right {
    background: linear-gradient(212.38deg, rgba(2,2,2, 0.7) 0%, rgba(175, 70, 189, 0.71) 100%),url('img/TT.jpeg ');
    color: #fff;
     position: relative;
   

}

.right .right-text{
  height: 100%;
  position: relative;
  transform: translate(0%, 45%);
}
.right-text h2{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 50px;
  font-weight: 500;
}
.right-text h5{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 19px;
  font-weight: 400;
}





</style>
</head>
<body>
    

<section class="login">
        <div class="login_box">
            <div class="left">
                <div class="contact">
                    <form action="" method="post">
                        <h3>SIGN IN</h3>
                        <input type="text" name="email"placeholder="Email">
                        <input type="text" name ="password"placeholder="PASSWORD">
                        <h3><a href="">Forgot Password</a></h3>
                        <button class="submit" name="submit">submit</button>
            <h3><a href="register.php">Register</a></h3>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2>Automative Mechatronics</h2>
                    <h5>CNC Tools</h5>
        </div>
    </section>
    </form>
</body>

</html>



<?php


// unset($_SESSION["email"]);
// unset($_SESSION["password"]);


// header('Refresh: 2; URL = index.php');
?>