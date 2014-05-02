<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?php echo ($title); ?></title>
	</head>

	<body>
		
		
		<h1>病人信息管理简易系统--<?php echo ($name); ?></h1>


		
<?php  foreach ($patients as $patient) { $url = U('/Home/Patient/edit/' . $patient['id']); echo "<a href=" . $url . ">" . $patient['name'] . "</a><br />"; } ?>
<p><a href=<?php echo U('Patient/create');?>>新建一个病人</a></p>


	</body>
</html>