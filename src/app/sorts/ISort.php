<?php
/**
 * Created by PhpStorm.
 * User: zhuzq
 * Date: 2019/5/15
 * Time: 10:44
 */

namespace app\sorts;

interface ISort
{
    /**
     * 排序
     * @param array $arr
     * @return array
     */
    public function sort($arr);
}