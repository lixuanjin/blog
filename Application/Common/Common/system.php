<?php 
/***************************
|
| 系统函数
|
***************************/


/**
 *	函数功能
 *  @param 	参数介绍
 * 	@return 返回值
 * 	@author 作者
 */

/**
 * 发送邮件
 * @param $toemail 收件人email
 * @param $subject 邮件主题
 * @param $message 正文
 * @param $from 发件人
 */


function sendmail($toemail, $subject, $message, $from='尊敬的客户',$tsHtml=false) 
{
    require_once("./PHPMailer/class.phpmailer.php"); //下载的文件必须放在该文件所在目录

    $mail = new PHPMailer(); //建立邮件发送类
    $mail->IsSMTP(); // 使用SMTP方式发送
    if( $tsHtml ) {
        $mail->IsHTML();
    }
    $mail->Host = C('MAIL_HOST'); // 您的企业邮局域名
    $mail->SMTPAuth = true; // 启用SMTP验证功能
    $mail->SMTPSecure = "ssl";
    $mail->Username = C('MAIL_USER'); // 邮局用户名(请填写完整的email地址)
    $mail->Password = C('MAIL_PASS'); // 邮局密码
    $mail->Port=C('MAIL_PORT');

    $mail->From = C('MAIL_USER'); //邮件发送者email地址
    $mail->CharSet = "utf-8";
    $mail->Encoding = "base64";
    $mail->FromName = C('MAIL_NAME');
    $mail->AddAddress($toemail, $from);//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
    $mail->Subject = $subject; //邮件标题
    $mail->Body = $message; //邮件内容
    if(!$mail->Send()){
        $map['status'] = 0;
        $map['errorInfo'] = "邮件发送失败."."错误原因: " . $mail->ErrorInfo;
        //return $map;
        return false;
        exit();
    }
    unset($mail);
    return true;
}


/**
 * 输出打印
 * @param array $array 输出数据
 * @param bool  $exit  是否终止，默认终止
 * @return void
 * @author smh
 */
function dd( $array, $exit = true)
{
	dump($array);

	$exit && exit();
}



/********************这段原生方法需重写*******************************************/







/*此方法为公共方法用来删除某个文件夹下的所有文件
 * $path为文件的路径
 * $fileName文件夹名称
 * */
function rmFile($path,$fileName){
    //去除空格
    $path = preg_replace('/(\/){2,}|{\\\}{1,}/','/',$path);    
    //得到完整目录    
    $path.= $fileName;
    //判断此文件是否为一个文件目录
    if(is_dir($path)){
        //打开文件
        if ($dh = opendir($path)){
            //遍历文件目录名称
           while (($file = readdir($dh)) != false){
               //逐一进行删除
               unlink($path.'\\'.$file);
            }
               //关闭文件
            closedir($dh);
        }    
    }
}



/**
 * 根据当前时间戳 返回 当前是星期几
 */
function getWeeks( $time = NOW_TIME ){
    if( is_string($time) ){
        $time = strtotime( $time );
    }
    $week = date('W',$time);
    switch ($week) {
        case '1':
            $weeks = '星期一';
            break;
        case '2':
            $weeks = '星期二';
            break;
        case '3':
            $weeks = '星期三';
            break;
        case '4':
            $weeks = '星期四';
            break;
        case '5':
            $weeks = '星期五';
            break;
        case '6':
            $weeks = '星期六';
            break;
        default:
            $weeks = '星期日';
            break;
    }
    return $weeks;
}
/**
 * CURL模拟POST提交
 * @param String $url url地址
 * @param Array $data 数据array(key=>value)
 * @param bool/String 返回false为服务器为开启curl支持，否则返回访问结果
 * @author 范思宇
 */
function curl_post($url, $data=array()) {  

    $result = '';
    
    if(function_exists('curl_init'))
    {
        $param = '';
        $and = "";
        foreach ($data as $k=>$v)  
        {  
            $param.= $and."$k=".urlencode($v);  

            $and = "&";
        }  

        $options = array(  

            CURLOPT_RETURNTRANSFER => true,  
            CURLOPT_HEADER         => false,  
            CURLOPT_POST           => true,  
            CURLOPT_POSTFIELDS     => $param,  
        
        );  

        $ch = curl_init($url);  
        curl_setopt_array($ch, $options);  
        $result = curl_exec($ch);  
        
        curl_close($ch);  

    }else{

         $result = false;
    }

    return  $result;
    
}
/**
 * 系统加密方法
 * @param string $data 要加密的字符串
 * @param string $key  加密密钥
 * @param int $expire  过期时间 单位 秒
 * @return string
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function think_encrypt($data, $key = '', $expire = 0) {
    $key  = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
    $data = base64_encode($data);
    $x    = 0;
    $len  = strlen($data);
    $l    = strlen($key);
    $char = '';

    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) $x = 0;
        $char .= substr($key, $x, 1);
        $x++;
    }

    $str = sprintf('%010d', $expire ? $expire + time():0);

    for ($i = 0; $i < $len; $i++) {
        $str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1)))%256);
    }
    return str_replace(array('+','/','='),array('-','_',''),base64_encode($str));
}

/**
 * 系统解密方法
 * @param  string $data 要解密的字符串 （必须是think_encrypt方法加密的字符串）
 * @param  string $key  加密密钥
 * @return string
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function think_decrypt($data, $key = ''){
    $key    = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
    $data   = str_replace(array('-','_'),array('+','/'),$data);
    $mod4   = strlen($data) % 4;
    if ($mod4) {
       $data .= substr('====', $mod4);
    }
    $data   = base64_decode($data);
    $expire = substr($data,0,10);
    $data   = substr($data,10);

    if($expire > 0 && $expire < time()) {
        return '';
    }
    $x      = 0;
    $len    = strlen($data);
    $l      = strlen($key);
    $char   = $str = '';

    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) $x = 0;
        $char .= substr($key, $x, 1);
        $x++;
    }

    for ($i = 0; $i < $len; $i++) {
        if (ord(substr($data, $i, 1))<ord(substr($char, $i, 1))) {
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        }else{
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return base64_decode($str);
}