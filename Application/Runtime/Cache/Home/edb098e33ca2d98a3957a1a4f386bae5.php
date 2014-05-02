<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?php echo ($title); ?></title>
	</head>

	<body>
		
		
		<h1>病人信息管理简易系统--<?php echo ($name); ?></h1>


		
	<div class='form'>
		<form method="post" action=<?php echo U('Patient/store');?> >
			<p>姓名:</p>
<input name="name" type="text" value=<?php echo ($patient['name'] ? $patient['name'] : ""); ?>>
<p>性别:</p>
<label><input name="sex" type="radio" value=<?php echo ($patient['sex'] == '男' ? 'checked' : ''); ?> >男 </label> 
<label><input name="sex" type="radio" value=<?php echo ($patient['sex'] == '女' ? 'checked' : ''); ?> >女 </label> 
<p>年龄:</p>
<input name="age" type="text" value=<?php echo ($patient['age'] ? $patient['age'] : ''); ?> >
<p>出生地:</p>
<input name="birth_place" type="text" value=<?php echo ($patient['birth_place'] ? $patient['birth_place'] : ''); ?> >
<p>婚烟状态:</p>
<input name="martial_status" type="text" value=<?php echo ($patient['martial_status'] ? $patient['martial_status'] : ''); ?> >
<p>职业:</p>
<input name="profession" type="text" value=<?php echo ($patient['profession'] ? $patient['profession'] : ''); ?> >
<p>电话号码:</p>
<input name="phonenumber" type="text" value=<?php echo ($patient['phonenumber'] ? $patient['phonenumber'] : ''); ?> >

			<p><input type='submit' value='保存' /></p>
		</form>
	</div>


	</body>
</html>