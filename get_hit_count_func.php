<?php
/////////////////////////////////////////////////////////////
// counts web page hints function
/////////////////////////////////////////////////////////////

function get_hit_count ($dbc, $page_path)
{
    $query = "UPDATE hitcount SET hits = LAST_INSERT_ID(hits+1) WHERE path = '$page_path'";
    if(!$data  = mysqli_query ($dbc,$query))
        echo '<br /> ошибка в запросе обновления счетчика <br />';
    if ($data AND mysqli_affected_rows($dbc) > 0)
        return (mysqli_insert_id ($dbc));

    $query = "INSERT IGNORE INTO hitcount (path, hits) VALUES('$page_path',1)";
    if(!$data  = mysqli_query ($dbc,$query))
        echo '<br /> ошибка в запросе добавления новой страницы <br />';
    return (1);
}
?>

