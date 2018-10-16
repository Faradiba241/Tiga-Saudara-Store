<!DOCTYPE html>
<html>
<head>
	<title>Admin | List Barang</title>
</head>
<body>
<center>
  <h2><U>LIST BARANG</U></h2>
 <?php print_r($barang); ?>	
<table>
 <tr>
 	<th>Nama Barang</th>
  	<th>Kategori</th>
  	<th>Harga</th>
  	<th>Stock</th>
  	<th>status</th>
  	<th>Images</th>
</tr>

 <?php
 foreach ($barang as $key => $value)
 	{
 	
 		echo '<tr>';
 		echo "<td>{$value['nama_barang']}</td>";
 		echo "<td>{$value['kategori']}</td>";
 		echo "<td>{$value['harga_barang']}</td>";
 		echo "<td>{$value['stok']}</td>";
 		echo "<td>{$value['status']}</td>";
 		echo "<td>{$value['images']}</td>";
 		echo '</tr>';
 		
 	}
 	?>
</table>
 </center>
</body>
<style type="text/css">
	table { 
  width: 80%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: darkblue; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}

img {
     height: 70px;
     width: 70px;
}
</style>
</html>