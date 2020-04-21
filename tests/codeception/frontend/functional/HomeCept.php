<?php
use tests\codeception\frontend\FunctionalTester;

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('We design and develop apps');
$I->seeLink('Blog');
$I->click('Blog');

if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}

$I->see('We design and develop apps');
