<?php
session_start();
error_reporting(0);
include('koneksi.php');
error_reporting(0);
if (!isset($_SESSION['email'])) {
    header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link href="css/style.css" rel="stylesheet"> -->
	<link rel="shortcut icon" href="../Img/Ic_Epasys.ico" alt="Icon-Epasys">
	<title>Epasys</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<?php
		$page="dashboard";
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
					<h1>Selamat Pagi, Admin</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Dashboard</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<ul class="box-info">
				<li>
				<i class='bx bxs-parking'></i>
					<span class="text">
						<h3>100</h3>
						<p>Total Parkir</p>
					</span>
				</li>
				<li>
					<i class='bx bx-log-in' ></i>
					<!-- <i class="bx"><ion-icon name="enter-outline"></ion-icon></i> -->
					<span class="text">
						<h3>80</h3>
						<p>Kendaraan Masuk</p>
					</span>
				</li>
				<li>
					<i class='bx bx-log-out' ></i>
					<!-- <i class='bx'><ion-icon name="exit-outline"></ion-icon></i> -->
					<span class="text">
						<h3>20</h3>
						<p>Kendaraan Keluar</p>
					</span>
				</li>
			</ul>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Activity</h3>
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
									<p>Candi</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status pending">Keluar</span></td>
							</tr>
							<tr>
								<td>
									<img src="https://cdn.myanimelist.net/r/360x360/images/characters/9/131317.jpg?s=b53e816a48dfacc4bc7768066596800c">
									<p>Indra</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status pending">Keluar</span></td>
							</tr>
							<tr>
								<td>
									<img src="https://diak46rl5chc7.cloudfront.net/orgs/126362/contents/ujhfmi76xrs8nbkv/ujhfmi76xrs8nbkv.png">
									<p>Hasan</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status process">Masuk</span></td>
							</tr>
							<tr>
								<td>
									<img src="https://static.wikia.nocookie.net/727da26e-95d3-4427-a863-97d6ca99f737">
									<p>Sohib</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status pending">Keluar</span></td>
							</tr>
							<tr>
								<td>
									<img src="https://ovicio.com.br/wp-content/uploads/2021/07/20210716-noelle-clover-555x555.jpg">
									<p>Danu</p>
								</td>
								<td>Vespa B 1232 UB</td>
								<td>09:45</td>
								<td><span class="status process">Masuk</span></td>
							</tr>
						</tbody>
					</table>
				</div>

				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
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