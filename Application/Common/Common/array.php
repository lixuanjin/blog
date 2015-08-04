<?php 
/***************************
|
| 数组函数	
|
|
***************************/

/**
 *	函数功能
 *  @param 	参数介绍
 * 	@return 返回值
 * 	@author 作者
 */

/**
 * 数组转换为字符串，主要用于把分隔符调整到第二个参数
 * @param  array  $arr  要连接的数组
 * @param  string $glue 分割符
 * @return string
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function arr2str($arr, $glue = ','){
    return implode($glue, $arr);
}

/**
 * 多维数组转为一条拼接的字符串
 * @return array 	$arr 		数组
 * @author string 	$glue 	切割字符
 * @author string   $field  指定键名
 * @author $return 返回类型 默认是字符串 array 是数组 
 */
function arrTostr($arr, $field='',$glue = ',',$return='string'){

	$str = null;
	if( empty( $arr ) ){
		return '';
	}
	foreach ($arr as $key => $value) {
		$str = is_array( $value["{$field}"] ) ? arrTostr( $value["{$field}"], $field, $glue  ) : $value["{$field}"] . $glue . $str;
	}
	$str = rtrim($str, $glue);		//抛出最后一个分割符
	if( $return == 'string' ){
		return $str;
	}else{
		return str2arr($str,$glue);
	}
	
}
?>
