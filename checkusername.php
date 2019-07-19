 <?php
// Array with names


// get the q parameter from URL
$q = $_REQUEST["q"];

$db = new mysqli("localhost", "root", "", "web");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


$sql1 = "SELECT username FROM users";
$result = $db->query($sql1);

	

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     if(  $q==$row["username"]  ){
     	?>
     	<span style="color:red;"> Username is already in use!</span>
     	<?php
		

     }
     else{
     	?>
    <span style="color:green"> This username is available </span>
    <?php
}
    }
}






// Output "no suggestion" if no hint was found or output correct values

?> 