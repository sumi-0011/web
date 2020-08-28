<!DOCTYPE html>
<html>
<body>

<?php
  $winNum = 0;  //총 이깃 횟수

  for($i=0; $i<10; $i++) {
  
    for($j=0; $j<2;$j++) {    //A와 B 값을 각각 계산하기 위해 myTest를 호출
      myTest(rand(10, 1000));   //10 ~ 1000사이의 값 중에 하나를 선택하여 myTest()의 입력 값으로 전달
    }
    
  }

  function myTest($num) {   // A와 B의 값의 홀,짝을 계산하고, 값을 비교
    static $oldNum;
    $newNum;
    global $sameNum;

    if($oldNum == null) {
      $val = $num%2;

      if($val == 0) {
        $oldNum = "even";
      } else {
        $oldNum = "odd";
      }
    }

    else {
      $val2 = $num%2;

      if($val2 == 0) {
        $newNum = "even";
      } else {
        $newNum = "odd";
      }
      echo "A :".$oldNum.", ";
      echo "B :".$newNum;
      echo "<br>";

      if ($oldNum == $newNum) {
        $sameNum = $sameNum+1;
        echo "Win!!!"."<br>";
      }
      $oldNum = null;
    }
  }
    echo "<br>";                         //최종 이깃 횟수 출력
    echo "Wins : ".$sameNum."times";
?>

</body>
</html>
