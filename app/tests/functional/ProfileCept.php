<?php

$I = new FunctionalTester($scenario);
$I->am('a Larabook member');
$I->wantTo('view my profile');

$I->signIn();
$I->postAStatus('My new status');
$I->click('Me');
$I->seeCurrentUrlEquals('/@foobar');

$I->see('My new status');
