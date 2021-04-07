<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #99e6ff">

		<div class="header">
		<div class="logo">
			<img src="bank.jpg" width="100px" height="100px" alt="Bank" border="5px">

		</div>
		<div class="title">
			<h2><b>Online Banking<b></h2>
		</div>
		<div class="navbar">
			<ul class="navbar-auto">
				<li class="nav-item">
					<a class="link" href="index.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="link" href="">Transaction History</a>
				</li>
				<li class="nav-item">
					<a class="link" href="customer_care.html">Customer care</a>
				</li>
			</ul>
		</div>
	</div>
	
	
	<div class="container">
	<center><h4><b>TRANSACTION HISTORY</b></h4></center>
	<br>
	<div class="row">
		<div class="col">
			<div>
				<table class="table table-striped table-condensed table-dark table-bordered">
					<thead>
						<tr>
						<th scope="col"><b>Customer id</b></th>
						<th scope="col">SENDER</th>
						<th scope="col">RECEIVER</th>
						<th scope="col">AMOUNT</th>
					</tr>
					</thead>
					<tbody>
						<?php
						include 'config.php';
						$sql="select * from transaction";
						$query=mysqli_query($conn,$sql);
						while ($rows=mysqli_fetch_array($query)) {
						  ?>
						  <tr>
						  	<td><?php echo $rows['id'] ?></td>
						  	<td><?php echo $rows['sender'] ?></td>
						  	<td><?php echo $rows['receiver'] ?></td>
						  	<td><?php echo $rows['balance'] ?></td>
						  	
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