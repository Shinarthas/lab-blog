<? 
use common\models\Contacts;
$my_requests = Contacts::myRequestsList();
?>

<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?>
<style>
.simple-table
{
	width:100%;
	max-width:400px;
	margin: 10px auto;
	font-size:15px;
}
.simple-table tr td, .simple-table tr th
{	
	text-align:left;
	padding: 2px 4px;
	border-bottom:1px solid #eee;
}
.simple-table tr td:first-child, .simple-table tr th:first-child
{
	padding-left:7px;
}
.link
{
	cursor:pointer;
	color: #337ab7;
}

</style>
<div class="requests" style="margin-top: 90px;margin-bottom:40px;min-height:500px;">
	<div class="container">	
		<div class="row title">
            <h1 class="text-center">Requests</h1>
            <div class="arrow text-center">
                <img src="/images/arrow/white.svg" class="text-center" alt="arrow-white">
            </div>
            <p class="text-center">
                List of you request, select one to see additional description.
            </p>
         </div>
		 <table class="simple-table">
			<thead>
				<tr>
					<th>id</th>
					<th>status</th>
					<th width=100>created at</th>
				</tr>
			</thead>
			<tbody>
			<? foreach($my_requests as $request):?>
				<tr class="link" data-href="/request/<?=$request->id?>/<?=$request->key;?>" onclick="location.href=$(this).data('href');">
					<td><a>#<?=$request->id;?></a></td>
					<td><?=$request->status_string;?></td>
					<td><?=date("d M H:i", $request->date_create);?></td>
				</tr>
			<? endforeach;?>
			</tbody>
		</table>		
	</div>
	
</div>

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
