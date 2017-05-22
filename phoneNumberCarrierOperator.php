<?php
/**
 * Created by PhpStorm.
 * User: lxs
 * Date: 2017/5/22
 * Time: 13:36
 */

/**
 * 获取手机号码的运营商
 * @author: liuxiaoshuai
 * @date:2017/05/22
 * @param $mobileNumber -- 传入的手机号
 * @return bool|mixed|string -- 没找到返回空，传入空字符串，返回false,找到返回数据
 */
function GetCarrierOperatorOfMobileNumber($mobileNumber)
{

//    $length = 11;
//    $chinaMobileArr = array(134,135,136,137, 138, 139, 147, 150, 151, 152, 157, 158, 159, 178, 182, 183, 184, 187, 188,)
//        $chinaUnicomArr = array(130, 131, 132, 145, 155, 156, 171, 175, 176, 185, 186,)
//        $chinaTelecomArr = array(133, 149, 153, 173, 177, 180, 181, 189,)

    $returnStr = '';
    $CarrierOperatorArr = array(
        '中国移动',
        '中国联通',
        '中国电信',
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