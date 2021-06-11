
<?php
	//Start session
		
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'pizza_order');
			$name = "";
			$nic = "";
?>
<!DOCTYPE html>
<html>
<head>
<title>Pizza ordering</title>
<link href="style2.css" rel="stylesheet" type="text/css" />
</head>
<form id="form1" method="post" action="admin.php" >
<div id="s" align="center"><strong>Order Registration</strong></div>

<form method="post" action="admin.php" >
		
		<input type="hidden" name="id" value="<?php echo $id; ?>" required>
		
		<div class="input-group" align="center">
			<label for="name">Name</label>
			<input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
		</div>
	
		<div class="input-group" align="center">
			<label>Phone Number</label>
			<input type="number" name="pnumber" value="<?php echo $pnumber; ?>" required>
		</div>
		
		<div class="input-group"align="center">
			<label>NIC</label>
			<input type="text" name="nic" value="<?php echo $nic; ?>" required>
		</div>
		
		<div class="input-group"align="center">
			<label>Delivery Date</label>
			<input type="date" name="ddate" value="<?php echo $ddate; ?>" required>
		</div>
		
		<div class="input-group" align="center">
			<label>Pizza Type</label>

			<select name="ptype" value="<?php echo $ptype; ?>" required>
			<option value="classic"  >classic</option>
			<option value="signature"  >signature</option>
			<option value="supreme">supreme</option>
			</select>
		</div>
	
		<div class="input-group" align="center">
			<label>Pizza Size</label>
			<select name="psize" value="<?php echo $psize; ?>" required>
			<option value="large">large</option>
			<option value="medium">medium</option>
			<option value="small">small</option>
			</select>
		</div>
	
		<div class="input-group" align="center">
			<label>Quantity</label>
			<input type="number" name="quantity" value="<?php echo $quantity; ?>" required>
		</div>
	    <input type="hidden" name="price" value="<?php echo $price; ?>">
		<div class="input-group">
		<button class="btn" type="submit" name="save" >Save</button>
		</div>
		
		<div class="input-group" align="center">
			<label>Delievery status</label>
			<select id="delieverystatus">
			<option value="None">None</option>
			<option value="delievered">delievered</option>
			<option value="not delievered">not delievered</option>
			</select>
		</div>
		<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
</form> 
</html>		