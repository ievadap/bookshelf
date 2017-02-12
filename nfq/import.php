<?php include 'connect.php';

$csv = file('./data/data.csv');
$data = [];
$c = 0;

$conn = getConnection();

foreach ($csv as $line) {
  $data[] = str_getcsv($line);
  $sql = "INSERT INTO bookcase (title, author, published, genre) VALUES (\"" . $data[$c][0] . "\", \"" . $data[$c][1] . "\", " . $data[$c][2] . ", \"" . $data[$c++][3] . "\")";
  var_dump($sql);
  $conn->query($sql);
}

$conn->close();