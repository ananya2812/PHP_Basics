<?php
$dataList = array();
$dataJsonList = array(0=>array('apple','mango'),1=>array('grapes','pineapple'));
foreach($dataJsonList as $dataJson){
$dataList[] = func($dataJson);

}
var_dump($dataList);

function func($dataJson){
$data = array();

$data = array_reverse($dataJson);
return $data;
}

