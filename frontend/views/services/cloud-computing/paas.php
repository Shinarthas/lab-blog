<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'PaaS or Platform-as-a-Service. It’s a model of providing Cloud Computing when  client is granted an access to use IT technologies whether it is an OS, Database control programs, developing or testing platforms. All the IT infrastructure including computational networks, storage system etc is held in the hands of provider. Paas can be provided in two ways']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>PaaS</h2>
            <p>PaaS or Platform-as-a-Service. It’s a model of providing Cloud Computing when client is granted an access to use IT technologies whether it is an OS, Database control programs, developing or testing platforms. All the IT infrastructure including computational networks, storage system etc is held in the hands of provider. Paas can be provided in two ways:</p>
			<ul>
				<li>Public cloud server. Consumer controls minimal options and software deployment, and the provider undertakes the servers, network, OS, storage etc</li>
				<li>Private server. Software is deployed on a public infrastructure.</li>
			</ul>
			<?= $this->render('//layouts/_estimate') ?>
			<p>PaaS provides for web developing almost for key services, such as Java development or application hosting. lab3m use this platform for develop its web projects. The main PaaS advantage - its provider supports all the underlying computing and software, moreover users only need to log in and start using the platform – usually through a Web browser interface. It really makes devepment easier. The enterprise PaaS can be delivered through a hybrid model that uses both public IaaS and on-premise infrastructure or as a pure private PaaS that only uses the latter</p>
			<p>PaaS is one of three main categories of cloud computing services. The other two are software as a service (SaaS) and infrastructure as a service (IaaS). There are zillion of PaaS providers - the most popular is Heroku. There is an interesting fact - Heroku entirely works above AWS and connected with it. PaaS let lab3m to lessen time for start up our projects. Our Process of development standed more automatically! PaaS exacts no price with for high-technologies knowledge, so lab3m chose the best way to making our work process on the clouding computing</p>
			<p>Let's do great project together. Contact us and we will follow your dream! lab3m - We design and develop native apps!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>