<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 10:21 PM
 */

namespace Kibb\Paystack\Tests\API;


use Kibb\Paystack\Tests\PaystackFunctionalTestCase;

class TransactionTest extends PaystackFunctionalTestCase
{

    /** @test */
    public function it_can_initiate_transaction(){
        $tranxn = $this->createTransaction();
        $this->assertEquals(true, $tranxn['status']);
    }

    /** @test */
    public function it_can_verify_transaction(){
        $trans = $this->paystack->transaction()->verify('7PVGX8MEk85tgeEpVD09tD');

        $this->assertEquals(true, $trans['status']);
    }


}