//显示tooltip
$('.tooltip-show').each(function(){
	var description = $(this).attr('title');
	$(this).tooltip({
		title:description
	});
});
//滚动效果
$('body').on('click', '.smooth-scroll', function(){
	var target = $(this).attr('href');
	$.smoothScroll({
		scrollTarget: target
	});
}).on('click', '#video a', function(){
	//切换视频
	$('#videoModalLabel').text('Create Your Own MVC ' + $(this).parent().find('p').text());
	$('#youku-player').html('<embed src="http://player.youku.com/player.php/sid/'+$(this).attr('data-swf')+'/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>');
});
