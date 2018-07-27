<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 12:35 PM
 */

namespace Kibb\Paystack;


class AmountConverter
{

    public static function convert($number){

        $number = preg_replace('/\,/i','', $number);
        $number = preg_replace('/([^0-9\.\-])/i','', $number);
        if (!is_numeric($number)){
            return 0.00;
        }

        $isCents = (bool) preg_match('/^0.\d+$/',$number);
        return ($isCents ? '0': null).number_format($number * 100.,0,'.','');
    }
}