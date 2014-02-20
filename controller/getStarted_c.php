<?php
//入门控制器
class GetStarted extends Controller {
function __construct(){
	parent::__construct();
}

public function index(){
	$view_data = array ('title'        => 'SimpleMVC入门',
						'selected_nav' => 1);
	$this->view->insert_js(array('jquery/jquery.smooth-scroll.min'));
	$this->render("getStarted/index", $view_data);
}
}