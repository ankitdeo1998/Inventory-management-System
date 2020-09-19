<?php
STATIC $count=1;
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
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalData = "SELECT * FROM item_list";
$allSQLData = mysqli_query($mysqli, $totalData);
$total_rows = mysqli_num_rows($allSQLData);
$lastPage = ceil($total_rows/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$DSQL = "SELECT * FROM `item_list` LIMIT $startFrom, $showRecordPerPage";
$FinalResult = mysqli_query($mysqli, $DSQL);
?>
<style>
table#t01 {
  width: 100%;
text-align:center;
color:black;  

}

table#t01 th,td {
  text-align:center;
  padding:5px;
      border-bottom: 1px solid #000;
}
</style>

<table id="t01"> 
<colgroup>
<col style="background-color:#fff">
    <col style="background-color:#96ceb4">
    <col style="background-color:#ffeead">
	<col style="background-color:#ff6f69">
    <col style="background-color:#b8a9c9">
    <col style="background-color:#b5e7a0">
   <col style="background-color:#dac292">
   </colgroup>
      <tr>
			<th>S.No</th>
          <th>Item_Code</th> 
          <th>Generic Code</th> 
          <th>Brand</th> 
          <th>Type</th> 
          <th>Quantity</th>
		  <th>Price</th>		  
      </tr>
<tbody>
<?php

while($fet = mysqli_fetch_assoc($FinalResult)){
?>
<tr>
<td><?php echo $count; ?></td>
<td><?php echo $fet['item_code']; ?></td>
<td><?php echo $fet['generic_code']; ?></td>
<td><?php echo $fet['brand']; ?></td>
<td><?php echo $fet['type']; ?></td>
<td><?php echo $fet['quantity']; ?></td>
<td><?php echo $fet['price']; ?></td>

</tr>
<?php $count=$count+1; }  ?>
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
<?php } ?>
</ul>
</nav>