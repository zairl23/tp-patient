<?php namespace Home\Model;
//use Think\Model;
use Think\Model\RelationModel;

class PatientModel extends RelationModel {

	protected $_link = array('Record' => self::HAS_MANY,);
}