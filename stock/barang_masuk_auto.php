<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include 'cek.php';

	?>

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Logistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="assets/external/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="assets/external/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/external/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/external/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/external/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/external/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="assets/external/buttons.dataTables.min.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="assets/externalUA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><img src="../logo.png" alt="logo" width="100%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
							<li><a href="index.php"><span>Notes</span></a></li>
                            <li>
                                <a href="stock.php"><i class="ti-dashboard"></i><span>Stock Barang</span></a>
                            </li>
							<li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Transaksi Data
                                    </span></a>
                                <ul class="active">
                                    <li class="active"><a href="masuk.php">Barang Masuk</a></li>
                                    <li><a href="keluar.php">Barang Keluar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="logout.php"><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <h2>Hi, <?=$_SESSION['user'];?>!</h2>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end --> 
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="masuk.php"><span>Barang Masuk</span></a></li>
                                <li><span>Scan</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right" style="color:black; padding:0px;">
                            <img src="log.jpg" width="220px" class="user-name dropdown-toggle" data-toggle="dropdown"\>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <br />  
                <br />  
                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                          <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" onkeyup="scan()" autocomplete="off" name="kode_barang" id="kode_barang" placeholder="ID Barcode " class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Cek Barang</button></td>  
                                         
                                    </tr>  
                               </table>  
                               <table class="table table-bordered" id="dynamic_field">  
                                   
                               </table>  
                               <a href="masuk.php" class="btn btn-danger">Cancel</a>
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
           </div>  
       
                <!-- row area start-->
                </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Toko Sepatu</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
	
	<!-- modal input -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Masukkan stok manual</h4>
						</div>
						<div class="modal-body">
							<form action="tmb_brg_act.php" method="post">
								<div class="form-group">
									<label>Kode</label>
									<input name="nama" type="text" class="form-control" placeholder="Kode Barang" required>
								</div>
								<div class="form-group">
									<label>Jenis</label>
									<select name="jenis" class="custom-select form-control">
									<option selected>Pilih jenis</option>
									<option value="Sepatu">Sepatu</option>
									<option value="Sendal">Sendal</option>
									</select>
								</div>
								<div class="form-group">
									<label>Warna</label>
									<input name="warna" type="text" class="form-control" placeholder="Warna Barang">
								</div>
								<div class="form-group">
									<label>Merk</label>
									<input name="merk" type="text" class="form-control" placeholder="Merk Barang">
								</div>
								<div class="form-group">
									<label>Ukuran</label>
									<input name="ukuran" type="text" class="form-control" placeholder="Ukuran">
								</div>
								<div class="form-group">
									<label>Stock</label>
									<input name="stock" type="number" min="0" class="form-control" placeholder="Qty">
								</div>
								<div class="form-group">
									<label>Lokasi</label>
									<select name="lokasi" class="custom-select form-control">
                                    <option selected>Pilih Lokasi</option>
									<option value="Toko">Toko</option>
                                    <option value="Gudang Toko">Gudang Toko</option>
                                    <option value="Gudang 1">Gudang 1</option>
                                    <option value="Gudang 2">Gudang 2</option>
                                    </select>
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input type="submit" class="btn btn-primary" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
	
	<script>
		$(document).ready(function() {
		$('input').on('keydown', function(event) {
			if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
			   var $t = $(this);
			   event.preventDefault();
			   var char = String.fromCharCode(event.keyCode);
			   $t.val(char + $t.val().slice(this.selectionEnd));
			   this.setSelectionRange(1,1);
			}
		});
	});
	
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
	</script>
	
	<!-- jquery latest version -->
    <script src="assets/external/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Start datatable js -->
	 <script src="assets/external/buttons.print.min.js"></script>
    <script src="assets/external/dataTables.buttons.min.js"></script>
    <script src="assets/external/jquery.dataTables.js"></script>
    <script src="assets/external/jquery.dataTables.min.js"></script>
    <script src="assets/external/dataTables.bootstrap4.min.js"></script>
    <script src="assets/external/dataTables.responsive.min.js"></script>
    <script src="assets/external/responsive.bootstrap.min.js"></script>
	<script src="assets/external/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="assets/external/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="assets/external/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="assets/external/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	
	
</body>

</html>

 <script>  
 
    
        var i=1; 
     
      function scan(){ 
        
           if(i>20){
               return alert('udah 20');
           } 
           $.ajax({  
                url:"ajax_barang_auto.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                    //return alert(data);
                     if(data=='barang_tidak_ada'){
                         return alert('barang kosong'); 
                          
                     } else{
                       var barang=JSON.parse(data);         
                        i++; 
                        $('#dynamic_field').append('<tr id="row'+i+'"><td><input readonly type="text" name="name[]" value="'+barang['nama']+'" placeholder="Nama" class="form-control name_list" /></td>'
                        +'<input type="hidden" id="'+barang['idx']+'" name="id[]" value="'+barang['idx']+'" placeholder="ID" class="form-control name_list" />'
                        +'<td><input type="text" name="jumlah[]" value="1" placeholder="Jumlah" class="form-control name_list" /></td>'
                        +'<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
                     } 
                     $('#kode_barang').val(null); 

                }  
           });  

           
      }  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 
 </script>