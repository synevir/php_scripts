<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
// Read some meta-data (column names) from database
  require_once('connect.php');
  $page_title = 'cookbook page';
  echo 'Hello '.DB_USER.'@'.DB_HOST.'<br>';
  echo 'Начало <hr><br>';

  if (!$dbc=mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME))
      echo ' Ошибка соединеиния с базой';

  $table_name = 'limbs';
  $query = 'SHOW COLUMNS FROM '.$table_name;

  $data  = mysqli_query($dbc, $query);

echo 'В Tаблица имеет следующие колонки:<br>';
echo '-----------------------------------------------------<br>';
  while($row = mysqli_fetch_row($data)){
      echo $row[0].'<br>';
  }

  mysqli_close($dbc);
?>