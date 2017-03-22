<?php
$auth_key = 'nodemedia2017privatekey';
$server = 'rtmp://localhost/';
$app = 'live';
$name = 'stream123';
$ts = time()+60; //1分钟后失效 
$data = '/'.$app.'/'.$name.'-'.$ts.'-'.$auth_key;
// echo $data."\n";
$md5 = md5($data, false);
echo $server.$app.'/'.$name.'?sign='.$ts.'-'.$md5."\n";
?>