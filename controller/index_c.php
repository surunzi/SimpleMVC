<?php
//默认控制器，即主页面
class Index extends Controller {
function __construct(){
	parent::__construct();
}

public function index(){
	$view_data = array ('selected_nav' => 0);
	$this->render("index/index", $view_data);
}
}