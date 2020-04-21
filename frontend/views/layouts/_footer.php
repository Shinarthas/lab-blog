<?
use \common\models\User;

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
                                <li><a href="/<?=$service['url']?>" class="py-2 d-block"><?=$service['title']?></a></li>
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
    <footer id="footer-sec" class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 bg-primary p-4">
                        <h2 class="ftco-heading-2 text-c1 dis-none-t">Lab3M</h2>
                        <p class="dis-none-t">Наша цель - сделать блокчейн приложения доступными в любом месте и в любое время. Поэтому мы хотим внедрить больше децентрализованных решений в различных сферах жизни.</p>
                        <ul class="ftco-footer-social list-unstyled mb-0 text-c1">
                            <li class="ftco-animate icon-cor1"><a target="_blank" href="https://twitter.com/lab3m"><span class="icon-twitter icon-cor1"></span></a></li>
                            <li class="ftco-animate icon-cor1"><a target="_blank" href="https://medium.com/lab3m"><span class="icon-medium icon-cor1"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Полезные ссылки</h2>
                        <ul class="list-unstyled">
                            <li><a href="#section-services" class="py-2 d-block">Финансовые и платежные решения</a></li>
                            <li><a href="#section-services" class="py-2 d-block">Создание MVP (минимально жизнеспособного продукта)</a></li>
                            <li><a href="#section-services" class="py-2 d-block">Разработка Крипто Биржи</a></li>
                            <li><a href="#section-services" class="py-2 d-block">Разработка и Аудит Смарт-Контрактов</a></li>
                            <li><a href="#section-services" class="py-2 d-block">Автоматические Торговые Терминалы</a></li>
                            <li><a href="#section-services" class="py-2 d-block">Разработка Крипто Кошельков</a></li>
                            <li><a href="#section-services" class="py-2 d-block">Услуги IEO (первичное предложение обмена)</a></li>
                            <li><a href="#section-services" class="py-2 d-block">Индивидуальные блокчейн решения</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Навигация</h2>
                        <ul class="list-unstyled">
                            <li><a href="/" class="py-2 d-block">Домой</a></li>
                            <!-- <li><a href="#home-sec" class="py-2 d-block">About</a></li> -->
                            <li><a href="/services" class="py-2 d-block">Сервисы</a></li>
                            <li><a href="/solutions" class="py-2 d-block">Портфолио</a></li>
                            <li><a href="/contacts" class="py-2 d-block">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Контакты</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><img style="filter: invert(1); margin-right:15px" src="/images/pin.png" alt="pin"></span><span class="text">Israel, Tel Aviv-Yafo, Ramat HaHayal, Kam Street 72</span></li>
                                <li><img style="filter: invert(1); margin-right:15px" src="/images/mail.png" alt="mail"></span><span class="text"><span class="__cf_email__" data-cfemail="f29b9c949db28b9d8780969d9f939b9cdc919d9f">contact@lab3m.com</span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>

<? endif; ?>
<div id="toTop" > <img style="filter: invert(1);" src="/images/top.png" alt="top"> </ div >
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
        $('#toTop').click(function() {
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