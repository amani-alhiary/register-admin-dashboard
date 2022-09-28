<?php
session_start();
$con = mysqli_connect("localhost","root","","register");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>user Edit</title>
</head>
<body>
  
    <div class="container mt-5">

    <?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>user Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM users WHERE id='$user_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $user['ID']; ?>">

                                    <div class="mb-3">
                                        <label>email</label>
                                        <input type="text" name="email" value="<?=$user['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>phone Number</label>
                                        <input type="text" name="phoneNum" value="<?=$user['phoneNum'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Full Name</label>
                                        <input type="text" name="fullName" value="<?=$user['fullName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Passward</label>
                                        <input type="text" name="passward" value="<?=$user['Passward'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_user" class="btn btn-primary">
                                            Update user
                                        </button>
                                    </div>

                                </form>
                                <?php


 
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }





                        

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


