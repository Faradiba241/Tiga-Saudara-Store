<!DOCTYPE html>
<html>
<head>
	<title>Admin | List Admin</title>
</head>
<body>
<center>
  <h2><U>LIST ADMIN</U></h2>
 <?php print_r($admin); ?>	
<table>
 <tr>

  	<th>Nama Lengkap</th>
  	<th>Username</th>
  	<th>Password</th>
</tr>

 <?php
 foreach ($admin as $key => $value)
 	{
 	
 		echo '<tr>';
 		echo "<td>{$value['nama_lengkap']}</td>";
 		echo "<td>{$value['username']}</td>";
 		echo "<td>{$value['password']}</td>";
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