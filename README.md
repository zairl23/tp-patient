A simple simple patient management system

**很简单的数据常规操作,没有做ui美化，根目录有一个数据库文件可以直接导入mysql数据库**

**环境：**

    PHP-5，5，6
    Apache
    数据库Mysql
    ThinkPHP不支持PHP5.5，数据库连接必须改成pdo,可看配置文档，若在本地环境无法运行，请根据php版本对数据库连接做相应的配置

**Model**

	Patient

		string: name(姓名)
		string: sex（性别）
		string: age（性别）
		string: avatar（头像地址）
		string: birth_place（出生地）
		string: marital_status（婚烟状况）
		string: profession（职业）
		string: phonenumber（联系电话）


	Record

		integer: patient_id（病人id）
		string: complained(病人主诉)
		string: diagnosis（医生诊断）
		string: result（治疗结果）
		timestamp: created_at（入院时间）
		timestamp: ended_at（出院时间）
