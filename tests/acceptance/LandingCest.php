<?php


class LandingCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
     $I->amOnPage('/');
    $I->see('ilegal');   
    }

    public function garantindoTextoDoPrimeiroBotaoTest(AcceptanceTester $I)
    {
     $I->amOnPage('/');
    $I->see('Denunciar com Foto');   
    }

    public function garantindoTextoDoSegundoBotaoTest(AcceptanceTester $I)
    {
     $I->amOnPage('/');
    $I->see('Denunciar com Video');   
    } 
}
