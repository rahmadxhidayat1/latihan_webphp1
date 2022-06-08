<?php 
if(isset($_GET['act']) && ($_GET['act']=="update" || $_GET['act']== "save")){
	require_once "../../config/koneksi_db.php";
	require_once "../../config/config.php";		
}else{
	require_once "../config/koneksi_db.php";
	require_once "../config/config.php";
}
if(isset($_GET['act']) && ($_GET['act']== "add")){	
	$judul = "Form Input Data";
}
else if(isset($_GET['act']) && ($_GET['act']== "edit")){
	$judul = "Form Edit Data";
	$idkey = $_GET['id']; //dapat dari URL
	$qdata = mysqli_query($connect_db,"select * from mst_blog where id_blog=$idkey")or die(mysqli_error($connect_db));
	$data = mysqli_fetch_array($qdata);
}
else if(isset($_GET['act']) && ($_GET['act']== "save")){
	$juduls = $_POST['judul'];//$_POST untuk ngambil data yang menggunakan name(menggunakan php)
	$kategori= $_POST['id_kategori'];
    $author=$_POST['author'];
    $isi=$_POST['isi'];
    $date=$_POST['date_input'];
	$qinsert = mysqli_query($connect_db, 
		"INSERT into mst_blog(judul,id_kategori,author,isi,date_input) VALUES('$juduls','$kategori','$author','$isi','$date')")
		or die (mysqli_error($connect_db));
	if($qinsert){
		header("Location: http://localhost/latihan_webphp1/admin/home.php?modul=mod_blog");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "update")){
	$id = $_POST['id_blog'];
	$up_judul = $_POST['up_judul'];
	$up_kategori = $_POST['up_kategori'];
    $up_isi=$_POST['isi'];
    $up_author=$_POST['up_author'];
    $up_date=$_POST['date_input'];
	$qinsert = mysqli_query($connect_db, 
			"UPDATE mst_blog SET judul='$up_judul', id_kategori='$up_kategori', isi='$up_isi',author='$up_author',date_input='$up_date' WHERE id_blog='$id'")
			or die (mysqli_error($connect_db));
	if($qinsert){
		
		header("Location: http://localhost/latihan_webphp1/admin/home.php?modul=mod_blog");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "delete")){
	
	$idkey = $_GET['id']; //dapat dari URL
	$qdelete = mysqli_query($connect_db,"DELETE from mst_blog where id_blog=$idkey")
				or die(mysqli_error($connect_db));
	if($qdelete){
		header("Location: http://localhost/latihan_webphp1/admin/home.php?modul=mod_blog");
	}
}
?>