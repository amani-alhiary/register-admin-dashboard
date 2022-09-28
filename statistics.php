<?php
$con=mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// $sql="SELECT * FROM users ORDER BY email";

// if ($result=mysqli_query($con,$sql))
//   {
//   // Return the number of rows in result set
//   $rowcount=mysqli_num_rows($result);
//   printf("Result set has %d rows.\n",$rowcount);
//   // Free result set
//   mysqli_free_result($result);
//   }



//   $TotalSalary= mysqli_query('SELECT SUM(Salary) AS TotalSalary FROM users;');
//   echo $TotalSalary;












// mysqli_close($con);
?>


<!DOCTYPE html>
<head>
<link href="ststyle.css" rel="stylesheet">
</head>
<html lang="en">
<style>
    .submit_class {
    border-style: none;
    border-radius: 5px;
    background-color:black;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
    color:#fff;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder Noyon</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
   

 
    <!-- courses section end -->
    <!-- achivement section start -->
    <section id="achivement">
        <div class="section_title">
            <h2>Employees Statistics</h2>
        </div>
        <div class="inner_achivemnet">
            <div class="child_achivement">
                <img src="images/company.jpg" alt="">
            </div>
            <div class="child_achivement child_achivement2">
                <div class="single_detail sd_1">
                    <?php
                      
                  $sql="SELECT * FROM users ORDER BY email";

                  if ($result=mysqli_query($con,$sql))
                    {
                      // Return the number of rows in result set
                       $rowcount=mysqli_num_rows($result);
                    ?>
                    <h1><?php echo $rowcount ?></h1>
                    <?PHP
                    mysqli_free_result($result);
                    }
                    ?>
                    <p>MEMBERS IN OUR TEAM</p>
                </div>


                <?php
                $results = mysqli_query($con, "SELECT sum(Salary) FROM users") or die(mysqli_error());
                while($rows = mysqli_fetch_array($results)){?>
                
                <div class="single_detail sd_2">
                    <h1><?php echo $rows['sum(Salary)'] ?>JOD</h1>
                    <?PHP } ?>
                    <p>THE TOTAL OF SALATIES</p>
                </div>







                <?php
                $results = mysqli_query($con, "SELECT MIN(  `Salary` ) AS  `lowest` , MAX(  `Salary` ) AS  `highest` FROM  users
                ") or die(mysqli_error());
                while($rows = mysqli_fetch_array($results)){
                    ?>
                <div class="single_detail sd_3">
                    <h1><?PHP echo $rows['highest'] ?>JOD</h1>
                    <p>THE HIGHEST SALARY</p>
                </div>
                <div class="single_detail sd_4">
                    <h1><?PHP echo $rows['lowest'] ?>JOD</h1>
                    <p>THE LOWEST SALARY</p>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    
    <a href="superadmin.php"><input type="submit" name="submit" value="GO BACK" class="submit_class" ></a>

</body>
</html>
