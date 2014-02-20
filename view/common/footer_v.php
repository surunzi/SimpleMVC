<div class="container">
	<hr>
	<p>© EasyLife 2013</p>
</div>
<?php
foreach ($this->js as $value) {?>
<script src="<?php e(URL.JS.$value.'.js');?>"></script><?php
}?>
</body>
</html>