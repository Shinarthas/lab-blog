<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'There is no doubt that IBeacon technology has a lot of advantages. But let’s list those that are less evident']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>iBeacon advantages</h2>
            <p>Remind you, that iBeacon is Apple’s technology standard that is all set to create a revolution in the business world. It is based on the Bluetooth Low Energy (BLE) Wireless Technology. There is no doubt that IBeacon technology has a lot of advantages. But let’s list those that are less evident:</p>
            <ul>
                <li>Usage of BLE instead of GPS allows to determine users location more accurately</li>
                <li>BLE allow IBeacon to be battery-friendly</li>
                <li>Users feel more confident because IBeacon doesn’t track their location everywhere they go but just inside its little range</li>
                <li>This technology is pretty affordable. Everyone having a smartphone and a pack of free apps can create a beacon</li>
                <li>IBeacon is a native Apple technology so it integrates well with IOS system. In addition, now it’s also available for Android users via IBeacon Detector</li>
            </ul>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Nowadays, iBeacons are scarcely available but still, you could expect to get it in the coming months. You just need simple iBeacon hardware, and it could night and day inclusion to the wall or on any counter with a battery enabled Bluetooth connection. You must have an Android or iOS app and your potential client too might own an iOS device with your app installed. As soon as the customer would be in the range of your iBeacon, all the wished functionalities would be made available.</p>
            <p>In Thunderrise we can create an IBeacon system for you so contact us and implement it in your own business.</p>
            <p>Thunderrise - follow your dream and let us bring in to life!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>