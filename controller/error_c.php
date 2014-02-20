<?php
//错误控制器
class Error extends Controller {
//错误列表
private $error = array (0 => '出错啦！',
						1 => '页面不存在',
						2 => '填写参数不完整',
						3 => '验证码错误');

function __construct(){
	parent::__construct();
}

public function index($error_num = 0) {
	$error     = $this->get_error($error_num);
	$view_data = array('error' => $error);
	$this->render('error/index', $view_data);
}

/*根据错误代码返回实际的错误信息
 *error_num 错误代码
 */
private function get_error($error_num) {
	if ($error_num <= count($this->error)) {
		return $this->error[$error_num];
	} else {
		return $this->error[0];
	}
}
}