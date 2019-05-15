<?php
/**
 * Created by PhpStorm.
 * User: zhuzq
 * Date: 2019/5/9
 * Time: 11:28
 */

namespace Tests;


use app\sorts\BubbleSort;
use app\sorts\InsertionSort;
use app\sorts\QuickSort;
use PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{

    private $testArr = [3, 6, 2, 8, 4, 7, 5, 1];

    //private $testArr = [1,2,3,4,5,6,7,8];

    private function getSortTestArr()
    {
        \sort($this->testArr);
        return $this->testArr;
    }

    public function testBubbleSort()
    {
        $sort = new BubbleSort();
        $res = $sort->sort($this->testArr);
        $this->assertEquals($res, $this->getSortTestArr());
    }

    public function testQuickSort()
    {
        $sort = new QuickSort();
        $res = $sort->sort($this->testArr);
        $this->assertEquals($res, $this->getSortTestArr());
    }

    public function testInsertionSort()
    {
        $sort = new InsertionSort();
        $res = $sort->sort($this->testArr);
        $this->assertEquals($res, $this->getSortTestArr());
    }


}
