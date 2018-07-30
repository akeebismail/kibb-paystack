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
        $this->paystack = new Paystack('sk_test_2492fbcc85567b4a58dfbcb2326db4ff93a20308');
    }

    protected  function charge(){
        return $this->paystack->charge([
        ]);
    }

    protected function createCustomer(){
        return $this->paystack->customer()->create([

        ]);
    }

    protected function createTransaction(){
        return $this->paystack->transaction()->initialise([
            'email' => 'damiz@gmail.com',
            'amount' => '4000',
            'reference' => '7PVGX8MEk85tgeEpVD09tD'
        ]);
    }

    protected function createTransfer()
    {
        return $this->paystack->transfer()->create([

        ]);
    }

    protected function createTransferRecipient()
    {
        return $this->paystack->transferRecipient()->create([

        ]);
    }

}