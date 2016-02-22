<?php
use tests\codeception\frontend\AcceptanceTester;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('My Yii Application');
$I->seeLink('Sing in');
$I->click('Sing in');
$I->see('Sign in to start your session');
