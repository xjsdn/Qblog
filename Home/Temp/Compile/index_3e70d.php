<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="ug">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="ug">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="ug">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Qblog | Bootstrap3 | Mobile | Uyghur</title>
<meta content="Qblog is a Uyghur's Webpage program ." name="description"/>
<meta content="Qblog, Bootstrap3, Uyghur, Open" name="keywords"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel='stylesheet' href='http://localhost/qblog/./Home/Tpl/Public/style.css' type='text/css' media='all' />
<link rel='stylesheet' href='http://localhost/qblog/./Home/Tpl/Public/ui/css/bootstrap.css' type='text/css' media='all' />
<link rel='stylesheet' href='http://localhost/qblog/./Home/Tpl/Public/ui/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='http://localhost/qblog/./Home/Tpl/Public/ui/css/flat/red.css' type='text/css' media='all' />
<script type='text/javascript' src='http://localhost/qblog/./Home/Tpl/Public/ui/js/jquery/jquery.js'></script>
<script type='text/javascript' src='http://localhost/qblog/./Home/Tpl/Public/ui/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='http://localhost/qblog/./Home/Tpl/Public/ui/js/bootstrap.js'></script>
<script type='text/javascript' src='http://localhost/qblog/./Home/Tpl/Public/ui/js/jquery.icheck.js'></script>
<script type='text/javascript' src='http://localhost/qblog/./Home/Tpl/Public/ui/js/blog.js'></script>
<style type="text/css" id="syntaxhighlighteranchor"></style>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements Responsive IE8-->
<!--[if lt IE 9]>
  <script src="http://localhost/qblog/./Home/Tpl/Public/ui/js/modernizr.js"></script>
  <script src="http://localhost/qblog/./Home/Tpl/Public/ui/js/respond.min.js"></script>
<![endif]-->
</head>
<body class="home blog">
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><header id="zan-header" class="navbar navbar-inverse bs-docs-nav">
  <nav class="container"> <a href="http://www.qeyser.biz/qblog">
    <div class="navbar-brand"></div>
    </a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="fa fa-reorder fa-lg"></span> </button>
    <div class="navbar-collapse bs-navbar-collapse collapse">
      <ul id="menu-navbar" class="nav navbar-nav">
        <li id="menu-item-100" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-100"><a title="Qblog Bash bet" href="http://localhost/qblog/index.php"> باش بەت <i class="fa fa-home"></i></a></li>
        <?php $hd["list"]["n"]["total"]=0;if(isset($category) && !empty($category)):$_id_n=0;$_index_n=0;$lastn=min(1000,count($category));
$hd["list"]["n"]["first"]=true;
$hd["list"]["n"]["last"]=false;
$_total_n=ceil($lastn/1);$hd["list"]["n"]["total"]=$_total_n;
$_data_n = array_slice($category,0,$lastn);
if(count($_data_n)==0):echo "";
else:
foreach($_data_n as $key=>$n):
if(($_id_n)%1==0):$_id_n++;else:$_id_n++;continue;endif;
$hd["list"]["n"]["index"]=++$_index_n;
if($_index_n>=$_total_n):$hd["list"]["n"]["last"]=true;endif;?>

        <li id="menu-item-1<?php echo $key;?>" class="dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-1<?php echo $key;?>"><a> <?php echo $n['cname'];?> <i class="fa fa-cog"></i></a>
          <ul class="dropdown-menu">
          <?php $hd["list"]["k"]["total"]=0;if(isset($n['child']) && !empty($n['child'])):$_id_k=0;$_index_k=0;$lastk=min(1000,count($n['child']));
$hd["list"]["k"]["first"]=true;
$hd["list"]["k"]["last"]=false;
$_total_k=ceil($lastk/1);$hd["list"]["k"]["total"]=$_total_k;
$_data_k = array_slice($n['child'],0,$lastk);
if(count($_data_k)==0):echo "";
else:
foreach($_data_k as $key=>$k):
if(($_id_k)%1==0):$_id_k++;else:$_id_k++;continue;endif;
$hd["list"]["k"]["index"]=++$_index_k;
if($_index_k>=$_total_k):$hd["list"]["k"]["last"]=true;endif;?>

              <li id="menu-item-2<?php echo $key;?>" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2<?php echo $key;?>"><a target="_blank" href="#"><?php echo $k['cname'];?></a></li>
          <?php $hd["list"]["n"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
          </ul>
        </li>
      <?php $hd["list"]["k"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
      </ul>
      <div class="search visible-lg">
        <div class="textwidget"></div>
      </div>
      <div class="search visible-lg">
        <form method="post" id="searchform" class="form-inline" action="<?php echo U('Index/search');?>">
          <input class="form-control" type="text" name="s" id="s" placeholder="搜索..." />
          <button type="submit" class="btn btn-danger btn-small" name="submit" ><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
  <div id="if-fixed" class="pull-right visible-lg visible-md"> <i class="fa fa-thumb-tack"></i>
    <input type="checkbox">
  </div>
</header>
<section id="zan-bodyer">
  <div class="container">
    <section class="row">
      <section id="mainstay" class="col-md-8">
        <div id="ie-warning" class="alert alert-danger fade in">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <i class="fa fa-warning"></i> 请注意，Zanblog并不支持低于IE8的浏览器，为了获得最佳效果，请下载最新的浏览器，推荐下载 <a href="http://www.google.cn/intl/zh-CN/chrome/" target="_blank"><i class="fa fa-compass"></i> Chrome</a> </div>
        <div class="well fade in">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          欢迎使用由 <a target="_blank" href="http://www.yeahzan.com/">佚站互联</a> 提供的 <strong>Zanblog主题</strong>，如有问题可以查看问题板块中的内容或者加入Zanblog官方群：223133969 <i class="fa fa-smile-o"></i> </div>
        <!-- 幻灯片-->
        <figure class="slide"> 
          <!-- meta slider -->
          <div style="max-width: 750px;" class="metaslider metaslider-flex metaslider-411 ml-slider">
            <style type="text/css">
        @import url('http://localhost/qblog/./Home/Tpl/Public/ml-slider/metaslider/public.css');
        @import url('http://localhost/qblog/./Home/Tpl/Public/ml-slider/sliders/flexslider/flexslider.css');
    </style>
            <div id="metaslider_container_411">
              <div id="metaslider_411" class="flexslider">
                <ul class="slides">
                  <li style="display: none;"><a href="#" target="_self"><img src="http://localhost/qblog/uploads/2013/10/banner_206.jpg" height="300" width="750" class="slider-411 slide-705" /></a></li>
                  <li style="display: none;"><a href="#" target="_self"><img src="http://localhost/qblog/uploads/2013/09/banner_zanui.jpg" height="300" width="750" class="slider-411 slide-550" /></a></li>
                </ul>
              </div>
            </div>
            <script type="text/javascript">
        var metaslider_411 = function($) {
            $('#metaslider_411').flexslider({ 
                slideshowSpeed:3000,
                animation:"slide",
                controlNav:false,
                directionNav:true,
                pauseOnHover:true,
                direction:"vertical",
                reverse:false,
                animationSpeed:600,
                prevText:"<",
                nextText:">",
                easing:"easeOutExpo",
                slideshow:true,
                useCSS:false
            });
        };
        var timer_metaslider_411 = function() {
            var slider = !window.jQuery ? window.setTimeout(timer_metaslider_411, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_411, 100) : metaslider_411(window.jQuery);
        };
        timer_metaslider_411();
    </script> 
          </div>
          <!--// meta slider-->
        </figure>
        
        <!-- 幻灯片-->
      <?php $hd["list"]["n"]["total"]=0;if(isset($blog) && !empty($blog)):$_id_n=0;$_index_n=0;$lastn=min(1000,count($blog));
$hd["list"]["n"]["first"]=true;
$hd["list"]["n"]["last"]=false;
$_total_n=ceil($lastn/1);$hd["list"]["n"]["total"]=$_total_n;
$_data_n = array_slice($blog,0,$lastn);
if(count($_data_n)==0):echo "";
else:
foreach($_data_n as $key=>$n):
if(($_id_n)%1==0):$_id_n++;else:$_id_n++;continue;endif;
$hd["list"]["n"]["index"]=++$_index_n;
if($_index_n>=$_total_n):$hd["list"]["n"]["last"]=true;endif;?>

        <div class="article container well">
          <div class="data-article hidden-xs"> <span class="month">9月</span> <span class="day">17</span> </div>
          <!-- PC端设备文章属性 -->
          <section class="visible-md visible-lg">
            <div class="title-article">
              <h1><a href="#" title="<?php echo $n['title'];?>"> <?php echo $n['title'];?> </a></h1>
            </div>
            <div class="tag-article container"> <span class="label label-zan"><i class="fa fa-tags"></i> <a href="#" title="<?php echo $n['name'];?>" rel="category tag"><?php echo $n['name'];?></a></span> <span class="label label-zan"><i class="fa fa-user"></i> <a href="#" title="<?php echo $n['username'];?>" rel="author"><?php echo $n['username'];?></a></span> <span class="label label-zan"><i class="fa fa-eye"></i><?php echo $n['click'];?>人</span> </div>
            <div class="content-article">
              <figure class="thumbnail"><a href="#"><img width="730" height="150" src="<?php $_emptyVar =isset($n['thumb'])?$n['thumb']:null?><?php  if( empty($_emptyVar)){?>http://localhost/qblog/./Home/Tpl/Public/images/nobanner.jpg<?php }else{ ?><?php echo $n['thumb'];?><?php }?>" class="wp-post-image" alt="<?php echo $n['title'];?>" title="<?php echo $n['title'];?>" /></a></figure>
              <div class="alert alert-zan"> <?php echo $n['content'];?></div>
            </div>
            <a class="btn btn-danger pull-right read-more" href="#"  title="详细阅读 <?php echo $n['title'];?>">تولۇق مەزمۇنى <span class="badge"><span class="ds-thread-count" data-thread-key="523" data-replace="1">15</span></span></a> </section>
          <!-- PC端设备文章属性 --> 
          <!-- 移动端设备文章属性 -->
          <section class="visible-xs  visible-sm">
            <div class="title-article">
              <h4><a href="#" title="<?php echo $n['title'];?>"> <?php echo $n['title'];?> </a></h4>
            </div>
            <p> <i class="fa fa-calendar"></i> 09-17 <i class="fa fa-eye"></i> <?php echo $n['click'];?>人 </p>
            <div class="content-article">
              <figure class="thumbnail"><a href="#"><img width="730" height="150" src="<?php $_emptyVar =isset($n['thumb'])?$n['thumb']:null?><?php  if( empty($_emptyVar)){?>http://localhost/qblog/./Home/Tpl/Public/images/nobanner.jpg<?php }else{ ?><?php echo $n['thumb'];?><?php }?>" class="wp-post-image" alt="<?php echo $n['title'];?>" title="<?php echo $n['title'];?>" /></a></figure>
              <div class="alert alert-zan"> <?php echo $n['content'];?> </div>
            </div>
            <a class="btn btn-danger pull-right read-more btn-block" href="#"  title="详细阅读 <?php echo $n['title'];?>">تولۇق مەزمۇنى <span class="badge"><span class="ds-thread-count" data-thread-key="523" data-replace="1">15</span></span></a> </section>
          <!-- 移动端设备文章属性 --> 
        </div>
        <?php $hd["list"]["n"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>

      </section>
      <?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><aside id="sidebar"  class="col-md-4">
  <div class="textwidget"></div>
  <!-- 最热文章模块-->
  <div class="panel panel-zan">
    <div class="panel-heading"> <i class="fa fa-fire"></i> 最热文章 <i class="fa fa-times-circle panel-remove"></i> <i class="fa fa-chevron-circle-up panel-toggle"></i> </div>
    <ul class="list-group list-group-flush">
      <!-- 大屏PC端、手机端 -->
      <div class="visible-lg visible-xs">
        <li class="list-group-item"><a href= "http://www.yeahzan.com/zanblog/archives/685.html" rel="bookmark" title="Zanblog 2.0.6 版本更新" >Zanblog 2.0.6 版本更新</a><span class="badge visible-lg">107</li>
        <li class="list-group-item"><a href= "http://www.yeahzan.com/zanblog/archives/618.html" rel="bookmark" title="Zanblog 2.0.5 版本更新" >Zanblog 2.0.5 版本更新</a><span class="badge visible-lg">42</li>
      </div>
      <!-- 小屏PC端 -->
      <div class="visible-md">
        <li class="list-group-item"><a href= "http://www.yeahzan.com/zanblog/archives/685.html" rel="bookmark" title="Zanblog 2.0.6 版本更新" >Zanblog 2.0.6 版本更新</a><span class="badge visible-lg">107</li>
        <li class="list-group-item"><a href= "http://www.yeahzan.com/zanblog/archives/618.html" rel="bookmark" title="Zanblog 2.0.5 版本更新" >Zanblog 2.0.5 版本更新</a><span class="badge visible-lg">42</li>
      </div>
      <!-- 平板端 -->
      <div class="visible-sm ">
        <li class="list-group-item"><a href= "http://www.yeahzan.com/zanblog/archives/685.html" rel="bookmark" title="Zanblog 2.0.6 版本更新" >Zanblog 2.0.6 版本更新</a><span class="badge visible-lg">107</li>
        <li class="list-group-item"><a href= "http://www.yeahzan.com/zanblog/archives/618.html" rel="bookmark" title="Zanblog 2.0.5 版本更新" >Zanblog 2.0.5 版本更新</a><span class="badge visible-lg">42</li>
      </div>
    </ul>
  </div>
  <!-- 最新评论模块 -->
  <div class="visible-md visible-lg">
    <div class="panel panel-zan">
      <div class="panel-heading"> <i class="fa fa-comments"></i> 最新评论 <i class="fa fa-times-circle panel-remove"></i> <i class="fa fa-chevron-circle-up panel-toggle"></i> </div>
      <ul class="list-group list-group-flush">
        <!-- 大屏PC端 -->
        <div class="visible-lg">
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/message#ds-thread" title="on 问题反馈">支持自动识别MP3  播放吗&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo avatar-default' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/457.html#ds-thread" title="on Zanblog 2.0.X 使用说明及插件设置">为什么没有登陆注册。首页上？&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/685.html#ds-thread" title="on Zanblog 2.0.6 版本更新">改了没变啊&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/685.html#ds-thread" title="on Zanblog 2.0.6 版本更新">我加了。。 没人理我 这个问题解决了  ...&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo avatar-default' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/328.html#ds-thread" title="on Zanblog侧边栏与菜单设置说明文档">告诉一个修改代码的方法也行啊&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo avatar-default' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/328.html#ds-thread" title="on Zanblog侧边栏与菜单设置说明文档">最新评论头像不显示，请问怎么设置？&nbsp;</a></span></li>
        </div>
        <!-- 小屏PC端 -->
        <div class="visible-md">
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/message#ds-thread" title="on 问题反馈">支持自动识别MP3  播放吗&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo avatar-default' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/457.html#ds-thread" title="on Zanblog 2.0.X 使用说明及插件设置">为什么没有登陆注册。首页上？&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/685.html#ds-thread" title="on Zanblog 2.0.6 版本更新">改了没变啊&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/685.html#ds-thread" title="on Zanblog 2.0.6 版本更新">我加了。。 没人理我 这个问题...&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo avatar-default' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/328.html#ds-thread" title="on Zanblog侧边栏与菜单设置说明文档">告诉一个修改代码的方法也行啊&nbsp;</a></span></li>
          <li class="list-group-item"><img alt='' src='http://localhost/qblog/./Home/Tpl/Public/ui/images/face.png' class='avatar avatar-40 photo avatar-default' height='40' width='40' /><span class="comment-log"> <a href="http://www.yeahzan.com/zanblog/archives/328.html#ds-thread" title="on Zanblog侧边栏与菜单设置说明文档">最新评论头像不显示，请问怎么设...&nbsp;</a></span></li>
        </div>
      </ul>
    </div>
  </div>
  <!-- 广告模块 -->
  <div class="visible-md visible-lg">
    <div class="panel panel-zan host"> <a href="#" target="_blank"> <img src="http://localhost/qblog/./Home/Tpl/Public/ui/images/Qblog.png" /> </a> </div>
  </div>
   最新文章模块  
   <div class=" visible-md visible-lg">
<div class="panel panel-zan recent">
<div class="panel-heading">
	<i class="fa fa-refresh"></i> 最新文章
	<i class="fa fa-times-circle panel-remove"></i>
	<i class="fa fa-chevron-circle-up panel-toggle"></i>
</div>
<ul class="list-group list-group-flush">
					<li class="list-group-item">
		<a href="http://www.yeahzan.com/zanblog/archives/685.html" rel="bookmark" target="_blank">
			
			<div class="visible-lg">Zanblog 2.0.6 版本更新</div>
			
			<div class="visible-md">Zanblog 2.0.6 版...</div>
		</a>
		<span class="badge">
			107					</span>
	</li>
					<li class="list-group-item">
		<a href="http://www.yeahzan.com/zanblog/archives/618.html" rel="bookmark" target="_blank">
			
			<div class="visible-lg">Zanblog 2.0.5 版本更新</div>
			
			<div class="visible-md">Zanblog 2.0.5 版...</div>
		</a>
		<span class="badge">
			42					</span>
	</li>
					<li class="list-group-item">
		<a href="http://www.yeahzan.com/zanblog/archives/575.html" rel="bookmark" target="_blank">
			
			<div class="visible-lg">Zanblog 2.0.4 版本更新</div>
			
			<div class="visible-md">Zanblog 2.0.4 版...</div>
		</a>
		<span class="badge">
			42					</span>
	</li>
					<li class="list-group-item">
		<a href="http://www.yeahzan.com/zanblog/archives/538.html" rel="bookmark" target="_blank">
			
			<div class="visible-lg">ZanUI发布，提供免费PSD下载！</div>
			
			<div class="visible-md">ZanUI发布，提供免费PSD...</div>
		</a>
		<span class="badge">
			14					</span>
	</li>
					<li class="list-group-item">
		<a href="http://www.yeahzan.com/zanblog/archives/531.html" rel="bookmark" target="_blank">
			
			<div class="visible-lg">Zanblog 2.0.3 版本发布</div>
			
			<div class="visible-md">Zanblog 2.0.3 版...</div>
		</a>
		<span class="badge">
			38					</span>
	</li>
					<li class="list-group-item">
		<a href="http://www.yeahzan.com/zanblog/archives/523.html" rel="bookmark" target="_blank">
			
			<div class="visible-lg">Zanblog 2.0.2 版本更新</div>
			
			<div class="visible-md">Zanblog 2.0.2 版...</div>
		</a>
		<span class="badge">
			15					</span>
	</li>
					<li class="list-group-item">
		<a href="http://www.yeahzan.com/zanblog/archives/510.html" rel="bookmark" target="_blank">
			
			<div class="visible-lg">Zanblog 2.0.1 版本更新</div>
			
			<div class="visible-md">Zanblog 2.0.1 版...</div>
		</a>
		<span class="badge">
			32					</span>
	</li>
					<li class="list-group-item">
		<a href="http://www.yeahzan.com/zanblog/archives/496.html" rel="bookmark" target="_blank">
			
			<div class="visible-lg">Zanblog 2.0 主题官方使用视频</div>
			
			<div class="visible-md">Zanblog 2.0 主题官...</div>
		</a>
		<span class="badge">
			14					</span>
	</li>
				</ul>
</div>
</div>  
  <!-- 随机文章模块 -->
  <div class="visible-md visible-lg">
    <div class="panel panel-zan random">
      <div class="panel-heading"> <i class="fa fa-random"></i> 随机文章 <i class="fa fa-times-circle panel-remove"></i> <i class="fa fa-chevron-circle-up panel-toggle"></i> </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> <a href="http://www.yeahzan.com/zanblog/archives/538.html" rel="bookmark" target="_blank"> 
          <!-- 大屏PC端 -->
          <div class="visible-lg">ZanUI发布，提供免费PSD下载！</div>
          <!-- 小屏PC端 -->
          <div class="visible-md">ZanUI发布，提供免费PSD...</div>
          </a> <span class="badge"> 14 </span> </li>
        <li class="list-group-item"> <a href="http://www.yeahzan.com/zanblog/archives/531.html" rel="bookmark" target="_blank"> 
          <!-- 大屏PC端 -->
          <div class="visible-lg">Zanblog 2.0.3 版本发布</div>
          <!-- 小屏PC端 -->
          <div class="visible-md">Zanblog 2.0.3 版...</div>
          </a> <span class="badge"> 38 </span> </li>
        <li class="list-group-item"> <a href="http://www.yeahzan.com/zanblog/archives/114.html" rel="bookmark" target="_blank"> 
          <!-- 大屏PC端 -->
          <div class="visible-lg">Wordpress主题文件的调用顺序</div>
          <!-- 小屏PC端 -->
          <div class="visible-md">Wordpress主题文件的调...</div>
          </a> <span class="badge"> 2 </span> </li>
        <li class="list-group-item"> <a href="http://www.yeahzan.com/zanblog/archives/496.html" rel="bookmark" target="_blank"> 
          <!-- 大屏PC端 -->
          <div class="visible-lg">Zanblog 2.0 主题官方使用视频</div>
          <!-- 小屏PC端 -->
          <div class="visible-md">Zanblog 2.0 主题官...</div>
          </a> <span class="badge"> 14 </span> </li>
        <li class="list-group-item"> <a href="http://www.yeahzan.com/zanblog/archives/435.html" rel="bookmark" target="_blank"> 
          <!-- 大屏PC端 -->
          <div class="visible-lg">Zanblog 2.0.0 正式发布！</div>
          <!-- 小屏PC端 -->
          <div class="visible-md">Zanblog 2.0.0 正...</div>
          </a> <span class="badge"> 34 </span> </li>
        <li class="list-group-item"> <a href="http://www.yeahzan.com/zanblog/archives/365.html" rel="bookmark" target="_blank"> 
          <!-- 大屏PC端 -->
          <div class="visible-lg">Zanblog V1.0.3改动说明文档</div>
          <!-- 小屏PC端 -->
          <div class="visible-md">Zanblog V1.0.3改...</div>
          </a> <span class="badge"> 27 </span> </li>
        <li class="list-group-item"> <a href="http://www.yeahzan.com/zanblog/archives/328.html" rel="bookmark" target="_blank"> 
          <!-- 大屏PC端 -->
          <div class="visible-lg">Zanblog侧边栏与菜单设置说明文档</div>
          <!-- 小屏PC端 -->
          <div class="visible-md">Zanblog侧边栏与菜单设置...</div>
          </a> <span class="badge"> 92 </span> </li>
        <li class="list-group-item"> <a href="http://www.yeahzan.com/zanblog/archives/125.html" rel="bookmark" target="_blank"> 
          <!-- 大屏PC端 -->
          <div class="visible-lg">非插件实现Wordpress分页功能</div>
          <!-- 小屏PC端 -->
          <div class="visible-md">非插件实现Wordpress分...</div>
          </a> <span class="badge"> 8 </span> </li>
      </ul>
    </div>
  </div>
  <!-- 分类目录、热门标签、友情链接模块-->
  <div class="panel hidden-xs">
    <ul class="nav nav-pills pills-zan">
      <li class="active"><a href="#sidebar-categories" data-toggle="tab">分类目录</a></li>
      <li><a href="#sidebar-tags" data-toggle="tab">热门标签</a></li>
      <li><a href="#sidebar-links" data-toggle="tab">友情链接</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active nav bs-sidenav fade in" id="sidebar-categories">
        <li class="cat-item cat-item-21"><a href="http://www.yeahzan.com/zanblog/archives/category/bootstrap" title="查看Bootstrap3下的所有文章">Bootstrap3</a> </li>
        <li class="cat-item cat-item-17"><a href="http://www.yeahzan.com/zanblog/archives/category/wordpress" title="查看WordPress下的所有文章">WordPress</a> </li>
        <li class="cat-item cat-item-29"><a href="http://www.yeahzan.com/zanblog/archives/category/zanblog" title="查看Zanblog下的所有文章">Zanblog</a> </li>
      </div>
      <div class="tab-pane fade" id="sidebar-tags"><a href='http://www.yeahzan.com/zanblog/archives/tag/bootstrap' class='tag-link-21' title='2个话题' style="color:#aba35a;font-size: 11.096774193548pt;;">Bootstrap3</a> <a href='http://www.yeahzan.com/zanblog/archives/tag/wordpress%e4%b8%bb%e9%a2%98' class='tag-link-22' title='4个话题' style="color:#287094;font-size: 14.881720430108pt;;">WordPress</a> <a href='http://www.yeahzan.com/zanblog/archives/tag/zanblog' class='tag-link-29' title='16个话题' style="color:#93a70b;font-size: 24pt;;">Zanblog</a> <a href='http://www.yeahzan.com/zanblog/archives/tag/zanui' class='tag-link-32' title='1个话题' style="color:#6e4b0f;font-size: 8pt;;">ZanUI</a></div>
      <div class="tab-pane nav bs-sidenav fade" id="sidebar-links">
        <li><a href="http://www.bootcss.com/" title="BootStrap中文网">Bootstrap中文网</a></li>
        <li><a href="http://www.yeahzan.com/" title="杭州网站建设" target="_blank">佚站互联</a></li>
        <li><a href="http://www.yeahzan.com/" title="杭州网站建设">杭州网站建设</a></li>
      </div>
    </div>
  </div>
  <!-- 文章存档模块	 -->
  <div class="panel visible-md visible-lg archive"> <a href="http://www.yeahzan.com/zanblog/archive">
    <div class="panel-heading"> <i class="fa fa-folder-open"></i> <span>文章存档</span> </div>
    </a> </div>
</aside>
      <div class="col-md-8 pagination pagination-lg">
          <?php echo $page;?>
      </div>
    </section>
  </div>
</section>
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><footer id="zan-footer"> Copyright © 2013 <a target="_blank" title="杭州网站建设" href="http://www.yeahzan.com/">佚站互联</a> YEAHZAN.COM - 用心创造每一站, <a target="_blank" title="杭州网站建设" href="http://www.yeahzan.com/">杭州网站建设</a>. All Rights Reserved. 
</footer>
<div style="display: none;" class="fa fa-angle-up" id="gotop"></div>
<script type='text/javascript'>
	backTop=function (btnId){
		var btn=document.getElementById(btnId);
		var d=document.documentElement;
		var b=document.body;
		window.onscroll=set;
		btn.onclick=function (){
			btn.style.display="none";
			window.onscroll=null;
			this.timer=setInterval(function(){
				d.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
				b.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
				if((d.scrollTop+b.scrollTop)==0) clearInterval(btn.timer,window.onscroll=set);
			},10);
		};
		function set(){btn.style.display=(d.scrollTop+b.scrollTop>100)?'block':"none"}
	};
	backTop('gotop');
</script> 
<script type='text/javascript' src='http://localhost/qblog/./Home/Tpl/Public/ml-slider/sliders/flexslider/jquery.flexslider-min.js'></script> 
<script type='text/javascript' src='http://localhost/qblog/./Home/Tpl/Public/ml-slider/easing/jQuery.easing.min.js'></script>
</body>
</html>