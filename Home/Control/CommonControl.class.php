<?php
/**
 * == Ortaq ishlitilidighan Control ==
 * Author : Qeyser.Mutellip (DoLanlik)
 * Email  : qeyser@outlook.com
 * Blog   : http:/www.qeyser.biz
 */
class CommonControl extends Control{
	/**
	 * Tizimlik
	 */
	public function menu(){
		$db = M('Category');
		$cate = $db->where(array('pid'=>0))->order('sort')->select();
    	foreach ($cate as $k => $v) {
    		$cate[$k]['child'] = $db->where(array('pid'=>$v['id']))->select();
    	}
    	$this->assign('category', $cate);
	}

	/**
	 * Tima Banner
	 */
	public function banner($blog){
		if(isset($blog['thumb'])){
			return $blog['thumb'];
		}else{
			return __PUBLIC__ . '/images/nobanner.jpg';
		}
	}

}