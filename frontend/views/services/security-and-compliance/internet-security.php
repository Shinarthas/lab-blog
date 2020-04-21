<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Internet security relies on protecting your data that is sent through the internet. This includes firewalls, anti-malware,anti-spyware, encryption, antivirus programs and other things. ']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
            <h2>Internet security</h2>
            <p>Internet security relies on protecting your data that is sent through the internet. This includes firewalls, anti-malware,anti-spyware, encryption, antivirus programs and other things. They work with specific networks and devices to monitor internet traffic and defends system from untoward or dangerous attachment.</p>
			<p>Internet security becomes the high priority for businessmen. Deficient internet protection menace your data safety. Conversely, a good internet security protects financial details and all the data you need. History has lots of experience when huge brand were literally crushed by hackers cause of low protection.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>There three main <strong>Internet Security Products<strong>:</p>
			<ul>
				<li>Antivirus. Antivirus software and Internet security programs can defenct your device from attack by detecting and disposals viruses; Antivirus software was mainly shareware in the early years of the Internet,[when?] but there are now[when?] several free security applications on the Internet to choose from for all platforms</li>
				<li>Password managers. A password manager is a software application that helps a user store and organize passwords. Password managers usually store passwords ciphered, requiring the user to create a master password; a single, ideally very strong password which ensure the user access to their entire password database.</li>
				<li>Security suites. They offer larceny protection, portable storage device safety check, private Internet browsing, cloud anti-spam, a file shredder or make security-related decisions (answering popup windows) and several were free of charge</li>
			</ul>
			<p>Thunderrise encourage all of this products. Our team provides clear development without any virus programme. So, our future customer, you don't bother about it!</p>
			<p>Have fun and follow your dream! Finally, we will produce something incredible!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>