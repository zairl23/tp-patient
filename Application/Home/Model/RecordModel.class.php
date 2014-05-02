<?php namespace Home\Model;
//use Think\Model;
use Think\Model\RelationModel;

class RecordModel extends RelationModel {

	protected $_link = array('Patient' => self::BELONGS_TO);

}