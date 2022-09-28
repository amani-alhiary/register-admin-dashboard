<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['question'];
    $passward = $_POST['passwardin'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql= "select * from users where email= '".$email."'AND Passward='".$passward."' limit 1";
$username= "select fullName from users where email =".$email ."'AND Passward='".$passward."' limit 1";


$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
    
    
    
    $logged_in_user = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $logged_in_user;
    echo '<script>alert("hello there")</script>';
    if ($logged_in_user['role'] == 'admin') {

        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: admin.php');	

 
}
if ($logged_in_user['role'] == 'superadmin'){
    $_SESSION['user'] = $logged_in_user;
    $_SESSION['success']  = "You are now logged in";
    header('location: superadmin.php');	
}
}



}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['question'];
    $passward = $_POST['passwardin'];
echo"hello";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql= "select * from admin where email= '".$email."'AND Passward='".$passward."' limit 1";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    $link = "<script>window.open('admin.php')</script>";

    echo $link;
    exit();
}
else{
    echo "you have intered Incorrect email or passward";
}

}


?>



<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="login">
        <h1>Log In</h1>
        <br>
        <p>Welcome back! Login with your credintials.</p>

    <form class="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="myForm" name="frm" >

  <label for="exampleInputpassward">Email:</label><br>
  <input type="email" id="EMail" name="question" value=""><br>
  <div id="emailerror" style="color: red;"></div>
  
  <label for="exampleInputpassward">Passward:</label><br>
  <input type="text" id="exampleInputpassward" aria-describedby="emailHelp" placeholder="" name="passwardin"><br>
  <div id="passwarderror" style="color: red;"></div>

  <input type="submit" name="submit" value="Login" class="btn btn-primary" onclick="return IsEmpty();"> 

</form>

<br>
<p>Don't hava an account? <a href="signup.php"><span>Sign Up</span></a></p>
    </div>

    <script src="java.js"></script>

</body>
</html>