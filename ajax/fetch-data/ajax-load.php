<?php

// connection with database
require "../database.php";

// fetch the data from database table
$sql = "SELECT * FROM `user`";

// execute the query
$result = mysqli_query($connect,$sql);

// number of rows
$num = mysqli_num_rows($result);

// $output = "";
if($num >0){

    echo '<table class="table">
    <tr>
        <th>Id</th>
        <th>First-Name</th>
        <th>Last-Name</th>

    </tr>';
    
    // fetch the using while loop
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr><td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['last-name'].'</td>
        </tr>';
    }
    echo "</table>";
    

}else{
    echo "not data found";
}
?>