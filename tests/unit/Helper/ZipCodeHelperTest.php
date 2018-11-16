<?php namespace Helper;

use App\Helper\ZipCodeHelper;

class ZipCodeHelperTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testSanitizeZipCode()
    {
        $this->assertEquals('48634487', ZipCodeHelper::sanitize(' 48634-487 '));
        $this->assertEquals('48634487', ZipCodeHelper::sanitize(' a486d34-48 7 </script>'));
    }

    public function testValidateZipCode()
    {
        $this->assertTrue(ZipCodeHelper::validate(' 48634-487 ', true));
        $this->assertFalse(ZipCodeHelper::validate(' 48634-487 '));
        $this->assertTrue(ZipCodeHelper::validate(' a486d34-48 7 </script>', true));
        $this->assertFalse(ZipCodeHelper::validate(' a486d34-48 7 </script>'));
    }
}