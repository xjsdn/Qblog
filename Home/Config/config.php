<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
$arr =  array(
    /********************************文本编辑器********************************/
    'EDITOR_TYPE'                   => 2,           //复文本编辑器  1 baidu  2 kindeditor
    'EDITOR_STYLE'                  => 1,           //1 完全模式  2 精简模式
    'EDITOR_MAX_STR'                => 2000,        //编辑器最大字数
    'EDITOR_WIDTH'                  => '100%',      //编辑器高度
    'EDITOR_HEIGHT'                 => 300,         //编辑器高度
    'EDITOR_FILE_SIZE'              => 2000000,     //上传图片文件大小
    /********************************文件上传********************************/
    "UPLOAD_THUMB_ON"               => 0,           //上传图片缩略图处理
    "UPLOAD_EXT_SIZE"               => array("jpg" => 200000, "zip" => 200000,"xls" => 200000,"pdf" => 200000,"ppt" => 200000,
                                    "wps" => 200000, "rar" => 200000, "doc" => 200000), //上传类型与大小
    "UPLOAD_PATH"                   => ROOT_PATH . "/upload/docment/", //上传路径
    "UPLOAD_IMG_DIR"                => "",       //图片上传目录名
    "UPLOAD_IMG_RESIZE_ON"          => 1,           //上传图片缩放处理,超过以下值系统进行缩放
    "UPLOAD_IMG_MAX_WIDTH"          => 1000,     //上传图片宽度超过此值，进行缩放
    "UPLOAD_IMG_MAX_HEIGHT"         => 1000,     //上传图片高度超过此值，进行缩放
);
return array_merge(include "./Conf/webConfig.php", include "./Conf/dbConfig.php", $arr);
?>