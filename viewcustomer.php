<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #99e6ff">
	<?php
	$servername='localhost';
	$user='id16476022_root';
	$pass='*j6jcl@b_@O9+!#{';
	$dbname='id16476022_basic_bank' ;

	$conn=mysqli_connect($servername,$user,$pass,$dbname);
	if(!$conn)
	{
		die("Could not connect to the database -->". mysqli_connect_error());
	}
	
	$query="SELECT * from  user";
	$result=mysqli_query($conn,$query);
	?>
	
	<div class="header">
		<div class="logo">
			<img src="bank.jpg" width="100px" height="100px" alt="Bank" border="5px">
		</div>
		
		<div class="title">
			<h3><b>Online Banking<b></h3>
		</div>
		
		<div class="navbar">
			<ul class="navbar-auto">
				<li class="nav-item">
					<a class="link" href="index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="link" href="transaction_history.php">Transaction History</a>
				</li>
				<li class="nav-item">
					<a class="link" href="customer_care.html">Customer Care</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="container">
	<center><h2>Customer Details</h2></center>
	<br>
	<div class="row">
		<div class="col">
			<div>
				<table class="table table-striped table-condensed  table-bordered">
					<thead>
						<tr>
						<th scope="col"><b>ID</b></th>
						<th scope="col">NAME</th>
						<th scope="col">EMAIL ID</th>
						<th scope="col">ACCOUNT BALANCE</th>
						<th scope="col">OPERATION</th>
					</tr>
					</thead>
					<tbody>
						<?php
						while ($rows=mysqli_fetch_array($result)) {
						  ?>
						  <tr>
						  	<td><?php echo $rows['id'] ?></td>
						  	<td><?php echo $rows['name'] ?></td>
						  	<td><?php echo $rows['email'] ?></td>
						  	<td><?php echo $rows['balance'] ?></td>
						  	<td><a href="transfer_money.php?id=<?php echo $rows['id'];?>"><button type="button" class="button2">Transfer</button></a></td>
						  </tr>
						  <?php
						}
						?>
					</tbody>
					
				</table>
			</div>
			
		</div>
		
	</div>
	
</div>


</body>
</html>