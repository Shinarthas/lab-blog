<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Usage of mobile devices to surf the web constantly increases. Now it won’t take any effort to reach customers through their smartphones. Custom user-friendly design is the best way to attract customers.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Mobile design</h2>
            <p>Usage of mobile devices to surf the web constantly increases. Now it won’t take any effort to reach customers through their smartphones. Custom user-friendly design is the best way to attract customers.</p>
			<p>The reason that mobile design differs from common web design for desktop computers is that modern smartphones are more powerful, they are constantly with us and on. Most of the time it is connected to the network.</p>
			<p>Thunderrise mobile designers apply all the modern trends. During the development, they act according to client's preferences and requirements.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Nowadays, there are two main platforms to work with when it comes to mobile designing: IOS and Android. The main thing to be considered is differences between these OSs because each other has its own guidelines and interface patterns. The well made design shouldn’t differ from users expectations.</p>
			<p>Thunderrise designers work up adaptive design for all gadget's sreen size. The smaller screen size and touch screen controls create special aspects in UI design to ensure usability, precision and self-consistency. In a mobile interface, symbols may be used more widely and management facilities may be automatically hidden until entailed. The symbols themselves must also be smaller and there is not enough space for text tag on everything, which can cause confusion. Users have to be able to understand a general icon and its meaning whether through readable text or intelligible graphical presentment. Basic instruction for mobile interface design are matchable past modern mobile operating systems.</p>
			<p>Thunderrise will bring to life your idea. Contact us and we will creat great things together!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>