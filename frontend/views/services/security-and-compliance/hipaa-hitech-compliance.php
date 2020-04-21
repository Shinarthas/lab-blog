<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'According to U.S. Public Law 104-191 HIPAA is Health Insurance Portability and Accountability Act. HIPAA mandates implementation of health care organizations security controls. It includes all companies that store or transmit electronic protected health information']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>HIPAA & ITECH Compliance</h2>
            <p>According to U.S. Public Law 104-191 HIPAA is Health Insurance Portability and Accountability Act. <strong>HIPAA</strong> mandates implementation of health care organizations security controls. It includes all companies that store or transmit electronic protected health information. <strong>The HIPAA Security Rule</strong> directs protection of PHI. Organizations must attest their security programs via self-certification or by a private accreditation existence. Non-compliance can trigger various civil sanctions, including fines and jail.</p>
            <?= $this->render('//layouts/_estimate') ?>
			<p><strong>HITECH</strong> is the Health Information Technology for Economic and Clinical Health Act. It brings extra standards to healthcare organizations. <strong>HITECH</strong> requires companies to use security technologies meaningfully. <strong>HITECH</strong> requires healthcare organizations to apply "meaningful use" of security technology to ensure the confidentiality, integrity, and availability of protected data.</p>
			<p>People expect healthcare organizations to keep their personal information confidential and safe from data fractures and other acts.</p>
			<p><strong>HITECH</strong> 	punishment can be at least $50K per violation up to a total of $1.5 million in a calendar year. Other breach-related costs will be undergo for discovery and inhibition, investigation of the occurence, correction expenses, lawyer and legal fees, loss of customer confidence, lost sales and revenue, brand degradation, and so on. Compliance is a serious responsibility on many levels.</p>
			<p>lab3m back this technologies up. Our team connsidered this topic and we resumed, that this structures is entirely right!</p>
			<p>lab3m - let's create great things together! We're waiting for your message!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>