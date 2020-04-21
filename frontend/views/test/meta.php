<!DOCTYPE html>
<html>
<?
$img = '/images/temp/'.$_GET['image'];
$title = $_GET['title'];
$description = $_GET['description'];
?>


	<head>
	    <meta name="title" content="<?=$title;?>">
    <meta property="og:title" content="<?=$title;?>">

    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="NVdTSDR2N2JUMDYRezx1NE0tNGVVT3MRUS40fVs4QBJNAR8feQNbOA==">
    <title><?=$title;?></title>
		<meta property="og:type" content="website" class="next-head">
		<meta property="og:image" content="<?=$img;?>">
		<meta name="description" content="<?=$description;?>">
		<meta property="og:description" content="<?=$description;?>">
		<link type="image/png" href="<?=$img;?>" rel="image_src">
		<meta property="twitter:image" content="<?=$img;?>" class="next-head">
		<meta property="twitter:image:src" content="<?=$img;?>" class="next-head">
	</head>
	
</html>