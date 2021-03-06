<div class="container">
	<div class="col-md-3">
		<div class="list-group fixed hidden-xs hidden-sm">
			<a class="smooth-scroll list-group-item" href="#preface">什么情况下用SimpleMVC?</a>
			<a class="smooth-scroll list-group-item" href="#environment">运行环境</a>
			<a class="smooth-scroll list-group-item" href="#index">目录结构</a>
			<a class="smooth-scroll list-group-item" href="#setting">初始配置</a>
			<a class="smooth-scroll list-group-item" href="#urlpath">URL路径说明</a>
			<a class="smooth-scroll list-group-item" href="#controller">编写控制器</a>
			<a class="smooth-scroll list-group-item" href="#view">渲染视图</a>
			<a class="smooth-scroll list-group-item" href="#database">数据库操作</a>
			<a class="smooth-scroll list-group-item" href="#compress">页面压缩并上传到服务器</a>
		</div>
	</div>
	<div class="col-md-9">
		<h2 id="preface">什么情况下用SimpleMVC?</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<p>SimpleMVC是一个超轻量级的MVC框架，除了提供基本的代码组织功能外不提供任何库函数。当满足以下的条件时，你可以考虑使用一下SimpleMVC以使你的建站过程更加快捷。</p>
				<ul class="list-group">
					<li class="list-group-item"><span class="code">短时间内上手：</span>SimpleMVC只提供基本的代码组织功能，因此上手也较快，只需要浏览完本页，你就可以开始使用本框架进行你的网站开发了。当然，如果你想更好地理解框架的组织架构，请戳顶部导航栏的视频模块。</li>
					<li class="list-group-item"><span class="code">只想开发功能简单的网站：</span>不想使用ZendPHP或者CakePHP那种功能较为全面的框架，只想要为自己的网站提供基本的代码文件组织功能。</li>
					<li class="list-group-item"><span class="code">使用开发平台为Windows：</span>SimpleMVC的页面压缩功能目前只提供Windows版本，如果想要在Linux等平台上使用，需要将process.bat修改成linux下的命令。</li>
					<li class="list-group-item"><span class="code">对前端性能要求高：</span>页面的加载速度在某些情况下很大程度取决于网络速度，比如手机的GPRS网络。如果你希望自己的网站加载速度较快，那压缩页面就是很有必要的一件事了。什么是页面压缩？右击选择查看源代码就知道了。</li>
					<li class="list-group-item"><span class="code">需要在手机上有较好的体验：</span>本框架一大特色就是自带了页面压缩工具YuiCompressor和htmlcompressor。可以使用YSlow工具对本站进行测试，只要遵循一定的开发规则，基本能够使评分保持在95分以上。本框架还自带了<a href="http://getbootstrap.com/">Bootstrap 3.0</a>，它能够保证页面在任何尺寸的设备上都有较好的浏览效果。</li>
				</ul>
				<div class="callout">如果你对本框架有什么比较好的改进意见，请直接与我联系。邮箱：<a href="mailto:670785827@qq.com">670785827@qq.com</a></div>
			</div>
		</div>
		<h2 id="environment">运行环境</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<p>无特殊要求。但若是启用页面压缩功能则默认平台为Windows，Linux下需要修改process.bat。运行压缩工具需要JRE，没有安装JRE的请戳<a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">此处</a>下载安装。</p>
			</div>
		</div>
		<h2 id="index">目录结构</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<a class="thumbnail tooltip-show" href="<?php e(URL.IMG.'index.png');?>" target="_blank" title="点击看大图">
					<img src="<?php e(URL.IMG.'index.png');?>">
				</a>
				<p>
					<ul class="list-group">
						<li class="list-group-item"><span class="code">config.php：</span>配置文件，定义用到的各种常量，以及进行本地端和服务器端的配置切换</li>
						<li class="list-group-item"><span class="code">config.yaml：</span>SAE配置文件，包括URL重写、页面压缩和设置页面过期时间</li>
						<li class="list-group-item"><span class="code">favicon.ico：</span>网站图标</li>
						<li class="list-group-item"><span class="code">index.php：</span>网站入口，包含必要的配置文件以及进行页面的初始化</li>
						<li class="list-group-item"><span class="code">.htaccess：</span>本地的URL重写设置文件</li>
						<li class="list-group-item">
							<span class="code">controller：</span>控制器目录
							<p>
								<ul class="list-group">
									<li class="list-group-item"><span class="code">template_c.php：</span>控制器模板</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item"><span class="code">doc：</span>文档目录，放置跟网站相关的文档，包括SQL脚本，设计文档，图片处理等文件</li>
						<li class="list-group-item">
							<span class="code">lib：</span>函数库目录
							<p>
								<ul class="list-group">
									<li class="list-group-item"><span class="code">Bootstrap_l.php：</span>页面初始化类</li>
									<li class="list-group-item"><span class="code">Controller_l.php：</span>控制器基类</li>
									<li class="list-group-item"><span class="code">Database_l.php：</span>数据库连接类，继承自PDO类</li>
									<li class="list-group-item"><span class="code">Function_l.php：</span>常用函数库</li>
									<li class="list-group-item"><span class="code">Model_l.php：</span>模型基类</li>
									<li class="list-group-item"><span class="code">SQLUtil_l.php：</span>涉及数据库操作的公共方法类</li>
									<li class="list-group-item"><span class="code">Util_l.php：</span>公共方法类</li>
									<li class="list-group-item"><span class="code">View_l.php：</span>视图类</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item">
							<span class="code">model：</span>数据库模型目录
							<p>
								<ul class="list-group">
									<li class="list-group-item"><span class="code">single：</span>放置单表类</li>
									<li class="list-group-item"><span class="code">template_c：</span>模型模板类</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item">
							<span class="code">public：</span>公共目录
							<p>
								<ul class="list-group">
									<li class="list-group-item"><span class="code">att：</span>附件目录</li>
									<li class="list-group-item"><span class="code">css：</span>CSS目录</li>
									<li class="list-group-item"><span class="code">css_min：</span>压缩后的CSS目录</li>
									<li class="list-group-item"><span class="code">fonts：</span>Bootstrap的图标目录，也可以自己添加字体在此目录中</li>
									<li class="list-group-item"><span class="code">img：</span>图片目录</li>
									<li class="list-group-item"><span class="code">js：</span>JS目录</li>
									<li class="list-group-item"><span class="code">js_min：</span>压缩后的JS目录</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item">
							<span class="code">tool：</span>压缩工具目录
							<p>
								<ul class="list-group">
									<li class="list-group-item"><span class="code">htmlcompressor-1.5.3.jar：</span>HTML压缩工具</li>
									<li class="list-group-item"><span class="code">process.bat：</span>压缩文件的批处理文件</li>
									<li class="list-group-item"><span class="code">regexp.txt：</span>HTML压缩工具的配置文件</li>
									<li class="list-group-item"><span class="code">yuicompressor-2.4.2.jar：</span>CSS/JS压缩工具</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item">
							<span class="code">view：</span>视图目录
							<p>
								<ul class="list-group">
									<li class="list-group-item">
										<span class="code">common：</span>公共视图目录
										<p>
											<ul class="list-group">
												<li class="list-group-item"><span class="code">footer_v.php：</span>页脚</li>
												<li class="list-group-item"><span class="code">header_v.php：</span>页头</li>
											</ul>
										</p>
									</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item"><span class="code">view_min：</span>压缩后的视图目录</li>
					</ul>
				</p>
				<div class="callout">
					<p>如果你觉得目录组织有不太适合你的地方，可以随意对源码进行修改以适应自己的需要。</p>
				</div>
			</div>
		</div>
		<h2 id="setting">初始配置</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<h4>在开始编写网站前，你需要先对几个文件进行修改才能使网站运行正常：</h4>
				<ul class="list-group">
					<li class="list-group-item">
						<p>修改.htaccess文件</p>
						<p><span class="code">RewriteBase /SAE/simplemvc/1/</span></p>
						<p>将<span class="code">/SAE/simplemvc/1/</span>改成你的网站本地目录，即localhost后面的字符串</p>
					</li>
					<li class="list-group-item">
						<p>修改config.php文件</p>
						<p><span class="code">'URL' => 'http://localhost/sae/simplemvc/1/'</span></p>
						<p>将<span class="code">http://localhost/sae/simplemvc/1/</span>改成你的网站本地目录</p>
					</li>
					<li class="list-group-item">
						<p>修改View_l.php文件</p>
						<p><span class="code">$this->css = array ('bootstrap.min');$this->js  = array ('jquery/jquery', 'bootstrap.min');</span></p>
						<p>（可选）修改默认加载CSS/JS文件</p>
					</li>
				</ul>
			</div>
		</div>
		<h2 id="urlpath">URL路径说明</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<pre>域名/控制器/方法/参数1/参数2/参数3/</pre>
				<p>SimpleMVC的URL重写规则如上，默认最大参数为3个，超过这个的可在URL后面加?号并带上参数或者你也可以对Bootstrap_l.php文件进行修改，增加最大支持参数个数。</p>
			</div>
		</div>
		<h2 id="controller">编写控制器</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<p>进入Controller目录，复制template_c.php，将template改成你的控制器名称。</p>
				<p>打开文件，将类名改为你的控制器名。然后你就可以在控制器里任意添加你的方法了。之后只要按照上面版块的路径说明进行访问即可。</p>
				<div class="callout">所有的控制器均需放置在Controller目录下，并且以_c.php为结尾。</div>
			</div>
		</div>
		<h2 id="view">渲染视图</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<p>输出html代码的方法，为<span class="code">$this->render($view, $data)</span>。其中$view是要输出的html文件名，$data是渲染需要的数据，包括从数据库中取出的数据。</p>
				<p>插入CSS方法为<span class="code">$this->view->insert_css($array);</span>插入JS方法为<span class="code">$this->view->insert_js($array);</span></p>
				<p>通常来讲，你的代码看起来会是这个样子：</p>
				<p><span class="code">$view_data = array ('title' => '模板标题');</span></p>
				<p><span class="code">$this->view->insert_css(array('default'));</span></p>
				<p><span class="code">$this->view->insert_js(array('jquery/jquery.smooth-scroll.min'));</span></p>
				<p><span class="code">$this->render("video/index", $view_data);</span></p>
				<p>详细的视图输出请下载本站的完整源程序查看，所有函数均已注释。</p>
				<div class="callout">所有视图文件，即混有PHP代码的HTML文件，均需要放置在View目录下。图片，CSS，JS等文件则需要放置在public目录下的对应文件夹中。此外，所有的视图文件均以_v.php为结尾。</div>
			</div>
		</div>
		<h2 id="database">数据库操作</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<p>假如你的网站涉及到数据库操作，那么请按照以下的步骤建立相应的文件：</p>
				<p>对于每一个表，请在model/single目录下复制templateTable_m.php文件，命名规则为表名+'Table_m.php'。然后打开文件，修改其类名为表名+'Table'。</p>
				<p>之后，就可以建立对该表操作的各类方法以供控制器调用，调用时的代码大概如下：</p>
				<p><span class="code">$db = new MessageTable();</span></p>
				<p><span class="code">$message   = $db->get_single_page($page);</span></p>
				<p>对于每一个控制器，假如数据操作涉及到两个表，请为其建立单独一个model，复制model下的template_m.php，命名为控制器名+'_m.php'，交修改其类名为控制器名+'Model'。</p>
				<p>调用控制器的数据库类形式参考下面代码：</p>
				<p><span class="code">$this->model->get_single_page($page);</span></p>
				<div class="callout">此外，如果有一些涉及到数据库操作的公用方法，比如登录等，可放在lib目录下的SQLUtil静态类里面。</div>
			</div>
		</div>
		<h2 id="compress">页面压缩并上传到服务器</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<p>打开config.php, 将<span class="code">define("LOCAL_FLAG", true);</span>中的true改为false，并将<span class="code">http://simplemvc.sinaapp.com/</span>修改为你的域名。</p>
				<p>用记事本等软件打开tool目录下的process.bat文件，修改需要进行压缩合并的CSS和JS文件，并将其余的CSS, JS分别复制到对应的带_min后缀的目录下。</p>
				<p>之后只需要运行process.bat完成压缩，就可以开始上传文件到服务器端了。</p>
			</div>
		</div>
		<div class="callout">至此，你已经大概了解了所需要了解的东西了。如果还有疑惑的话请认真地查看本站的代码以弄清不懂的地方。如果还是有不明白的地方，请与我联系。邮箱：<a href="mailto:670785827@qq.com">670785827@qq.com</a></div>
	</div>
</div>