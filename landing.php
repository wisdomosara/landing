<?php

$email = "";
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $conn = new mysqli("https://wisdommasterlanding.herokuapp.com/", "wisdom", "Ikhuoria2", "landing");
    $cmd = "INSERT into email value ('$email');";
    if(mysqli_query($conn, $cmd))
    {
        echo "successfully";
    }
    else 
    {
        echo "not successful";
    }
}
?>

<form method=post>
    <input type="email" name="email" />
    <input type="submit" name="submit" />
</form>

<div>
<?php

$conn = new mysqli("https://wisdommasterlanding.herokuapp.com/", "wisdom", "Ikhuoria2", "landing");
$sql = "SELECT DISTINCT * FROM email";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>- Email: ". $row["email"]. " " ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</div>
