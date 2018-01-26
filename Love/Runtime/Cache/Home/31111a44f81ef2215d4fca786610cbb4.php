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
			<li><a href="/index.php/Home/User/">首页</a></li>
			<li><a href="/index.php/Home/User/tell">我要告白</a></li>
			<li><a href="javascript::" onclick="click_a('mask')">搜索</a></li>
			<li><a href="/index.php/Home/User/about">关于我们</a></li>
			<li><a href="http://love.bengbuxueyuan.com">新版表白墙</a></li>
           
		</ul>
</div>
<form action="/index.php/Home/User/search" method="post" class="sbox" id="mask" style="display:none;">
<input type="text" name="key" class="search">
<input type="submit" class="ssbut" value="搜索">
</form>
		<script language="javascript">
    function delcfm() {
        if (!confirm("确认要删除？")) {
            window.event.returnValue = false;
        }
    }
	</script>
<div class="share">
	<table>
		<thead>
			<tr>
				<th>发起者</th>
				<th>目标者</th>
				<th>内容</th>
				<th>时间</th>
				<th>删除</th>
				<th>标记</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["realname"]); ?></td>
				<td><?php echo ($vo["towho"]); ?></td>
				<td><?php echo ($vo["content"]); ?></td>
				<td><?php echo ($vo["lastdate"]); ?></td>
				<td><a href="/index.php/Home/User/edit/id/<?php echo ($vo["id"]); ?>">修改</a></td>
				<td><a href="/index.php/Home/User/del/id/<?php echo ($vo["id"]); ?>" onclick="delcfm()">删除</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
<?php echo ($data); ?>
</div>
<div class="footer">微表白</div><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261580840'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1261580840%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<script type=text/javascript src=//s.union.360.cn/130557.js></script>
<script type=text/javascript src=//s.union.360.cn/149938.js></script>
</body>
</html>