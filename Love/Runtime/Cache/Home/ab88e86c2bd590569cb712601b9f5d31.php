<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑留言</title>
<!-- biaobai.woxihuanni.ren Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?3d4cbbdd9c569f814fbaa7264766d36d";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
	<form action="/index.php/Home/User/doedit" method="post">
	<input type="hidden" name="id" value="<?php echo ($id["id"]); ?>">
	发起者：<input type="text" name="realname" value="<?php echo ($id["realname"]); ?>"><br/>
	接受者：<input type="text" name="towho" value="<?php echo ($id["towho"]); ?>"><br>
	内容：<input type="text" name="content" value="<?php echo ($id["content"]); ?>"><br>
	<input type="submit" value="修改">
	</form>
<script type=text/javascript src=//s.union.360.cn/130557.js></script>
<script type=text/javascript src=//s.union.360.cn/149938.js></script>
</body>
</html>