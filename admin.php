
<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'pizza_order');
 //include("updatecheck.php");
	// initialize variables
	    $name = " ";
		$pnumber = " ";
		$nic = " ";
		$ddate = " ";
		$ptype = " ";
		$psize = " ";
		$quantity = " ";
		$dstatus="";
		//$total = 0;
	    $delieverystatus = "";
		
	    if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$pnumber = $_POST['pnumber'];
		$nic = $_POST['nic'];
		$ddate = $_POST['ddate'];
		$ptype = $_POST['ptype'];
		$psize = $_POST['psize'];
		$quantity = $_POST['quantity'];
		$delieverystatus = $_POST['delieverystatus'];
		mysqli_query($db, "INSERT INTO orders (name, pnumber, nic, ddate,ptype,psize,quantity) VALUES ('$name', '$pnumber', '$nic','$ddate','$ptype','$psize','$quantity')"); 
		//$_SESSION['message'] = "Member successfully added!!!"; 
		header('location: admin.php'); 
		}
		
		
	if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM orders WHERE id=$id");
	$_SESSION['message'] = "Member deleted successfully!"; 
	header('location: admin.php');
}
	?>		
		
	
	

<link rel="stylesheet" type="text/css" href="style2.css">
<h4 align="center">Order From the Customer</h4>
	<table border= "1">
		<thead>
			<tr>
				<th> Name </th>
				<th> Phone Number </th>
				<th> NIC </th>
				<th> DelieveryDate </th>
				<th> Pizza Type </th>
				<th> Pizza Size </th>
				<th> Quantity </th>
				<th> Delievery status </th>
			</tr>
		</thead>


<?php $results = mysqli_query($db, "SELECT * FROM orders"); ?>		
		
			<?php while ($row = mysqli_fetch_array($results)) { ?>
			
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['pnumber']; ?></td>
				<td><?php echo $row['nic']; ?></td>
				<td><?php echo $row['ddate']; ?></td>
				<td><?php echo $row['ptype']; ?></td>
				<td><?php echo $row['psize']; ?></td>
				<td><?php echo $row['quantity']; ?></td>
			    <td></td>
				<td>
					<a href="admin.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
				</td>
		 </tr>  
		<?php } ?>         
</table>	

<h4 align="center">view the orders by using the delievery date</h4>
<form action ="admin.php" method = "POST">
		<label>Enter Date</label>
		<input type = "date" name = "date" value="<?php echo $date; ?>">
		<input type = "Submit" name = "submit">
	</form>
	
	<?php 
	if(isset($_POST['submit'])){
		$date = $_POST['date'];
		$result2 = mysqli_query($db, "select * from orders where ddate = '$date' ");
		?>
		
		<table border= "1">
		<thead>
			<tr>
				<th> Name </th>
				<th> Phone Number </th>
				<th> NIC </th>
				<th> DelieveryDate </th>
				<th> Pizza Type </th>
				<th> Pizza Size </th>
				<th> Quantity </th>
			</tr>
		</thead>

			<?php while ($row = mysqli_fetch_array($result2)) { ?>
			
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['pnumber']; ?></td>
				<td><?php echo $row['nic']; ?></td>
				<td><?php echo $row['ddate']; ?></td>
				<td><?php echo $row['ptype']; ?></td>
				<td><?php echo $row['psize']; ?></td>
				<td><?php echo $row['quantity']; ?></td>
		 </tr>  
		<?php } ?>
	</table>
	
	<?php 
	}
 ?>
 

	
		