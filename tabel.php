<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
h1 {
  text-align: center;
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
</style>

<h1>NGL LITE BILEK
</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $file = fopen('data.txt', 'r');
            while(!feof($file)) {
                $line = fgets($file);
                $data = explode("\t", $line);
                if(count($data) == 2) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars(trim($data[0])) . "</td>";
                    echo "<td>" . htmlspecialchars(trim($data[1])) . "</td>";
                    echo "</tr>";
                }
            }
            fclose($file);
            ?>
        </tbody>
    </table>
    <center><a href="index.php">Kirim Pesan Lagi!</a></center>
</body>
</html>
