<?php
$name= $_POST["first"];
$conn = mysqli_connect("localhost","root","","test") or die("error in query");
$q= "insert into student (name) values ('{$name}')";
if (mysqli_query($conn,$q) or die("error in query")) {
    # code...
    echo 1;
}else{
    echo 0;
}


?>