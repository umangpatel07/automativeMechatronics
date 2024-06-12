<?php
$conn=mysqli_connect("localhost","root","","automative_mechatronics"); 

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpass = $_POST['cpass'];
    $role = $_POST['role'];

    if($password == $cpass){

        $sql = "INSERT INTO register(name,email,phone,password,role) VALUES('$name','$email','$phone','$password','$role')";
        $insert = mysqli_query($conn,$sql);
        
   
        if($insert != '')
        {
            header("location:index.php");
        }

    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Header-btn >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"-->
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
    width: 1090px;
    height: 700px;
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
    color: black;
    font-weight: bold;
  
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

.radio input{
  margin: 0;
  padding: 0;
  width: 10%;
  margin-left: 20px;
}

.radio p{
  font-size: 20px;
  margin: 7px;
}






</style>
</head>
<body>
    

<section class="login">
    <div class="login_box">
      <div class="left">
       
        <div class="contact">
          <form method="post">
            <h2>Registration form</h2>
            <input type="text" name="name"placeholder="USERNAME" required>
            <input type="mail" name="email"placeholder="E-mail" required>
            <input type="number" name="phone"placeholder="Phone Number" required>
            <input type="PASSWORD" name ="password"placeholder="PASSWORD" required>
            <input type="text" name ="cpass"placeholder="confirm PASSWORD" required>

            <div class="radio">
            <p>Select your Role:</p>
              <input type="radio" id="radio" name="role" value="user" required>
              <label>User</label><br>
              <input type="radio" id="radio" name="role" value="distributor" required>
              <label>Distributor</label>
            </div>

            <input type="submit" name="submit" class="submit">
            <h3><a href="log.php">Login</a></h3>
          </form>
        </div>
      </div>
      <div class="right">
        <div class="right-text">
          <h2>Automative Mechatronics</h2>
          <h5>CNC Tools</h5>
        
    </div>
  </section>
</body>

</html>


    
