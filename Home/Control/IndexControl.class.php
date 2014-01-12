<?php
/**
 * Author : Qeyser.Mutellip (DoLanlik)
 * Email  : qeyser@outlook.com
 * Blog   : http:/www.qeyser.biz
 */
class IndexControl extends CommonControl{
	/**
     * Home
     */
    public function index(){
        $field = 'bid,title,content,thumb,time,bid,click,Cate.cid,name,Blog.uid,username';
        $where = array(
            'del'==0
            );
        $count = K('Blog')->where($where)->count();
        $page = new page($count, 5, 5, 2);
        $blog = K('Blog')->where($where)->field($field)->order('time DESC')->select($page->limit());
        $this->assign('blog', $blog);
        $this->assign('banner', $this->banner($blog));
        $this->assign('page', $page->show());
    	$this->menu();
        $this->display();
    }

    /**
     * Izdesh
     */
    public function search(){
        $s = $this->_POST('s');
        $field = 'title,content,time,bid,uid,Cate.cid,name,username';
        $where = array(
            "content like '%$s%'"
            );
        $search = K('Blog')->where($where)->select();
        $this->assign('search', $search);
        $this->menu();
        $this->display();
    }	

}
