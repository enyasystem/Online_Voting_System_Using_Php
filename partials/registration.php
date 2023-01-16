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
        <h1 class="text-center text-info p-3">Voting System</h1>
        <div class="bg-info py-4">
            <h2 class="text-center">Register Account</h2>
            <div class="container text-center">
                <form action="">
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="text" 
                        placeholder="Enter your username" required="required" name="username">
                    </div>
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="text" 
                        placeholder="Enter your mobile number" required="required" name="mobile">
                    </div>
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="password" 
                        placeholder="Password" required="required" name="password">
                    </div>
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="password" 
                        placeholder="Confirm your password" required="required" name="password">
                    </div>
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="file" 
                        placeholder="Select Image" required="required" name="photo">
                    </div>
                    <div class="mb-3">
                        <select name="std" class="form-select w-50 m-auto">
                            <option value="group">Group</option>
                            <option value="voter">Voter</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success my-4">Register</button>
                    <p>Already Have an Account <a href="../" class="text-white">Login Here</a> </p>
                </form>
            </div>
        </div>
       
    </body>
</html>
