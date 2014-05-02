<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?php echo ($title); ?></title>
	</head>

	<body>
		
		
	<h1>病人信息管理简易系统--<?php echo ($name); ?></h1>


		
	<div class='form'>
		<form method="post" action=<?php echo U('/Home/Patient/update/' . $patient['id']);?>>
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

			<p>
				<input type='submit' value='保存' />
				<a href=<?php echo U('/Home/Patient/index');?>>病人列表</a>
				<a href=<?php echo U('/Home/Patient/delete/' . $patient['id']);?>>删除病人资料</a>
			</p>
		</form>
	</div>
	<div class="list">
	<ul>
		<h3>病历列表</h3>
		<table>
            <tr>
			    <th>ID</th>
			    <th>病人主诉</th>
                <th>医生诊断</th>
                <th>治疗结果</th>
                <th>治疗时间</th>
                <th>编辑病历</th>
            </tr>		    
            <?php foreach ($patient['Record'] as $record) { $url = U('/Home/Record/edit/' . $record['id']); $th = "<tr><th>" . $record['id'] . "</th>"; $th .= "<th>" . $record['complained'] . "</th>"; $th .= "<th>" . $record['diagnosis'] . "</th>"; $th .= "<th>" . $record['result'] . "</th>"; $th .= "<th>" . $record['created_at'] . "~" . $record['ended_at'] . "</th>"; $th .= "<th><a href=" . $url . ">编辑</a></th>"; echo $th; } ?> 
        </table>	
    </ul>
	</div>

	<a href=<?php echo U('/Home/Record/create/' . $patient['id']);?>>新建病历</a>


	</body>
</html>