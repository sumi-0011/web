<?php 

    $fp = fopen("data.txt", "r") or die("파일을 열 수 없습니다！");
    $infoArray;
    while( !feof($fp) ) {
        $name = fgets($fp);
        $data = fgets($fp);
        $infoArray[$name] = $data;
    }

    foreach($infoArray as $key=>$value) {

        echo "<li>".$key.": ".$value."</li>";
    }
?>