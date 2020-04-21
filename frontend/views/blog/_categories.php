<?

	use yii\widgets\ActiveForm;
	use yii\helpers\Html;

?>


<div class="sub-menu" style="display: none">
    <div class="row" style="justify-content: center;">
        <div class="link search-button" id="search-button"></div>
        <!--<div class="wrap-list">
            <button class="drop-category hidden-sm hidden-md hidden-lg">Category <i class="arrow"></i></button>
            <ul class="marker-list categories">
                <li class="mlist"><a class="link" href="<?=isset($_GET['language']) ? '/'.$lang->url : ''; ?>/blog">All</a></li>
                <?php foreach ($categoryes as $category){
					if($category->id==20)
						continue;
				?>
                    <li class="mlist"><a class="link" href="<?=isset($_GET['language']) ? '/'.$lang->url : ''; ?>/blog/category/<?=strtolower(str_replace(' ','-',$category->name))?>"><?=$category->name?></a></li>
                <?php } ?>
				 <li class="mlist">	
					<div class="link">
						<form class="mlist">
							<input type="text" placeholder="Anything..." id="postsearchform-search" class=" searchfield" name="search" maxlength="255" aria-invalid="false" value="<?=$_GET['search'];?>">
							<button type="submit" class="search-submit link">Search</button>
						</form>
					</div>
				</li>
            </ul>
        </div>-->
    </div>
</div>