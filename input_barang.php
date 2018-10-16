<!DOCTYPE html>
<html>
<head>
  <title>Admin | Input Barang</title>
</head>
<body>


<?php 
print_r($this->input->post());
echo "<center>";
echo "<h2> Input Data Barang</h2>";
echo form_open_multipart();
echo form_label('Nama Barang');
echo '<br>';
echo form_input('nama_barang');
echo '<br>';
echo form_label('Kategori Barang');
echo '<br>';
echo form_dropdown('kategori', array('Baju','Celana','Selimut'));
echo '<br>';
echo form_label('Harga Barang');
echo '<br>';
echo form_input(array('name'=>'harga_barang','type'=>'number'));
echo '<br>';
echo form_label('Stock');
echo '<br>';
echo form_input(array('name'=>'stok','type'=>'number'));
echo '<br>';
echo form_label('status Barang');
echo '<br>';
echo form_dropdown('status', array('publish','unpublish'));
echo '<br>';
echo form_label('Images');
echo '<br>';
echo form_textarea('images');
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