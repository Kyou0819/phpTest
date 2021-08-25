1.
<?php
$name = "kyou";
if ($name == "kyou") {
    echo "私は $name です";
}   else {
    echo "$name ではありません";
}
?>
<br><br/>
2. 
<?php
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i; 
}
echo $total; 
?>
<br><br/>
3. 
<?php
$fruits = array("apple", "watermelon", "mango", "jackfruit", "durian");
foreach($fruits as $fruit) {
    echo "好きな果物は" . $fruit;
    echo "\n";
}
?>
<br><br/>
4.
<?php
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
  if ($i % 5 == 0) {
      echo $i; 
  }
}
?>