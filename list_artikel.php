<!DOCTYPE html>
<html>
<head>
	<title>Admin | List Artikel</title>
</head>
<body>
<center>
  <h2><U>LIST ARTIKEL</U></h2>
 <?php print_r($artikel); ?>	
<table>
 <tr>
  	<th>Date Time</th>
    <th>Titel</th>
    <th>Description</th>
    <th>Image</th>
</tr>

 <?php
 foreach ($artikel as $key => $value)
 	{
 	
 		echo '<tr>';
 		echo "<td>{$value['date_time']}</td>";
    echo "<td>{$value['title']}</td>";
    echo "<td>{$value['description']}</td>";
    echo "<td>{$value['image']}</td>";
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