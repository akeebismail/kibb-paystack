<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 2:02 PM
 */

namespace Kibb\Paystack\Tests;
use Kibb\Paystack\Paystack;
use PHPUnit\Framework\TestCase;
class PaystackFunctionalTestCase  extends TestCase
{
    /**
     * Paystack API instance.
     * @var \Kibb\Paystack\Paystack
     */
    protected $paystack;


    public function setUp()
    {
        $this->paystack = new Paystack();
    }

    protected  function charge(){
        return $this->paystack->charge([

        ]);
    }

}