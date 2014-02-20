<form class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="msgModalLabel" aria-hidden="true" action="<?php e(URL.'message/post')?>" method="post">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="msgModalLabel">我要留言</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input class="form-control" type="text" name="author" placeholder="姓名">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="5" name="content" placeholder="在此输入你想说的话"></textarea>
        </div>
        <div class="row">
          <div class="col-md-6">
            <input class="form-control" type="text" name="captcha" placeholder="验证码">
          </div>
          <div class="col-md-6">
            <img id="captcha" src="<?php e(URL.'message/captcha');?>">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-default" href="<?php e(URL.'message');?>">留言板</a>
        <button type="submit" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</form>