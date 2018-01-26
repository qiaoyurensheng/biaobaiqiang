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
<div class="pop">
	<div class="block2">
		<div class="avatar2"><img src="/Public/Image/avatar.jpg" alt=""></div>
		<div class="italk2">
		<span class="user">蚌院微表白</span><br/>
		<p><span class="who">@亲爱的小伙伴们</span>快来这里表白吧 ^_^<br/>点击头像可进入评论哦！<br/>（可在<strong>关于我们</strong>中下载app）</p>
   
		
		<script>alert("欢迎来到蚌院表白墙！");</script>
		</div>
	</div>
   
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="block">
		<div class="avatar">
		<a href="/index.php/Home/Index/share/id/<?php echo ($vo["id"]); ?>"><img src="/Public/Image/biaobai.jpg" alt=""></a>
	</div><!--图片修改-->
		<div class="italk">
		<span class="user"><a href="/index.php/Home/Index/share/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["realname"]); ?></a></span><br/>
		<p><span class="who">@<?php echo ($vo["towho"]); ?></span><?php echo ($vo["content"]); ?></p>
		<div class="date"><?php echo ($vo["lastdate"]); ?></div>
	
		</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
	<div class="page"><?php echo ($data); ?></div>
</div>
<div class="footer">蚌院微表白</div>
<script type="text/javascript" src="//s.union.360.cn/149938.js" async defer></script>
</body>
</html>