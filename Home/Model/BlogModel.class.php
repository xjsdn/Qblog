<?php
/**
 * Author : Qeyser.Mutellip (DoLanlik)
 * Email  : qeyser@outlook.com
 * Blog   : http:/www.qeyser.biz
 */
class BlogModel extends ViewModel{
    public $view = array(
            'cate' => array(
                'type' => INNER_JOIN,
                'field' => 'cid,name',
                'on'    => 'cate.cid=blog.cid'
                ),
            'user' => array(
                'type' => LEFT_JOIN,
                'field' => 'username',
                'on'    => 'user.uid=blog.uid'
                ),
            
            );

}
