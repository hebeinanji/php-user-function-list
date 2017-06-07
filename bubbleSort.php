<?php
/**
 * Created by PhpStorm.
 * User: lxs
 * Date: 2017/6/7
 * Time: 17:31
 */

/**
 * 冒泡排序（面试必答题）也是我们需要理解的基本的算法.支持正负数和0的对比
 * @author: liuxiaoshuai
 * @date:2017/06/07
 * @return array -- 返回从小到大的排序
 */
function bubbleSort()
{
    $a = [-1, 200, 0, 10, 1, 2, 3, 4, 6, 5, 9, 7];

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a) - ($i + 1); $j++) {//子循环不会去比较已经排到最后的元素
            //合理的写法是先定义再使用
            $temp = '';
            if ($a[$j] > $a[$j + 1]) {
                $temp = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $temp;
            }
        }
    }
    return $a;
}