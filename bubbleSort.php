<?php
/**
 * Created by PhpStorm.
 * User: lxs
 * Date: 2017/6/7
 * Time: 17:31
 */

/**
 * ð���������Աش��⣩Ҳ��������Ҫ���Ļ������㷨.֧����������0�ĶԱ�
 * @author: liuxiaoshuai
 * @date:2017/06/07
 * @return array -- ���ش�С���������
 */
function bubbleSort()
{
    $a = [-1, 200, 0, 10, 1, 2, 3, 4, 6, 5, 9, 7];

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a) - ($i + 1); $j++) {//��ѭ������ȥ�Ƚ��Ѿ��ŵ�����Ԫ��
            //�����д�����ȶ�����ʹ��
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