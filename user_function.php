<?php
/**
 * Created by PhpStorm.
 * User: lxs
 * Date: 2017/5/18
 * Time: 14:48
 */
/**
 * array_column()����֧�ֵ�php�汾��5.5����
 * ��֧��array_column�����Ľ������
 * @author: liuxiaoshuai
 * @date:2017/05/17
 * @param $arr -- ����
 * @param $searchKey -- ɸѡ��key
 * @param null $orderKey -- �����key
 * @return array|bool -- �����������ʧ�ܷ���false
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

    //����
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