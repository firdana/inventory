<!doctype html>
<html class="no-js" lang="en">

<?php 
	include 'cek.php';
	include '../dbconnect.php';
	?>

<html>
<head>
<title>*Data Stock Bahan</title>
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/external/bootstrap.min.css">
  <script src="assets/external/jquery.min.js"></script>
  <script src="assets/external/popper.min.js"></script>
  <script src="assets/external/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/external/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="assets/externalbuttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="assets/external/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="assets/external/jquery.dataTables.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="assets/external/id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>

</head>

<body>
		<div class="container">
			<h2>Stock Bahan</h2>
			<h4>(Inventory)</h4>
				<div class="data-tables datatable-dark">
					<table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Nama Barang</th>
												<th>Jenis</th>
												<th>Warna</th>
												<th>Merk</th>
												<th>Ukuran</th>
												<th>Stock</th>
												<th>Satuan</th>
												<th>Lokasi</th>
												
												<!--<th>Opsi</th>-->
											</tr></thead><tbody>
											<?php 
											$brgs=mysqli_query($conn,"SELECT * from sstock_brg order by nama ASC");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){

												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $p['nama'] ?></td>
													<td><?php echo $p['jenis'] ?></td>
													<td><?php echo $p['warna'] ?></td>
													<td><?php echo $p['merk'] ?></td>
													<td><?php echo $p['ukuran'] ?></td>
													<td><?php echo $p['stock'] ?></td>
													<td><?php echo $p['satuan'] ?></td>
													<td><?php echo $p['lokasi'] ?></td>
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