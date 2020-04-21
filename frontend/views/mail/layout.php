<div style="background: #ea8d0f;width:100%;padding:25px 0 50px;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">
	<div style="width:600px;margin:0 auto;position:relative;">
		<img src="https://lab3m.com/images/header/logo_white.png" style="padding: 0 0 20px; height: 21px;">
	</div>
	
	<div style="position:relative;z-index:4; font-size: 14.5px; width: 600px;padding: 20px;display: block;background:white;margin:0 auto;line-height: 20px; color: #333;">
		<h3 style="margin:12px 0; font-size: 24px; font-weight: bold;">Hello <?=$name;?>,</h3>
		<div class="just_spacer" style="width:100%;height:20px;"></div>
		<?=$content;?>
		<p style="margin:0;line-height: 20px;margin-top:40px;">Thanks,</p>
		<p style="margin:0;line-height: 20px; "><a href="mailto:support@lab3m.com" target="_blank" style="color:#ea8d0f;">lab3m Support</a></p>
	</div>
	
	<div style="margin:0 auto;text-align:center;">
		<p style="line-height: 20px;margin:0;margin-top:40px;color:white;">© <?=date("Y",time());?> lab3m</p>
	</div>
</div>