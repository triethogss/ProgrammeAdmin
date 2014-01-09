<?php
$I = new WebGuy($scenario);
$I->wantTo('login as admin');
$I->amOnPage('/');
$I->fillField('Username','davert');
$I->fillField('Password','qwerty');
$I->click('input[type=submit]');
$I->see('Welcome. Please select your action');