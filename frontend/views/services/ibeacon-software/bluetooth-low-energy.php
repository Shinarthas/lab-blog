<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'BLE is a technology that provides a personal network. It was designed by the Bluetooth Special Interest Group and was constantly implemented in healthcare, business, security, beacon technologies and home entertainment systems. In comparison with classic Bluetooth, BLE or Bluetooth Smart provides the same communication range and functions as the classic one but seriously reduces the power consumption.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<p><strong>Bluetooth low energy (BLE)</strong> is a technology that provides a personal network. It was designed by the Bluetooth Special Interest Group and was constantly implemented in healthcare, business, security, beacon technologies and home entertainment systems. In comparison with classic Bluetooth, BLE or Bluetooth Smart provides the same communication range and functions as the classic one but seriously reduces the power consumption. This technology is very popular in the work of smartwatches, gamepads, wireless keyboards and other WT.</p>
			<p>In modern futuristic philosophy there is a so called “Internet of Things” conception. According to it all physical things in your house (doors, windows, tooth brush, TV etc) will be connected to one network and cooperate with each other automatically to make our lives more comfortable. So it’s something like advanced smart home.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>There are key features of Bluetooth with low energy include</p>
			<ul>
				<li>Industry-standard wireless protocol that allows for interoperability across platforms</li>
				<li>Ultra-low peak, average and idle mode power consumption</li>
				<li>Allows for some of the government-grade security with 128-bit AES data encryption</li>
			</ul>
			<p>Bluetooth LE is inviting to consumer electronics and Internet-connected machine manufacturers because of its low cost, long battery life, and easy of arrangement. From thermometers and heart rate monitors to smart watches and nearness sensors, Bluetooth LE facilitates rare short-range wireless data communication between devices, powered by nothing more than a dime-sized battery.</p>
			<p>Thunderrise interacts with this system. We always use it in our mobile projects, that's why we innovative technique.</p>
			<p>Thunderrise - let's create great things together!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>