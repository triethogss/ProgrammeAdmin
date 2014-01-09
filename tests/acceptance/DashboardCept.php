<?php
$I = new WebGuy($scenario);
$I->wantTo('see Dashboard after login');
$I->amOnPage('/'); 
$I->see('Welcome. Please select your action');