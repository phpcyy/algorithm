<?php

namespace algorithm;
class QuickSort implements Sort
{
    /**
     * @param $arr array
     * @return array
     */
    public function sort($arr)
    {
        if (count($arr) <= 1) {
            return $arr;
        }
        $compare = $arr[0];
        $left = $right = [];
        for ($i = 1, $len = count($arr); $i < $len; $i++) {
            $arr[$i] < $compare ? $left[] = $arr[$i] : $right[] = $arr[$i];
        }
        return array_merge($this->sort($left), [$compare], $this->sort($right));
    }
}