<?php
//处理时间的函数
 
function getTime($etime){
	$btime=time();

	if ($btime < $etime) {
		$stime = $btime;
		$endtime = $etime;
	}else {
		$stime = $etime;
		$endtime = $btime;
	}
	$timec = $endtime - $stime;
	$days = intval($timec / 86400);
	$rtime = $timec % 86400;
	$hours = intval($rtime / 3600);
	$rtime = $rtime % 3600;
	$mins = intval($rtime / 60);
	$secs = $rtime % 60;
	if($days>=1){
		return $days.' 天前';
	}
	if($hours>=1){
		return $hours.' 小时前';
	}

	if($mins>=1){
		return $mins.' 分钟前';
	}
	if($secs>=1){
		return $secs.' 秒前';
	}
 
}

//纯文本输入
 
function toText($text){
	$order = array('\n', '\r');
	$replace = '\r\n';
	$text= str_replace($order, $replace, htmlspecialchars($text));
	return $text;
}
//文本转HTML
function text2html($txt)
{
	$txt = str_replace("  ","　",$txt);
	$txt = str_replace("<","&lt;",$txt);
	$txt = str_replace(">","&gt;",$txt);
	$txt = preg_replace("/[\r\n]{1,}/isU","<br/>\r\n",$txt);
	return $txt;
}
//css
function css($css){
	$result='';
    foreach($css as $i){
	$result.= "<link rel=stylesheet type=text/css href='/style/css/".$i.".css'>\n";
	}
	return $result;
}
//js
function js($js){
	$result='';
	foreach ($js as $i){
	$result.="<script src='/style/js/".$i.".js'></script>\n";
	}
	return $result;
}
/*取后缀*/
function getExt($file) {
	$ext= strrpos($file, '.') + 1;
	return substr($file, $ext);
}
/*获取两个缩略图*/
function getMiniPic($src){
	return $src.'.min.'.getExt($src);
}

function miniPic($src){
	return $src.'.mini.'.getExt($src);
}
/*url替换*/
function url_replace($target){
	$search=array(',','，','·',' ');
	return str_replace($search,'-', $target);
}











