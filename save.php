<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data</title>
    <style>
      body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}

a {
  display: inline-block;
  padding: 10px 20px;
  margin: 20px;
  border-radius: 4px;
  color: #fff;
  background-color: #4CAF50;
  text-decoration: none;
}

a:hover {
  background-color: #3e8e41;
}

h2 {
  text-align: center;
}

.container {
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  border-radius: 4px;
  border: none;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

      </style>
</head>
<center>
<body>
  <h1>Berhasil!</h1>
<?php
    if(isset($_POST['name']) && isset($_POST['msg'])) {
      $name = $_POST['name'];
      if(empty($name)) {
          $name = 'anonymous';
      }
      $msg = $_POST['msg'];
  
      $file = fopen('data.txt', 'a');
      fwrite($file, $name . "\t" . $msg . "\n");
      fclose($file);
  }
  
?>
<br>
<a href="tabel.php">Lihat Pesan</a>
  </center>
  </body>
  </html>
