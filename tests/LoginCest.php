<?php
class LoginCest 
{    
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function canSeePHPVersion(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php');
        $I->canSee('PHP Version 7.4.3');
    }
}
