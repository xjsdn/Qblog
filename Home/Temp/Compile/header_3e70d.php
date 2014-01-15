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