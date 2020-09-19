<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$empid = $_POST['empid'];
$salary = $_POST['salary'];

if (!empty($firstname) || !empty($lastname) || !empty($empid) || !empty($salary))
{
	$host = "localhost";
    $dbfirstname = "root";
    $dblastname = "";
    $dbname = "form-fill";
    //create connection
    $conn = new mysqli($host, $dbfirstname, $dblastname, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT empid From details Where empid = ? Limit 1";
     $INSERT = "INSERT Into details (firstname, lastname, empid, salary) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $empid);
     $stmt->execute();
     $stmt->bind_result($empid);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssii", $firstname, $lastname, $empid, $salary);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already using this empid";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>