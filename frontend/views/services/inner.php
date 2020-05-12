<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");

?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
    <div class="row">
        <h1><?=$h1?></h1>
    </div>
</div>
<div class="container">
    <div class="row">
          <div class="content">
            1
          </div>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <span role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></span>
            <a href="#">Web Development</a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></span>
            <a href="#">Mobile Development</a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"></span>
            <a href="#">Outstaff services</a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- 
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"></span>
            <a href="#">Design</a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"></span>
            <a href="#">QA, Testing</a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"></span>
            <a href="#">Ongoing Tech Support</a>
          </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSeven">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"></span>
            <a href="#">Security and Compliance</a>
          </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingEight">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight"></span>
            <a href="#">Cloud Computing</a>
          </h4>
        </div>
        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingNine">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine"></span>
            <a href="#">Ecommerce & CMS</a>
          </h4>
        </div>
        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTen">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen"></span>
            <a href="#">Wearable Tech</a>
          </h4>
        </div>
        <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingEleven">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"></span>
            <a href="#">iBeacon Software</a>
          </h4>
        </div>
        <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwelve">
          <h4 class="panel-title">
            <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"></span>
            <a href="#">3D, VR expertise</a>
          </h4>
        </div>
        <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
          <div class="panel-body">
            <ul class="group-item">
                <li class="col-item"><a href="#">001</a></li>
                <li class="col-item"><a href="#">002</a></li>
                <li class="col-item"><a href="#">003</a></li>
                <li class="col-item"><a href="#">004</a></li>
            </ul>
          </div>
        </div>
      </div> -->

    </div>
</div>
</div>
<div class="from-our-blog">
         <div class="container">
            <div class="row">
                <h2 class="text-center">From our blog</h2>
                <div class="col-lg-4 col-md-4 col-sm-6 post">
                    <div class="blog-outer-img">
                        <img data-src="../uploads/how_much_does_it_cost_to_develop_an_app.jpg" alt="how much does it cost to develop an app">
                    </div>
                    <div class="serv-blog">
                        <!-- <p class="title">Design, Entrepreneurship</p> -->
                        <a href="/blog/how-much-does-it-cost-to-develop-an-app" class="subtitle">How much does it cost to develop an app?</a>
                        <p class="description">If you ever ask any company that develops mobile applications, what is the most frequently asked question they hear from clients</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 post">
                    <div class="blog-outer-img">
                        <img data-src="../uploads/How_much_does_it_cost_to_build.jpg" alt="img_blog2">
                    </div>
                    <div class="serv-blog">
                        <!-- <p class="title">Design, Entrepreneurship</p> -->
                        <a href="/blog/how-much-does-it-cost-to-build-an-mvp" class="subtitle">How much does it cost to build an MVP?</a>
                        <p class="description">Everyone knows that the first release version should include small functionality to enter the market faster and to see the reaction to his product.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 post">
                    <div class="blog-outer-img">
                        <img data-src="../uploads/how_much_does_it_cost_to_design_an_app.jpg" alt="img_blog3">
                    </div>
                    <div class="serv-blog">
                        <!-- <p class="title">Design, Entrepreneurship</p> -->
                        <a href="/blog/how-much-does-it-cost-to-design-an-app" class="subtitle">How much does it cost to design an app?</a>
                        <p class="description">We continue to develop our Avoid Lightning Bolt column. You already know the prices of whole app development and MVP.</p>
                    </div>
                </div>
            </div>
         </div>
     </div>
