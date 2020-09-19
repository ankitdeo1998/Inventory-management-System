<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "loginsys"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 





$query = "SELECT * FROM item_list";
 
 
echo '<table class="table-hover table-bordered" border="3" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th> <font face="Arial">Item_Code</font> </th> 
          <th> <font face="Arial">Generic Code</font> </th> 
          <th> <font face="Arial">Brand</font> </th> 
          <th> <font face="Arial">Type</font> </th> 
          <th> <font face="Arial">quantity</font> </th>
		  <th> <font face="Arial">Price</font> </th>		  
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["item_code"];
        $field2name = $row["generic_code"];
        $field3name = $row["brand"];
        $field4name = $row["type"];
        $field5name = $row["quantity"];
		$field6name = $row["price"];		
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
				  <td>'.$field6name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>