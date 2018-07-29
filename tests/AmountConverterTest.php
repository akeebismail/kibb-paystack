<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 2:47 PM
 */

namespace Kibb\Paystack\Tests;


use Kibb\Paystack\AmountConverter;
use PHPUnit\Framework\TestCase;

class AmountConverterTest extends TestCase
{

    /** @test */
    public function it_can_convert_number_to_kobo()
    {
        $this->assertSame('0',AmountConverter::convert(0.0));
        $this->assertSame('677',AmountConverter::convert(6.77));
        $this->assertSame(566.89, AmountConverter::convert(5.6689));
    }
}