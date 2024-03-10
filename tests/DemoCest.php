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

    public function canCloseConfirmPopUp(AcceptanceTester $I)
    {
        $I->amOnPage('/index.html');
        $I->canSee('Click Me');
        $I->click('Click Me');
        $I->seeInPopup('Are you sure?');
        $I->acceptPopup();
    }
}
