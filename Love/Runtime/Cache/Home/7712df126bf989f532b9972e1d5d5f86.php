<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
	<title>蚌院微表白-蚌院表白墙</title>
	<!--360站长平台-->
	<meta name="360-site-verification" content="53e73567370f338e5644460602a184ee" />
    <!--360站长平台-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="/Public/Js/all.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="/Public/Css/style.css" />
	
<!-- biaobai.woxihuanni.ren Baidu tongji analytics -->
<!-- biaobai.bengbuxueyuan.com Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?7b0a83457a1e2c2d98dcbc5a2586fe7c";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?3d4cbbdd9c569f814fbaa7264766d36d";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
<meta name="uyan_auth" content="afbbc9efe7" />   <!--uyan.cc代码-->
</head>
<body>
<div class="header">
		<h1>蚌院微表白</h1>
		<h2>表白墙</h2>
		<ul class="nav">
			<li><a href="/index.php/Home/Index/">首页</a></li>
			<li><a href="/index.php/Home/Index/tell">我要告白</a></li>
			<li><a href="javascript::" onclick="click_a('mask')">搜索</a></li>
			<li><a href="/index.php/Home/Index/about">关于我们</a></li>
			<li><a href="http://love.bengbuxueyuan.com">新版表白墙</a></li>
           
		</ul>
</div>
<form action="/index.php/Home/Index/search" method="post" class="sbox" id="mask" style="display:none;">
<input type="text" name="key" class="search">
<input type="submit" class="ssbut" value="搜索">
</form>
<div class="wrap">
			<?php echo ($none); ?>
<div class="pop">
	<div class="block2">
		<div class="avatar2"><img src="/Public/Image/avatar.jpg" alt=""></div>
		<div class="italk2">
		<span class="user">蚌院微表白</span><br/>
		<p><span class="who">@亲们</span>只提供搜索被表白对象哦</p>
		<div class="date">来自于管理员</div>
		</div>
	</div>
	
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="block">
		<div class="avatar">
		<img src="/Public/Image/biaobai.jpg" alt="">
	</div>
		<div class="italk">
		<span class="user"><?php echo ($vo["realname"]); ?></span><br/>
		<p><span class="who">@<?php echo ($vo["towho"]); ?></span><?php echo ($vo["content"]); ?></p>
		<div class="date"><?php echo ($vo["lastdate"]); ?><a href="/index.php/Home/Index/share/id/<?php echo ($vo["id"]); ?>">查看详情</a></div>
		</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
	<div class="page"><?php echo ($data); ?></div>
</div>
<!-- UYAN HOT COMMENT BEGIN -->
<div id="uyan_hotcmt_unit"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2129900"></script> <!-- 如果已经过加载此行JS，即可不用重复加载 -->
<!-- UYAN HOT COMMENT END -->
<div class="footer">微表白</div><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261580840'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1261580840%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<script type=text/javascript src=//s.union.360.cn/130557.js></script>
<script type=text/javascript src=//s.union.360.cn/149938.js></script>
</body>
</html>