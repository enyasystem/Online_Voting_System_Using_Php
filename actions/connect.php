<?php
$con=mysqli_connect("localhost","root","enyaelvis","voting_system");
if ($con) {
    // echo "Connection Successful";
}else {
die (mysqli_error($con));
}

// if($con){
//     echo "Connection Successful";
// }else{
// die(mysQli_error($con))
// }
?>
