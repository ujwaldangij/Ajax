<?php
function mera($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
$conn = mysqli_connect("localhost","root","","test") or die("error in query");
$q= "select * from student;";
$r= mysqli_query($conn,$q) or die("error in query");
// mera($r);
$out ="";
if (mysqli_num_rows($r) > 0) {
    # code...
    while ($row = mysqli_fetch_assoc($r)) {
        # code...
        echo $out="<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>";

    }

}
else{
    echo $out ="no record found";
}
// echo $out;
?>