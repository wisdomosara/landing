<?php

$email = "";
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $conn = new mysqli("nba02whlntki5w2p.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306", "zsf0luis4r0emanv", "kmh3vl4zg6iuc6bk", "pckf8ocyung0ua7u");
    $sql = "INSERT INTO email value ('$email')";
    if(mysqli_query($conn, $sql))
    {
        echo "successfully";
    }
    else 
    {
        echo "not succeful";
    }
}
?>

<div>
    <h1>
    You'll be notified when the app gets launched thanks alot!
    YEYYYY!!!
</h1>
</div>