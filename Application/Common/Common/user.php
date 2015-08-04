<?php 
	/***************************
	|
	| 用户处理函数
	|
	***************************/
/**
 * 检测用户是否登录
 * @return integer 0-未登录，大于0-当前登录用户ID
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function is_login(){
    $user = session('user_auth');
    if (empty($user)) {
        return 0;
    } else {
        return session('user_auth_sign') == data_auth_sign($user) ? $user['uid'] : 0;
    }
}
/**
 * 检测当前用户是否为管理员
 * @return boolean true-管理员，false-非管理员
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function is_administrator($uid = null){
    $uid = is_null($uid) ? is_login() : $uid;
    return $uid && (intval($uid) === C('USER_ADMINISTRATOR'));
}
/**
 * 根据用户ID获取用户名
 * @param  integer $uid 用户ID
 * @return string       用户名
 */
function get_username($uid = 0){
    static $list;
    if(!($uid && is_numeric($uid))){ //获取当前登录用户名
        return session('user_auth.username');
    }

    /* 获取缓存数据 */
    if(empty($list)){
        $list = S('sys_active_user_list');
    }

    /* 查找用户信息 */
    $key = "u{$uid}";
    if(isset($list[$key])){ //已缓存，直接使用
        $name = $list[$key];
    } else { //调用接口获取用户信息
        $User = new User\Api\UserApi();
        $info = $User->info($uid);
        if($info && isset($info[1])){
            $name = $list[$key] = $info[1];
            /* 缓存用户 */
            $count = count($list);
            $max   = C('USER_MAX_CACHE');
            while ($count-- > $max) {
                array_shift($list);
            }
            S('sys_active_user_list', $list);
        } else {
            $name = '';
        }
    }
    return $name;
}

/**
 * 根据用户ID获取用户昵称
 * @param  integer $uid 用户ID
 * @return string       用户昵称
 */
function get_nickname($uid = 0){
    static $list;
    if(!($uid && is_numeric($uid))){ //获取当前登录用户名
        return session('user_auth.username');
    }

    /* 获取缓存数据 */
    if(empty($list)){
        $list = S('sys_user_nickname_list');
    }

    /* 查找用户信息 */
    $key = "u{$uid}";
    if(isset($list[$key])){ //已缓存，直接使用
        $name = $list[$key];
    } else { //调用接口获取用户信息
        $info = M('Member')->field('nickname')->find($uid);
        if($info !== false && $info['nickname'] ){
            $nickname = $info['nickname'];
            $name = $list[$key] = $nickname;
            /* 缓存用户 */
            $count = count($list);
            $max   = C('USER_MAX_CACHE');
            while ($count-- > $max) {
                array_shift($list);
            }
            S('sys_user_nickname_list', $list);
        } else {
            $name = '';
        }
    }
    return $name;
}
/**
 * 获取用户头像
 * @param int $uid 用户id
 * @return string
 * @author smh
 */
function getUserAvatar( $uid = USID )
{
    $uid = empty( $uid ) ? 0 : $uid;

	$path = __ROOT__.'/Uploads/Avatar/';

    $fileName = $path . $uid . '.png';

    if( ! file_exists( $_SERVER['DOCUMENT_ROOT'] . '/' .  $fileName ) )
        $fileName = __ROOT__ . '/Public/Home/images/avatar2.png';
	
    return $fileName;
}


/**
 * 写入用户头像
 * @param string $filePath
 * @return array
 */
function putUserAvatar( $filePath )
{
    $path = './Uploads/Avatar/';

    $uid = USID;

    $uid = empty( $uid ) ? 0 : $uid;

    $fileName = $path . $uid . '.png';

    $pic1=base64_decode( $filePath );  

    file_put_contents($fileName,$pic1);
}
/*
function get_website_uid($username = ''){
    static $list;
    $User = new User\Api\UserApi();
    $info = $User->info($username,true);

    if($info){
        $uid = $info['id'];
    }else{
        $uid = 0;   
    }
    return $uid; 
}
*/


/**
 * 根据 个人用户昵称/企业名称 获取uid
 * @return $nickname
 * @return $like 是否使用模糊查询 默认是 true 否则是精确匹配
 * @       $user_type   用户类型    1 个人 2 企业
 * @author 冯炎
 */
function get_webuser_uid( $nickname = '' , $like = true , $user_type = null ){
    if( empty( $nickname ) )
        return false;
    if( $like )
        $map['nickname'] = array('like','%'.$nickname.'%');
    else
        $map['nickname'] = $nickname;

    $userinfo = array();
    $company = array();

    if( $user_type == 1 ){
        $userinfo = M('Userinfo')->where( $map )->field('uid')->select();

    }else if( $user_type == 2 ){

        $company = M('Company')->where( $map )->field('uid')->select();
    }else{

        $userinfo = M('Userinfo')->where( $map )->field('uid')->select();
        $company = M('Company')->where( $map )->field('uid')->select();
    }
    if( empty( $userinfo ) && empty( $company ) ){

        return false;

    }else if( empty($userinfo) && !empty( $company ) ){

        return arrTostr( $company, 'uid' );

    }else if( empty($company) && !empty( $userinfo ) ){

        return arrTostr( $userinfo, 'uid' );

    }else{

        $arr = array_merge( $userinfo , $company );

        return arrTostr( $arr, 'uid' );
    }
}

/**
 * 根据网站用户ID获取用户名
 * @param  integer $uid 用户ID
 * @return string       用户名
 */

function get_website_email( $uid = 0 ){
    static $list;

    // 获取缓存数据 
    if(empty($list)){
        $list = S('web_active_user_list');
    }

    // 查找用户信息 
    $key = "u{$uid}";
    if(isset($list[$key])){     //已缓存，直接使用
        $name = $list[$key];
    } else { //调用接口获取用户信息
        $UserApi = new User\Api\UserApi();
        $info = $UserApi->info($uid);

        if($info && isset($info['email'])){
            $name = $list[$key] = $info['email'];
            // 缓存用户 
            $count = count($list);
            $max   = C('WEBSITE_USER_MAX_CACHE');
            while ($count-- > $max) {
                array_shift($list);
            }
            S('web_active_user_list', $list);
        } else {
            $name = '';
        }
    }
    return $name;
}

/**
 * 根据网站用户ID获取用户名
 * @param  integer $uid 用户ID
 * @return string       用户名
 */
function get_webuser_nickname( $uid ){

    static $list;

    if( empty( $list ) ){
        $list = S('web_user_nickname_list');
    }
    $key = "u".$uid;
    if( isset($list[$key]) ){
        $name = $list[$key];
    } else {
        $UserApi = new User\Api\UserApi();
        $info = $UserApi->information( $uid );

        if( $info && isset($info['nickname']) ){
            $name = $list[$key] = $info['nickname'];
            // 缓存用户
            $count = count($list);
            $max   = C('WEBSITE_USER_MAX_CACHE');
            while ( $count-- > $max ) {
                array_shift($list);     //删除数组中第一个元素
            }
            S('web_user_nickname_list', $list);
        }else{
            $name = '';
        }
    }

    return $name;
}

/**
 * 根据网站用户ID获取用户名
 * @param  integer $uid 用户ID
 * @return string       用户名
 */
function get_webuser_realname( $uid ){

    static $list;

    if( empty( $list ) ){
        $list = S('web_user_realname_list');
    }
    $key = "u".$uid;
    if( isset($list[$key]) ){
        $name = $list[$key];
    } else {
        $UserApi = new User\Api\UserApi();
        $info = $UserApi->information( $uid );

        if( $info && isset($info['realname']) ){
            $name = $list[$key] = $info['realname'];
            // 缓存用户
            $count = count($list);
            $max   = C('WEBSITE_USER_MAX_CACHE');
            while ( $count-- > $max ) {
                array_shift($list);     //删除数组中第一个元素
            }
            S('web_user_realname_list', $list);
        }else{
            $name = '';
        }
    }

    return $name;
}


?>