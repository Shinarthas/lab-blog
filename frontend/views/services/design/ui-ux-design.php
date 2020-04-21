<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'The first feature to think about when it comes to mobile web or app design is how to make an interface simple and effective. Well made design can make you one step closer to your business goal. Thunderrise has huge experience in designing high-performance architectures.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>UI/UX Design</h2>
            <p>The first feature to think about when it comes to mobile web or app design is how to make an interface simple and effective. Well made design can make you one step closer to your business goal. Thunderrise has huge experience in designing high-performance architectures. Be sure that if you entrust us to work with your project, you won’t be disappointed.</p>
			<p><strong>UI or User Interface design</strong> is the actual visual part of your web site, everything you see when you click or tip on it. The UI science contains a pack of particular instructions and technical graphic elements. Great UI design guides website or app owners to better interaction with their users. As you can see UI design is a lot crucial for appwebsite functioning so our team won’t regret you. We use only the newest technologies and follow the latest trends in our work. Let's resume main issues of UI design:</p>
			<ul>
				<li>User Interface Prototyping</li>
				<li>Adaptation to All Device Screen Sizes</li>
				<li>Coming true with developer</li>
			</ul>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Speaking about <strong>UX design</strong>, it’s based on website/app relations with the system. User Experience design is based on user-interface interrelation. Our aim is to provide our customers with excellent interface experience. Likewise let's examine main strategy of UX development:</p>
			<ul>
				<li>Client's Analysis and Rival's Analysis</li>
				<li>Introduction of new technologies</li>
				<li>Product research and general understanding of concept</li>
			</ul>
			<p>Collaboration of good UI and UX doesn’t only look good but also complies its needs. Here at Thunderrise we offer you a full spectre of UI/UX design work. We work only according to your idea and guide the project until its launch.</p>
			<p>Thunderrise has its own designer team, which, with the help of your idea and Project Manager skills, will create something great! Don't hesitate and contact us right now! Thunderrise - follow your dream!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>