
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['question'];
  $number = $_POST['number1'];
  $fullName = $_POST['fullname'];
  $passward = $_POST['passwardin'];
  $Salary = $_POST['Salary'];
 
 




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
$stmt= $conn->prepare( "INSERT INTO users (email,phoneNum,fullName,Passward,Salary)
VALUES ( ?, ?,  ?,  ?, ?)");

$stmt->bind_param("sissi", $email,$number ,$fullName,$passward,$Salary);
$stmt->execute();
echo "regestration successfully";

$stmt->close();
$conn->close();
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
    <div class="signup">
    <div class="container-signup">
        <h1>Sign Up</h1>
        <br>
        
        <p>Create an account.It's free.</p>
        
<div class="form" >
  <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"  id="myForm" name="frm">
  <div class="form-group">
  <label for="exampleInputpassward">Email:</label><br>
  <input type="text" name="question" id="EMail"  ><br>
  <div id="emailerror" style="color: red;"></div>
  </div>

  <div class="form-group">
  <label for="exampleInputpassward">Mobile:</label><br>
  <input type="number" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="" name="number1"><br>
  <div id="numbererror" style="color: red;"></div>
  </div>


  <div class="form-group">
  <label for="exampleInputpassward">Full Name:</label><br>
  <input type="text" id="full" name="fullname" value=""><br>
  <div id="FullNameerror" style="color: red;"></div>
  </div> 


  <div class="form-group">
  <label for="exampleInputpassward">Passward:</label><br>
  <input type="text" id="exampleInputpassward" aria-describedby="emailHelp" placeholder="" name="passwardin"><br>
  <div id="passwarderror" style="color: red;"></div>
  <div id="passwarderror3" style="color: red;"></div>
  <div id="passwarderror4" style="color: red;"></div>
  <div id="passwarderror5" style="color: red;"></div>
  </div>


  <div class="form-group">
  <label for="exampleInputpassward">Confirm Passward:</label><br>
  <input type="text" id="exampleInputpassward2" aria-describedby="emailHelp" placeholder="" name="passwardin2"><br>
  <div id="passwarderror2" style="color: red;"></div>
  </div>


  <div class="form-group">
  <label for="exampleInputpassward">Date Of Birth:</label><br>
  <input type="date" id="birthday" name="birthday">
  <div id="birthdayerror" style="color: red;"></div>
  </div>



  <div class="form-group">
  <label for="Salary">Salary:</label><br>
  <input type="text" id="Salary" aria-describedby="emailHelp" placeholder="" name="Salary"><br>
  <div id="Salaryerror" style="color: red;"></div>
  </div>

  <input type="submit" name="submit" value="Sign Up" class="btn btn-danger" onclick="return IsEmpty();"> 


</form>
</div>


<br>
<p>already have an account? <a href="login.php"><span>Log In</span></a></p>
    </div>
    </div>

    <script src="java.js"></script>
</body>


