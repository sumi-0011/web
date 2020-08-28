<?php
    $fileName = $_POST['filename'];
    $content = $_POST['content'];
    
    $dataFile = fopen("data.txt","a");
    $txt = $fileName."\n".$content."\n";
    
    fwrite($dataFile,$txt);

    fclose($dataFile);
    
    echo "저장되었습니다.";
?>