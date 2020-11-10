<?php 

include '../dbconnect.php';

$kode=$_POST['kode_barang'];
if($kode==null){
    echo 'barang_tidak_ada';
}else{
    $barang=mysqli_query($conn,"SELECT * FROM sstock_brg WHERE id_barcode='$kode' LIMIT 1");
    $barang = mysqli_fetch_assoc($barang);
    if(count($barang)==0){
        echo 'barang_tidak_ada';
    }else{
        echo json_encode($barang);
    }
}
?>