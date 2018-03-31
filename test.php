<?php
/**
 * Created by PhpStorm.
 * User: huqi1
 * Date: 2018/3/15
 * Time: 21:35
 */
$fromIP=array(1,2,3,4);
$t=pack("c4",$fromIP[0],$fromIP[1],$fromIP[2],$fromIP[3]);
$temp=unpack("c4ip",$t);
print_r($temp);
?>