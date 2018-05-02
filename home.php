<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM adminUsers WHERE ID=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- LINKS -->
<?php include ("components/head.php"); ?>

</head>
<body>

<!-- NAVBAR -->
<?php include ("components/adminNavbar.php"); ?>



<!-- Container  -->
<div class="container-fluid">

<?php
include ("components/dbconnect_2.php");



/*
$sql = "SELECT * FROM reservations where active = '1' and startDate >= concat(date_format(LAST_DAY(now()),'%Y-%m-'),'01') order by startdate";

//$result = $conn->query($sql);
//$result = $mysqli->query($sql);
$result = $mysqli->query("SELECT * FROM reservations where active = '1'");


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
        <div class='container panel panel-default'>
        <h4>" . $row["fname"]. " " . $row["lname"]. ": " . $row["startDate"] . " - " . $row["endDate"] . "</h4>
        <p>E-mail: ". $row["email"] . "<br>
        GSM: ". $row["phone"] . "<br>
        <a class='btn btn-primary btn-sm' href='enumaDetails.php?ID=" . $row["ID"] . "' role='button'>Details</a>
        <a class='btn btn-primary btn-sm' href='#' role='button'>Factuur</a>
        </p></div>";
    }
} else {
    echo "Geen details te vinden voor deze reservatie";
}




$conn->close();

*/
?>

<a href="test.php">klik hier</a>
</div>

<!-- FOOTER -->
<?php include ("components/footer.php"); ?>


</body>
</html>
