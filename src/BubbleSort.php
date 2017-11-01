<?php

namespace algorithm;

class BubbleSort implements Sort
{
    public function sort($arr)
    {
        for ($i = 0, $len = count($arr); $i < $len; $i++) {
            $moved = 0;
            for ($j = 0; $j < $len - 1 - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $moved++;
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
            if ($moved == 0) break;
        }
        return $arr;
    }
}