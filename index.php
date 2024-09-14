<?php
function MyFunction ($param1, $param2, $param3, $param4, $param5) {
    $array = array ('Name1' =>$param1, 'Name2' =>$param2, 'Name3'=>$param3, 'Name4' =>$param4, 'Name5' =>$param5);
    foreach ($array as $index => $joan){
        echo 'index: '. $index. ' '. 'Name: '. $joan. '<br>';

    }
}

echo MyFunction ('Joan', 'Justin', 'Drim', 'Sky', 'Ariana');

?>