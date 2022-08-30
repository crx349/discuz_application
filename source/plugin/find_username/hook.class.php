<?php
/**
 *	[找用户名(find_username.{modulename})] (C)2021-2099 Powered by 无限星辰工作室 www.xmspace.net.
 *  Author crx349 <842062626@qq.com> QQ 842062626
 *	Version: V1.0.0
 *	Date: 2021-3-17 14:53
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class plugin_find_username {
	//TODO - Insert your code here


}

class plugin_find_username_member extends plugin_find_username{

    function logging_input(){
        global $_G;
        $pvars = $_G['cache']['plugin']['find_username'];
        if($pvars['on_off']) {
            require DISCUZ_ROOT . './source/plugin/find_username/function/lang.php';
            include template('find_username:login');
            return $return;
        }

    }

}