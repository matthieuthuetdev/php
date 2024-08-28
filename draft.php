<?php
function sortItems(array $table)  {
 
    if (empty ($table)){
        return [];
    } else {
        arsort($table);
        return $table;
    }
    echo $table;
}
$dev = ["steve","alex","matthieu","habib"];
$content = json_encode(sortItems($dev,true));
file_put_contents("result.json",$content);