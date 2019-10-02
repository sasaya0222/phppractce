<?php
echo 'hello php!';
//$a　という変数に3を、$b　という変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう。
$a= 3;
$b= 7;
echo $a+$b;
echo "\n";

//$array_month Sという配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month [7];

//$hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　$world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう。
$hello ="Hello, ";
$name ="sasaya";
$world ="‘s World!";
echo $hello . $name . $world;

echo "\n";

//$tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう。
$tech_boost ="tech";
$tech_boost .=" boost";
echo $tech_boost;

echo "\n";

//どこにバグが有るか調べて修正してみましょう
$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
// 12月を表示する
echo $calendar["December"];

echo "\n";
//$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、もし違ったら「あなたの名前ではありません」と表示するように実装してください。

$name = "sasaya";
if($name == "sasaya"){
  echo "私は あなたの名前です";
}else {
  echo "あなたの名前ではありません";
}

echo "\n";
//for文を使って、1から10000までの合計の値を表示してください。
$total = 0;
echo $total;

for ($i =0; $i <= 10000; $i++) {
   $total += $i;
}
echo $total;

echo "\n";
//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。

$fruits = array("apple", "orange", "lemon", "tomato", "banana");
foreach($fruits as $fruits_name){
  echo $fruits_name;
  echo"\n";
}

echo "\n";

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) 
  echo $i;
} 
echo "\n";

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
  //array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた
  //結果を返す関数を作成してください。

 function kanasu($arr){
 foreach($arr as $ar){
  echo $ar*$ar;
  echo "\n";
} 
}
 $arr = array(1, 3, 5 ,7, 9);

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す 
//max_array という関数を実装しようとしています。
//途中の部分を完成させてください。

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if (max < $arr){
    }
 //どうしたらいいかわからない・・・・
 }
 return $max_number;
 }
 echo max_array();