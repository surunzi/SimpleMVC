<?php
//留言板模板
class Message extends Controller {
function __construct(){
	parent::__construct();
}

public function index($page = 1){
	$db        = new MessageTable();
	$message   = $db->get_single_page($page);
	$total     = $db->get_num();
	if (count($message) == 0){
		$this->error(1);
	}
	$view_data = array ('title'   => 'SimpleMVC留言板',
						'message' => $message,
						'count'   => floor($total / 10 + 1),
						'current' => $page);
	$this->render("message/index", $view_data);
}

//插入数据
public function post(){
	session_start();
	$captcha = Util::fetch_post('captcha');
	if ($captcha != $_SESSION['captcha']) {
		$this->error(3);
	}
	$author  = Util::fetch_post('author');
	$content = Util::fetch_post('content');
	if($author != null && $content != null) {
		$db = new MessageTable();
		$db->insert($author, $content);
		$this->index();
	} else {
		$this->error(2);
	}
}

//获取验证码
public function captcha() {
	Util::captcha();
}
}