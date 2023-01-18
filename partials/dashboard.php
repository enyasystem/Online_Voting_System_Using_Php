<?php
session_start();
$data=$_SESSION['data'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Voting System - Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
            <!-- Boostrap CSS Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="bg-secondary text-light">
        <div class="container my-5">
            <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
            <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
            <h1 class="my-3">Voting System</h1>
            <div class="row my-5">
                <div class="col-md-7">
                <!-- Groups -->
                    <div clas="row">
                        <div class="col-md-4">
                            <img scr="" alt="Group_image">
                        </div>
                        <div class="col-md-8">
                            <strong class="text-dark h5">Group Name:</strong><br><br>
                            <strong class="text-dark h5">Votes:</strong><br>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- User Profile -->
                    <img scr="" alt="User_Image">
                    <br>
                    <br>
                    <strong class="text-dark h5">Name:</strong>
                    <?php echo $data['username'] ;?> <br><br>
                    <strong class="text-dark h5">Mobile:</strong>
                    <?php echo $data['mobile'] ;?> <br><br>
                    <strong class="text-dark h5">Status:</strong>
                    <?php echo $data['status'] ;?> <br><br>
                </div>
            </div>
        </div>
    </body>
</html>
