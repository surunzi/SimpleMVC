<?php
//示例控制器
class Example extends Controller {
function __construct(){
	parent::__construct();
}

public function index(){
	$view_data = array ('title'        => '使用SimpleMVC的网站',
						'selected_nav' => 2);
	$this->render("example/index", $view_data);
}
}