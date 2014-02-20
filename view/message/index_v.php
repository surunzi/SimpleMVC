<div id="msg-container" class="container">
	<?php foreach ($this->message as $value) {?>
	<div class="panel panel-primary">
	  <div class="panel-heading"><?php e($value['msg_author']);?><span><?php e($value['msg_date']);?></span></div>
	  <div class="panel-body"><?php e($value['msg_content']);?></div>
	</div><?php
	}?>
	<div class="select-btn-group text-right">
		<div class="btn-group">
			<a class="btn btn-default" href="<?php if ($this->current-1 > 0) e(URL.'message/index/'.($this->current-1));?>">&laquo;</a>
			<div class="btn btn-default select-btn">
				<select class="form-control" onchange="pageSelectHandle('<?php e(URL.'message/index/');?>', this);">
			  		<?php for ($i = 1; $i <= $this->count; $i++) {?>
			  		<option <?php if($i == $this->current) e('selected="selected"');?>><?php e($i);?></option><?php
			  		}?>
			  	</select>
			</div>
		<a class="btn btn-default" href="<?php if ($this->current+1 <= $this->count) e(URL.'message/index/'.($this->current+1));?>">&raquo;</a>
	</div>
	</div>
</div>