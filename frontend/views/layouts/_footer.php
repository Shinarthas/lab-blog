<?
use \common\models\User;
use yii\helpers\Url;
$services=\common\models\ServicesCategory::find()->select('blog_services_category_translations.*, blog_services_category.id,blog_services_category.url,blog_services_category.name,blog_services_category.image')
    ->where(['category_id'=>1])->joinWith('translations')->where(['id_lang'=>Yii::$app->language])
    ->asArray()
    //->createCommand()->rawSql;echo $services; die();
    ->all();

?>

<? $lang = Yii::$app->request->get('language');
if(is_null($lang)):?>

<?
	$phones_array = [
		'US'	 	=> '+1-424-256-0701',
		'GB' 		=> '+1-424-256-0701',
		'OTHER'		=> '+1-424-256-0701',
	];
?>
<link rel="stylesheet" href="/styles/_footer.css">
    <style>
@media (max-width: 767px){
    .dis-none-t{
        display: none;
    }
    .text-c1{
        text-align: center;
    }
    .icon-cor1{
        font-size: 50px!important;
        padding: 10px;
}
    
}
.footer{display: none!important;}

</style>

    <footer id="footer-sec" class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <style>
                @media (max-width: 767px){
                    .pad-cor24{
                        padding:10px!important;
                    }
                }
            </style>

            <div class="row mb-5">
                <?= Yii::t('app', 'html_footer_main1') ?>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2"><?= Yii::t('app', 'useful_links') ?></h2>
                        <ul class="list-unstyled">
                            <?php foreach ($services as $service){?>
                                <li><a href="<?=Url::to(['blog/show-post','id'=>$service['url'],'language'=>Yii::$app->language])?>" class="py-2 d-block"><?=$service['title']?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?= Yii::t('app', 'html_footer_main2') ?>
            </div>

            <?= Yii::t('app', 'html_footer_copyright') ?>

        </div>
    </footer>
    <div class="cookie-bar cookie" id="js-cookieBar" style="position: fixed;bottom: 0; z-index: 999;text-align: center; width: 100%;background: rgba(35,53,72,.9); box-shadow: 2px 0 2px 4px rgba(0,0,0,.121575);flex-direction: row; justify-content: space-between;min-height: 60px;padding-top: 10px;">
        <div class="container cookie-container" style="margin: 0 auto;padding: 0 15px; position: relative;">
        <?= Yii::t('app', 'cooke_text') ?>
        </div>
    </div>
    <style>
        .cookie {
            display: block; }

        .cookieconsent .cookie {
            display: none;
        }
    .cookie-container{
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        justify-content: center;
    }
    .cookie-bar__btn{
        color: white;
        background: #6927ff;
        padding: 5px 15px;
        border-radius: 50px;
    }
    </style>


<? else: ?>

    <link rel="stylesheet" href="/styles/_footer.css">
    <style>
@media (max-width: 767px){
    .dis-none-t{
        display: none;
    }
    .text-c1{
        text-align: center;
    }
    .icon-cor1{
        font-size: 50px!important;
        padding: 10px;
}
    
}
.footer{display: none!important;}

</style>


<? endif; ?>
<!-- <div id="toTop" > <img style="filter: invert(1);" src="/images/top.png" alt="top"> </ div > -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
        });
        $('#toTopImg').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });
});
</script>
<style>
    #toTop {
        z-index: 999;
        width:100px;
        text-align:center;
        padding:5px;
        position:fixed;
        bottom: 30px;
        right: 15px;
        cursor:pointer;
        display:none;
        color:#333;
        font-family:verdana;
        font-size:11px;
    }
</style>
<script data-ad-client="ca-pub-1190584613508518" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/scrollax.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
            document.addEventListener("DOMContentLoaded", function() {
  var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

  if ("IntersectionObserver" in window) {
    var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(video) {
        if (video.isIntersecting) {
          for (var source in video.target.children) {
            var videoSource = video.target.children[source];
            if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
              videoSource.src = videoSource.dataset.src;
            }
          }

          video.target.load();
          video.target.classList.remove("lazy");
          lazyVideoObserver.unobserve(video.target);
        }
      });
    });

    lazyVideos.forEach(function(lazyVideo) {
      lazyVideoObserver.observe(lazyVideo);
    });
  }
});
        </script>


<script type="text/javascript" src="/js/jquery.lazy.min.js"></script>
    <script>
    $(function() {
        $('img').Lazy();
    });
    </script>