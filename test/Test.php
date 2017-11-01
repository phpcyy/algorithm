<?php
require_once("../vendor/autoload.php");

$quickSort = new \algorithm\QuickSort();

$arr = [1, 5, 6, 3, 9, 7, 6];
$sorted = $quickSort->sort($arr);
$sorted = (new \algorithm\BubbleSort())->sort($arr);
echo implode(",", $sorted);
