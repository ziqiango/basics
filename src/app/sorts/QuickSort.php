<?php
/**
 * Created by PhpStorm.
 * User: zhuzq
 * Date: 2019/5/15
 * Time: 10:49
 */

namespace app\sorts;

class QuickSort extends BaseSort
{

    /**
     * 排序
     * @param array $arr
     * @return array
     */
    public function sort($arr)
    {
        /**
         * 选择一个基准元素，通常选择第一个元素或者最后一个元素。
         * 通过一趟扫描，将待排序列分成两部分，一部分比基准元素小，一部分大于等于基准元素。
         * 此时基准元素在其排好序后的正确位置，然后再用同样的方法递归地排序划分的两部分。
         */
        $count = count($arr);
        if ($count <= 1) {
            return $arr;
        }
        $right = [];
        $left = [];
        // 选择第一个为基准元素
        $middle = [$arr[0]];
        for ($i = 1; $i < $count; $i++) {
            if ($arr[$i] < $arr[0]) {
                $left[] = $arr[$i];
            } else {
                $right[] = $arr[$i];
            }
        }
        // 递归调用
        $leftReal = $this->sort($left);
        $rightReal = $this->sort($right);
        return array_merge($leftReal, $middle, $rightReal);
    }
}