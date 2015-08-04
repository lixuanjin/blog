<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use Think\Controller;

/**
 * 前台公共控制器
 * 为防止多分组Controller名称冲突，公共Controller名称统一使用分组名称
 */
class HomeController extends Controller {

	/* 空操作，用于输出404页面 */
	public function _empty(){
		$this->redirect('Index/index');
	}


    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
    }

	/* 用户登录检测 */
	protected function login(){
		/* 用户登录检测 */
		is_login() || $this->error('您还没有登录，请先登录！', U('User/login'));
	}

		/**
	 * 获取列表
	 * @access protected
	 * @param string | object $model 要操作的模型
	 * @param array     	  $where 数据条件	
	 * @param string          $order 排序 
	 * @param string | array  $field 获取的字段
	 * @param int    		  $page  页大小,要是小于等于1的话就是取单条数据
	 * @return array 
	 * @author smh
	 */

	protected function _data( $model = null, $where = array(), $order = null, $field = true, $page = 10 )
	{
		// 获取数据库模型
		if( is_null( $model ) )
			$model = $this->model;
		else if( is_string ( $model ) )
			$model = D( $model );

		// 获取查询表达式
		$options = $this->getOptions( $model );
		
		// 搜索的条件
		
		// $searchData = $this->_search();
				
		// 将条件合并
		$options['where'] = array_merge( $where, (array) $options['where'] );
		
		// 判断是否是取数据列表还是单条数据
		if( 1 < $page ) {
			
			// 获取条数
			$count = $model->where( $options['where'] )->count();
			
			if( 1 > $count ) return array();
			
			$Page = new \Think\Page( $count, C('PAGE_SIZE') );
			$Page->lastSuffix=false;
		    $Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录  每页<b>%LIST_ROW%</b>条  第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
		    $Page->setConfig('prev','上一页');
		    $Page->setConfig('next','下一页');
		    $Page->setConfig('last','末页');
		    $Page->setConfig('first','首页');
			$options['order'] = $order;
			
			$model->setProperty( 'options', $options );
			
			$list = $model->field( $field )->where($where)->limit( $Page->firstRow, $Page->listRows )->select();
			
			$return = array( $list, $Page->show(), $count );
			
			return $return;

		} else {

			$model->setProperty( $options, 'options' );

			return $model->field( $field )->find();
		}
	}


	/**
	 * 获取查询表达式
	 * @param object
	 * @return array
	 * @author smh
	 */
	final protected function getOptions( $model )
	{
		if( ! is_object( $model ) ) return false;

		// 反射当前模型，获取options
		$OPT        =   new \ReflectionProperty( $model, 'options' );

        $OPT->setAccessible(true);

        // 获取表达式
        $options = (array) $OPT->getValue( $model );

        return $options;
	}

}
