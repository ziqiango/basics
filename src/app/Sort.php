<?php
/**
 * Created by PhpStorm.
 * User: zhuzq
 * Date: 2019/5/9
 * Time: 11:07
 */

namespace app;

class Sort
{

    /**
     * 冒泡排序 升序
     * @param array $arr
     * @return array
     */
    public function bubble($arr)
    {
        /**
         * 1. 比较相邻的元素。如果第一个比第二个大，就交换他们两个。
         * 2. 对每一对相邻元素做同样的工作，从开始第一对到结尾的最后一对。在这一点，最后的元素应该会是最大的数。
         * 3. 针对所有的元素重复以上的步骤，除了最后一个。
         * 4. 持续每次对越来越少的元素重复上面的步骤，直到没有任何一对数字需要比较。
         */
        $length = count($arr);
        for ($i = 0; $i < $length - 1; $i++) {
            // 每次循环会把最大的数放在倒数第 $i + 1 个 )
            for ($j = 0; $j < $length - 1 - $i; $j++) {
                // 判断相连的两个数的大小
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }

}