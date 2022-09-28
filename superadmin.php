<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style>
table, th, td {
    border: 1px solid black;
}
table{
    
}
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


<?php
// -----------------------------------------------Draw The table-----------------------------------
include 'header.php';
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

$sql = "SELECT *
from users WHERE role='admin'
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-dark'>
    <tr>
    <th scope='col'>ID</th>
    <th scope='col'>email</th>
    <th scope='col'>Phone Number</th>
    <th scope='col'>Full Name</th>
    <th scope='col'>Passward</th>
    <th scope='col'>edit or delete</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td scope="row"><?= $row["ID"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["phoneNum"] ?></td>
            <td><?= $row["fullName"] ?></td>
            <td><?= $row["Passward"] ?></td>
            <td>
                <a href="adminedit.php?id=<?=$row["ID"]?> " class="btn btn-success" >Edit</a>
                <a href="delete.php?id=<?= $row["ID"]?>" class="btn btn-danger">Delete</a>

            </td>
        </tr>
       <?php
       };
    };
       ?>
<?php
  
//    include 'footer.php';
?>
        <a href="login.php"><input type="submit" name="submit" value="LOG OUT" class="submit_class" ></a>
        <a href="statistics.php"><input type="submit" name="submit" value="Statistics" class="submit_class" ></a>


