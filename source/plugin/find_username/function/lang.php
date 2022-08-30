<?php
if(!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
$dlang = array();
for($i=1;$i<100;$i++){
    $key = 'lang'.sprintf("%02d", $i);
    $dlang[$key] = lang('plugin/find_username', $key);
}
