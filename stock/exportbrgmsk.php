<!doctype html>
<html class="no-js" lang="en">

<?php 
	include 'cek.php';
	include '../dbconnect.php';
	?>

<html>
<head>
<title>*Data Bahan Masuk</title>
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/external/bootstrap.min.css">
  <script src="assets/external/jquery.min.js"></script>
  <script src="assets/external/popper.min.js"></script>
  <script src="assets/external/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/external/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="assets/external/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="assets/external/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="assets/external/jquery.dataTables.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="assets/external/UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>

</head>

<body>
		<div class="container">
			<h2>Transaksi Bahan : Masuk / Kembali</h2>
				<div class="data-tables datatable-dark">
					<table class="display" id="dataTable3" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Nama Barang</th>
												<th>Jenis</th>
												<th>Warna</th>
												<th>Merk</th>
												<th>Ukuran</th>
												<th>Jumlah</th>
												<th>Satuan</th>
												<th>Keterangan</th>
												
												<!--<th>Opsi</th>-->
											</tr></thead><tbody>
											<?php 
											$brg=mysqli_query($conn,"SELECT * from sbrg_masuk sb, sstock_brg st where sb.idx=st.idx order by sb.id ASC");
											$no=1;
											while($b=mysqli_fetch_array($brg)){

												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php $tanggals=$b['tgl']; echo date("d-M-Y", strtotime($tanggals)) ?></td>
													<td><?php echo $b['nama'] ?></td>
													<td><?php echo $b['jenis'] ?></td>
													<td><?php echo $b['warna'] ?></td>
													<td><?php echo $b['merk'] ?></td>
													<td><?php echo $b['ukuran'] ?></td>
													<td><?php echo $b['jumlah'] ?></td>
													<td><?php echo $b['satuan'] ?></td>
													<td><?php echo $b['keterangan'] ?></td>
												</tr>		
												<?php 
											}
											?>
										</tbody>
										</table>
								</div>
						</div>
	
<script>
$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
           'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    } );
} );

</script>

<script src="assets/external/jquery-3.3.1.js"></script>
<script src="assets/external/jquery.dataTables.min.js"></script>
<script src="assets/external/dataTables.buttons.min.js"></script>
<script src="assets/external/buttons.flash.min.js"></script>
<script src="assets/external/jszip.min.js"></script>
<script src="assets/external/pdfmake.min.js"></script>
<script src="assets/external/vfs_fonts.js"></script>
<script src="assets/external/buttons.html5.min.js"></script>
<script src="assets/external/buttons.print.min.js"></script>

	

</body>

</html>