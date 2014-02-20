<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php e(URL.'index');?>">SimpleMVC</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if (isset($this->selected_nav) && $this->selected_nav == 0) e('class="active"');?>>
					<a href="<?php e(URL.'index');?>">主页</a>
				</li>
				<li <?php if (isset($this->selected_nav) && $this->selected_nav == 1) e('class="active"');?>>
					<a href="<?php e(URL.'getStarted');?>">入门</a>
				</li>
				<li <?php if (isset($this->selected_nav) && $this->selected_nav == 2) e('class="active"');?>>
					<a href="<?php e(URL.'example');?>">示例</a>
				</li>
				<li <?php if (isset($this->selected_nav) && $this->selected_nav == 3) e('class="active"');?>>
					<a href="<?php e(URL.'video');?>">视频</a>
				</li>
				<li <?php if (isset($this->selected_nav) && $this->selected_nav == 4) e('class="active"');?>>
					<a href="#msgModal" data-toggle="modal">留言</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="" data-toggle="dropdown">友链<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="http://paperkiller.sinaapp.com">PaperKiller</a>
						</li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="http://surunzi.sinaapp.com">作者</a>
				</li>
			</ul>
		</div>
	</div>
</div>