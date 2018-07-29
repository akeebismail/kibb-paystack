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
        var_dump($tranxn);
        $this->assertEquals(true, $tranxn['status']);
    }
}