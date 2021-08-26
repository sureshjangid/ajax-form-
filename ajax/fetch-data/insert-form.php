<?php

// connection with database
require "../database.php";

// getting from form
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
// fetch the data from database table
$sql = "INSERT INTO `user` ( `name`, `data_time`, `last-name`) VALUES ( '$fname', current_timestamp(), '$lname');";

// execute the query
$result = mysqli_query($connect,$sql);

if($result){
    echo 1;
}else{
    echo 0;
}


?>