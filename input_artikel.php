<!DOCTYPE html>
<html>
<head>
  <title>Admin | Input Artikel</title>
</head>
<body>


<?php 
print_r($this->input->post());
echo "<center>";
echo "<h2> Input Data Artikel</h2>";
echo form_open_multipart();
echo form_label('Date ');
echo '<br>';
echo form_input(array('name'=>'date_time','type'=>'date'));
echo '<br>';
echo form_label('Title');
echo '<br>';
echo form_input('title');
echo '<br>';
echo form_label('Description');
echo '<br>';
echo form_textarea('description');
echo '<br>';
echo form_label('Image');
echo '<br>';
echo form_input(array('name'=>'image','type'=>'file'));
echo '<br>';
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