<?php
    $test = 10;

    function addAnimal() {
    $animals['cat'] = "にゃー";
    $animals['dog'] = "わんわん";
    $animals['pig'] = "ぶーぶー";
    
    // 配列の表示はprint_r
    print_r($animals);
    echo "<br/>";
    // 配列の中の値を一つずつ取り出す
    foreach($animals as $animal) {
      print($animal."<br/>");
    }

    global $test;

    // スカラー変数はprint
    print($test);
 }
 
 addAnimal(); 
?>