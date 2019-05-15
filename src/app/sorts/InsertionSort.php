<?php
/**
 * Created by PhpStorm.
 * User: zhuzq
 * Date: 2019/5/15
 * Time: 14:41
 */

namespace app\sorts;

class InsertionSort extends BaseSort
{

    /**
     * 排序
     * @param array $arr
     * @return array
     */
    public function sort($arr)
    {
        /**
         * 如果有一个已经有序的数据序列，要求在这个已经排好的数据序列中插入一个数，但要求插入后此数据序列仍然有序，
         * 这个时候就要用到一种新的排序方法——插入排序法,插入排序的基本操作就是将一个数据插入到已经排好序的有序数据中，
         * 从而得到一个新的、个数加一的有序数据，算法适用于少量数据的排序，时间复杂度为O(n^2)。
         * 是稳定的排序方法。
         * 插入算法把要排序的数组分成两部分：
         * 第一部分包含了这个数组的所有元素，但将最后一个元素除外（让数组多一个空间才有插入的位置），
         * 而第二部分就只包含这一个元素（即待插入元素）。
         * 在第一部分排序完成后，再将这个最后元素插入到已排好序的第一部分中。
         */
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            $value = $arr[$i];
            for ($j = $i - 1; $j >= 0; $j--) {
                // 后移元素
                if ($arr[$j] > $value) {
                    $arr[$j+1] = $arr[$j];
                } else {
                    break;
                }
            }
            //合适位置 放置要插入的元素
            $arr[$j+1] = $value;
        }
        return $arr;
    }
}