<?php

//用户名、邮箱、手机账号中间字符串以*隐藏
if (!function_exists('hide_special_string')) {
    function hide_special_string($str)
    {
        if (strpos($str, '@')) {
            $email_array = explode("@", $str);
            $prefix = (strlen($email_array[0]) < 4) ? "" : substr($str, 0, 3); //邮箱前缀
            $count = 0;
            $str = preg_replace('/([\d\w+_-]{0,100})@/', '***@', $str, -1, $count);
            $rs = $prefix . $str;
        } else {
            $pattern = '/(1[3458]{1}[0-9])[0-9]{4}([0-9]{4})/i';
            if (preg_match($pattern, $str)) {
                $rs = preg_replace($pattern, '$1****$2', $str); // substr_replace($name,'****',3,4);
            } else {
                $rs = substr($str, 0, 3) . "***" . substr($str, -4);
            }
        }
        return $rs;
    }
}

// 区分邮箱和手机
if (!function_exists('match_email_phone')) {
    function match_email_phone($name)
    {
        preg_match('/^\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}$/', $name, $emailMatch);
        $param = $emailMatch ? 'email' : 'phone';
        return $param;
    }
}

// 乘以10的8次方
if (!function_exists('multiply_hundred_million')) {
    function multiply_hundred_million($value)
    {
        return $value * 1e8;
    }
}

// 除以10的8次方
if (!function_exists('division_hundred_million')) {
    function division_hundred_million($value)
    {
        return number_format($value / 1e8, 8,'.','');
    }
}

if (!function_exists('order_url_build')) {
    function order_url_build($outTradeNo)
    {
        return 'http://' . env('PAY_DOMAIN') . '/order?out_trade_no=' . $outTradeNo . '&t=' . microtime(true);
    }
}


// 人民币转化 乘以10的2次方
if (!function_exists('multiply_hundred')){
    function multiply_hundred($value){
        return $value * 100;
    }
}

// 人民币转化 除以10的2次方
if(!function_exists('division_hundred')){
    function division_hundred($value){
        return number_format($value / 100, 2,'.','');
    }
}
