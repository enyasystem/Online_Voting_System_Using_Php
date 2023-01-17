<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Voting System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <!-- Boostrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info">
        <h2 class="text-center">Login</h2>
        <div class="contianer text-center">
            <form action="./actions/login.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" auto-complete="of" placeholder="Enter your username" required="required"></input>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" auto-complete="of" placeholder="Enter your mobile" required="required" maxLength="11" minLength="11" ></input>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" auto-complete="of" placeholder="Enter your password" required="required" maxLength="11" minLength="3" ></input>
                </div class="mb-3">
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="Submit" class="btn btn-success my-4">Login</button>
                <p>Dont have an account?  <a href="./partials/registration.php" class="text-white"> Register here</a></p>
            </form>
        </div>
    </div>
</body>

</html>
