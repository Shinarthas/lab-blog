<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Hard times require hard decisions to be made. Especially if you are a small business or a startup it’s a common sense to seek for the most practical ways to improve your situation on the market. Outsourcing might be one of the wise decisions in your development strategy. Everyone knows outsourcing has plenty of advantages and we should admit there is also a grain of risk to get a foul product in the end.']);
?>

<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Outsourcing development</h2>
			<p>Hard times require hard decisions to be made. Especially if you are a small business or a startup it’s a common sense to seek for the most practical ways to improve your situation on the market. Outsourcing might be one of the wise decisions in your development strategy. Everyone knows outsourcing has plenty of advantages and we should admit there is also a grain of risk to get a foul product in the end. That is precisely why you should carefully consider each development team while choosing.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Thunderrise assure you will get a high-class product and service through all the way collaborating with us. To make such claims we’ve executed diligent work at picking out best of the best specialists to join our team. Because we understand that quality is the only factor that determinates one’s reputation.</p>
			<p>We can cooperate in two ways:</p>
			<ol>
			  <li>Dedicated Team Model</li>
			  <li>Time And Material</li>
			</ol>
			<p>Dedicated team model is more suitable for long-term projects, startups or companies not connected with IT sphere but are in need of specified services. We will supply you with a team fully concentrated on your project only, allow you to control the development process personally. Costs are calculated as monthly payments per each specialist in the team.</p>
			<p>Time and material model is more suited for experimentators and those who don’t see the full picture on the market position yet. In this case expenditures will be counted based on hourly rate of development team. In purpose of enhancing inner management process we use our own Time Tracker app to carefully monitor accomplished work. But in customer’s demand we can switch to other tracking systems to show our liability.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>