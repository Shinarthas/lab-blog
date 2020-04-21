<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'As you know, the first thing a user see when he clicks on the site is it’s design. It is a foundation of every website, so there’s no need to say that it’s extremely important to stand out of the crowd. lab3m provides native web design services.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Web design services</h2>
            <p>As you know, the first thing a user see when he clicks on the site is it’s design. It is a foundation of every website, so there’s no need to say that it’s extremely important to stand out of the crowd. lab3m provides native web design services. We will follow your business goals so contact us and get your own design.</p>
			<p>So let’s talk about what is web designing? Roughly speaking, it’s a blend of color, fonts, graphics, structure, layouts and content. But these are not the only things. Your website must not be only stylish and beautiful but convenient and considering users needs. The question is about supporting multimedia, site navigation, integration with social networks, ability to perform your site on different platforms and web browsers. Going mobile may be a key secret of successful website. Creating a mobile friendly site design allows users to stay with a site all the time.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>At lab3m we provide excellent web designing service. Our team of professional designers can create your site from nothing or redesign an existing site according to client's preferences. We provide a huge spectre of work in web designing. Custom designs are very important for business so be sure that our team will make it not only affordable and stylish but also unique.</p>
			<p>In our projects we involve contrast, coloring, balance, rhythm, style of graphical elements, use of icons, background textures and general atmosphere of overall website design. All these elements are united with the principles of design in order to create a great result that meets the aims set for the website.</p>
			<p>Let's describe <strong>our main rules of making design</strong>:</p>
			<ul>
				<li>Inform. We carry out a review of customer's product and fundamental idea of future product.</li>
				<li>Provide services. E-learning, online educational resource, generate educational documents.</li>
				<li>Support operational activities. Field contact info, process applications.</li>
			</ul>
			<p>lab3m use different <strong>Web Design Services</strong> in all projects. This way really makes process of development and involvement easier.</p>
			<p>Don't hesitate and contact this instant! Let us to bring to life your idea! lab3m - follow your dream!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>