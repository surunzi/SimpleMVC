<?php
//视图类
class View {
private $css   = null;
private $js    = null;
private $meta  = null;
private $modal = null;


function __construct() {
	//如果是服务器端，则读取合并后的CSS和JS文件
	if (LOCAL_FLAG) {
		$this->css = array ('bootstrap.min', 'default', 'class', 'id');
		$this->js  = array ('jquery/jquery', 'bootstrap.min', 'function', 'effect');
	} else {
		$this->css = array ('simplemvc');
		$this->js  = array ('simplemvc');
	}
	$this->meta    = array ('viewport' => 'width=device-width, initial-scale=1.0');
	$this->modal   = array ('msg');
}

/*插入CSS
 *data 要插入的CSS
 */
public function insert_css($data) {
	$this->css = array_merge($this->css, $data);
}

/*插入数据
 *data 要插入的数据，数组类型
 */
public function insert_data($data){
	foreach ($data as $key => $value) {
		$this->$key = $value;
	}
}

/*插入JS
 *data 要插入的JS
 */
public function insert_js($data) {
	$this->js = array_merge($this->js, $data);
}

/*插入Modal
 *data 要插入的Modal
 */
public function insert_modal($data){
	$this->modal = array_merge($this->modal, $data);
}

/*渲染页面
 *name 页面路径
 *header_footer 是否加载默认页头页脚
 */
public function render($name, $header_footer = true){
	if($header_footer){
		require_once VIEW.'common/header_v.php';
		require_once VIEW.'common/nav_v.php';
	}
	require_once VIEW.$name.'_v.php';
	if($header_footer){
		require_once VIEW.'common/modal_v.php';
		require_once VIEW.'common/footer_v.php';
	}
}
}
