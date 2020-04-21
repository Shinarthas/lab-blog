<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'In order to improve the workflow you might be need a specially skilled managers to establish and control development process, explain technical details, etc.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Outsourcing management</h2>
			<p>In order to improve the workflow you might be need a specially skilled managers to establish and control development process, explain technical details, etc. We can offer you:</p>
			<ul>
			  <li>Project Managers;</li>
			  <li>HR Managers;</li>
			  <li>Business Development Managers.</li>
			</ul>
			<?= $this->render('//layouts/_estimate') ?>
			<p>PM’s main goal is to involve all available resources  in a way to reach maximum productivity with minimum efforts quality downsides. In our project we mostly use SCRUM methodology; also we use ScrumBan, KanBan, XP and Waterfall.</p>
			<p>HR’s services would easy hassles of tracking everything down on you. We may supply you with HR who’ll handle hiring and other management routine which in turn will create much more efficiency for your business.</p>
			<p>There is no limits to perfection especially in optimization of processes of product creating. Our best analysts may help you find your key business points, define and establish values and principles of providing services for your customers. We may elaborate the most fitting business model specially for you and help you to set up comfortable conditions to improve your business flows.</p>
			<ol>
			  <li>Thenduerrise is a fine choice for outsourcing because we provide:</li>
			  <li>Control and minutely report of your IT management expenses;</li>
			  <li>Reduce overloading your management system;</li>
			  <li>Allow you to enhance your focus on key processes;</li>
			  <li>Offer you a team of high skilled specialists with valuable knowledges about innovative technologies;</li>
			  <li>Flexible conditions of collaboration;</li>
			  <li>Assurance in stability of your business model and more.</li>
			</ol>
			<p>Partnership with lab3m is a nice choice because our priority is customer’s contentment and success.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>