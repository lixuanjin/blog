<?php 
/***************************
|
| 正则函数	
|
|
***************************/

/**
 *	函数功能
 *  @param 	参数介绍
 * 	@return 返回值
 * 	@author 作者  zpm
 */		

 /**
 * 验证正则
 * @param $str 	待验证的字符串
 * @param $exp 	正则表达式	 	
 */
function checkReg( $str , $exp ){
	if( $str == '' || $str == null )
		return false;
	if( preg_match( $exp,$str ) ){
		return true;
	}else{
		return false;
	}
}
	
/**
 *	验证电话号码
 *  @param 	$str
 * 	@return true 或 false
 * 	@author fengyan
 */			
function checkMobile( $str ){
	$exp = '/^(1)[0-9]{10}$/';
	return checkReg( $str , $exp );
}
		/*
			手机号码验证
		*/
		function regularMobile($mobilephone){
			$exp = "/^13[0-9]{1}[0-9]{8}$|15[012356789]{1}[0-9]{8}$|18[012356789]{1}[0-9]{8}$|14[57]{1}[0-9]$/";
			if(preg_match($exp,$mobilephone)){
				return true;
			}else{
				return false;
			}
		}
		/*
			邮箱格式验证
		*/
		function regularEmail($email, $test_mx = false){
		    if(eregi("^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
		        if($test_mx)
		        {
		            list($username, $domain) = split("@", $email);
		            return getmxrr($domain, $mxrecords);
		        }
		        else
		            return true;
		    else
		        return false;
		}

		/*
			身份证格式验证
		*/
		function validation_filter_id_card($id_card){
			/* 
			if(strlen($id_card) == 18){ 
				return idcard_checksum18($id_card); 
			}elseif((strlen($id_card) == 15)) { 
				$id_card = idcard_15to18($id_card); 
				return idcard_checksum18($id_card); 
			}else{ 
				return false; 
			} 
			*/
			$exp = '/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X|x)$/';
			if(preg_match($exp,$id_card)){
				return true;
			}else{
				return false;
			}

		} 
			/*
				计算身份证校验码，根据国家标准GB 11643-1999 
			*/ 
		function idcard_verify_number($idcard_base) { 
			if(strlen($idcard_base) != 17) { 
				return false; 
			} 
			//加权因子 
				$factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); 
				//校验码对应值 
				$verify_number_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); 
				$checksum = 0; 
			for ($i = 0; $i < strlen($idcard_base); $i++) { 
				$checksum += substr($idcard_base, $i, 1) * $factor[$i]; 
			} 
				$mod = $checksum % 11; 
				$verify_number = $verify_number_list[$mod]; 
				return $verify_number; 
		} 
		// 将15位身份证升级到18位 
		function idcard_15to18($idcard){ 
			if (strlen($idcard) != 15){ 
				return false; 
			}else{ 
		// 如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码 
				if (array_search(substr($idcard, 12, 3), array('996', '997', '998', '999')) !== false){ 
					$idcard = substr($idcard, 0, 6) . '18'. substr($idcard, 6, 9); 
				}else{ 
					$idcard = substr($idcard, 0, 6) . '19'. substr($idcard, 6, 9); 
				} 
			} 
			$idcard = $idcard . idcard_verify_number($idcard); 
			return $idcard; 
		} 
		// 18位身份证校验码有效性检查 
		function idcard_checksum18($idcard){ 
			if (strlen($idcard) != 18){ 
				return false; 
			} 
			$idcard_base = substr($idcard, 0, 17); 
			if (idcard_verify_number($idcard_base) != strtoupper(substr($idcard, 17, 1))){ 
				return false; 
			}else{ 
				return true; 
			} 
		} 
?>