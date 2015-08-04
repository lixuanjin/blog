<?php 
/***************************
|
| 数据库表相关函数
|
***************************/


/**
 * 获取图片地址
 * @param int $id
 * @return string
 */
function getPicture( $id ) {

	$model = M('Picture');

	$avatar = $model->getFieldById($id,'path');

	if( empty( $avatar ) )
		return __ROOT__ . '/Public/Home/images/default.png';
	else
		return __ROOT__ . $avatar;
}

/**
 * 获取文档封面图片
 * @param int $cover_id
 * @param string $field
 * @return 完整的数据  或者  指定的$field字段值
 * @author huajie <banhuajie@163.com>
 */
function get_cover($cover_id, $field = null){

    $picture = M('Picture')->where(array('status'=>1))->getById($cover_id);

    if( empty( $field ) ){
        return $picture;
    }else{
       if( empty( $picture ) )
            return __ROOT__ . '/Public/Home/images/default.png';
        else
            return __ROOT__ . $picture[$field]; 
    }
}

/**
 * 消息发送函数
 * @param string $con 消息内容
 * @param int $to_uid 接收uid
 * @param string $title 消息标题
 * @param int $from_uid 发送uid
 * @param int $is_system 是否系统消息 1 是系统发送给用户的消息  0 是用户之间的消息 2 是用户发给管理员的消息		
 * @return status
 */
function set_message($con, $to_uid, $title='系统消息(The system message)', $is_system=0,$from_uid=0){
	
	if(empty($con) || $to_uid < 0  || !is_numeric($to_uid)){

		return false;
	}
	if( $to_uid == $from_uid ){
		return false;
	}
	$model = M('Message');

	$data['title'] =  $title;
	$data['contents'] =  $con;
	$data['is_read'] =  0;
	$data['is_system'] =  $is_system;	//是否系统消息
	$data['to_uid'] =  $to_uid;
	$data['from_uid'] =  $from_uid;
	$data['create_time'] =  time();
	$data['read_time'] = 0;
	$re = $model->add($data);
	return $re;
}

/**
 * 获取指定model 获取值
 * @param string|object $model 
 * @param array|array $map 条件 	
 * @param string $field 指定字段 
 * @param string|array $returnType 字符串 表示返回一个值 array 表示返回一个一维数组
 */
function getByFields( $model = null, $map = array(), $field = '*',$returnType = 'string' ){
	if( is_string($model) ){
		$model = D( $model );
	}
	if( empty( $model ) || empty($map) || empty($field) ){
		return false;
	}
	$info = $model->where( $map )->field( $field )->find();

	if( $returnType == 'string'){
		$n = 0;
		foreach ($info as $key => $value) {
			if($n > 0){
				$vo .= ','.$value;
			}else{
				$vo = $value;
			}
			$n++;
		}
	}else{
		$vo = $info;
	}
	return $vo;
}


/*=========* table:items 表相关操作 *=========*/

/**
 * 获取item，包括子类
 * TODO: 未做3层，只能获取2层
 * @param string $key
 * @return array
 * @author smh
 */
function getItems( $key = null )
{
	if( empty( $key ) ) return false;

	// 获取缓存中的数据
	$items = F( $key . '_item');

	// 没有缓存，则去查询，并且设置缓存
	if( empty( $items ) )
	{
		// 查询
		$items = D('Admin/Items')->getList( $key );
		
		// 设置缓存
		F( $key . '_item' );
	}
	
	return $items;
}



function getTitleByValue( $key, $value )
{
	if( empty( $key ) ) return $key;

	$items = getItems( $key );
	
	foreach( $items['_child'] as $item )
	{
	
		if( $item['value'] == $value )
			return $item['title'];
	}
	
	return $value;
}

/**
 * 获取导航
 * @param string $key
 * @return array
 * @author lxj
 */
function getMenuList()
{	F('menu_list',null);
	$menu_list = F('menu_list');
	if( empty($menu_list) )
	{
		$menu_list = M('channel')->where( array('status'=>1) )->field('id,title,url')->order('sort asc')->select();
		F( 'menu_list', $menu_list );
	}
	return $menu_list;
}