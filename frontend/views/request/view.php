<?
	$this->title = 'Request #'.$contact->id;
?>
<style>
a.btn-clipboard
{
	float:right;
	border:0;
	background:none;
	cursor:pointer;
	color: #555;
}
a.btn-clipboard:hover,.btn-clipboard.success
{
	color: #fff!important;
}
</style>

<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?>
<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/master/dist/clipboard.min.js"></script>

<div class="request" style="margin-top: 90px;min-height:500px;">
	<div class="container">	
		<h3 style="margin:24px 0;">Hello, <?=$contact->username;?>!</h3>
		<p>Your request #<?=$contact->id;?> created at: <?=date("d M Y H:i:s", $contact->date_create);?></p>
		<p>Text: <?=$contact->details;?></p>
		<p style="margin-top:20px;">Status: <?=$contact->status_string;?></p>
		
		<? if($contact->status != $contact::CONTACTS_NEW):?>
			<p style="margin-top:20px;">Your manager: Julia</p>
			<img src="/images/team/julia.d.jpg" style="margin: 0 0 10px;">
			<p>
			Timezone: Europe/Kiev (<?
				$date = new DateTime("now", new DateTimeZone('Europe/Kiev') );
				echo $date->format('H:i');
			?>)</p>
		<? endif; ?>
		<? if($contact->reply!=''):?>
			<p>Reply:
				<?=$contact->reply;?>
			</p>
		<? endif;?>
		
		<p style="margin-top:80px;">To access this page - just use the link:</p>
		<div style="background:#eee; padding:5px 10px; border-radius:3px;overflow-x:hidden;margin-bottom:80px;">
			
			
			<span id="copy-link"><?=\Yii::getAlias('@front');?>/request/<?=$contact->id;?>/<?=$contact->key;?></span>
			<a class="btn-clipboard" data-clipboard-target="#copy-link" onclick="$(this).html('copied');$(this).addClass('success');">copy</a><i class="fa fa-files-o" aria-hidden="true"></i>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
    ms.href="/styles/blog.css?v=1.1";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>var scr = {"scripts":[
        {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
        {"src" : "/scripts/slick.min.js", "async" : false},
        {"src" : "/scripts/myslick.js", "async" : false},
        {"src" : "/scripts/app.js", "async" : false},
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
<script>
new Clipboard('.btn-clipboard'); 
</script>