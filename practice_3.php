<?php
 //.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function w($result) {
    return $result * 2; 
}
echo w(2);
echo "\n";

 // $a と $b を仮引数に持ち
 //$a と $b　を足した結果を返す関数を作成してください。
 function f($a, $b){
 $sum = $a + $b;
 return $sum;
 }
 $result=f(2,2);
 echo $result;
 echo "\n";
 
//3.$arr という配列の仮引数を持ち、数値が入った配列
  //array(2,3,4) を渡すとその要素をすべてかけた
  //結果を返す関数を作成してください。
 function all($arr){
     $result = 1;
 foreach($arr as $b){
      // $result に　$b をかけていく
      $result *= $b;
}
echo $result;
}
 //$arr = array(1, 3);
 //$arr = array(1,2 ,3);
 //$arr = array(2,4,3);
 //$arr = array(1,6,6,3);
 all (array(2,3,4));
  echo "\n";
  
//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す 
//max_array という関数を実装しようとしています。
//途中の部分を完成させてください。

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if ($max_number < $a){
     $max_number = $a;
    }

 }
 return $max_number;
 }
 echo max_array (array(15,100,2,3,4,10,1000));
  echo "\n";
  
   //次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
 
 //strip_tags：HTMLタグを取り除く
 //$変数 = strip_tags(文字列, 許可するタグ);
 $string = `<a href="http://sasaya.com">sasaya</a>`;
$result = strip_tags($string);
echo $result;
  echo "\n";

 //array_push:末尾にデータを追加する
 //array_push($配列, "追加文字列");
//array_push($配列, $追加変数);
$data = array("A", "B", "C");
array_push($data, "D", "E");
print_r($data);
  echo "\n";

 //array_merge:結合する配列に、同じ文字列のキーの配列要素がある場合、前の同じキーの配列要素の値を、後の同じキーの配列要素の値で、上書きする。
 //配列型 array_merge( 配列型 $array1[, 配列型 $...] );
 $array1 = array( 'red', 'blue', 'green' );
$array2 = array( '赤', '青', '緑' );
$varArray = array_merge( $array1, $array2 );
print_r( $varArray );
  echo "\n";
$array1 = array(
    "red" => "レッド",
    "blue" => "ブルー"
);
$array2 = array(
    "blue" => "青",
    "green" => "緑"
);
$varArray = array_merge( $array1, $array2 );
print_r( $varArray );
  echo "\n";
  
 //time, mktime — 日付を Unix のタイムスタンプとして取得する
  //mktime (時, 分, 秒, 月, 日, 年, サマータイム);
 //mktime(0,0,0,1,1,2019);
 
 //date
   date_default_timezone_set('Japan');
  echo '<p>', date('Y/m/d H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
  echo '<p>', date('Y M j H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 A H時i分s秒'), '</p>';
  echo '<p>', date('Y M j l H:i:s'), '</p>';
  echo "\n";

 ?>