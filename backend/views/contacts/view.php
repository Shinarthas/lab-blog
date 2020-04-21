<style>
h1
{
	text-align:center;
	line-height:30px;
	height:30px;
	margin-bottom:30px;
}
h1 span
{
	vertical-align:bottom;
}
h1 img
{
	height:30px;
	display:inline;
	vertical-align:bottom;
}

h1 small
{
	color:#888;
}
table tr td
{
	line-height:20px;
	padding:10px 20px;
	vetical-align:middle;
	font-size:15px;
}
table tr td span
{
	line-height:20px;
}
table tr td:first-child
{
	text-align:right;
	color:#888;
	font-size:13px;
	width:160px;
	border-right:1px solid #aaa;
}
table tr td p
{
	margin:0;
	line-height:20px;
}
table img
{
	height:20px;
}

h3
{
	text-align:center;
	margin: 50px 0 20px 0;
}

</style>
<? 
if($_SERVER['REMOTE_ADDR'] != '127.0.0.1' )
{
	if(isset($contact->data['server']['REMOTE_ADDR'])):
	  $country = geoip_country_code_by_name($contact->data['server']['REMOTE_ADDR']);
	  //$country = "CA";
	else:
		$country = 'UN';
	endif;

	$geoip_data = geoip_record_by_name($contact->data['server']['REMOTE_ADDR']);

	if( $geoip_data['region']!='')
		$timezone = geoip_time_zone_by_country_and_region($geoip_data['country_code'], $geoip_data['region']);
	else
		$timezone = geoip_time_zone_by_country_and_region($geoip_data['country_code']);

	if($timezone!='')
		$date = new DateTime("now", new DateTimeZone($timezone) );
}
?>

<h1>	
		<span>#<?=$contact->id;?></span>
		<img src="/images/flag/<?=strtolower($country);?>.png" alt="<?=$country;?>" title="<?=$country;?>">
		
</h1>

<table>
	<tbody>
		<tr>
			<td>Client</td>
			<td><?=$contact->username;?> <img src="/images/nopic-2.png"></td>
		</tr>
		<tr>
			<td>System</td>
			<td> <span title="<?=$contact->data['server']['HTTP_USER_AGENT'];?>"><?=$contact->browser['platform'];?> <?=$contact->browser['name'];?> 
			<?=isset($contact->data['screen']['width'])?$contact->data['screen']['width'].'x'.$contact->data['screen']['height']:'';?></span> </td>
		</tr>
		<tr>
			<td>IP</td>
			<td><?=$contact->data['server']['REMOTE_ADDR'];?></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><a href="https://www.google.com.ua/maps/place/<?=preg_replace('|\ |isU', '+', $geoip_data['city']);?>,+<?=preg_replace('|\ |isU', '+', $geoip_data['country_name']);?>"><?=$geoip_data['country_name'].' '.$geoip_data['region'].' '.$geoip_data['city'];?></a></td>
		</tr>
		<? if($timezone!=''):?>
		<tr>
			<td>Timezone</td>
			<td><?=$timezone.' '. $date->format('H:i').' (our '.date("H:i", time()).')';?></td>
		</tr>
		<? endif;?>
		<tr>
			<td>Email</td>
			<td>
				<?=$contact->email;?> <a href="https://www.facebook.com/search/top/?q=<?=$contact->email;?>"><img src="https://en.facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-logo.png"></a>
			</td>
		</tr>
		<tr>
			<td>Budget</td>
			<td><?=$contact->budget;?></td>
		</tr>
		<tr>
			<td>Details</td>
			<td>
				<p><?=$contact->details;?></p>
				<p><? if($_SERVER['REMOTE_ADDR'] != '127.0.0.1' ) {echo $contact->translated_details;}?></p>
			</td>
		</tr>
		<tr>
			<td>Created</td>
			<td> <?=date("d F Y H:i:s", $contact->date_create);?></td>
		</tr>
		<tr>
			<td>Online</td>
			<td> <?=\common\components\EasyTime::timeAgo($contact->last_online);?></td>
		</tr>
		<tr>
			<td>Link</td>
			<td>
			<span id="copy-link"><?=\Yii::getAlias('@front');?>/request/<?=$contact->id;?>/<?=$contact->key;?></span>
			<a class="btn-clipboard" data-clipboard-target="#copy-link" onclick="$(this).html('copied');$(this).addClass('success');" style="cursor:pointer;">copy</a><i class="fa fa-files-o" aria-hidden="true"></i>
			
			</td>
		</tr>
	</tbody>
</table>



<h3>Status history:</h3>
	
<table>
	<tbody>
	<? foreach($contact->history as $history):?>
		<tr>
			<td><?=date("d H:i:s", $history->created_at);?></td>
			<td><?=$history->status_string;?></td>
		</tr>
	<? endforeach;?>
	</tbody>
</table>







	
	<h3>History:</h3>
	
<table>
	<tbody>
	<? if(count($contact->data)!=0):?>
	<? foreach($contact->data['history'] as $page):?>
		<tr>
			<td><?=date("d H:i:s", $page['time']);?></td>
			<td><?=$page['link'];?></td>
		</tr>
	<? endforeach;?>
	<? endif;?>
		<tr> 
			<td><?=date("d H:i:s", $contact->date_create);?></td>
			<td style="color:red;">Request created</td>
		</tr>
	<? foreach($contact->movement as $movement):?>
		<tr>
			<td><?=date("d H:i:s", $movement->created_at);?></td>
			<td><?=$movement->url;?></td>
		</tr>
	<? endforeach;?>
	</tbody>
</table>

<h3>Reply:</h3>
<center>
<form method="POST">
<textarea style="width:400px;" name="reply"><?=$contact->reply;?></textarea>
<br>
<input type="submit">
</form>
</center>
<br><br><br>
<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/master/dist/clipboard.min.js"></script>
<script>
new Clipboard('.btn-clipboard'); 
</script>