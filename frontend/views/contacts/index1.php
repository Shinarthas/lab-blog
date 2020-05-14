<?php
$description = 'You are welcome contact us on any question or request. Our manages will surprise you.';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $description,
]);

$this->title = ucfirst(Yii::$app->controller->id);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?>
<div class="contacts">
    <div class="sectionWrapper">
        <div class="section">
            <h1>Let's create something great together!</h1>
            <h2 class="rrr">Want to discuss your product or partnership?</h2>
            <form>
                <input type="hidden" id="files">
                <div>
                    <label class="name">
                        <span>Your name</span>
                        <input id="name" name="name" required>
                    </label>
                    <label class="mail">
                        <span>Your e-mail address</span>
                        <input id="mail" name="email" required>
                    </label>
                    <div class="clear"></div>
                </div>

                <div class="details">
                    <label>
                        <span>Write your project details</span>
                        <input id="details" name="details">
                        <div class="attach">
                            <input class="upload" id="upload" name="upload" type="file">
                        </div>
                    </label>
                    <div class="files"></div>
                </div>

                <label class="select">
                    <span>What is your budget?</span>
                    <input id="budget" name="budget" readonly>
                    <div class="drop"></div>
                    <div class="down">
                        <div class="select active"></div>
                        <div class="select">$12 000 - $20 000</div>
                        <div class="select">$15 000 - $32 000</div>
                        <div class="select">$20 000 and Up</div>
                        <div class="select">Not defined</div>
                    </div>
                </label>

                <div class="buttonSicWrapper center">
                    <div class="buttonSic w280">
                        <input required type="submit" id="contactsSend" value="Send message">
                    </div>
                </div>
            </form>
        </div>
    </div>
<!--<div itemscope itemtype="http://schema.org/Organization" class="location">
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="item">
            <p itemprop="addressLocality" class="city">San Francisco</p>
            <p itemprop="streetAddress" class="adress">679 Titicus Road North-Salem</p>
            <p class="adress">10560 San Francisco, USA</p>
            <p itemprop="email" class="mail">hi@lab3m.com</p>
        </div>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="item">
            <p itemprop="addressLocality" class="city">London</p>
            <p itemprop="streetAddress" class="adress">Mansfield Road, 12</p>
            <p class="adress">01032 London, United Kingdom</p>
            <p itemprop="email" class="mail">hi@lab3m.com</p>
        </div>
         <div class="item">
            <p class="city">Dnipropetrovsk</p>
            <p class="adress">Kapelanka 13B</p>
            <p class="adress">30-347 Dnipropetrovsk, Ukraine</p>
            <p class="mail">hi@lab3m.com</p>
        </div>
    </div> -->
    <div class="map"></div>
    <div class="contactsPopupWrapper">
        <div class="contactsPopup">
            <h1>Message send!</h1>
            <div class="arrow"></div>
            <h2>
                Thank you for your request. We will
                <br>
                respond you as soon as possible
            </h2>
            <img data-src="/images/contacts/logo.svg" alt="logo">
        </div>
        <div class="contactsPopupClose">
            <img data-src="/images/contacts/close.popup.svg" alt="close">
        </div>
    </div>
</div>
