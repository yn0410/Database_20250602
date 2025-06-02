<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school_t";


$pdo=new PDO($dsn, 'root', '');

$sql="select * from students where id<=10"; //為閱讀方便 才用此變數

// $rows=$pdo->query("select * from students where id<=10") //="$rows=$pdo->query($sql)"

// $rows=$pdo->query($sql)->fetch(); //是一個1維陣列 fetch()只能撈一筆資料
// $rows=$pdo->query($sql)->fetchAll(); //是一個二維陣列 有重複資料
// $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_NUM); //是一個二維陣列 index=0,1,2,3...
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); //是一個二維陣列 index=key值=欄位名稱

echo "<pre>";
print_r($rows[1]['name']); //="尹彗如"
echo "</pre>";

echo "<pre>";
print_r($rows);
echo "</pre>";

?>