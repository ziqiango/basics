<?php
/**
 * Created by PhpStorm.
 * User: zhuzq
 * Date: 2019/5/9
 * Time: 11:28
 */

namespace Tests;


use app\Sort;
use PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{

    public function testEmpty()
    {
        $sort = new Sort();
        $arr = [];
        $this->assertEmpty($sort->bubble($arr));
    }



}
