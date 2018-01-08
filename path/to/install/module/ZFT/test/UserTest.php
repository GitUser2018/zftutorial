<?php
use ZFT\User;
class UserTest extends PHPUnit_Framework_TestCase {    

    public function testCanCreateUserObject() {
        $user = new User();
        $samplestr = "sample42";
        $this -> assertTrue($user -> calculate($samplestr));
        $samplestr = "";
        $this -> assertFalse($user -> calculate($samplestr));
        //$this -> assertGreaterThan(0,strlen());
        //$this -> assertInstanceOf(User::class,$user);
        // $this -> assertEquals("Correct", $user->calculate(true)); 
        // $this -> assertEquals("Not correct", $user->calculate(false));        
    }

   /**
     * @param string $originalString String to be sluggified
     * @param string $expectedResult What we expect our slug result to be
     *
     * @dataProvider providerTestSluggifyReturnsSluggifiedString
     */
    public function testSluggifyReturnsSluggifiedString($originalString, $expectedResult)
    {
       // $originalString = 'This string will be sluggified';
        //$expectedResult = 'this-string-will-be-sluggified';

        //$User = new URL();
        $user = new User();

        $result = $user->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    // public function testSluggifyReturnsExpectedForStringsContainingNumbers()
    // {
    //     $originalString = 'This1 string2 will3 be 44 sluggified10';
    //     $expectedResult = 'this1-string2-will3-be-44-sluggified10';

    //     $user = new User();

    //     $result = $user->sluggify($originalString);

    //     $this->assertEquals($expectedResult, $result);
    // }

    // public function testSluggifyReturnsExpectedForStringsContainingSpecialCharacters()
    // {
    //     $originalString = 'This! @string#$ %$will ()be "sluggified';
    //     $expectedResult = 'this-string-will-be-sluggified';

    //     $user = new User();

    //     $result = $user->sluggify($originalString);

    //     $this->assertEquals($expectedResult, $result);
    // }

    // public function testSluggifyReturnsExpectedForStringsContainingNonEnglishCharacters()
    // {
    //     $originalString = "Tänk efter nu – förr'n vi föser dig bort";
    //     $expectedResult = 'tank-efter-nu-forrn-vi-foser-dig-bort';

    //     $user = new User();

    //     $result = $user->sluggify($originalString);

    //     $this->assertEquals($expectedResult, $result);
    // }

    // public function testSluggifyReturnsExpectedForEmptyStrings()
    // {
    //     $originalString = '';
    //     $expectedResult = '';

    //     $user = new User();

    //     $result = $user->sluggify($originalString);

    //     $this->assertEquals($expectedResult, $result);
    // }

    public function providerTestSluggifyReturnsSluggifiedString()
    {
        return array(
            array('This string will be sluggified', 'this-string-will-be-sluggified'),
            array('THIS STRING WILL BE SLUGGIFIED', 'this-string-will-be-sluggified'),
            array('This1 string2 will3 be 44 sluggified10', 'this1-string2-will3-be-44-sluggified10'),
            array('This! @string#$ %$will ()be "sluggified', 'this-string-will-be-sluggified'),
            array("Tänk efter nu – förr'n vi föser dig bort", 'tank-efter-nu-forrn-vi-foser-dig-bort'),
            array('', '')
        );
    }
}
