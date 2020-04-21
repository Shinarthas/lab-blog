<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'The Payment Card Industry Data Security Standard is an assemble pack of requirements created to be sure that all companies that use credit card information have relevant secure environment']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
            <h2>Pci dss compliance</h2>
            <p><strong>The Payment Card Industry Data Security Standard(PCI-DSS)</strong> is an assemble pack of requirements created to be sure that all companies that use credit card information have relevant secure environment.</p>
			<p>At lab3m we have full set of PCI solutions so our customer can be sure that trust between them and their clients won’t give a chance to doubt in it.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>In these latter days, Visa and MasterCard start to claim from commercial enterprises and service provides who work with card data, PCI DSS compliance. In this context, the question of requirements of this standard becomes important not only for the major players in the market, but also for small retail and service businesses. Standart PCI DSS was created by the Council on safety standards PCI SSC Data Payment Card Industry (Payment Card Industry Security Standards Council) and settles a specific list of requirements to ensure the security of payment card data (KDP), which affect technical side of organizations.</p>
			<p>PCI DSS-Hosting - it is a service that ensures the safe handling of payment cards for organizations who have placed their infrastructure on the side of a certified <strong>PCI DSS</strong> hosting provider, within which are stored, processed, or transmitted cardholder data.</p>
			<p>Each organization using its own card processing, and it faces the need for certification of PCI DSS. Request to certified service providers helps to simplify the process of certification for merchantry and protect cardholder data at the proper level.</p>
			<p>lab3m uses all this system in our projects. What do you think about that approach? We're waiting for your message!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>