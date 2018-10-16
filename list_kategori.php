<!DOCTYPE html>
<html>
<head>
	<title>Admin | List Kategori</title>
</head>
<body>
<center>
  <h2><U>LIST KATEGORI</U></h2>
 <?php print_r($kategori); ?>	
<table>
 <tr>
  	<th><center>Nama Kategori</center></th>
</tr>

 <?php
 foreach ($kategori as $key => $value)
 	{
 	
 		echo '<tr>';
 		echo "<td><center>{$value['nama_kategori']}</center></td>";
 		echo '</tr>';
 		
 	}
 	?>
</table>
 </center>
</body>
<style type="text/css">
	table { 
  width: 30%; 
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