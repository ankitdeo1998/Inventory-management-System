<html>
<head>



</head>
<body>
<?php

$username = "root"; 
$password = ""; 
$database = "loginsys"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$showRecordPerPage = 5;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}

if(isset($_SESSION["icode"])){
				$IC=$_SESSION["icode"];
			

$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalData = "SELECT * FROM history where itcode=$IC ";
$allSQLData = mysqli_query($mysqli, $totalData);
$total_rows = mysqli_num_rows($allSQLData);
$lastPage = ceil($total_rows/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$DSQL = "SELECT * FROM `history` where itcode=$IC LIMIT $startFrom, $showRecordPerPage";
$FinalResult = mysqli_query($mysqli, $DSQL);
?>
<style>
table#t02{
  width: 50%;
text-align:center;
color:black;  

}

table#t02 th,td {
  text-align:center;
  font-size:16px;
  padding:5px;
  border-bottom: 1px solid #000;
}
</style>

<table id="t02"> 
<colgroup>
<col style="background-color:#fff">
    <col style="background-color:#96ceb4">
    <col style="background-color:#ffeead">
   
   </colgroup>
      <tr>
			
          <th>Item Code</th> 
          <th>Department</th> 
          <th>Quantity</th>
		  </tr>
<tbody>
<?php

while($fet = mysqli_fetch_assoc($FinalResult)){
?>
<tr>

<td><?php echo $fet['itcode']; ?></td>
<td><?php echo $fet['dept']; ?></td>
<td><?php echo $fet['quan']; ?></td>

</tr>
<?php  }  ?>
</tbody>
</table>
<nav aria-label="Page navigation">
<ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">First</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php  }}?>
</ul>
</nav>
</body>
</html>