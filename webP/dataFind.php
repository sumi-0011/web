<?php
    $fileName = $_POST['filename'];
    $content = $_POST['content'];
    
    $fp = fopen("data.txt", "r") or die("파일을 열 수 없습니다！");
    $infoArray;
    while( !feof($fp) ) {
        $name = fgets($fp);
        $data = fgets($fp);
        $infoArray[$name] = $data;
    }

    //1. 파일이름과 단어의 키워드를 모두 만족
    if($fileName!="" && $content!="") {
        foreach($infoArray as $key=>$value) {
            $file_exist = name_search($fileName,$key);
            $key_exist =Keyword_search($content,$value);
            if($file_exist=="true" && $key_exist =="true") {
                echo $key.": ".$value;
                break;
            }
        }
        
    }
    //2. 파일 키워드만 만족 
   else if($fileName!="") {
    foreach($infoArray as $key=>$value) {
        $file_exist = name_search($fileName,$key);
        if($file_exist=="true") {
            echo $key.": ".$value;
            break;
        }
    }
   
   }
    //3. 단어 키워드만 만족
    else if($content!="") {
        foreach($infoArray as $key=>$value) {
           //내용 키워드 확인 경우 
            $key_exist =Keyword_search($content,$value);
            if($key_exist =="true") {
                echo $key.": ".$value;
                break;
            }
        }
    }
    //4. 모두 입력 x
    else {
        echo "Enter the keywords of list that you want to search";
    }
    

    fclose($fp);

    //파일이름 키워드 검색
    function name_search($fileName,$name) {
        $key_name = substr($name,0,-5);
        
        if($fileName==$key_name) {
            return "true";
        }
        else 
            return "false";
    }
    //단어 키워드 검색
    function Keyword_search($content,$data) {
        $array = explode(" ",$data);
        foreach($array as $str) {
            if($str == $content) {
                return "true";
            }
            
        }
        return "false";
    }


    


?>