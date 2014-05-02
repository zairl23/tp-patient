<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?php echo ($title); ?></title>
	</head>

	<body>
		
		
		<h1>病人信息管理简易系统--<?php echo ($name); ?></h1>


		
	<div class='form'>
		<form method="post" action=<?php echo U('/Home/Record/store/' . $patient_id);?> >
			<p>病人主诉:</p>
<textarea name="complained"  value=<?php echo ($record['complained'] ? $record['complained'] : ""); ?>></textarea>
<p>医生诊断:</p>
<textarea name="diagnosis"  value=<?php echo ($record['diagnosis'] ? $record['diagnosis'] : ""); ?>></textarea>
<p>医疗结果：</p>
<input name="result" type="text" value=<?php echo ($record['result'] ? $record['result'] : ''); ?> >
<p>出院时间：</p>
<input name="ended_at" type="date" value=<?php echo ($record['ended_at'] ? $record['ended_at'] : ''); ?> >
<input name="patient_id" type="hidden" value=<?php echo ($record['patient_id'] ? $record['patient_id'] : ''); ?> >

			<p><input type='submit' value='保存' /></p>
		</form>
	</div>


	</body>
</html>