<?php
use tests\codeception\frontend\FunctionalTester;

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('My Yii Application');
$I->seeLink('Sing in');
$I->click('Sing in');
$I->see('Sign in to start your session');