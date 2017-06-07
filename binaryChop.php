<?php
/**
 * Created by PhpStorm.
 * User: lxs
 * Date: 2017/6/7
 * Time: 19:37
 */

/**
 * ���ֲ��ң����Աر���
 * @author: liuxiaoshuai
 * @date:2017/06/07
 * @param $a -- $a = [-22,-1,0,1,2,5,7,8,10,200,400];
 * @param $x --���ҵ�����
 * @param null $max_index -- ��������
 * @param null $min_index -- ��С������
 * @return float -- ���������±�
 */
function binaryChop($a, $x, $max_index = null, $min_index = null)
{
    $length_a = count($a);
    $min_index = is_null($min_index) ? 0 : $min_index;
    $max_index = is_null($max_index) ? $length_a - 1 : $max_index;
    $middle_index = ceil(($max_index + $min_index) / 2);
    if ($a[$middle_index] > $x) {
        $max_index = $middle_index - 1;//��С���ֵ
    } elseif ($a[$middle_index] < $x) {
        $min_index = $middle_index + 1;//������Сֵ
    } elseif ($a[$middle_index] == $x) {
        return $middle_index;//�ݹ鷵��
    }
    $middle_index = binaryChop($a, $x, $max_index, $min_index);
    return $middle_index;
}