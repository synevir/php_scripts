<?php
// function make marked list for output array in web page
// using <ul>  <li>....</li> </ul>
// $encode - flash to use encode chars or no 

function make_marked ($items, $encode = TRUE)
{
    if (!is_array ($items))
        return ("make_marked_list: items argument must be an array");
    $str = "<ul>\n";
    reset ($items);
    while (list ($key, $value) = each ($items)){
       if ($encode)
           $value = htmlspecialchars ($value);
       $str .= "<li>$value</li>\n";
    }
    $str .= "</ul>\n";
    return ($str);
}
?>

