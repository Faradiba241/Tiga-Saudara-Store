<!DOCTYPE html>
<html>
<head>
  <title>Admin | Input Kategori</title>
</head>
<body>


<?php 
print_r($this->input->post());
echo "<center>";
echo "<h2> Input Data Kategori</h2>";
echo form_open_multipart();
echo form_label('Nama Kategori');
echo '<br>';
echo form_input('nama_kategori');
echo '<br>';
echo form_button(array('type'=>'submit','content'=>'simpan'));
echo form_button(array('type'=>'reset','content'=>'reset'));
echo form_close();

?>
</body>
</html>
<style type="text/css">
  body {
    background-color: lightgrey;
  }
  input {
    width: 200px;
    height: 20px;
  }
  button[type=dropdown] {
    width: 200px;
    height: 20px;
  }
  button[type=submit]:hover {
    cursor: pointer;
}

button[type=reset]:active {
    background: skyblue;
}
</style>