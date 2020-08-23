<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo $_GET['id'];   
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="
    <?php
    $temp = $_GET['id'];
    if($temp[1]=="N") {
        if($temp[2]=="F")
        echo "NF";
        else
        echo "NT";
    }
    else {
        if($temp[3]=="J")
        echo "SJ";
        else
        echo "SP";
    }
    ?>.css" type="text/css">
    
</head>
<body>
    <div id="title">
        <a href="main.html">
            <h1 style="padding-top: 13px;">MBTI</h1>
        </a>
    </div>
    <div id="grid_body">
        <div id="grid_li">
            <ul>
                <li><a href="index.php?id=ISTJ">ISTJ</a></li>
                <li><a href="index.php?id=ISFJ">ISFJ</a></li>
                <li><a href="index.php?id=INFJ">INFJ</a></li>
                <li><a href="index.php?id=INTJ">INTJ</a></li>
                <li><a href="index.php?id=ISTP">ISTP</a></li>
                <li><a href="index.php?id=ISFP">ISFP</a></li>
                <li><a href="index.php?id=INFP">INFP</a></li>
                <li><a href="index.php?id=INTP">INTP</a></li>
                <li><a href="index.php?id=ESTP">ESTP</a></li>
                <li><a href="index.php?id=ESFP">ESFP</a></li>
                <li><a href="index.php?id=ENFP">ENFP</a></li>
                <li><a href="index.php?id=ENTP">ENTP</a></li>
                <li><a href="index.php?id=ESTJ">ESTJ</a></li>
                <li><a href="index.php?id=ESFJ">ESFJ</a></li>
                <li><a href="index.php?id=ENFJ">ENFJ</a></li>
                <li><a href="index.php?id=ENTJ">ENTJ</a></li>
            </ul>
        </div>
        <div id="grid_main"> 
            <div id="top">
                <?php
                    echo $_GET['id'];
                ?>
            </div>
            <div id="mid">
                <img src="img/<?php echo $_GET['id'];?>.jpg" alt="" srcset="">
                  <div id="mid_in">
                    <div id="saying">
                        <?php
                            echo file_get_contents("saying/".$_GET['id']);
                        ?>
                    </div>
                    <div>
                        <br>
                    </div>
                    <div id="formula">
                        <?php
                            echo $_GET['id'];
                        ?>
                    </div>
                </div>
            
            </div>
            <div id="bottom">
                <?php
                    echo file_get_contents("bottom/".$_GET['id']);
                ?>
            </div>
        </div>
    </div>

</body>
</html>