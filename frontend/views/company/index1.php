<?php
$description = 'Introduction of our expertise, specifications, and a brief of our technologies.';
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
<div class="company">
<!--    <div class="wrapper1">-->
<!--        <div class="content">-->
<!--            <h1>From idea to launch</h1>-->
<!--            <img data-src="/images/company/photo.png" class="photo">-->
<!--            <div class="infoList">-->
<!--                <div class="info">-->
<!--                    <p class="name">Scott Chasin</p>-->
<!--                    <p class="position">Co-Founder & CEO</p>-->
<!--                    <a href="" target="_blank" rel="nofollow">-->
<!--                        <img data-src="/images/company/linkedin.png">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="info">-->
<!--                    <p class="name">Gene Stevens</p>-->
<!--                    <p class="position">Co-Founder & CTO</p>-->
<!--                    <a href="" target="_blank" rel="nofollow">-->
<!--                        <img data-src="/images/company/linkedin.png">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="wrapper2">
        <div class="content">
            <h1>About Us</h1>
            <div class="info">
                <p class="text">
                    lab3m. Start UP oriented digital agency.
                </p>
                <p class="text">
                    We are a team of like-minded people who are united with the idea to do the best Web and Mobile products. If we are engaged in a contract with you, our dear customer — we believe in your idea, and we’re ready to work hard to get your project done in the best way for sure.
                </p>
                <p class="text">
                    We will consult with you to go through the release process and get the best possible result. We understand that not all customers are experienced in IT development and companion processes, so we will do everything transparent and if we know a better solution for some parts of the remaining functionality or the whole project, we will inform you about all ideas and will able to help with the decision.
                </p>
                <p class="text">
                    When you come to us with an idea we are able to convert it into a business. When you choose us to develop your project, you receive a friendly team of high level specialists, deep thinkers, and productive developers.
                </p>
                <p class="text">
                    You can get in touch with us right now and we will provide all the necessary information.
                </p>
            </div>
        </div>
    </div>
    <div class="wrapper3">
        <div class="content">
            <h1>What We Do</h1>
            <div class="blockList">
                <div class="block">
                    <div class="column1">
                        <p class="title">Mobile-First</p>
                    </div>
                    <div class="column2">
                        <img data-src="/images/company/phone.svg" alt="phone">
                    </div>
                    <div class="column3">
                        <p class="desc">
                            We are into modern trends so we have an understanding that today mobile is the most important point of entry for users. That’s why we pay so much attention to native iOS and Android application development.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="block">
                    <div class="column1">
                        <p class="title">E-commerce</p>
                    </div>
                    <div class="column2">
                        <img data-src="/images/company/basket.svg" alt="basket">
                    </div>
                    <div class="column3">
                        <p class="desc">
                            We launch advanced commerce platforms of the new generation like Lafka which includes Mobile apps and Web development of the widest range. We are ready to take on projects of any complexity.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="block">
                    <div class="column1">
                        <p class="title">Product enhancement</p>
                    </div>
                    <div class="column2">
                        <img data-src="/images/company/transform.svg" alt="transform">
                    </div>
                    <div class="column3">
                        <p class="desc">
                            Reinvention, reconcideration, redesign or refactoring of your prodacts. Looking for some
                            transformations — we are those who will do your product better.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="block">
                    <div class="column1">
                        <p class="title">Support & Updates</p>
                    </div>
                    <div class="column2">
                        <img data-src="/images/company/support.svg" alt="support">
                    </div>
                    <div class="column3">
                        <p class="desc">
                            We don’t consider our work to be finished until we launch the project. Even after the project is complete we offer maintenance and support by T&M or a fixed monthly rate.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="block">
                    <div class="column1">
                        <p class="title">UI/UX & Interaction Design</p>
                    </div>
                    <div class="column2">
                        <img data-src="/images/company/interaction-design.svg" alt="design">
                    </div>
                    <div class="column3">
                        <p class="desc">
                            We are real masters of usability and conceptual solutions. In this part we make every effort to combine even the most sophisticated functionality with simple usage.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="block">
                    <div class="column1">
                        <p class="title">Graphic Design</p>
                    </div>
                    <div class="column2">
                        <img data-src="/images/company/graphic-design.svg" alt="graphic">
                    </div>
                    <div class="column3">
                        <p class="desc">
                            Among our team you can find design junkies who are addicted to creation of great looking
                            stuff, pixel-perfect interfaces, beautiful website and creative branding. Complex design,
                            creation of UI and animated interfaces for apps, designing new styles, icons, screens,
                            websites, logos, identity — everything is here!
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="buttonSicWrapper center">
                <div class="buttonSic w280">
                    <a href="">Get in touch</a>
                </div>
            </div>
        </div>
    </div>
</div>
