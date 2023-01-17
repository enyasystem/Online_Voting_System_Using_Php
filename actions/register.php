<?php

include('connect.php');


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));





$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
//$image=$_POST['photo']['name'];
//$tmp_name=$_POST['photo']['tmp_name'];
$std=$_POST['std'];

if ($password!=$cpassword) {
    echo '<script>
    alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';
      
}

else {
    (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file));
    $sql="INSERT INTO `user_data`(`id`, `username`, `mobile`, `password`, `photo`, `standard`, `status`, `votes`) 
    VALUES ('','$username','$mobile','$password','$target_file','$std','','')";  


    
// $password=$_POST['password'];

$result=mysqli_query($con,$sql);

if($result){
    echo '<script>
    alert ("Registration Successful");
    window.location="../";
    </script>';
}

}
?>
