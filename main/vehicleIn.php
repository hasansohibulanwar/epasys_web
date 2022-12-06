<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="../Img/Ic_Epasys.ico" alt="Icon-Epasys">
	<title>Epasys</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<?php
		$page="vehicleIn";
		include 'includes/sidebar.php'
	?>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
	<?php
		include 'includes/navigation.php'
	?>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
				<h1><?php include 'includes/greetings.php'?>, Administrator</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Main</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Kendaraan Masuk</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>
			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Data Kendaraan</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Kendaraan</th>
								<th>Waktu</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="https://asset.kompas.com/crops/ka_mbd5PywuY13S7a14jTP4otAY=/0x0:0x0/750x500/data/photo/2022/09/08/6319af0744044.jpg">
									<p>John Doe</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status pending">Keluar</span></td>
							</tr>
							<tr>
								<td>
									<img src="https://cdn.myanimelist.net/r/360x360/images/characters/9/131317.jpg?s=b53e816a48dfacc4bc7768066596800c">
									<p>John Doe</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status pending">Keluar</span></td>
							</tr>
							<tr>
								<td>
									<img src="https://diak46rl5chc7.cloudfront.net/orgs/126362/contents/ujhfmi76xrs8nbkv/ujhfmi76xrs8nbkv.png">
									<p>John Doe</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status process">Masuk</span></td>
							</tr>
							<tr>
								<td>
									<img src="https://static.wikia.nocookie.net/727da26e-95d3-4427-a863-97d6ca99f737">
									<p>John Doe</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status pending">Keluar</span></td>
							</tr>
							<tr>
								<td>
									<img src="https://ovicio.com.br/wp-content/uploads/2021/07/20210716-noelle-clover-555x555.jpg">
									<p>John Doe</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status process">Masuk</span></td>
							</tr>
						</tbody>
					</table>
				</div>

			
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="script.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</body>
</html>