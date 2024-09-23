<?php
echo "最小値nを入力してください : ";
$min = fgets(stream: STDIN);
echo "最大値mを入力してください : ";
$max = fgets(stream: STDIN);

$randomNumber = random_int($min , $max);

for($i = 0; $i < 4; $i++){
echo "推測した乱数を入力してください : ";
$predictionNumber = fgets(stream: STDIN);
if($randomNumber == $predictionNumber){
    echo "あたり";
    break;
} else{
    echo "はずれ";
};
}

?>