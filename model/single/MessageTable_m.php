<?php
//Message表的操作类
Class MessageTable extends Model {
function __construct(){
	parent::__construct();
}

//获取所有数据
public function get_all() {
	$cmd = "SELECT * FROM message ORDER BY msg_date DESC";
	$sth = $this->db->run($cmd);
	return $sth->fetchAll();
}

//获取数据的条数
public function get_num() {
	$cmd  = "SELECT msg_id FROM message";
	$sth  = $this->db->run($cmd);
	return $sth->rowCount();
}

/*获取单面数据，每页10条
 *page 页码
 */
public function get_single_page($page) {
	$start = ($page - 1) * 10;
	$cmd   = "SELECT * FROM message ORDER BY msg_date DESC LIMIT ".$start.", 10";
	$sth   = $this->db->run($cmd);
	return $sth->fetchAll();
}

/*插入数据
 *msg_author 作者
 *msg_content 内容
 */
public function insert($msg_author, $msg_content) {
	$cmd    = "INSERT INTO message(msg_author, msg_content, msg_date) VALUES(:msg_author, :msg_content, :msg_date)";
	$param  = array (':msg_author'  => Util::simple_purify($msg_author),
					 ':msg_content' => Util::simple_purify($msg_content),
					 ':msg_date'    => Util::get_datetime());
	$this->db->run($cmd, $param);
}
}