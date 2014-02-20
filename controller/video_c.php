<?php
//视频控制器
class Video extends Controller {
function __construct(){
	parent::__construct();
}

public function index(){
	$view_data = array ('title'        => 'JREAM的MVC教学视频',
						'selected_nav' => 3);
	$this->view->insert_modal(array('video'));
	$this->render("video/index", $view_data);
}
}