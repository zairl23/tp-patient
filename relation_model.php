<?php

/**
 * 
 */
class AssetinfoModel extends RelationModel{  
	
	protected $_validate = array(
		array('has_house','require','是否有房未填写！',1),
		array('has_house_loan','require','是否有房贷未填写！',1),
		array('has_car','require','车产信息未填写！',1)
	);

	protected $_auto = array ( 
		array('finished','1',3),  
	);
	
	protected $_link=array( 
		'user'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'user',
            'foreign_key'=>'uid',
            'mapping_name'=>'user',
			'mapping_fields'=>'username',
			'as_fields'=>'username:username' 
		),
	);
	
	
}

class BorrowingModel extends RelationModel{
	protected $_validate = array(
		array('title','require','标题有误！'),
		array('rates','/^\d{1,}\.{0,1}\d{0,4}$/','年利率有误,必须最大精度是两位小数的数字！'),
		array('manage_rate','/^\d{1,}\.{0,1}\d{0,4}$/','管理费率有误,必须最大精度是两位小数的数字！'),
		array('money','/^\d+(\.\d\d)?(\.\d)?$/','借款金额有误！'),
		array('surplus','/^\d+(\.\d\d)?(\.\d)?$/','剩余金额有误！'),
		array('data','require','资料上传至少一张图！'),
		array('use','require','借款用途有误！'),
		array('deadline','require','借款期限有误！'),
		array('flow_deadline','require','流转期限有误！'),
		array('min_limit','require','最低认购期限有误！'),
		array('candra','require','借款期限有误！'),
		array('way','require','还款方式有误！'),
		array('valid','require','有效时间有误！'),
		array('code','require','密码标有误！',2),
		array('min','require','最低投标金额有误！'),
		array('max','require','最高投标金额有误！'),
		array('privacy','require','公开隐私有误！'),
		array('content','require','详细说明有误！',2),
		array('review_note','require','审核备注有误！',2),
		array('proving','checkCode','验证码错误!',0,'callback',1),
	);

	protected function checkCode($code){
		if(md5($code)!=session('verify')){
			return false;
		}else{
			return true;
		}
	}
	protected $_link=array(
		'user'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'user',
            'foreign_key'=>'uid',
            'mapping_name'=>'user',
			'mapping_fields'=>'username,time',
			'as_fields'=>'username:username,time:join_date',
		),
	);
}

class GuaranteeapplyModel extends RelationModel{
	protected $_validate = array(
		array('title','require','借款标题有误！'),
		array('name','require','企业名称有误！'),
		array('contact','require','联系人有误！'),
		array('cellphone','number','手机号码有误！'),
		array('cellphone','','手机号码已经存在！',0,'unique',1),
		array('money','currency','意向融资金额有误！'),
		array('location','number','所在区域有误！'),
		array('deadline','number','预期融资期限有误！'),
		array('industry','number','所属行业有误！'),
		//array('scope','require','备注说明有误！'),//字段是note
		array('note','require','备注说明有误！'),
		array('proving','require','验证码必须填写！'), 
		array('proving','checkCode','验证码错误!',0,'callback',1),
	);
	
	protected $_auto = array ( 
		array('time','time',1,'function',1), 
	);
	
	protected function checkCode($code){
		if(md5($code)!=session('verify')){
			return false;
		}else{
			return true;
		}
	}
	
	protected $_link=array(
		'user'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'user',
            'foreign_key'=>'uid',
            'mapping_name'=>'user',
			'mapping_fields'=>'username',
			'as_fields'=>'username:username',
		),
		'guarantee'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'guarantee',
            'foreign_key'=>'id',
            'mapping_name'=>'guarantee',
		),
	);
}
// $Guara=$Guaranteeapply->where('id='.$this->_get('id'))->relation(true)->find();
