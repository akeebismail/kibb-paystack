<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 2:15 PM
 */

namespace Kibb\Paystack\Tests;

use Mockery as m;
use Kibb\Paystack\Paystack;
use PHPUnit\Framework\TestCase;

class PaystackTest extends TestCase
{
    protected $paystack ;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->paystack = new Paystack('qwerty','234');
    }

    public function tearDown()/* The :void return type declaration that should be here would cause a BC issue */
    {
        m::close();
    }

    /** @test */
    public function it_can_create_instance_using_make_method(){
        $paystack =  Paystack::make('qwerty');

        $this->assertEquals('qwerty', $paystack->getApiKey());
    }

    /** @test */
    public function it_can_create_instance_using_environment_variable(){
     $paystack = new Paystack('qwerty');
     //putenv('PAYSTACK_API_KEY','qwerty');
     $this->assertEquals(getenv('PAYSTACK_API_KEY'), $paystack->getApiKey());
    }

    /** @test */
    public function it_can_get_and_set_api_key()
    {
        $this->paystack->setApiKey('new_qwerty');

        $this->assertEquals('new_qwerty', $this->paystack->getApiKey());
    }

    /** @test */

    public function it_throws_an_exception_when_api_key_is_not_set()
    {
        new Paystack;
    }
}