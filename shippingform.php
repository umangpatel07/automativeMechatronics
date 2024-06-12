<?php
// error_reporting(E_ERROR | E_PARSE);
$conn=mysqli_connect("localhost","root","","automative_mechatronics");

// $buyid=$_GET['buyid'];

session_start();

$cart = $_SESSION['cart'];

foreach($cart as $item){
  $name[] = $item['name'];
  $image[] = $item['image'];
  $price[] = $item['price'];
  $qty[] = $item['qty'];
}

$name = implode(",",$name);
$image = implode(",",$image);
$price = implode(",",$price);
$qty = implode(",",$qty);

// exit;
// print_r($name);
// print_r($image);
// print_r($price);
// print_r($qty);
  $email = $_SESSION['email'];

  $select_id = "SELECT rid FROM register WHERE email = '$email'";
  $selectId = mysqli_query($conn,$select_id);

  $row = mysqli_fetch_assoc($selectId);
  $rid = $row['rid'];
  // echo $rid;
  // exit;


  


  // print_r($row['name']);
  // exit;

  
$sql = "INSERT INTO orders (rid , name, image, price, qty) VALUES ('$rid','$name','$image','$price','$qty')";

$insert_data = mysqli_query($conn,$sql);



// if($buyid != '')
// {
//   $_SESSION['buyid']=$buyid;
// }



if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gst=$_POST['gst'];
    $address=$_POST['address'];
    $location=$_POST['location'];

    $insert_data="INSERT INTO shipping(name,phone,email,gst,address,location) VALUES('$name','$phone','$email','$gst','$address','$location')";
    $insertData=mysqli_query($conn,$insert_data);

    if($insertData !='')
    {
      header("location:payment.php");
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
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    background: ;
    color: black;
    font-weight: bold;
  
    box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
}



.right {
  background: linear-gradient(212.38deg, rgba(2,2,2, 0.7) 0%, rgba(175, 70, 189, 0.71) 100%),url('');
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

.locations
{
  background: linear-gradient(-45deg, #dcd7e0, #fff);
}



</style>
</head>
<body>
    
<!-- <form action="payment.php" method="post">
<input type="hidden" value="<?php echo $name; ?>" name="name">
<input type="hidden" value="<?php echo $price; ?>" name="price">
<input type="hidden" value="<?php echo $image; ?>" name="image">
<input type="hidden" value="<?php echo $qty; ?>" name="qty">
<input type="submit">
</form> -->
<section class="login">
    <div class="login_box">
      <div class="left">
       
        <div class="contact">
          <form action="" method="post">
            <h2>Shipping form</h2>
            <input type="text" name="name"placeholder="Frist Name" >
            <input type="number" name="phone"placeholder="Phone Number" >
            <input type="hidden" name="email"placeholder="E-mail" value="<?php echo $_SESSION['email'];?>">
            <input type="text" name="gst"placeholder="Gst number">
            <input type="text" name="address" placeholder="Address" >
            <input type="hidden" name="price" value="<?php echo $price ?>" >
           
           <label for="location">Select your location</label>
  <select class="locations" name="location" id="location">
    <option value="">--Select location--</option>
    <option value="ahmedabad">ahmedabad</option>
    <option value="botad">botad</option>
    <option value="rajkot">rajkot</option>
    <option value="morbi">morbi</option>
    <option value="surat">surat</option>
  </select>
            <a href="payment.php"><input type="submit" id="rzp-button1" name="submit" class="submit" style="margin-top: 70px;"></a>
          </form>
        </div>
      </div>
      <div class="right">
        <div class="right-text">
          <h2>Automative Mechatronics</h2>
          <h5>CNC Tools</h5>
        
    </div>
  </section>

  <!-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var price = '<?//php echo $price ?>';
var uname = '<?//php echo $uname ?>';
var email = '<?//php echo $email ?>';
var phone = '<?//php echo $phone ?>';
var address = '<?//php echo $address ?>';

var options = {
    "key": "rzp_test_ORPHNRaanQ8sFD", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp", //your business name
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",

    "handler": function(response)
    {
        jQuery.ajax({
            type:"post",
            url:"payment_data.php",
            data:"&pay_id="+response.razorpay_payment_id+"&name="+name+"&email="+email+"&gst"+gst+"&phone="+phone+"&address="+address+"&location"+location,
            success:function(result)
            {
                alert("purchase successfull");
                window.location.href="products.php";
            }
        });
    },


    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script> -->
</body>

</html>