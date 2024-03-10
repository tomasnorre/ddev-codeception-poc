<?php
class DemoCest 
{    
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function canSeePHPVersion(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php');
        $I->canSee('PHP Version 8.3');
    }
}
