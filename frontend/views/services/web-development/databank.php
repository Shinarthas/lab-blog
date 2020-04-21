<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'If frontend is websites face, backend is its heart so database is its brain. Here in lab3m we use only latest and the most innovative technologies for supporting database architecture.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Databank</h2>
			<p>If frontend is websites face, backend is its heart so database is its brain. Here ,in lab3m, we use only latest and the most innovative technologies for supporting database architecture. We provide modern technique to make databases work fast, efficient in processing and easy to setup.</p>
			<p>Nearly all of lab3m e-commerce sites uses databases to store product list and customer personal data. These sites use a database management system (or DBMS), such as Microsoft Access, FileMaker Pro, or MySQL as the "back end" to the website. These function of databank allow websites interact with data really easy!</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Moreover, early databases were respectively "flat," which means they were limited to simple rows and columns, like a spreadsheet. However, today's relational databases allow users to access, update, and search information based on the relationship of data stored in different tables and it really makes simple future development process in lab3m!</p>
			<p><strong>Databank</strong> store all of your data. It protects your personal information with the help of security stages. Most databases contain multiple tables, which may each include several different fields. It is a passport of success. We use convenient way to let you interact with your data. lab3m cares about its clients. Our main goal - comfortable interaction with your personal data with the aid of your project.</p>
			<p>What do you think about our construction?</p>
			<p>Follow your dream and let us to live out your project!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>