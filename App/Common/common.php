<?php

function getUserName($mno)
{
    $model = new Model();
    $Name = $model->query("select * from member where man_id='%s'", $mno);

    return $Name[0]['m_name'];
}

//调试用函数，可以随时控制台输出任何变量包括数组，但实测ajax不行 (mzy)
function console_log($data)  
{  
    if (is_array($data) || is_object($data))  
    {  
        echo("<script>console.log('".json_encode($data)."');</script>");  
    }  
    else  
    {  
        echo("<script>console.log('".$data."');</script>");  
    }  
} 
function dp2ds($src){
    $month = substr($src,0,2);
    $day = substr($src,3,2);
    $year = substr($src,6,4);
    $date1 = $year."-".$month."-".$day;
    return $date1;
    
}
function ds2dp($src){
   $year = substr($src,0,4);
   $month = substr($src,5,2);
   $day = substr($src,8,2);
   $date2 =$month."/".$day."/".$year;
   return $date2;
}

function str_rand($length = 32, $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    if(!is_int($length) || $length < 0) {
        return false;
    }

    $string = '';
    for($i = $length; $i > 0; $i--) {
        $string .= $char[mt_rand(0, strlen($char) - 1)];
    }

    return $string;
}

?>
