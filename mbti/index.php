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
    <link rel="stylesheet" href="nf.css" type="text/css">
    
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
                <li><a href="isfj.html">ISFJ</a></li>
                <li><a href="index.php?id=INFJ">INFJ</a></li>
                <li><a href="intj.html">INTJ</a></li>
                <li><a href="istp.html">ISTP</a></li>
                <li><a href="isfp.html">ISFP</a></li>
                <li><a href="index.php?id=INFP">INFP</a></li>
                <li><a href="intp.html">INTP</a></li>
                <li><a href="estp.html">ESTP</a></li>
                <li><a href="esfp.html">ESFP</a> </li>
                <li><a href="enfp.html">ENFP</a> </li>
                <li><a href="entp.html">ENTP</a></li>
                <li><a href="estj.html">ESTJ</a></li>
                <li><a href="esfj.html">ESFJ</a></li>
                <li><a href="enfj.html">ENFJ</a></li>
                <li><a href="entj.html">ENTJ</a></li>
            </ul>
        </div>
        <div id="grid_main"> 
            <div id="top">
                <?php
                    echo $_GET['id'];
                ?>
            </div>
            <div id="mid">
                <img src="<?php echo $_GET['id'];?>.jpg" alt="" srcset="">
                  <div id="mid_in">
                    <div id="saying">
                        당신이 현재하는 사소한 행위는 잔잔한 물결처럼 서서히 퍼져나가 모든 이에게 영향을 줍니다. 당신의 마음가짐이 다른 이의 가슴에 불을 지필 수도, 근심을 초래할 수도
                        있습니다.
                        당신의 숨소리가 사랑의 빛을 뿜어낼 수도, 우울함으로 온 방안을 어둡게 만들 수도 있습니다. 당신의 시선이 즐거움을 선사할 수도 있으며, 당신의 언어가 자유를 향한 열망을
                        독려할
                        수도 있습니다. 당신의 행동 하나하나가 다른 이들의 생각과 마음을 열 수 있습니다.
                    </div>
                    <div>
                        <br>
                    </div>
                    <div id="formula">
                        정의로운 사회운동가
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