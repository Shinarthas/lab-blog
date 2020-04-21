<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'For business owners IBeacon advantages are not so easy to overestimate. Retail outlets adopt this technology to offer a product information to their customers, advertise new collections, discounts etc.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Personal business use</h2>
            <p>For <strong>business owners</strong> IBeacon advantages are not so easy to overestimate. Retail outlets adopt this technology to offer a product information to their customers, advertise new collections, discounts etc. It also speeds up the way of checkout process because it makes it totally contactless.</p>
			<p>Consumers also benefit from IBeacon. This technology is a foundation of so called “smart homes”. For example, SH automatically turns on lights in a room as a user with a smartphone has entered it. Providing this technology to a social life also has lots of advantages. Users will have an instant access to all the information about a painting in gallery, empty spots for parking, how long to wait for a bus.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>iBeacon has a lot of advantages for your <strong>personal business</strong> such as:
			<ul>
				<li>Tracking. You could keep a track at your employees and monitor all moves of your customers</li>
				<li>Automation. You could also use this technology as an advertising medium.</li>
				<li>Cost effectiveness. You could imagine the cost that you would have to undergo if you set up Near Field Communication in your office rather than iBeacons</li>
				<li>Micro location. You could conveniently download navigation even inside your office premises</li>
			</ul>
			<p>Thunderrise employment iBeacon for personal business and business of our client. With the help of it we increase monthly income exponentially.</p>
			<p>Thunderrise - let's create great things together!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>