<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "simba internship";

$con = mysqli_connect($server,$user,$password,$db);
if($con){
    ?>
    <script>
    alert("communication succsesful");
    </script>
    <?php
}else{

    ?>
    <script>
    alert("no connection");
    </script
    <?php
}

?>
