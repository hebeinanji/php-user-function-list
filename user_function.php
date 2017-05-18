<?php
/**
 * Created by PhpStorm.
 * User: lxs
 * Date: 2017/5/18
 * Time: 14:48
 */
/**
 * array_column()函数支持的php版本是5.5以上
 * 不支持array_column函数的解决方案
 * @author: liuxiaoshuai
 * @date:2017/05/17
 * @param $arr -- 数组
 * @param $searchKey -- 筛选的key
 * @param null $orderKey -- 排序的key
 * @return array|bool -- 返回数组或者失败返回false
 */
function My_array_column($arr, $searchKey, $orderKey = null)
{
    $rst = true;
    if (!is_array($arr)) {
        return false;
    }
    $tempArr = array();
    $orderArr = array();
    $finalArr = array();
    foreach ($arr as $key => $value) {
        if (!is_array($value)) {
            $rst = false;
            break;
        }
        if (!is_null($orderKey)) {
            $tempArr[$value[$orderKey]] = is_null($searchKey) ? $value : $value[$searchKey];
            $orderArr[] = $value[$orderKey];
        } else {
            $tempArr[] = is_null($searchKey) ? $value : $value[$searchKey];
        }

    }

    if (!$rst) {
        return false;
    }

    //排序
    if (!is_null($orderKey)) {
        sort($orderArr);
        foreach ($orderArr as $key => $value) {
            $finalArr[$value] = $tempArr[$value];
        }
        return $finalArr;
    } else {
        return $tempArr;
    }

}