<?php
//模型基类
class Model {
//PDO数据库
protected $db = null;

function __construct() {
	$this->db = new Database(DB_TYPE, DB_HOST, DB_PORT,
							 DB_NAME, DB_USER, DB_PASS);
}
}