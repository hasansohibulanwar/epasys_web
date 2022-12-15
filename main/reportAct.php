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
		$page="report";
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
							<a class="active" href="#">Laporan Aktivitas</a>
						</li>				
					</ul>
				</div>

				
		

				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Ekspor Laporan Ke PDF</span>
				</a>
				


				

		</main>
		<!-- MAIN -->
		<?php
			 // Mengenalkan variabel teks
			$SqlPeriode  = "";
			$awalTgl 	 = "";
			$akhirTgl	 = "";
			$tglAwal 	 = "";
			$tglAkhir 	 = "";

			if(isset($_POST['btnTampil'])){
				$tglAwal = isset($_POST['txtTglAwal']) ? $_POST['txttglAwal'] : "01-".date('m-y');
				$tglAkhir = isset($_POST['txtTglAkhir']) ? $_POST['txttglAkhir'] : date('d-m-y');
				$SqlPeriode = " where A.tglmasuk BETWEEN ' " .$tglAwal."' AND ' ".$tglAkhir."'";

			}
			else {
				$tglAwal = "01-".date('m-y');
				$tglAkhir = date('d-m-y');
				$SqlPeriode = "where A.tglpesanan BETWEEN ' " .$awalTgl."' AND '".$akhirTgl."'";

			}


 ?>
				<h4> Periode Tanggal <b><?php echo ($tglAwal); ?> </b> s/d <b><?php echo ($tglAkhir); ?></b></h4>
				<div class="card shadow " > 
				
				</div>
				</div class="card">
				<div class="card-body" > 
				<form action = "<?php $_SERVER['PHP_SELF'] ;  ?>" method="post" name ="form10" target ="_self">

				<div class="row">
				<div class="col-lg-3">
					<input name="txtTglAwal" type="date" class="form-control" value="<?php echo $awalTgl; ?>" size="10" />
				</div>
				<div class="col-lg-4">
				 <input name="txtTglAkhir" type="date" class="form-control" value="<?php echo $akhirTgl; ?>" size="10" />
				</div>
				<div class="col-lg-4">
				 <input name="btnTampil" class="btn btn-success " type="submit"  value="Tampilkan" />
				</div>
				</div>



				<div class="table-resposive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable">
				   <table class="table dataTable my-0" id="dataTable1"> 
					<thead>
						<tr>
						<th>No</th>
						<th>Plat Nomor</th>
						<th>Merk Kendaraan</th>
						<th>Tanggal Masuk</th>
						<th>Tanggal Keluar</th>
						</tr>

					</thead>
					<tbody>
						
					<?php
					$Sql = "SELECT A.*, B.nama_supplier FROM baranngmasuk A, supplier B $SqlPeriode AND A.idsupplier=B.idsupplier ad A.tottalmasuk !='0'";
					//$myQry = mysqli_query($mysqli, $Sql) or die ("Query salah : ".mysqli_error());
					$nomor =0;
					while ($myData = mysqli_fetch_array($myQry)) {
						$Kode = $myData ['idmasuk'];
					$nomor++;
					?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $myData['idmasuk'];?></td>
						<td><?php echo $myData['tglmasuk'];?></td>
						<td><?php echo $myData['namasupplier'];?></td>
						<td><?php echo $myData['totalmasuk'];?></td>
						<td>
							<?php
							$Sqldetail ="SELECT A.*, B.nama_barang FROM detailmasuk A, barang B where A.idbarang=B.idbarang and A.idmasuk ='$Kode'";
							//$myQrydetail  = mysqli_query($mysqli, $Sqldetail) or die ("Query salah :  " .mysqli_error());
							$nomor = 1;
							while ($myDatadetail = mysqli_fetch_array($myQrydetail)) {
								$Kodedetail = $myDatadetail['idmasuk'];
								echo $myDatadetail['nama_barang']."(".$myDatadetail['qtymasuk'].")"."<br>";
							}
						  ?>
						</td>

						<td><?php echo $myData['nomor_nota ']; ?></td>
						</td>
					</tr>
					<?php 
					} $nomor++;
					?>
					</tbody>

				
					
			    </table>

		</div>

		<div class="row">
			<div class="col-lg-3"></div>
			<a href="modul/mod_cetak/cetak.php?awal=<?php echo $tglAwal; ?>&&akhir =<?php echo $tglAkhir; ?>" target="_blank" alt="Edit Data" class="btnbtn btn-primary">Cetak Laporan </a>
		</div>

	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="script.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</body>
</html>