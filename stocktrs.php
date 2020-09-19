<?php


$IC = $_POST['item'];

$qty=$_POST['qty'];
$dept=$_POST['user'];

if (!empty($IC) || !empty($qty)|| !empty($dept))
{
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "loginsys";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {
	  
     $UPDATE = "update item_list set quantity=quantity-$qty where item_code=$IC";
     $stmt = $conn->prepare($UPDATE);
     $stmt->execute();
	 $UDT_HIS="INSERT INTO history VALUES (?,?,?)
	 ON DUPLICATE KEY UPDATE
    quan = quan+$qty";
     
     
	 
	 $stmt1 = $conn->prepare($UDT_HIS);
      $stmt1->bind_param("isi", $IC, $dept, $qty);
      $stmt1->execute();
	
     
     $stmt->close();
	 $stmt1->close();
     $conn->close();
	 header("refresh:1; url=remain.php");
				echo "<script type='text/javascript'>alert('Stock Transfered!!');
				</script>";
				exit;
    }
}
else {
 echo "All field are required";
 die();
}
?>