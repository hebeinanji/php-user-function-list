<?php
/**
 * Created by PhpStorm.
 * User: lxs
 * Date: 2017/5/22
 * Time: 13:36
 */

/**
 * ��ȡ�ֻ��������Ӫ��
 * @author: liuxiaoshuai
 * @date:2017/05/22
 * @param $mobileNumber -- ������ֻ���
 * @return bool|mixed|string -- û�ҵ����ؿգ�������ַ���������false,�ҵ���������
 */
function GetCarrierOperatorOfMobileNumber($mobileNumber)
{

//    $length = 11;
//    $chinaMobileArr = array(134,135,136,137, 138, 139, 147, 150, 151, 152, 157, 158, 159, 178, 182, 183, 184, 187, 188,)
//        $chinaUnicomArr = array(130, 131, 132, 145, 155, 156, 171, 175, 176, 185, 186,)
//        $chinaTelecomArr = array(133, 149, 153, 173, 177, 180, 181, 189,)

    $returnStr = '';
    $CarrierOperatorArr = array(
        '�й��ƶ�',
        '�й���ͨ',
        '�й�����',
    );
    if (is_null($mobileNumber)) {
        return false;
    }

    $subject = $mobileNumber;
    $patternArr = array(
        '/^(13[456789]|14[7]|15[012789]|17[8]|18[23478])[0-9]{8}$/',
        '/^(13[012]|14[5]|15[56]|17[156]|18[56])[0-9]{8}$/',
        '/^(13[3]|14[9]|15[3]17[37]18[019])[0-9]{8}$/',
    );

    $matchTimes = 0;
    for ($i = 0; $i < count($CarrierOperatorArr); $i++) {
        $matchTimes = preg_match($patternArr[$i], $subject);
        if ($matchTimes == 1) {
            $returnStr = $CarrierOperatorArr[$i];
            break;
        }
    }

    return $returnStr;

}