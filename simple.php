<html>
<head>

<title>Simple PHP Page</title>
</head>
<body bgcolor="white">


<p>The current date is <?php print (date ("D M d H:i:s T Y")); ?>.</p>
<hr />
<?php
////////////////////////////////////////////////////////////
//  Script render page's <ul> elements with names of tables
//  from database meta-data
////////////////////////////////////////////////////////////

  require_once('connect.php');
  if (!$dbc=mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME))
      echo ' Ошибка соединеиния с базой';
  $query = 'SHOW TABLES';
  $data  = mysqli_query($dbc, $query);
  echo 'Current database <b>'.DB_NAME.'</b> include table: <br>';

  // вывод маркерованного списка/out put marked list names of table
  echo "<ul>\n";
  while($row = mysqli_fetch_row($data)) {
      echo "<li>$row[0] </li>\n";
  }
  echo "</ul>\n";

  mysqli_close($dbc);

?>
</body>
</html>
